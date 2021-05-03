<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CashierResource extends JsonResource
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
            "id"=>  $this->id,
            "opened_at"=>  $this->opened_at,
            "closed_at"=>  $this->closed_at,
            "initial_balance"=>  $this->initial_balance,
            "final_balance"=>  $this->final_balance,
            "cashier_status"=>  $this->cashier_status,
            "employee"=> $this->user,
            "status"=>  $this->status,
            "observation"=>  $this->observation,
            "created_at"=>  $this->created_at,
            "updated_at"=>  $this->updated_at
        ];
    }
}
