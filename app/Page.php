<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name',
        'url',
        'description',
        'sort_order',
        'parent_page_id'
    ];
}
