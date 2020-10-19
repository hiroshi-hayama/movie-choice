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
    </div>
@endsection