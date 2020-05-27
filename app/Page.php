<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Mappable;

class Page extends Model
{
    protected $fillable = [
        'name',
        'url',
        'description',
        'sort_order',
        'parent_page_id',
    ];


    // START FOR JS TREE
    protected $maps = ['text' => 'name', 'children' => 'sub_pages'];

    protected $hidden = ['name', 'sub_pages'] ;


    protected $appends = [ 'text' ,'children'] ;

    public function getTextAttribute()
    {
        return $this->name;
    }

    public function getChildrenAttribute(){
        return $this->sub_pages ;
    }
    //END FOR JS TREE


    // relationships with the table itself to loop over the pages and subpages
    public function pages()
    {
        return $this->hasMany(Page::class, 'parent_page_id');
    }

    public function sub_pages()
    {
        return $this->hasMany(Page::class, 'parent_page_id')->with('pages');
    }

    //ORM relationships

    public function users()
    {
        return $this->belongsToMany( User::class )->withTimestamps();
    }
}
