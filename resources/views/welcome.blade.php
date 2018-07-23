@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/welcome.css">
<<<<<<< HEAD

<div class="wrapper">
  <div class="inside">


  </div>
</div>
                </div>
        
  
   
        <div class="text-center">
            <h1></h1>
=======
 
 
 
 <a href="http://stark-beach-53342.herokuapp.com/signup?" class="square_btn">はじめての方はこちら</a>
        <div class="button1">
           
>>>>>>> b808f91ebbaa36f7c7e7e35d0cbb1ed14ef66336
            {!! link_to_route('signup.get', 'はじめての方はこちら', null, ['class' => 'btn btn-lg btn-primary']) !!}
            
        </div>
        
        
         <a href="http://stark-beach-53342.herokuapp.com/login" class="square_btn">ログイン</a>
        <div class="button2">
    
            {!! link_to_route('login.post', 'ログイン', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    
@endsection
