<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
trait ExceptionInterface
{
     function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(
      response()->json([
        'status' => 401,
        'messages' => $validator->errors()
      ], 401)
    ); 
}
}
