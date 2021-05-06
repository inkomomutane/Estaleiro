<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CahsInflowOutflow\Create;
use App\Http\Requests\CahsInflowOutflow\Update;
use App\Http\Resources\CashInflowOutflowResource;
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
        return CashInflowOutflowResource::collection(CashInflowOutflow::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CahsInflowOutflow\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
         try {
            return response()->json(['Cash inflow outflow'=>CashInflowOutflow::create($request->all()),'status'=>201]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th,
                'status' =>401
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CashInflowOutflow  $cashInflowOutflow
     * @return \Illuminate\Http\Response
     */
    public function show(CashInflowOutflow $cashInflowOutflow)
    {
        return new  CashInflowOutflowResource($cashInflowOutflow);
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
        try {
            if( $cashInflowOutflow->update($request->all())){
                return response()->json([
                'data' => new CashInflowOutflowResource($cashInflowOutflow),
                'message' => 'cash inflow outflow updated success.',
                'status'=>201
        ]);
            }else{
                return response()->json([
            'message' => 'Error updating.',
            'status'=>401
        ]);
            }
        } catch (\Throwable $th) {
               return response()->json([
            'message' => 'Error updating',
            'status'=>401]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CashInflowOutflow  $cashInflowOutflow
     * @return \Illuminate\Http\Response
     */
    public function destroy(CashInflowOutflow $cashInflowOutflow)
    {
        try {
                $cashInflowOutflow->delete();
                return response()->json([
                'message' => 'Delete success.',
                'status'=>201]);
        } catch (\Throwable $th) {
            return response()->json([
            'message' => 'Error deleting.',
            'status'=>401]);
        }
    }
}
