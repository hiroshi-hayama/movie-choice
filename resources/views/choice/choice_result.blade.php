@extends('layouts.result_app')

@section('content')
    <div class="text-center">
        <div id='text_result'>
            <h1>あなたにおすすめの映画はこちらです。</h1>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-6'>
            <img src='<?php print htmlspecialchars('https://image.tmdb.org/t/p/w1280/' . $responce->poster_path , ENT_QUOTES, "UTF-8"); ?>'　width="800" height="600" />
        </div>
        <div class='col-md-6'>
            <h2 class='result_title'>
                <?php print htmlspecialchars($responce->title , ENT_QUOTES, "UTF-8"); ?>
            </h2>
            <div class ='text_con'>
                <h3>
                    概要
                </h3>
                <p>
                    <?php print htmlspecialchars($responce->overview , ENT_QUOTES, "UTF-8"); ?>
                </p>
            </div>
            <p class='result_button'>
            {!! link_to_route('choice.show_result', '同じ条件で再検索', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => $genre], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
            {!! link_to_route('choice.index', 'トップに戻る', [], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
            </p>
        </div>
    </div>
    
@endsection