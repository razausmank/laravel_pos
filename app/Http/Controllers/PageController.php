<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends MainController
{

    public function index()
    {
        $pages = Page::all();

        return view('pages.index', compact('pages') );
    }

    public function create()
    {
        $pages = Page::all();

        return view('pages.create', compact('pages') );
    }


    public function store()
    {
        // dd(request()->all());
        request()->validate([
            'name' => 'required',
            'url' => 'required',
            'sort_order' => 'required',
        ]);

        Page::create([
            'name' => request('name'),
            'url' => request('url'),
            'description' => request('description'),
            'sort_order' => request('sort_order'),
            'parent_page_id' => request('parent_page_id'),

        ]);

        return back() ;
    }
}

