<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['id', 'name', 'email', 'web_address', 'cover_letter', 'attachment', 'is_working', 'ip', 'location'];
    
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    // public function comments()
    // {
    //     return $this->hasMany(Comment::class)->whereNull('parent_id');
    // }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
 
    public function parentComments()
    {
        return $this->comments()->where('parent_id', null);
    }
}
