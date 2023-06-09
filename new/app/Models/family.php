<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class family extends Model
{
    use HasFactory;
    protected $fillable=['first_name','mid_name','last_name','number','id_num','place_id',''];
    public function place()
    {
return $this->belongsTo(Place::class);

    }
}
