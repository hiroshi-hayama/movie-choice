@if (count($movies) > 0)
    <ul class="list-unstyled">
        @foreach ($movies as $key => $movie)
            <li class="media mb-3">
                <img src='<?php print htmlspecialchars('https://image.tmdb.org/t/p/w1280/' . $movie->poster_path , ENT_QUOTES, "UTF-8"); ?>'　width="350" height="250" />
                <div class="media-body">
                    <div>
                        {{-- タイトル --}}
                        <p class="ml-10" style= 'margin-left: 50px'><?php print htmlspecialchars($movie->title , ENT_QUOTES, "UTF-8"); ?></p>
                    </div>
                    <div class='p-5'>
                        {{-- unfavoriteボタンのフォーム --}}
                        {!! Form::open(['route' => ['users.detach_favorite', $movie_id[$key]->id], 'method' => 'delete']) !!}
                            {!! Form::submit('お気に入り削除', ['class' => "btn-danger btn-lg",'style' => 'width:200px']) !!}
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