@extends('layouts.result_none_app')

@section('content')
    <div class="text-center">
        <div class='text_none'>
            <h1>申し訳ありません。</h1>
            <h1>ご指定の条件でお勧めできる映画が登録されていません。</h1>
            {!! link_to_route('choice.to_top', 'トップに戻る', [], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
        </div>
    </div>
    
@endsection