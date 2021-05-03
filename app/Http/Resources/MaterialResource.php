<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MaterialResource extends JsonResource
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
            'name'=> $this->name,
            'quantity'=> $this->quantity,
            'buy_price'=> $this->buy_price,
            'description'=> $this->description,
            'short_description'=> $this->short_description,
            'intern_material'=> $this->intern_material,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'measure' => $this->measure,
            'category' => $this->category,
            'measure_by_price'=> $this->measures,
            'created_at' =>$this->created_at,
            'updated_at'=> $this->updated_at,
        ];
    }
}
