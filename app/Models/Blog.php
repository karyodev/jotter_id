<?php

namespace App\Models;

use App\Models\User;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
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
