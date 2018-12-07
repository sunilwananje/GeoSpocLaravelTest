<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function replies()
    // {
    //     return $this->hasMany(Comment::class, 'parent_id');
    // }

    public function replies()
    {
        return $this->hasMany(__CLASS__, 'parent_id');
    }
 
    public function allRepliesWithOwner()
    {
        return $this->replies()->with(__FUNCTION__, 'owner');
    }
 
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
