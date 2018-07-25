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
                     <?php
                        $results = $data->foodtype;
                        $restaurant = rand(1,3);
                        if($results == 1){
                            if($restaurant == 1){?>
                            <img src='images/Restaurant/chinese1.jpg' style='width:250px;'>
                            <h3>渋谷　南翔饅頭店</h3><?php
                            ;}
                            else if($restaurant == 2){?>
                            <img src='images/Restaurant/chinese2.jpg' style='width:250px;'>
                            <h3>渋谷　タイガー餃子会館</h3><?php
                            ;}
                            else {?>
                            <img src='images/Restaurant/chinese3.jpg' style='width:250px;'>
                            <h3>三軒茶屋 燕来香 </h3><?php
                            ;}}
                        elseif($results == 2){
                            if($restaurant == 1){?>
                            <img src='images/Restaurant/shinjukutelase.png' style='width:250px;'>
                            <h3>新宿　チーズの店、新宿テラス</h3><?php
                            ;}
                            elseif($restaurant == 2){?>
                            <img src='images/Restaurant/sppakanapoli.png' style='width:250px;'>
                            <h3>新宿　スパッカナポリ</h3><?php
                            }
                            else {?>
                            <img src='images/Restaurant/gyozafondue.jpg' style='width:250px;'>
                            <h3>渋谷　餃子フォンデュ</h3><?php
                            }}
                            
                        elseif($results == 3){
                            if($restaurant == 1){?>
                            <img src='images/Restaurant/imai-lunch.jpg' style='width:250px;'>
                            <h3>中目黒　今井</h3><?php
                            }
                            elseif($restaurant == 2){?>
                            <img src='images/Restaurant/s_0nbp.jpg' style='width:250px;'>
                            <h3>浅草　みそら屋</h3><?php
                            }
                            else {?>
                            <img src='images/Restaurant/s_0nbp.jpg' style='width:250px;'>
                            <h3>浅草　kamotowine to and be yourserf.</h3><?php
                            }}
                            
                        else{
                            if($restaurant == 1){?>
                            <img src='images/Restaurant/izakaya1.jpg' style='width:250px;'>
                            <h3>二子玉川　あひるの台所</h3><?php
                            }
                            elseif($restaurant == 2){?>
                            <img src='images/Restaurant/izakaya2.jpg' style='width:250px;'>
                            <h3>渋谷　バッハ</h3><?php
                            }
                            else {?>
                            <img src='images/Restaurant/izakaya3.jpg' style='width:250px;'>
                            <h3>新宿　ゴールデン街</h3><?php
                            }}
                             ?>
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
</div>
<br><br><br><br><br><br><br>


@endsection
</html>