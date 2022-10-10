<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable = ['title', 'body', 'tag', 'user_id'];

    public function users() 
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
