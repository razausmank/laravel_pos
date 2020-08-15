<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EntityType extends Model
{
    use SoftDeletes ;

    protected $fillable = [
        'name',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',

    ];
}
