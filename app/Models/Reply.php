<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $table = 'replies';

    protected $fillable = ['reply', 'comment_id', 'post_id', 'user_id'];

    public function users() 
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
