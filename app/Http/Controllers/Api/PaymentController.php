<?php

namespace App\Http\Controllers\Api;

use App\Events\Message;
use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\Create;
use App\Http\Requests\Payment\Update;
use App\Http\Resources\PaymentResource;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data =  PaymentResource::collection(Payment::all());
        broadcast(new Message('Dark'));
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Payment\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
         try {
            return response()->json(['payment'=>Payment::create($request->all()),'status'=>201]);
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
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return new PaymentResource($payment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Payment\Update  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, Payment $payment)
    {
        try {
            if( $payment->update($request->all())){
                return response()->json([
                'data' => new PaymentResource($payment),
                'message' => 'Payment updated success.',
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
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
          try {
            if (count($payment->cash_inflow_outflows) > 0 || count($payment->invoices) > 0 ) {
               return response()->json([
                'message' => 'Can not delete payment, its used in other place.',
                'status'=>401]);
            }else{
                $payment->delete();
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
