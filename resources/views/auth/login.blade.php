@extends('layouts.register_app')

@section('content')
    <div class="text-center" id='text'>
        <h1>ログイン</h1>
    </div>

    <div class="row" id='text_register'>
        <div class="col-sm-6 offset-sm-3">

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

            {{-- ユーザ登録ページへのリンク --}}
            <p class="mt-2">会員ではない場合は {!! link_to_route('signup.get', 'ここをクリックしてください。') !!}</p>
        </div>
    </div>
@endsection