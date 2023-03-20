<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function categories()
    {
        $productCategory = \App\Models\ProductCategory::where('group_id', 0)->with(['childs.childs'])->orderBy('name_category')->get();
        // $productCategory->sortBy('name_category');
        
        return [
            "code"      => 200,
            "message"   => "success",
            "data"      => $productCategory
        ];
    }

}
