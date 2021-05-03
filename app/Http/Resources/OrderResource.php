<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'order_code'=> $this->order_code,
            'discounted' => $this->discounted,
            'material' => $this->material,
            'quantity' => $this->quantity,
            'vat_included' => $this->vat_included,
            'measures_of_material'=> $this->measures_of_material,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
