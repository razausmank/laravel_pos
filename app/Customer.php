<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes ;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'fax',
        'address',
        'image',
        'account_number',
        'customer_type_id',
        'created_by',
        'updated_by',
        'deleted_by',

    ];

    public function customer_type()
    {
        return $this->belongsTo( CustomerType::class , 'customer_type_id' );
    }
}
