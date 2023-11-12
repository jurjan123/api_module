<?php

namespace App\Http\Services;

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
        $eloQuery = [];

        foreach($this->safeParms as $parm => $operators){
            $query = $request->query($parm);
            if(isset($query)){
                continue;
            }

            $column = $this->columnMap[$parm] ?? $parm;

            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }




}