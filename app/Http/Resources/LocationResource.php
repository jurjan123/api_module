<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResponseHeader;
class LocationResource extends JsonResource
{
    use ApiResponseHeader;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        
            return [
                "streetAddress" => $this->street_address,
                "postalCode" => $this->postal_code,
                "city" => $this->city,
                "stateProvince" => $this->state_province
                
            ];
        
        
    }
}
