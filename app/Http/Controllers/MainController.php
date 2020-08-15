<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Product;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('index');
    }


    // Testing functions

    public function testing_post_route( Request $request )
    {
       return $request->all();
    }

    public function testing()
    {
        return view('testing');
    }

    public function test_data()
    {
        return json_encode(Product::all()->pluck('barcode','name'));
    }
}
