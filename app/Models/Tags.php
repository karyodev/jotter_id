<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function getIncrementing(){
        return false;
    }

    public function post_tags(){
        return $this->hasMany(Post_tags::class);
    }
}
