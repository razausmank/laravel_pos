<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'image',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    // ORM relationships

    public function products()
    {
        return $this->hasMany( Product::class );
    }
}
