<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCategoryRequest;
use App\ProductCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductCategoryController extends MainController
{
    public function index()
    {
        $product_categories = ProductCategory::all();

        return view('product_categories.index', compact('product_categories') );
    }

    public function show( ProductCategory $productcategory )
    {
        return view('product_categories.show', compact('productcategory') );
    }

    public function create()
    {
        return view('product_categories.create');
    }

    public function store( ProductCategoryRequest $request )
    {
        $validated = $request->validated();
        $image_address = $request->file('image')->store('public/product_category');
        unset($validated['image']);

        ProductCategory::create($validated + [
            'image' => $image_address
        ]);

        // ProductCategory::create($validated);

        return redirect( route('productcategory.index') )->with('success', 'Product Category successfuly created');

    }

    public function edit( ProductCategory $productcategory )
    {
        return view('product_categories.edit', compact( 'productcategory') );
    }

    public function update( ProductCategory $productcategory, ProductCategoryRequest $request )
    {
        $validated = $request->validated() ;

        $image_address = $request->file('image')->store('public/product_category');
        unset($validated['image']);

        $productcategory->update( $validated  + [
            'image' => $image_address
        ]);

        return redirect( route('productcategory.index') )->with('success', 'Product Category successfuly updated');
    }

    public function destroy( ProductCategory $productcategory )
    {
        try{
            $productcategory->destroy($productcategory->id);
        } catch( Exception $exception ) {
            return redirect(route('productcategory.index'))->with('failure', 'Product Category Cannot be deleted, the Category has products');
        }

        return redirect( route('productcategory.index') )->with('success', 'Product Category successfuly deleted');
    }

}


