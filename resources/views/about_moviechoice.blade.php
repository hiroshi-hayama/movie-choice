@extends('layouts.app')

@section('content')
    <div class="text_about_moviechoice">
        <h2 class='title_about_moviechoice'>アプリケーションの概要</h2>
        <ul>
            <li>このサイトではヤフー映画やTmdbで高評価を取得している映画を厳選し、ユーザーによって選ばれた選択肢からおすすめの映画を提示します。</li>
        </ul>
        <h2 class='title_about_moviechoice'>アプリケーションの機能一覧</h2>
        <ul>
            <div>
                <li>WebAPIによるデータ取得(Tmdb)</li>
                <li>ユーザ登録</li>
                <li>ユーザ　ログイン</li>
                <li>おすすめ映画の取得と詳細表示</li>
                <li>ユーザのおすすめ映画履歴の表示</li>
                <li>お気に入り登録</li>
                <li>ユーザのお気に入り一覧の表示</li>
            </div>
        </ul>
        <h2 class='title_about_moviechoice'>アプリケーションで使用している技術一覧</h2>
        <ul>
            <div>
                <li>言語：PHP（フレームワーク：Laravel）</li>
                <li>CSSフレームワーク：Bootstrap</li>
                <li>データベース：Mysql</li>
                <li>開発環境：AWS Cloud9</li>
                <li>サービス公開環境：Heroku</li>
                <li>バージョン管理：GitHub</li>
            </div>
        </ul>
    </div>
    <div class='text-center'>
        {!! link_to_route('choice.index', 'トップに戻る', [], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
    </div>
@endsection