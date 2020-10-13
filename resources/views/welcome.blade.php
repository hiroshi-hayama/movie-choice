@extends('layouts.app')

@section('content')
    <div class="text-center">
        <div id='text'>
            <h1>MovieChoiceへようこそ</h1>
            <h4 class='welcome'>このページでは映画選びに悩んでるあなたに高い評価を得ているおすすめの映画を提供致します。</h4>
        </div>
        <div class='buttons'>
            <button type="button">スタート！</button>
            <button type="button">ログイン</button>
            {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
        
            
    </div>
@endsection