<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StatusResource extends JsonResource
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
            'name' => $this->name,
            'projects'=> $this->projects,
            'invoices' => $this->invoices,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
