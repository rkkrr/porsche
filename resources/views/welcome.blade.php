@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/welcome.css">


<div class="wrapper">
  <div class="inside">
  </div>
</div>
        
  
   
        <div class="text-center">
            <h1></h1>
 
 
 
 <a href="http://stark-beach-53342.herokuapp.com/signup?" class="square_btn">はじめての方はこちら</a>
        <div class="button1">
           
            {!! link_to_route('signup.get', 'はじめての方はこちら', null, ['class' => 'btn btn-lg btn-primary']) !!}
            
        </div>
        
        
         <a href="http://stark-beach-53342.herokuapp.com/login" class="square_btn">ログイン</a>
        <div class="button2">
    
            {!! link_to_route('login.post', 'ログイン', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    
@endsection
