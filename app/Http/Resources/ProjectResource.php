<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'name'=> $this->name,
            'deposited_amount'=> $this->deposited_amount,
            'available_amount'=> $this->available_amount,
            'missing_amount'=> $this->missing_amount,
            'progress_percent'=> $this->progress_percent,
            'total_materials'=> $this->total_materials,
            'total_paid'=> $this->total_paid,
            'cliente'=> $this->user,
		    'status'=> $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
