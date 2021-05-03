<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InflowOutflowTypeResource extends JsonResource
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
            'name'=> $this->name,
            'cash_inflow_outflows'=> $this->cash_inflow_outflows,
            'created_at' => $this->created_at,
            'updated_at'=> $this->updated_at,
        ];
    }
}
