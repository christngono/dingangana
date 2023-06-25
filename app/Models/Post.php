<?php

namespace App\Models;
use App\Models\comment;

use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description','linkmedia', 'miniature','auther',
    'slug', 'typecontent','teaser'];
    public function comments()
    {
        	return $this->hasMany(Message::class);
    }
}