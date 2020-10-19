<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('choice.choice');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ew_id)
    {
        $ew = $ew_id;
        $client = new \GuzzleHttp\Client();

        $request = $client->get('https://api.themoviedb.org/3/movie/767?api_key=8aefb5e2de7dfff09a9892700b493da5&language=ja');

        $response_json = $request->getBody()->getContents();
        $response = json_decode($response_json);
        //$response->getBody()->getContents();

        //dd($response->poster_path);
        return view('choice.choice2',['ew' => $ew]);
    }
    
        public function show_genre($ew_id , $la_id)
    {
        $ew = $ew_id;
        $la = $la_id;
        return view('choice.choice3' , ['ew' => $ew ,'la' => $la]);
    }
    
    
        public function show_result($ew_id , $la_id , $genre_id)
    {
        $ew = $ew_id;
        $la = $la_id;
        $genre = $genre_id;
        
        $tmdb = \DB::table('movies')->select('tmdb_id')->where('west_east', $ew)->where('live_animated',$la)->where('genre',$genre)->inRandomOrder()->first();
        if($tmdb === null){
            return view('choice.choice_none');
            
        }else{
        $tmdb_id = $tmdb->tmdb_id;

        $client = new \GuzzleHttp\Client();

        $url = "https://api.themoviedb.org/3/movie/";
        $body = 'api_key=8aefb5e2de7dfff09a9892700b493da5&language=ja';
        $search_url = $url . $tmdb_id . '?' . $body;

        $request = $client->get($search_url);

        $response_json = $request->getBody()->getContents();
        
        $response = json_decode($response_json);

        //dd($response);
        
        return view('choice.choice_result' , ['responce' => $response,'ew' => $ew ,'la' => $la,'genre' => $genre]);
        }
    }
    
    public function to_top()
    {
        return view('welcome');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
