@if (Auth::id() != $user->id)
    @if (Auth::user()->is_inviting($user->id))
        {!! Form::open(['route' => ['user.uninvite', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('お誘い済み', ['class' => "btn btn-warning d-inline-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.invite', $user->id]]) !!}
            {!! Form::submit('誘う！', ['class' => "btn btn-info d-inline-block"]) !!}
        {!! Form::close() !!}
    @endif
    
@endif
