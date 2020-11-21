<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function history()
    {
        return $this->belongsToMany(Movie::class, 'movies_history', 'user_id', 'movie_id')->withTimestamps();
    }
    
    public function favorites()
    {
        return $this->belongsToMany(Movie::class, 'favorites', 'user_id', 'movie_id')->withTimestamps();
    }
    
    public function loadRelationshipCounts()
    {
        $this->loadCount('history');
    }
    
    public function storing_history($movieId)
    {
        // フォロー中ユーザの中に $userIdのものが存在するか
        return $this->history()->where('movie_id', $movieId)->exists();
    }
    
    public function in_favorites($movieId)
    {
        // フォロー中ユーザの中に $userIdのものが存在するか
        return $this->favorites()->where('movie_id', $movieId)->exists();
    }
    
    public function detach_history($movieId)
    {
        // 履歴に存在するかの確認
        $exist = $this->storing_history($movieId);
        

        if ($exist) {
            // すでにフォローしていればフォローを外す
            $this->history()->detach($movieId);
            return true;
        } else {
            // 未フォローであれば何もしない
            return false;
        }
    }
    
    public function detach_all_history()
    {
        // 履歴に存在するかの確認
        $exist = $this->storing_history($movieId);
    
        if ($exist) {
            // すでにフォローしていればフォローを外す
            $this->history()->detach();
            return true;
        } else {
            // 未フォローであれば何もしない
            return false;
        }
    }
    
    public function favorite($movieId)
    {
        // すでにお気に入りにしているかの確認
        $exist = $this->in_favorites($movieId);

        if ($exist) {
            // すでにフォローしていれば何もしない
            return false;
        } else {
            // 未フォローであればフォローする
            $this->favorites()->attach($movieId);
            return true;
        }
    }
    
    public function detach_favorite($movieId)
    {
        // お気に入りにに存在するかの確認
        $exist = $this->in_favorites($movieId);
        

        if ($exist) {
            // すでにお気に入りにしていればフォローを外す
            $this->favorites()->detach($movieId);
            return true;
        } else {
            // 未フォローであれば何もしない
            return false;
        }
    }
    public function detach_all_favorite($movieId)
    {
        // お気に入りにに存在するかの確認
        $exist = $this->in_favorites($movieId);
        
        if ($exist) {
            // すでにお気に入りにしていればフォローを外す
            $this->favorites()->detach($movieId);
            return true;
        } else {
            // 未フォローであれば何もしない
            return false;
        }
    }
    
}
