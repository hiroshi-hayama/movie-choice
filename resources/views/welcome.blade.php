@extends('layouts.app')

@section('content')
    <div class="text-center">
        <div class='text'>
            <h1>MovieChoiceへようこそ</h1>
            <h4 class='welcometext'>このページでは映画選びに悩んでるあなたに高い評価を得ているおすすめの映画を提供致します。</h4>
        </div>
        <div>
            <p>
                {!! link_to_route('choice.get', 'スタート!', [], ['class' => 'btn btn-lg btn-success']) !!}
            </p>
            @if (Auth::check())
                {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'btn btn-sm btn-danger']) !!}
            @else
                {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-sm btn-primary']) !!}
                {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-sm btn-primary']) !!}
            @endif
            <div class='about_moviechoice mt-5'>
                <p style="color:white"><i class="fas fa-info fa-lg mr-2"></i>
                    {!! link_to_route('about_moviechoice', 'このサイトについて', [], ['style' => 'color:white']) !!}
                </p>
            </div>
        </div>
    </div>
@endsection