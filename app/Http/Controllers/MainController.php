<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class MainController extends Controller
{


    // Testing functions

    public function testing_post_route( Request $request )
    {
       return $request->all();
    }
}
