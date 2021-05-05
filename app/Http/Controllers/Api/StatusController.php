<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Status\Create;
use App\Http\Requests\Status\Update;
use App\Http\Resources\StatusResource;
use App\Models\Status;
class StatusController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return StatusResource::collection(Status::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Status\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        try {
            return response()->json([Status::create($request->all()),'status'=>201]);
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
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        return new  StatusResource($status);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Status\Update  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, Status $status)
    {
        try {
            if( $status->update($request->all())){
                return response()->json([
                'data' => new StatusResource($status),
                'message' => 'Status updated success.',
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
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        try {
            if (count($status->invoices) > 0 || count($status->projects) > 0) {
               return response()->json([
                'message' => 'Can not delete status, its used in other place.',
                'status'=>401]);
            }else{
                $status->delete();
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
