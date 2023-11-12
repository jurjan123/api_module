<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Country;
use App\Models\Location;
use App\Models\Employees;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Traits\ApiResponseHeader;
use App\Http\Controllers\Controller;
use App\Http\Resources\RegionCollection;
use App\Http\Resources\CountryCollection;
use App\Http\Resources\DepartmentResource;
use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\LocationCollection;
use App\Http\Resources\DepartmentCollection;

class DepartmentController extends Controller
{
    use ApiResponseHeader;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return [
            "departments" => new DepartmentCollection(Department::all()),
            "locations" => new LocationCollection(Location::all()),
            "countries" => new CountryCollection(Country::all()),
            "regions" => new RegionCollection(Region::all()),
            "employees" => new EmployeeCollection(Employees::all())
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
        return new DepartmentResource(Department::find($id));
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
