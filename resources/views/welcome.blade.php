@extends('layouts.app')

@section('content')
 @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
    
        <div class="text-center">
            <h1>Welcome to the Porsche and I hope this group won't have any conflicts.</h1>
            {!! link_to_route('signup.get', '新規登録', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    @endif
@endsection
