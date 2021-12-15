<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title', 
        'content', 
        'metadata',
        'psottype',
        'user_id', 
        'category_id'
    ];

    public function author(){
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function pictures(){
        return $this->hasMany(Pictures::class);
    }

    public function videos(){
        return $this->hasMany(Video::class);
    }

    public function tags(){
        return $this->belongsToMany(Tags::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'author_id', 'id');
    }

    public function link(){
        return '/posts/'.$this->id;
    }
}
