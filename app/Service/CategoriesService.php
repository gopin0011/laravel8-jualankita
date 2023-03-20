<?php
namespace App\Service;

// use App\Models\Products;
use Illuminate\Http\Request;

class CategoriesService
{
    public static function list()
    {
        $data = \App\Models\ProductCategory::where('group_id', 0)->with('childs.childs')->orderBy('name_category')->skip(0)->take(100)->get();
        // $data['two'] = \App\Models\ProductCategory::where('group_id', 0)->with('childs.childs')->orderBy('name_category')->skip(8)->take(20)->get();
        // dd($data);
        return [
            "code"      => 200,
            "message"   => "success",
            "data"      => $data
        ];
    }
}