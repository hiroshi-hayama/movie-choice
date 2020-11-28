@extends('layouts.register_app')

@section('content')
    <div class="text text-center">
        <h1>ログイン</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class='text_register'>

                {!! Form::open(['route' => 'login.post']) !!}
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
    
                    {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            </div>

            {{-- ユーザ登録ページへのリンク --}}
            <p class="mt-2">{!! link_to_route('signup.get', '会員ではない場合はここをクリックしてください。', [], ['style' => 'color:white']) !!}</p>
        </div>
    </div>
@endsection