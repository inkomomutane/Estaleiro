<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\Create;
use App\Http\Requests\Role\Update;
use App\Http\Resources\RoleResource;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RoleResource::collection(Role::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Role\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
         try {
            return response()->json([Role::create($request->all()),'role'=>201]);
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
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return new  RoleResource($role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Role\Update  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, Role $role)
    {
        try {
            if( $role->update($request->all())){
                return response()->json([
                'data' => new RoleResource($role),
                'message' => 'Role updated success.',
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
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        try {
            if (count($role->users) > 0 ) {
               return response()->json([
                'message' => 'Can not delete role, its used in other place.',
                'status'=>401]);
            }else{
                $role->delete();
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
