<?php

namespace App\Models;
use App\Models\post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
 

class Comment extends Model
{
    use HasFactory;
    public function Post():BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}