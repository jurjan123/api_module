<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Employees;
use Illuminate\Http\Request;
use App\Traits\ApiResponseHeader;
use App\Http\Resources\CustomerResource;

class CustomerController extends Controller
{
    use ApiResponseHeader;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$filter = new CustomerQuery();
        return $this->sendResponse(Employees::paginate(15)->toArray());
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
        return new CustomerResource(Employees::find($id));
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
