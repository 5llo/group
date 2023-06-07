<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class family extends Model
{
    use HasFactory;
    protected $guarded=[ ];

    // public static function create(array $all)
    //  {
    //  }

    public function place(){


        return $this->belongsTo(place::class);
    }

    public function plants(){


        return $this->belongsToMany(Plant::class,'family_plant_pivot');
    }
}
