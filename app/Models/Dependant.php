<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependant extends Model
{
    use HasFactory;

    protected $table = "dependents";
    
    protected $fillable = [
        "first_name",
        "last_name",
        "relationship"
    ];

    public function employees(){
        return $this->belongsTo(Employees::class);
    }
}
