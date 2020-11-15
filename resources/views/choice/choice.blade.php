@extends('layouts.choice_app')

@section('content')
    <div class="text-center">
        <div id='text'>
            <h1 id='fade_in'>どちらにしますか？</h1>
        </div>
        <div class='buttons_choice'>
            <p>
                {!! link_to_route('choice.show', '洋画', ['1'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:120px']) !!}
            </p>
            <p>
                {!! link_to_route('choice.show', '邦画', ['2'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:120px']) !!}
            </p>
        </div>
        <div class="progress" style="margin-top: 100px; height: 30px;">
            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width:33%">1/3</div>
        </div>
    </div>
@endsection