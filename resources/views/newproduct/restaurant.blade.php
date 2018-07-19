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
        <th><h1>同期</h1><th>
        </th>
        <th><h1>名前</h1></th>
        </tr>
        </table>
        
        
<div class="result">
    <h2>そんなあなたへのオススメ</h2>
    <div class="d-block col-sm-5"> 
    <div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">レストラン</h3>
    </div>
    </div>
    </div>
    <div class="d-block  col-sm-offset-1 col-sm-5">
        <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">レシピ</h3>

    </div>
</div>
@endsection
</html>