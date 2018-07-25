    <link rel="stylesheet" href="{{ secure_asset('css/index.css') }}">
 
@extends('layouts.app')

@section('content')

<br><br>
<div class="text-center">
    <h3 class="top-title">どのように過ごしたいですか？</h3>
</div>
<div class="d-block col-sm-offset-1 col-sm-5"> 
    <div class="box6">
        <div class="center background">
            <img src='images/alone_panda_image.jpg' style='width:415px;'><br><br>
        </div>
        <div class="text-center">
            <div class="square_btn">
                <a href="test">ひとりで！</a>
            </div>
        </div>
    </div>
<br><br></div>

        
<div class="d-block col-sm-5"> 
    <div class="box6">
        <div class="center background">
            <img src='images/party_panda_image.jpg' style='width:415px;'><br><br>
        </div>
        <div class="text-center">
            <div class ="square_btn">
                <a href="test2">みんなと！</a>
            </div>
        </div>
    </div>
<br><br></div>
@endsection
