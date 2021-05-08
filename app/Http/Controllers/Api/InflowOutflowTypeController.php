<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InflowOutflowType\Create;
use App\Http\Requests\InflowOutflowType\Update;
use App\Http\Resources\InflowOutflowTypeResource;
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
        return InflowOutflowTypeResource::collection(InflowOutflowType::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\InflowOutflowType\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        try {
            return response()->json(['inflow outflow type'=>InflowOutflowType::create($request->all()),'status'=>201]);
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
     * @param  \App\Models\InflowOutflowType  $inflowOutflowType
     * @return \Illuminate\Http\Response
     */
    public function show(InflowOutflowType $inflowOutflowType)
    {
        return new  InflowOutflowTypeResource($inflowOutflowType);
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
          try {
            if( $inflowOutflowType->update($request->all())){
                return response()->json([
                'data' => new InflowOutflowTypeResource($inflowOutflowType),
                'message' => 'inflow outflow type updated success.',
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
     * @param  \App\Models\InflowOutflowType  $inflowOutflowType
     * @return \Illuminate\Http\Response
     */
    public function destroy(InflowOutflowType $inflowOutflowType)
    {
        try {
            if (count($inflowOutflowType->cash_inflow_outflows) > 0 ) {
               return response()->json([
                'message' => 'Can not delete inflow outflow type, its used in other place.',
                'status'=>401]);
            }else{
                $inflowOutflowType->delete();
                return response()->json([
                'message' => 'Delete success.',
                'status'=>201]);
            }
        } catch (\Throwable $th) {
            return response()->json([
            'message' => 'Error deleting.',
            'status'=>401]);
        }
    }
}
