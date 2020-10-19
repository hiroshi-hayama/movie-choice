@extends('layouts.choice_app')

@section('content')
    <div class="text-center">
        <div id='text'>
            <h1>ジャンルを選択してください</h1>
        </div>
        <div class='buttons_choice'>
            <p>
                {!! link_to_route('choice.show_result', 'SF', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '1'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
                {!! link_to_route('choice.show_result', 'サスペンス', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '2'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
                {!! link_to_route('choice.show_result', 'ドラマ', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '3'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
            </p>
            <p>
                {!! link_to_route('choice.show_result', 'ファンタジー', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '4'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
                {!! link_to_route('choice.show_result', '青春', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '5'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
                {!! link_to_route('choice.show_result', 'ファミリー', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '6'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
            </p>
            <p>
                {!! link_to_route('choice.show_result', 'アクション', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '7'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
                {!! link_to_route('choice.show_result', '西部劇', ['ew_id' => $ew ,'la_id' => $la ,'genre_id'=> '8'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
                {!! link_to_route('choice.show_result', 'ホラー', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '9'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
            </p>
            <p>
                {!! link_to_route('choice.show_result', 'アドベンチャー', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '10'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
                {!! link_to_route('choice.show_result', '戦争', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '11'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
                {!! link_to_route('choice.show_result', 'ロマンス', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '12'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
            </p>
            <p>
                {!! link_to_route('choice.show_result', 'コメディ', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '13'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
                {!! link_to_route('choice.show_result', 'ドキュメンタリー', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '14'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
                {!! link_to_route('choice.show_result', 'ミュージカル', ['ew_id' => $ew ,'la_id' => $la ,'genre_id' => '15'], ['class' => 'btn btn-lg btn-primary' , 'style' => 'width:200px']) !!}
            </p>
            
        </div>
    </div>
@endsection