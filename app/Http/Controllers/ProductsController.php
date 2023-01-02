<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function view_products($category_id)
    {
        // $Product = Product::with('category_id')->whereHas('category', function($query){
        //     $query->where('title', request()->category);
        // })->get();
        $cateogry= Category::findOrFail($category_id);
        $products = $cateogry->products()->get();
        return view('Products',compact('products','category_id'));

            // $Product = Product::where('category_id',$key)->get();
  
        // return view('products', compact('Product'));
        // $Product = Product::inRandomOrder()->take(8)->get();

        return view('products',['products'=>$products]);
    }
    public function showForm($category_id){
        return view('Products')->with('category_id',$category_id);
    }
    public function index()
    {
            $Product = Product::with('category_id')->whereHas('category_id', function($query){
                $query->where('title', request()->category);
            })->get();
            $Product = Product::all();
        
        return view('Products');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Products  $products
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Products $products)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Products  $products
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Products $products)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Products  $products
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Products $products)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Products  $products
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Products $products)
    // {
    //     //
    // }
}
