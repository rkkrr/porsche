@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>新規登録</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'お名前') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード確認用') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('いくぜ！', ['class' => 'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}
              <p>すでに登録している方は {!! link_to_route('login.post', 'こちら！') !!}</p>
        </div>
    </div>
@endsection