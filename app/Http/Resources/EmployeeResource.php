<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'enterprise_id' => $this->enterprise_id,
            'passport_seial_number' => $this->passport_seial_number,
            'employee_full_name' => $this->employee_full_name,
            'position' => $this->position,
            'phone' => $this->phone,
            'address' => $this->address,
            'created_at' => $this->created_at,
        ];
    }
}
