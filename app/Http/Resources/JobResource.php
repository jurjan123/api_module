<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "jobTitle" => $this->job_title,
            "minSalary" => $this->min_salary,
            "maxSalary" => $this->max_salary,
        ];
    }
}
