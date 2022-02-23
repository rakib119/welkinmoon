<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorySecond extends Model
{
    use HasFactory;
    public function blog_details(){
        return $this->hasOne(StoryBlog::class,'blog_id','id');
    }
}
