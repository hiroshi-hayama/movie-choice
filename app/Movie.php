<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    
    protected $fillable = ['movie_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users_history()
    {
        return $this->belongsToMany(User::class, 'movies_history', 'movie_id', 'user_id')->withTimestamps();;
    }
    
    public function users_favorites()
    {
        return $this->belongsToMany(User::class, 'favorites', 'movie_id', 'user_id')->withTimestamps();;
    }
    
    public function loadRelationshipCounts()
    {
        $this->loadCount('users');
    }
}
