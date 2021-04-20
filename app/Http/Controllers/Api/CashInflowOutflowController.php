<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CahsInflowOutflow\Create;
use App\Http\Requests\CahsInflowOutflow\Update;
use App\Models\CashInflowOutflow;

class CashInflowOutflowController extends Controller
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
     * @param  \App\Http\Requests\CahsInflowOutflow\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CashInflowOutflow  $cashInflowOutflow
     * @return \Illuminate\Http\Response
     */
    public function show(CashInflowOutflow $cashInflowOutflow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CahsInflowOutflow\Update  $request
     * @param  \App\Models\CashInflowOutflow  $cashInflowOutflow
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, CashInflowOutflow $cashInflowOutflow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CashInflowOutflow  $cashInflowOutflow
     * @return \Illuminate\Http\Response
     */
    public function destroy(CashInflowOutflow $cashInflowOutflow)
    {
        //
    }
}
