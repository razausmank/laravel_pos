<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'image',
        'barcode',
        'price',
        'quantity',
        'created_by',
        'updated_by',
        'deleted_by',
        'product_category_id'
    ];


    // ORM relationships

    public function product_category()
    {
        return $this->belongsTo( ProductCategory::class );
    }
}
