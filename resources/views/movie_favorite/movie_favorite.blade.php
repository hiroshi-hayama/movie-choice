@if (count($movies) > 0)
    <ul class="list-unstyled">
        @foreach ($movies as $key => $movie)
            <li class="media mb-3 border-bottom">
                <div class='user_movie_img'>
                    <img class='img-fluid' src='<?php print htmlspecialchars('https://image.tmdb.org/t/p/w1280/' . $movie->poster_path , ENT_QUOTES, "UTF-8"); ?>'/>
                </div>
                <div class="media-body">
                    <div>
                        {{-- タイトル --}}
                        <p class="favorite_movie_title"><?php print htmlspecialchars($movie->title , ENT_QUOTES, "UTF-8"); ?></p>
                    </div>
                    <div class='p-3'>
                        {{-- unfavoriteボタンのフォーム --}}
                        {!! Form::open(['route' => ['users.detach_favorite', $movie_id[$key]->id], 'method' => 'delete']) !!}
                            {!! Form::submit('お気に入り削除', ['class' => "user_favorite_delete_button btn-danger btn-lg"]) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $movie_id->links() }}
@else
    <div class='text-center' >
        <p>お気に入りはありません</p>
    </div>
@endif