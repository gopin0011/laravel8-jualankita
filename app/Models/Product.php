<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

    // protected $fillable = [
    //     'id',
    //     'attribute_id',
        // 'note',
        // 'request_data',
        // 'response',
        // 'token',
        // 'new_token',
        // 'parent_id',
    // ];

    public function parentCategory()
    {
        return $this->hasOne('\App\Models\ProductCategory','id','id_parent_category');
    }

    public function variantImage()
    {
        return $this->hasMany('\App\Models\ProductVariantImage', 'id_product');
    }

    public function productListAttribute()
    {
        return $this->belongsTo('\App\Models\ProductListAttribute', 'id', 'id_product')->with('productAttribute');
    }

    public function productDetail()
    {
        return $this->hasMany('\App\Models\ProductDetail','id_product', 'id')->with('productAttribute')->with('productVariantImage');
    }

}