<?php
namespace App\Service;

use Illuminate\Http\Request;
use DB;

class ProductService
{
    public static function exclusiveProduct()
    {
        $data["best_seller"] = \App\Models\Product::where('best_seller', 1)->with(['productListAttribute', 'productDetail'])->get();
        $data["new_arrival"] = \App\Models\Product::where('id', 580)->orderBy('created_at', 'desc')->with(['productListAttribute', 'productDetail'])->take(35)->get();
        $data["flash_sale"] = \App\Models\Product::where('flash_sale', 1)->with(['productListAttribute', 'productDetail'])->get();
        // dd($data);
        return [
            "code"      => 200,
            "message"   => "success",
            "data"      => $data
        ];
    }

    public static function bestsellingProduct()
    {
        $data = DB::table('order_item')
            ->join('product', function ($join) {
                $join->on('order_item.product_id', '=', 'product.id');
                // ->where('product.flash_sale', 0)
                // ->where('product.best_seller', 0);
            })
            ->select(DB::raw('SUM(order_item.qty) as qty, product.id, product.name_product, product.price_product, product.discount_price, product.short_content, product.image_product'))
            ->groupBy('product.id', 'product.name_product', 'product.price_product', 'product.discount_price', 'product.short_content', 'product.image_product')
            // ->orderBy('qty', 'desc')
            ->inRandomOrder()
            ->take(42)
            ->get();
        // dd($data);
        return [
            "code"      => 200,
            "message"   => "success",
            "data"      => $data
        ];
    }

    public static function detail($slug)
    {
        $data = \App\Models\Product::where('url_product', $slug)->with(['productListAttribute', 'productDetail'])->first();

        return [
            "code"      => 200,
            "message"   => "success",
            "data"      => $data
        ];
    }
}