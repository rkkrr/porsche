@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/welcome.css">

<div class="wrapper">
  <div class="inside">


  </div>
</div>

              
                 
                        <h2>あぷりの説明</h2>
                 
                </div>
        
  
   
        <div class="text-center">
            <h1></h1>
            {!! link_to_route('signup.get', 'はじめての方はこちら', null, ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('login.post', 'ログイン', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    
@endsection
