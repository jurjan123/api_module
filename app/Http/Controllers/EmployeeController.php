<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Dependant;
use App\Models\Employees;
use Illuminate\Http\Request;
use App\Traits\ApiResponseHeader;

use App\Http\Services\EmployeeFilter;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\DependantResource;
use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\DependantCollection;

class EmployeeController extends Controller
{
    use ApiResponseHeader;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new EmployeeFilter();
       
        if(empty($request->query())){
            return [
                "employees" => new EmployeeCollection(Employees::paginate(15)),
                "dependants" => new DependantCollection(Dependant::paginate(15))
            ]; 
        } else{
           $items = $filter->transform($request);
           return new EmployeeCollection($items);
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
