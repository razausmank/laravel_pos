<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerType;
use App\Http\Requests\CustomerRequest;
use Exception;
use Illuminate\Http\Request;

class CustomerController extends MainController
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index' , compact('customers') );
    }

    public function create()
    {
        $customer_types = CustomerType::all() ;
        return view('customers.create', compact( 'customer_types' ) );
    }

    public function store(  CustomerRequest $request )
    {
        $validated = $request->validated();

        $image_address = $request->file('image')->store('public/customer');
        unset($validated['image']);


        Customer::create($validated + [
            'image' => $image_address
        ]);

        return redirect( route('customer.index') )->with('success', 'Customer successfuly created');
    }

    public function edit ( Customer $customer )
    {
        $customer_types = CustomerType::all() ;
        return view('customers.edit', compact( 'customer' , 'customer_types' ) );
    }

    public function update ( Customer $customer , CustomerRequest $request )
    {
        $validated = $request->validated() ;
        $image_address = NULL ;
        if( $request->file('image') )
        {
            $image_address = $request->file('image')->store('public/customer');
        }
        unset($validated['image']);
        $customer->update( $validated  + [
            'image' => $image_address
        ]);


        return redirect( route('customer.index') )->with('success', 'Customer successfuly updated');
    }

    public function destroy( Customer $customer )
    {
        try{
            $customer->destroy($customer->id);
        } catch( Exception $exception ) {
            return redirect(route('customer.index'))->with('failure', 'Customer Cannot be deleted');
        }

        return redirect( route('customer.index') )->with('success', 'Customer successfuly deleted');
    }
}
