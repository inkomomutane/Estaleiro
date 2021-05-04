<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Create;
use App\Http\Requests\User\Update;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
      //z
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);        
        $credentials = request(['email', 'password']);
      //  return $credentials;
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401); 
               
        $user = $request->user();        
        $tokenResult = $user->createToken($user->name);
        $token = $tokenResult->token;        
        if ($request->remember_me)       
            $token->save();        
            return response()->json([
            'user'=> new UserResource($request->user()),
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at'=>$tokenResult->token->expires_at
            ],201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\User\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        return response()->json($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\User\Update  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }


    public function logout(Request  $request)
    {
         $request->user()->token()->revoke();        
        return response()->json([
            'message' => 'Successfully logged out'
        ],201);
    }
}
