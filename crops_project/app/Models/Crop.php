<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $fillable = [
        'crop_type',
        'crop_name'
    ];
    use HasFactory;

    public function family(){
        return $this->belongsToMany(families::class);
    }
}
