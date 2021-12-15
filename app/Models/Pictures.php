<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'url',
        'post_id',
        'featured'
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
