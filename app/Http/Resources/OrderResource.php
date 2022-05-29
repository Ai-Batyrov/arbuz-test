<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'order_id' => $this->id,
            'customer_id' => $this->customer_id,
            'address' => $this->address,
            'phone_number' => $this->phone,
            'quantity' => $this->quantity,
            'delivery_time' => $this->delivery_time,
            'is_cut_into_slices' => $this->is_cut_into_slices,
        ];
    }
}
