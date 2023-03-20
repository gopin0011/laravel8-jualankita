<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductListAttribute extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_list_attribute';

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

    public function productAttribute()
    {
        return $this->belongsTo('\App\Models\ProductAttribute','id_attribute', 'id');
    }

}