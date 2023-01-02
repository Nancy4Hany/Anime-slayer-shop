<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use stdClass;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = request()->cookie('cart');
        if ($cart === null) {
            $cart_item = new stdClass();
            $cart_item->items = [];
            $cart = $cart_item;
        } else {
            $cart = unserialize($cart);
        }
        $total = array_reduce($cart->items,function($sum,$item){
            return $sum + $item['discount_price']*$item['quantity'];
        });
        return view ('cart', ['cart'=>$cart,'total'=>$total]);
    }
  
    public function increaseQuantity($ID)
    {
        $product = Cart::get($ID);
        $quantity = $product->quantity+1;
        Cart::update($ID,$quantity);
    }

    public function decreaseQuantity($product_id)
    {
        $cart = request()->cookie('cart');
        if ($cart === null) {
            $cart_item = new stdClass();
            $cart_item->items = [];
            $cart = $cart_item;
        } else {
            $cart = unserialize($cart);
        }
        if (!isset($cart->items[$product_id])) {
            return redirect()->route('cart');
        }
        $cart->items[$product_id]['quantity']--;
        if($cart->items[$product_id]['quantity'] == 0){
            unset($cart->items[$product_id]);
        }
        $cart = serialize($cart);
        Cookie::queue('cart', $cart, 60);
        return redirect()->route('cart');
    }

    public function delete_item($product_id)
    {
        $cart = request()->cookie('cart');
        if ($cart === null) {
            $cart_item = new stdClass();
            $cart_item->items = [];
            $cart = $cart_item;
        } else {
            $cart = unserialize($cart);
        }
        if (!isset($cart->items[$product_id])) {
            return redirect()->route('cart');
        }
        unset($cart->items[$product_id]);
        $cart = serialize($cart);
        Cookie::queue('cart', $cart, 60);

        return redirect()->route('cart');
    }

    public function add_to_cart($product_id){
        $product = Product::with('images')->findOrFail($product_id);
        $cart = request()->cookie('cart');
        if($cart === null){
            $cart_item = new stdClass();
            $cart_item->items = [];
            $cart = $cart_item;
        }else{
            $cart = unserialize($cart);
        }
        if(!isset($cart->items[$product->id])){
            $cart->items[$product->id] = $product->toArray();
            $cart->items[$product->id]['quantity'] = 0;
        }
        $cart->items[$product->id]['quantity']++;
        $cart = serialize($cart);
        Cookie::queue('cart',$cart,60);
        return redirect()->route('cart');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
