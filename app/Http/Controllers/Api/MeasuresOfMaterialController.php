<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MeasuresOfMaterial\Create;
use App\Http\Requests\MeasuresOfMaterial\Update;
use App\Models\MeasuresOfMaterial;
use Illuminate\Http\Request;

class MeasuresOfMaterialController extends Controller
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
     * @param  \App\Http\Requests\MeasuresOfMaterial\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MeasuresOfMaterial  $measuresOfMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(MeasuresOfMaterial $measuresOfMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\MeasuresOfMaterial\Update  $request
     * @param  \App\Models\MeasuresOfMaterial  $measuresOfMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, MeasuresOfMaterial $measuresOfMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MeasuresOfMaterial  $measuresOfMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeasuresOfMaterial $measuresOfMaterial)
    {
        //
    }
}
