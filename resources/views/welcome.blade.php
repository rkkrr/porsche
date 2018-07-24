@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/welcome.css">
   
        <div class="text-center">
            <h1></h1>
 
            <div class="col-md-offset-10">
            {!! link_to_route('signup.get', 'はじめての方はこちら', null, ['class' => 'square_btn']) !!}
            </div>
            
            <br><br><br><br>
            
            <div class="col-md-offset-10">
            {!! link_to_route('login.post', 'ログイン', null, ['class' => 'square_btn']) !!}
            </div>
        </div>
    
@endsection
