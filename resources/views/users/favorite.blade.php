@extends('layouts.user_app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
                    <h3 class="card-title">ようこそ{{ $user->name }}さん</h3>
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                {{-- 履歴タブ --}}
                <li class="nav-item"><a href="#" class="nav-link">履歴</a></li>
                {{-- お気に入り一覧タブ --}}
                <li class="nav-item"><a href="#" class="nav-link">お気に入り</a></li>
            </ul>
            <div class = 'scroll'>
                {{-- お気に入り一覧 --}}
                    @include('movie_favorite.movie_favorite')
            </div>
        </div>
    </div>

@endsection