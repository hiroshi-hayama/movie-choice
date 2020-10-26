@if (count($movies) > 0)
    <ul class="list-unstyled">
        @foreach ($movies as $key => $movie)
            <li class="media mb-3">
                <img src='<?php print htmlspecialchars('https://image.tmdb.org/t/p/w1280/' . $movie->poster_path , ENT_QUOTES, "UTF-8"); ?>'　width="350" height="250" />
                <div class="media-body">
                    <div>
                        {{-- タイトル --}}
                        <p class="ml-10" style= 'margin-left: 50px'><?php print htmlspecialchars($movie->title , ENT_QUOTES, "UTF-8"); ?></p>
                    <div class='delete'>
                        {{-- 履歴削除ボタンのフォーム --}}
                        {!! Form::open(['route' => ['users.detach_history', $movie_id[$key]->id], 'method' => 'delete']) !!}
                            {!! Form::submit('履歴から削除', ['class' => "btn btn-danger btn-block", 'style' => 'width:120px']) !!}
                        {!! Form::close() !!}
                    </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endif