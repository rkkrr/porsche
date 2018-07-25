<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="{{ secure_asset('css/result.css') }}">
 @extends('layouts.app')
 
 @section('content')
<?php
 $user = Auth::user();
?>
<br>
    <div class="text-center">
       <h3>あなたと同じものを食べたい同期は・・・？</h3>
    </div>
        <br>
        <div class="douki col-sm-offset-5">
            @foreach ($foods as $food)
                <table class="food-douki">
                    <td>{{$food->user->name}}</td>
                    <td>@include('commons.invite_button', ['user' => $food->user])</td>
                </table>
            @endforeach
        
    </div>
        <br><br><br><br><br>
        <div class="ribbon">
            <strong><h3>そんなあなたへのオススメ</h3></strong>
        </div>
<br><br>
<div class="row">
    <div class="d-inline-block col-sm-offset-1 col-sm-5">
        <div class="move_center"> 
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">レストラン</h3>
                </div>
                <div class="panel-body">
                @include ('psychotest.restaurant2') 
                </div>
            </div>
        </div>
    </div>
        
    <div class="d-block  col-sm-5">
        <div class="move_center">
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
</div>
<br><br><br><br><br><br><br>


@endsection
</html>