<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
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
            "abbr" => $this->abbr,
            "countryName" => $this->country_name,
            "region_id" => $this->region_id,
            "region" => [
                "regionName" => $this->regions->region_name,
            ]
            //'regions' => RegionResource::collection($this->whenLoaded('regions')),
        ];
    }
}
