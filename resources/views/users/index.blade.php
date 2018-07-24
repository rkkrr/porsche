@extends('layouts.app')

@section('content')
    @include('users.users', ['users' => $users])$users = User::paginate(10);
        
        return view('users.index', [
            'users' => $users,
        ]);
@endsection