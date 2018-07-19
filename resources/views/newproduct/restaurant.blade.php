<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="{{ secure_asset('css/result.css') }}">
@extends('layouts.app')

@section('content')

<div class="container">
            <div class="text-center">
        <h1>あなたと同じことしたい同期は・・・？</h1>
       
        <table border="1">
        <tr>
        <th><h1><font face="MS明朝"><strong>同期</strong></font></h1>
        <th><h1><strong>名前</strong></h1></th>
        </tr>
        <tr>
        <th>&nbsp;</th>
        <th>なつひこ @include('commons.invite_button')</th>
        </tr>
        </table>
<br>
<br>
        
<div class="result">
    <h2>そんなあなたへのオススメ</h2>
        <div class="d-block col-sm-5"> 
        <div class="panel panel-danger">
        <div class="panel-heading">
        <h3 class="panel-title">レストラン</h3>
        </div>
            <div class="panel-body">
                <img src="images/restaurant.jpg" />
            </div>
        <h3>One Oak Shibuya</h3>
        </div>
        </div>
    <div class="d-block  col-sm-offset-1 col-sm-5">
        <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">レシピ</h3>
        </div>
            <div class="panel-body">
                <img src="images/recipe.jpg" />
            </div>
        <h3>ホタテと鮭のカルパッチョ</h3>
        </div>
    </div>
</div>
@endsection
</html>