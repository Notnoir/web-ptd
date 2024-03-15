<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ReplyComments;

class BlogComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'reply_to',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reply()
    {
        return $this->hasMany(ReplyComments::class);
    }
}
