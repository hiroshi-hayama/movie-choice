<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

class UsersController extends Controller
{
    public function users_index($userId)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($userId);

        // 関係するモデルの件数をロード
        $user->loadRelationshipCounts();

        // ユーザの履歴一覧を取得
        $movies = $user->history()->orderBy('movies_history.id')->paginate(10);
        
        $movie_list=[];
        
        foreach($movies as $movie){
            
            $tmdb_id = $movie->tmdb_id;
            $client = new \GuzzleHttp\Client();
            $url = "https://api.themoviedb.org/3/movie/";
            $body = 'api_key=8aefb5e2de7dfff09a9892700b493da5&language=ja';
            $search_url = $url . $tmdb_id . '?' . $body;
        
            $request = $client->get($search_url);
        
            $response_json = $request->getBody()->getContents();
            
            $response = json_decode($response_json);
            
            $movie_list[] = $response; 
        
        }

        // フォロー一覧ビューでそれらを表示
        return view('users.index', [
            'user' => $user,
            'movie_id' => $movies,
            'movies' => $movie_list,
        ]);
    }
    
    public function destroy_history($movie_id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフォローする
        \Auth::user()->detach_history($movie_id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    public function users_favorite($userId)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($userId);

        // 関係するモデルの件数をロード
        $user->loadRelationshipCounts();

        // ユーザの履歴一覧を取得
        $movies = $user->favorites()->paginate(10);
        
        $movie_list=[];
        
        foreach($movies as $movie){
            
            $tmdb_id = $movie->tmdb_id;
            $client = new \GuzzleHttp\Client();
            $url = "https://api.themoviedb.org/3/movie/";
            $body = 'api_key=8aefb5e2de7dfff09a9892700b493da5&language=ja';
            $search_url = $url . $tmdb_id . '?' . $body;
        
            $request = $client->get($search_url);
        
            $response_json = $request->getBody()->getContents();
            
            $response = json_decode($response_json);
            
            $movie_list[] = $response; 
        
        }

        // フォロー一覧ビューでそれらを表示
        return view('users.favorite', [
            'user' => $user,
            'movie_id' => $movies,
            'movies' => $movie_list,
        ]);
    }
    
    public function destroy_favorite($movie_id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフォローする
        \Auth::user()->detach_favorite($movie_id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    public function store_favorite($movie_id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフォローする
        \Auth::user()->favorite($movie_id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    

}
