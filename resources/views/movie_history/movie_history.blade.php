@if (count($movies) > 0)
    <ul class="list-unstyled">
        @foreach ($movies as $key => $movie)
            <li class="media mb-3 border-bottom">
                <div class='user_movie_img'>
                    <img class='img-fluid' src='<?php print htmlspecialchars('https://image.tmdb.org/t/p/w1280/' . $movie->poster_path , ENT_QUOTES, "UTF-8"); ?>' />
                </div>
                <div class="media-body">
                    <div>
                        {{-- タイトル --}}
                        <p class="history_movie_title"><?php print htmlspecialchars($movie->title , ENT_QUOTES, "UTF-8"); ?></p>
                        <div class='user_buttons'>
                            <div class='col-sm-6'>
                                {{-- 履歴削除ボタンのフォーム --}}
                                {!! Form::open(['route' => ['users.detach_history', $movie_id[$key]->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('履歴から削除', ['class' => "history_delete_button btn btn-danger btn-lg"]) !!}
                                {!! Form::close() !!}
                            </div>
                            <div class='col-sm-6'>
                                {{-- お気に入りボタンのフォーム --}}
                                @if (Auth::user()->in_favorites($movie_id[$key]->id))
                                    {{-- unfavoriteボタンのフォーム --}}
                                    {!! Form::open(['route' => ['users.detach_favorite', $movie_id[$key]->id], 'method' => 'delete']) !!}
                                        {!! Form::submit('お気に入り削除', ['class' => "favorite_delete_button btn-danger btn-lg"]) !!}
                                    {!! Form::close() !!}
                                @else
                                    {{-- favoriteボタンのフォーム --}}
                                    {!! Form::open(['route' => ['users.store_favorite', $movie_id[$key]->id], 'method' => 'store']) !!}
                                        {!! Form::submit('お気に入り', ['class' => "favorite_button btn btn-success btn-lg"]) !!}
                                    {!! Form::close() !!}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $movie_id->links() }}
@else
    <div class='text-center' >
        <p>履歴はありません</p>
    </div>
@endif