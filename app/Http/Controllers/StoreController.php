<?php

namespace App\Http\Controllers;

use App\Store;
use Exception;
use Illuminate\Http\Request;

class StoreController extends MainController
{
    public function index()
    {
        $stores = Store::all() ;
        return view('stores.index' , compact( 'stores' ) );
    }

    public function create()
    {
        return view('stores.create' );
    }

    public function store( Request $request )
    {
        $validated = $request->validate([
            'name' => ['required'],
            'address' => ['nullable']
        ]);

        Store::create( $validated );

        return redirect( route('store.index') )->with('success', 'Store successfuly created');

    }

    public function edit( Store $store )
    {
        return view('stores.edit' , compact( 'store' ) );
    }

    public function update( Store $store , Request $request )
    {
        $validated = $request->validate([
            'name' => ['required'],
            'address' => ['nullable']
        ]);

        $store->update( $validated );

        return redirect( route('store.index') )->with('success', 'Remark successfuly updated');

    }

    public function destroy( Store $store )
    {
        try{
            $store->destroy($store->id);
        } catch( Exception $exception ) {
            return redirect(route('store.index'))->with('failure', 'Store cannot be deleted');
        }

        return redirect( route('store.index') )->with('success', 'Store successfuly deleted');
    }
}
