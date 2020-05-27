<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'first_name' ,
        'last_name' ,
        'username',
        'email',
        'password',
        'usertype_id'
    ];

    //ORM Relationships

    public function usertype()
    {
        return $this->belongsTo( UserType::class  );
    }

    public function pages()
    {
        return $this->belongsToMany( Page::class )->withTimestamps();
    }
}
