<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductStock extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'description',
        'quantity',
        'created_by',
        'updated_by',
        'deleted_by',
        'product_id'
    ];


    // ORM Relationships

    public function product()
    {
        return $this->belongsTo( Prodcut::class );
    }
}
