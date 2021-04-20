<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InflowOutflowType\Create;
use App\Http\Requests\InflowOutflowType\Update;
use App\Models\InflowOutflowType;
class InflowOutflowTypeController extends Controller
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
     * @param  \App\Http\Requests\InflowOutflowType\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InflowOutflowType  $inflowOutflowType
     * @return \Illuminate\Http\Response
     */
    public function show(InflowOutflowType $inflowOutflowType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\InflowOutflowType\Update  $request
     * @param  \App\Models\InflowOutflowType  $inflowOutflowType
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, InflowOutflowType $inflowOutflowType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InflowOutflowType  $inflowOutflowType
     * @return \Illuminate\Http\Response
     */
    public function destroy(InflowOutflowType $inflowOutflowType)
    {
        //
    }
}
