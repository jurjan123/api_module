<?php

namespace App\Http\Resources;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CountryRegionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
