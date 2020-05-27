<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    //ORM Relationships

    public function users()
    {
        return $this->hasMany( User::class );
    }
}
