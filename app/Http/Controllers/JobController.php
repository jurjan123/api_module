<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Http\Resources\JobResource;
use App\Http\Resources\JobCollection;
use App\Traits\ApiResponseHeader;
class JobController extends Controller
{
    use ApiResponseHeader;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$filter = new CustomerQuery();
        return new JobCollection(Job::all());
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
        return new JobResource(Job::find($id));
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
