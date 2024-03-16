<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyBlogComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'reply_to',
        'user_id'
    ];

    public function comment()
    {
        return $this->belongsTo(ReplyBlogComment::class, 'reply_to', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
