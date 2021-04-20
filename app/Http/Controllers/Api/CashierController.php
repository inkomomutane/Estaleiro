<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cashier\Create;
use App\Http\Requests\Cashier\Update;
use App\Models\Cashier;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Cashier\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cashier  $cashier
     * @return \Illuminate\Http\Response
     */
    public function show(Cashier $cashier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Cashier\Update  $request
     * @param  \App\Models\Cashier  $cashier
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, Cashier $cashier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cashier  $cashier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cashier $cashier)
    {
        //
    }
}
