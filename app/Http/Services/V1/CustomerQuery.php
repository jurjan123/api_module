<?php

namespace App\Services\V1;

use Illuminate\Http\Request;

class CustomerQuery {
    protected $allowedpars = [
        "postalCode" => ["eq", "gt", "lt"]
    ];
}