<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User  extends Authenticatable
{
    use SoftDeletes;

    protected $fillable = [
        'first_name' ,
        'last_name' ,
        'username',
        'email',
        'password',
        'usertype_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Helper Functions
    public function get_full_name()
    {
        return $this->first_name . ' ' . $this->last_name ;
    }

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
