@extends('layouts.app')

@section('content')
 @if (Auth::check())
<<<<<<< HEAD
        <?php 
        $user = Auth::user(); 
        return view ('/home');
        ?>
        
=======
    <div class="d-block col-sm-offset-1 col-sm-5"> 
        <div class="center background">
            <img src='images/alone_panda_image.jpg' style='width:445px;'>
        </div>
        <div class="jumbotron">
            <div class="text-center">
                <div class="text-center">
                    <div class="btn btn-warning btn-lg">
                        <a href="test">一人で過ごしたいあなたはこちら！！</a>
                    </div>     
                </div>
            </div>
        </div>
    </div>
        
    <div class="d-block col-sm-5"> 
        <div class="center background">
            <img src='images/party_panda_image.jpg' style='width:445px;'>
        </div>
        <div class="jumbotron">
            <div class="text-center">
                <div class="text-center">
                    <div class ="btn btn-lg btn-warning">
                        <a href="test2">みんなと過ごしたいあなたはこちら！！</a>
                    </div>     
                </div>
            </div>
        </div>
    </div>

>>>>>>> 752c7bc7e4356ee6e476e41bc8bb9d41e256631e
    @else
    
        <div class="text-center">
            <h1></h1>
            {!! link_to_route('signup.get', 'はじめての方はこちら', null, ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('login.post', 'ログイン', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    @endif
@endsection
