<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Employees;
use Illuminate\Http\Request;
use App\Traits\ApiResponseHeader;

class CustomerController extends Controller
{
    use ApiResponseHeader;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return $this->sendResponse(Employees::all()->toArray());
      
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
    public function show(string $id)
    {
        //
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
