<?php

namespace App\Http\Controllers;

use App\UserType;
use Illuminate\Http\Request;

class UserTypeController extends MainController
{
    public function index()
    {
        $usertypes = UserType::all();

        return view('usertypes.index', compact('usertypes'));
    }

    public function create()
    {
        return view('usertypes.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required'
        ]);

        UserType::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect(route('usertype.index'))->with('success', 'User Type Created Succesfully');

    }

    public function edit( UserType $usertype )
    {
        return view('usertypes.edit', compact('usertype') );

    }

    public function update( UserType $usertype )
    {
        request()->validate([
            'name' => 'required'
        ]);

        $usertype->update([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect(route('usertype.index'))->with('success', 'User Type Updated Succesfully');
    }

    public function destroy( UserType $usertype )
    {
        $usertype->destroy($usertype->id);

        return redirect(route('usertype.index'))->with('success', 'User Type Deleted Succesfully');
    }
}
