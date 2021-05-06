<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cashier\Create;
use App\Http\Requests\Cashier\Update;
use App\Http\Resources\CashierResource;
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
        return CashierResource::collection(Cashier::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Cashier\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
          try {
            return response()->json(['Cashier'=>Cashier::create($request->all()),'status'=>201]);
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
     * @param  \App\Models\Cashier  $cashier
     * @return \Illuminate\Http\Response
     */
    public function show(Cashier $cashier)
    {
        return new CashierResource($cashier);
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
        try {
            if( $cashier->update($request->all())){
                return response()->json([
                'data' => new CashierResource($cashier),
                'message' => 'cashier updated success.',
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
     * @param  \App\Models\Cashier  $cashier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cashier $cashier)
    {
         try {
                $cashier->delete();
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
