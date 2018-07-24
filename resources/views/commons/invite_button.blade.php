<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CSS</title>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
 
        <style>
        .btn
        {
            display: inline-block;
            width: 150px;
            height: 32px;
            line-height: 32px;
            background-color: #EF858C;
            color: #FFF;
            text-align: center;
        }
 
        .btn.active {
            background-color: #ccc;
        }
 
        .btn > span:last-of-type,
        .btn.active > span:first-of-type
        {
            display: none;
        }
 
        .btn.active > span:last-of-type {
            display: inline;
        }
        </style>

    </head>
    <link rel="stylesheet" href="{{ secure_asset('css/result.css') }}">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
    <body>
        <a class="btn" href="#">
        @if (Auth::id() != $user->id)
            @if (Auth::user()->is_inviting($user->id))
                {!! Form::open(['route' => ['user.uninvite', $user->id], 'method' => 'delete']) !!}
                    {!! Form::submit('お誘い済み', ['class' => "btn btn-warning btn-block"]) !!}
                {!! Form::close() !!}
            @else
                {!! Form::open(['route' => ['user.invite', $user->id]]) !!}
                    {!! Form::submit('誘う！', ['class' => "btn btn-info btn-block"]) !!}
                {!! Form::close() !!}
            @endif
        @endif
        </a>
    </body>
</html>