<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Traits\ApiResponseHeader;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CountryCollection;

class CountryController extends Controller
{
    use ApiResponseHeader;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $countries = Country::with('regions')->paginate(15);
        
        return new CountryCollection($countries);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //return $this->sendResponse(Employees::find($id)->toArray());
        return new CountryResource(Country::find($id));
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

    public function search(Request $request){

    }
}
