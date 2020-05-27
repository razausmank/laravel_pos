<?php

namespace App\Http\Controllers;

use App\Page;
use App\User;
use App\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends MainController
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users') );
    }

    public function create(){

        $usertypes = UserType::all();

        return view('users.create', compact('usertypes'));
    }

    // Hash::make($request->newPassword)

    public function store()
    {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:6'],
            'usertype_id' => 'exists:user_types,id'
        ]);
        User::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => Hash::make( request('password')),
            'usertype_id' => request('usertype_id')
        ]);

        return redirect(route('user.index'))->with('success', 'User Created Succesfully');
    }

    public function edit( User $user )
    {
        $usertypes = UserType::all();

        return view('users.edit', compact('user', 'usertypes'));
    }

    public function update( User $user )
    {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => ['required', 'unique:users'.$user->id],
            'email' => ['required', 'unique:users'.$user->id],
            'password' => ['required', 'min:6'],
            'usertype_id' => 'exists:user_types,id'
        ]);

        $user->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => Hash::make( request('password')),
            'usertype_id' => request('usertype_id')

        ]);

        return redirect(route('user.index'))->with('success', 'User Updated Succesfully');

    }


    public function destroy( User $user )
    {
        $user->destroy($user->id);

        return redirect(route('user.index'))->with('success', 'User Deleted Succesfully');
    }

    public function pagePermissions( User $user )
    {
        $pages = Page::whereNull('parent_page_id')->with('sub_pages')->orderBy('sort_order', 'ASC')->get() ;
        $temp_pages = collect();
        $pages = json_encode($this->buildTree($pages , $temp_pages, $user));


        return view('users.page-permissions', compact( 'user' , 'pages' ));
    }

    public function buildTree(  $pages , $temp_pages = null , User $user = null  )
    {    $branch = array();
        foreach($pages as $page)
        {
            Log::info($page->name) ;
            if ($user){
                if ( $user->pages->contains('id', $page->id))
            {
                $page->state = [ 'selected' => true ];
            }
            }

            $branch[] = $page ;
            if ($page->pages->isNotEmpty() )
            {
                $this->buildTree( $page->pages );
            }
        }

        return $branch;
    }

    public function updatePagePermissions( User $user )
    {
        $response = json_decode(request('data'));
        $selected_pages = collect($response)->reject(function($item){

                return $item->state->selected != "true";
        });

        $user->pages()->sync($selected_pages->pluck('id')->toArray() , true);

        return $selected_pages->toArray() ;
    }
}
