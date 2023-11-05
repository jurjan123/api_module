<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = "countries";

    protected $fillable = [
        "abbr",
        "country_name",
        "region_id"
    ];

    public function regions(){
        return $this->hasOne(Region::class);
    }
}
