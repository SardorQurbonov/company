<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EnterpriseResource extends JsonResource
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
            'id' => $this->id,
            'enterprise_name' => $this->enterprise_name,
            'full_name' => $this->full_name,
            'address' => $this->address,
            'email' => $this->email,
            'website' => $this->website,
            'phone' => $this->phone,
            'created_at' => $this->created_at,
            'employees' => $this->employees,
        ];
    }
}
