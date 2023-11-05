<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "firstName" => $this->first_name,
            "lastName" => $this->last_name,
            "email" => $this->email,
            "phone_number" => $this->phone_number,
            "hire_date" => $this->hire_date,
            "job_id" => $this->job_id,
            "salary" => $this->salary,
            "manager_id" => $this->manager_id,
            "department_id" => $this->department_id
        ];
    }
}
