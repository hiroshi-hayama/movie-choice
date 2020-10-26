@extends('layouts.user_app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
                    <h3 class="card-title">ようこそ{{ $user->name }}さん</h3>
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                {{-- 履歴タブ --}}
                <li class="nav-item">{!! link_to_route('users.index', '履歴',['id' => Auth::id()], ['class' => 'nav-link']) !!}</li>
                {{-- お気に入り一覧タブ --}}
                <li class="nav-item">{!! link_to_route('users.favorites', 'お気に入り',['id' => Auth::id()], ['class' => 'nav-link']) !!}</li>
            </ul>
            <div class = 'scroll'>
                {{-- 履歴一覧 --}}
                    @include('movie_history.movie_history')
            </div>
        </div>
    </div>

@endsection