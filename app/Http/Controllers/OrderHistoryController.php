<?php

namespace App\Http\Controllers;

use App\Models\orderHistory;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order-history');
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
     * @param  \App\Models\orderHistory  $orderHistory
     * @return \Illuminate\Http\Response
     */
    public function show(orderHistory $orderHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orderHistory  $orderHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(orderHistory $orderHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orderHistory  $orderHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orderHistory $orderHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderHistory  $orderHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderHistory $orderHistory)
    {
        //
    }
}
