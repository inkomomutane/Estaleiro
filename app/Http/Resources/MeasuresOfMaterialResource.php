<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MeasuresOfMaterialResource extends JsonResource
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
            'measures'=> $this->measure,
            'materials' => $this->material,
            'price'=> $this->price,
            'description'=> $this->description,
            'quantity_by_base_unity' => $this->quantity_by_base_unity,
            'profit' => $this->profit,
            'discount' => $this->discount,
            'orders'=> $this->orders,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
