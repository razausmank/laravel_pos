<?php

namespace App\Http\Controllers;

use App\CustomerType;
use Exception;
use Illuminate\Http\Request;

class CustomerTypeController extends MainController
{
    public function index()
    {
        $customer_types = CustomerType::all();
        return view('customer_types.index', compact('customer_types'));
    }

    public function create()
    {
        return view('customer_types.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required'
        ]);

        CustomerType::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect(route('customertype.index'))->with('success', 'Customer Type Created Succesfully');
    }

    public function edit( CustomerType $customertype )
    {
        return view('customer_types.edit', compact('customertype'));
    }

    public function update( CustomerType $customertype )
    {
        request()->validate([
            'name' => 'required'
        ]);

        $customertype->update([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect(route('customertype.index'))->with('success', 'Customer Type Updated Succesfully');
    }

    public function destroy( CustomerType $customertype )
    {
        try{
            $customertype->destroy($customertype->id);
        } catch( Exception $exception ) {
            return redirect(route('customertype.index'))->with('failure', 'Customer Type Cannot be deleted, there Customers of this type');
        }

        return redirect( route('customertype.index') )->with('success', 'Customer Type successfuly deleted');
    }
}
