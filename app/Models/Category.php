<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillables = ['name', 'details'];

    public function posts()
    {
        return $this->hasMany(Post::class,'category_id','id');
    }
    public function last_post()
    {
        return $this->hasOne(Post::class,'category_id','id')->orderByDesc('created_at');
    }
}
