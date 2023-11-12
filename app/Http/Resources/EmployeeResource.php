<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray( Request $request): array
    {
        return [
                "id" => $this->id,
                "firstName" => $this->first_name,
                "lastName" => $this->last_name,
                "email" => $this->email,
                "phoneNumber" => $this->phone_number,
                "hireDate" => $this->hire_date,
                "salary" => $this->salary,
                "job_id" => $this->job_id,
                "manager_id" => $this->manager_id,
                "department_id" => $this->department_id
           
           
        ];

        
    }
}
