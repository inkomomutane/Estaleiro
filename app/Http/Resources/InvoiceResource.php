<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
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
            'id' => $this->id,
            'depreciated_at'=> $this->depreciated_at,
            'cliente'=> $this->user,
            'total_price'=> $this->total_price,
            'total_materials'=> $this->total_materials,
            'processed_by'=> $this->processed_by,
            'client_name'=> $this->client_name,
            'order_code'=> $this->order_code,
            'status'=> $this->status,
            'payment'=> $this->payment,
            'cash_inflow_outflows'=> $this->cash_inflow_outflows,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
