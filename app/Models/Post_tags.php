<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_tags extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function getIncrementing(){
        return false;
    }

    public function tags(){
        return $this->belongsTo(Tags::class);
    }

    public function blog(){
        return $this->belongsTo(Blog::class);
    }
}
