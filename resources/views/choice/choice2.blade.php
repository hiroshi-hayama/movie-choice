@extends('layouts.choice_app')

@section('content')
    <div class="text-center">
        <div id='text'>
            <h1>どちらにしますか？</h1>
        </div>
        <div class='buttons_choice'>
            <p>
            {!! link_to_route('choice.show_genre', '実写', ['ew_id' => $ew ,'la_id' =>'1'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
            </p>
            <p>
            {!! link_to_route('choice.show_genre', 'アニメーション', ['ew_id' => $ew ,'la_id' =>'2'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
            </p>
        </div>
        <div class="progress" style="margin-top: 100px; height: 30px;">
            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width:66%">2/3</div>
        </div>
    </div>
@endsection