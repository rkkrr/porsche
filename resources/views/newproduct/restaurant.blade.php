<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="{{ secure_asset('css/result.css') }}">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
 @extends('layouts.app')
 
 @section('content')
<?php
 $user = Auth::user();
?>

 <div class="container">
    <div class="text-center">
       <h3>あなたと同じものを食べたい同期は・・・？</h3>
    </div>
    <br>
    <div class='douki'>
        @foreach ($foods as $food)
            <ul>
                <li>{{$food->user->name}}</li>
                <li>@include('commons.invite_button', ['user' => $food->user])</li>
            </ul>
        @endforeach
    </div>
        <br><br><br><br><br>
    <div class="result">
        <div class="ribbon">
            <h3>そんなあなたへのオススメ</h3>
        <div class="d-inline-block col-sm-offset-1 col-sm-5"> 
        <div class="panel panel-danger">
        <div class="panel-heading">
        <h3 class="panel-title">レストラン</h3>
        </div>
            <div class="panel-body">
                @include ('psychotest.restaurant2')
            </div>
        </div>
        </div>
    <div class="d-block  col-sm-5">
        <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">レシピ</h3>
        </div>
            <div class="panel-body">
              @include ('psychotest.restaurant3')  
            </div>
             </div>
    </div>
</div>
@endsection
</html>