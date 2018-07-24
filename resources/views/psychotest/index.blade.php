<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="{{ secure_asset('css/index.css') }}">
 
@extends('layouts.app')

@section('content')

<br>
<br>
                    <h3 class="top-title">今の気分をえらんでね。</h3>
    <div class="d-block col-sm-offset-1 col-sm-5"> 
        <div class="center background">
            
            <img src='images/alone_panda_image.jpg' style='width:445px;'>
        </div>
        <div class="panel panel-warning">
            <div class="text-center">
                <div class="text-center">
                    <div class="square_btn">
                        <a href="test">ひとりで！</a>
                    </div>     
                </div>
            </div>
        </div>
    </div>
        
    <div class="d-block col-sm-5"> 
        <div class="center background">
            <img src='images/party_panda_image.jpg' style='width:445px;'>
        </div>
        <div class="panel panel-warning">
            <div class="text-center">
                <div class="text-center">
                    <div class ="square_btn">
                        <a href="test2">みんなと！</a>
                    </div>     
                </div>
            </div>
        </div>
    </div>
@endsection
