<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $data = [];

        $banner_card = \App\Service\BannerService::list("DESKTOP","",1);
        // $mobile_card = \App\Service\BannerService::list("MOBILE","promo card","");

        if($banner_card['code'] == 200){
            $data['banner_card'] =  $banner_card['data'];
        }else{
            $data['banner_card'] =  [];
        }

        $exclusive_products = \App\Service\ProductService::exclusiveProduct();
        if($exclusive_products['code'] == 200){
            $data['exclusive_products'] =  $exclusive_products['data'];
        }else{
            $data['exclusive_products'] =  [];
        }

        $bestselling_products = DB::table('order_item')
            ->join('product', function ($join) {
                $join->on('order_item.product_id', '=', 'product.id');
            })
            ->select(DB::raw('SUM(order_item.qty) as qty, product.id, product.name_product, product.price_product, product.discount_price, product.short_content, product.image_product'))
            ->groupBy('product.id', 'product.name_product', 'product.price_product', 'product.discount_price', 'product.short_content', 'product.image_product')
            ->inRandomOrder()
            ->take(42)
            ->get();

        $bestselling_products = new Collection($bestselling_products);

            $data['bestselling_products'] =  $bestselling_products;
        
        // if($bestselling_products['code'] == 200){
        //     $data['bestselling_products'] =  $bestselling_products['data'];
        // }else{
        //     $data['bestselling_products'] =  [];
        // }

        $data['todays_products'] = [];

        $data['featured_products'] = \App\Models\Product::where('flash_sale', 0)->inRandomOrder()->limit(60)->get();

        // $categories = \App\Service\CategoriesService::list();

        // if($categories['code'] == 200){
        //     $data['categories'] =  $categories['data'];
        // }else{
        //     $data['categories'] =  [];
        // }

        // return view('pages.index', $data);

        // dd($data);

        return response()->json([
            "code"      => 200,
            "message"   => "success",
            "data"      => $data
        ]);
    }

    public function home()
    {
        $data = [];

        $banner_card = \App\Service\BannerService::list("DESKTOP","",1);
        // $mobile_card = \App\Service\BannerService::list("MOBILE","promo card","");

        if($banner_card['code'] == 200){
            $data['banner_card'] =  $banner_card['data'];
        }else{
            $data['banner_card'] =  [];
        }

        $exclusive_products = \App\Service\ProductService::exclusiveProduct();
        if($exclusive_products['code'] == 200){
            $data['exclusive_products'] =  $exclusive_products['data'];
        }else{
            $data['exclusive_products'] =  [];
        }

        $bestselling_products = \App\Service\ProductService::bestsellingProduct();
        if($bestselling_products['code'] == 200){
            $data['bestselling_products'] =  $bestselling_products['data'];
        }else{
            $data['bestselling_products'] =  [];
        }

        $data['todays_products'] = [];

        $data['featured_products'] = \App\Models\Product::where('flash_sale', 0)->inRandomOrder()->limit(60)->get();

        // $categories = \App\Service\CategoriesService::list();

        // if($categories['code'] == 200){
        //     $data['categories'] =  $categories['data'];
        // }else{
        //     $data['categories'] =  [];
        // }

        // dd($data['bestselling_products']);

        return view('pages.index', $data);

        return [
            "code"      => 200,
            "message"   => "success",
            "data"      => $data
        ];
    }

}
