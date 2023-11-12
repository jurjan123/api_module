<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Employees;
use Illuminate\Http\Request;
use App\Traits\ApiResponseHeader;

use App\Http\Resources\EmployeeResource;
use App\Http\Resources\EmployeeCollection;
use App\Http\Services\EmployeeFilter;

class EmployeeController extends Controller
{
    use ApiResponseHeader;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new EmployeeFilter();
        $queryItems = $filter->transform($request);
        if(count($queryItems) == 0){
            return new EmployeeCollection(Employees::paginate(15));
        } else{
            return new EmployeeCollection(Employees::where($queryItems)->paginate(15));
        }
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
        return new EmployeeResource(Employees::find($id));
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
