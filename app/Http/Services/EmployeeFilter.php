<?php

namespace App\Http\Services;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeFilter {
    protected $safeParms = [
        "id" => ["eq"],
        "firstName" => ["eq"],
        "lastName" => ["eq"],
        "email" => ["eq"],
        "phoneNumber" => ["eq"],
        "hireDate" => ["eq"],
        "salary" => ["eq"],
        "job_id" => ["eq"],
        "manager_id" => ["eq"],
        "department_id" => ["eq"]
    ];

    protected $columnMap = [
        "firstName" => "first_name",
        "lastName" => "last_name",
        "phoneNumber" => "phone_number",
        "hireDate" => "hire_date"
    ];

    protected $operatorMap = [
        "eq" => "=",
        "lt" => "<",
        "lte" => "<=",
        "gt" => ">",
        "gte" => ">="
    ];

    public function transform(Request $request){
        $query = Employees::query();

        if($request->has("id")){
            $query->where("id", $request->input("id"))->get();
        }

        if($request->has("lastName")){
            $query->where("last_name", $request->input("lastName"))->get();
        }

        if($request->has("hireDate")){
            $query->where("hire_date", $request->input("hireDate"))->get();
        }

        if($request->has("department_id")){
            $query->where("department_id", $request->input("department_id"))->get();
        }
        if($request->has("manager_id")){
            $query->where("manager_id", $request->input("manager_id"))->get();
        }
        $data = $query->get();
       
        return $data;
    }




}