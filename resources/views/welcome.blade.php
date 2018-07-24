@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/welcome.css">
   
        <div class="text-center">
 
            <div class="col-md-offset-10">
                
            {!! link_to_route('signup.get', 'はじめての方はこちら', null, ['class' => 'cp_btn']) !!}            </div>
            </div>
            <br><br><br><br>
            <div class="col-md-offset-10">
            {!! link_to_route('login.post', 'ログイン', null, ['class' => 'cp_btn']) !!}
            </div>
        </div>
    
@endsection
