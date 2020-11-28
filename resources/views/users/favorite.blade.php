@extends('layouts.user_app')

@section('content')
    <div class="row">
        <div class="col-sm-12 text-center">
            <p class="user_welcome mb-5">ようこそ{{ $user->name }}さん</p>
        </div>
        <div class="col-sm-12">
            <ul class="tab_history_favorite nav nav-tabs nav-justified">
                {{-- 履歴タブ --}}
                <li class='nav-item'><a href="{{ route('users.index', ['id' => Auth::id()]) }}" class="nav-link {{ Request::routeIs('users.index') ? 'active' : '' }}">
                履歴
                </a></li>
                {{-- お気に入り一覧タブ --}}
                <li class='nav-item'><a href="{{ route('users.favorites', ['id' => Auth::id()]) }}" class="nav-link {{ Request::routeIs('users.favorites') ? 'active' : '' }}">
                お気に入り
                </a></li>
            </ul>
            <div class = 'scroll'>
                {{-- お気に入り一覧 --}}
                    @include('movie_favorite.movie_favorite')
            </div>
        </div>
    </div>

@endsection