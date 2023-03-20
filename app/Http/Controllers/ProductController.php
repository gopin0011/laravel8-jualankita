<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function product()
    {
        $product = \App\Models\Product::with(['productDetail'])->where('status', 1)->where('id', 580)->inRandomOrder()->take(10)->get();
        // ->where('id', 580)
        // ->where('id', 733) banyak variant image
        // ->where('id', 797) sapu banyak variant 
        
        return [
            "code"      => 200,
            "message"   => "success",
            "data"      => $product
        ];
    }

    public function category()
    {
        $productCategory = \App\Models\ProductCategory::where('group_id', 0)->with('childs.childs')->orderBy('name_category')->get();
        dd($productCategory);
    }

    public function flashSale()
    {
        $flashsale = \App\Models\Product::where('flashsale', 1);
        dd($flashsale);
    }

    public function ajaxQuickView($slug)
    {
        $data = \App\Service\ProductService::detail($slug);
        return view('components.shop-quick-view', ['product' => $data['data']]);
    }

}
