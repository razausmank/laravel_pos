<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductStock extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'quantity',
        'product_id',
        'remark_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    // ORM Relationships

    public function product()
    {
        return $this->belongsTo( Product::class );
    }

    public function remark()
    {
        return $this->belongsTo( Remark::class );
    }
}
