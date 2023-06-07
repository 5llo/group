<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    public function family(){


        return $this->belongsToMany(family::class,'family_plant_pivot');
    }
    use HasFactory;
}
