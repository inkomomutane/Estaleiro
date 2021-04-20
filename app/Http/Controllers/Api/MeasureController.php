<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Measure\Create;
use App\Http\Requests\Measure\Update;
use App\Models\Measure;
use Illuminate\Http\Request;

class MeasureController extends Controller
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
     * @param  \App\Http\Requests\Measure\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Measure  $measure
     * @return \Illuminate\Http\Response
     */
    public function show(Measure $measure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Measure\Update  $request
     * @param  \App\Models\Measure  $measure
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, Measure $measure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Measure  $measure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Measure $measure)
    {
        //
    }
}
