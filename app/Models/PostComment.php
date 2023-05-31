<?php

namespace App\Models;
use App\Models\Category;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function author(){
        return $this->belongsTo(User::class , 'user_id');
    }
}
