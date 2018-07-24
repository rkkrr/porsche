@if (Auth::id() != $user)
    @if (Auth::user()->is_inviting($user))
        {!! Form::open(['route' => ['user.uninvite', $user], 'method' => 'delete']) !!}
            {!! Form::submit('お誘い済み', ['class' => "btn btn-warning btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.invite', $user]]) !!}
            {!! Form::submit('誘う！', ['class' => "btn btn-info btn-block"]) !!}
        {!! Form::close() !!}
    @endif
    
@endif
