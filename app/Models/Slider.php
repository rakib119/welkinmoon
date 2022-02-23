<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class slider extends Model
{
    use HasFactory;
    public function slider_details(){
        return $this->hasOne(SliderDetail::class,'slider_id','id');
    }
}
