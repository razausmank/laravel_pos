<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePage;
use App\Page;
use Exception;
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

        return view('pages.create', compact('pages', 'menu') );
    }


    public function store( StorePage $request )
    {   
        $validated = $request->validated();

        Page::create($validated);

        return redirect(route('page.index'))->with('success', 'Page Created Succesfully');
    }

    public function edit( Page $page )
    {
        $pages = Page::all()->except($page->id);

        return view('pages.edit', compact('pages', 'page'));
    }

    public function update ( Page $page , StorePage $request)
    {

        $validated = $request->validated();
        $page->update( $validated );

        return redirect(route('page.index'))->with('success', 'Page Updated Succesfully');
    }

    public function destroy( Page $page )
    {
        try{
            $page->destroy($page->id);
        } catch( Exception $exception ) {
            return redirect(route('page.index'))->with('failure', 'Page Cannot be deleted, the page has sub pages');
        }
        $page->destroy($page->id);

        return redirect(route('page.index'))->with('success', 'Page Deleted Succesfully');
    }

    public function pageHierarchy()
    {
        $pages = Page::whereNull('parent_page_id')->with('sub_pages')->orderBy('sort_order', 'ASC')->get() ;

        $pages = json_encode($pages->toArray());

        return view('pages.page-hierarchy', compact('pages'));
    }

    public function updatePageHierarchy()
    {
        $response = json_decode(request('data'));
        foreach($response as $page_sort_order => $page)
        {
            $page_update = Page::find($page->id);
            if ( $page->parent != '#' ){
                $page_update->update([
                    'sort_order' => $page_sort_order,
                    'parent_page_id' => $page->parent
                ]);
            }else {
                $page_update->update([
                    'sort_order' => $page_sort_order,
                    'parent_page_id' => null
                ]);
            }
        }
        return $response ;
    }
}

