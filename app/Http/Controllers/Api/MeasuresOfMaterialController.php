<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MeasuresOfMaterial\Create;
use App\Http\Requests\MeasuresOfMaterial\Update;
use App\Http\Resources\MeasuresOfMaterialResource;
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
        return MeasuresOfMaterialResource::collection(MeasuresOfMaterial::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\MeasuresOfMaterial\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
         try {
            return response()->json(['Measures of material'=>MeasuresOfMaterial::create($request->all()),'status'=>201]);
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
     * @param  \App\Models\MeasuresOfMaterial  $measuresOfMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(MeasuresOfMaterial $measuresOfMaterial)
    {
         return new MeasuresOfMaterialResource($measuresOfMaterial);
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
         try {
            if( $measuresOfMaterial->update($request->all())){
                return response()->json([
                'data' => new MeasuresOfMaterialResource($measuresOfMaterial),
                'message' => 'Measures of material updated success.',
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
     * @param  \App\Models\MeasuresOfMaterial  $measuresOfMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeasuresOfMaterial $measuresOfMaterial)
    {
        try {
            if (count($measuresOfMaterial->orders) > 0 ) {
               return response()->json([
                'message' => 'Can not delete measures of material, its used in other place.',
                'status'=>401]);
            }else{
                $measuresOfMaterial->delete();
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
