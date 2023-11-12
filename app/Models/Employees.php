<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Employees extends Model
{
    use HasFactory;

    protected $table = "employees";

    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "phone_number",
        "hire_date",
        "job_id",
        "salary",
        "manager_id",
        "department_id"
    ];

    public function dependants(){
        return $this->hasMany(Dependant::class);
    }
}
