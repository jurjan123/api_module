<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Traits\ApiResponseHeader;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryCollection;
use App\Http\Resources\LocationResource;
use App\Http\Resources\LocationCollection;

class LocationController extends Controller
{
    use ApiResponseHeader;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$filter = new CustomerQuery();
        
        $locations = Location::all();
        $countries = Country::all();

        /*return [
            "locations" => [
                $locations,
            ],
            "countries" => [
                $countries
            ]
        ];*/
        return [
            "locations" => new LocationCollection($locations),
            "countries" => new CountryCollection($countries)
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //return $this->sendResponse(Employees::find($id)->toArray());
        return new LocationResource(Location::find($id));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

