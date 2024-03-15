<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogComment;
class ReplyComments extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'reply_to',
        'user_id'
    ];

    public function comment()
    {
        return $this->belongsTo(BlogComment::class);
    }
}
