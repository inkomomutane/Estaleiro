<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CashInflowOutflowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'payment'=> $this->payment,
            'description'=> $this->description,
            'inflow_outflow_type'=> $this->inflow_outflow_type,
            'amount'=> $this->amount,
            'invoice'=> $this->invoice,
            'created_at'=> $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
