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
                 <?php
                    $results = $data->foodtype;
                    $restaurant = rand(1,3);
                    if($results == 0){
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
                    elseif($results == 5){
                        if($restaurant == 1){?>
                        <img src='images/Restaurant/shinjukutelase.jpg' style='width:250px;'>
                        <h3>新宿　チーズの店、新宿テラス</h3><?php
                        ;}
                        elseif($restaurant == 2){?>
                        <img src='images/Restaurant/shinjukutelase.lpg' style='width:250px;'>
                        <h3>新宿　スパッカナポリ</h3><?php
                        }
                        else {?>
                        <img src='images/Restaurant/gyozafondue.jpg' style='width:250px;'>
                        <h3>渋谷　餃子フォンデュ</h3><?php
                        }}
                        
                    elseif($results == 10){
                        if($restaurant == 1){?>
                        <img src='images/Restaurant/imai-lunch.jpg' style='width:250px;'>
                        <h3>中目黒　今井</h3><?php
                        }
                        elseif($restaurant == 2){?>
                        <img src='images/Restaurant/s-0ｎbp.jpg' style='width:250px;'>
                        <h3>浅草　みそら屋</h3><?php
                        }
                        else {?>
                        <img src='images/Restaurant/s-0ｎbp.jpg' style='width:250px;'>
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
    <div class="d-block  col-sm-5">
        <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">レシピ</h3>
        </div>
            <div class="panel-body">
                <?php
                
                    $results = $data->foodtype;
                    $recipe = rand(1,3);
                    if($results == 0){
                        if($recipe == 1){?>
                        <img src='images/dishes/banbanzi-.jpg' style='width:250px;'>
                        <h3>バンバンジー</h3><?php
                        ;}
                        else if($recipe == 2){?>
                        <img src='images/dishes/cha-han.jpg' style='width:250px;'>
                        <h3>チャーハン</h3><?php
                        ;}
                        else {?>
                        <img src='images/dishes/hoiko-ro-.jpg' style='width:250px;'>
                        <h3>ホイコーロー</h3><?php
                        ;}}
                    elseif($results == 5){
                        if($recipe == 1){?>
                        <img src='images/dishes/lasagna.jpg' style='width:250px;'>
                        <h3>ラザニア</h3><?php
                        ;}
                        elseif($recipe == 2){?>
                        <img src='images/dishes/margherita.jpg' style='width:250px;'>
                        <h3>マルゲリータ</h3><?php
                        }
                        else {?>
                        <img src='images/dishes/napolitan.jpg' style='width:250px;'>
                        <h3>ナポリタン</h3><?php
                        }}
                        
                    elseif($results == 10){
                        if($recipe == 1){?>
                        <img src='images/dishes/karei_nitsuke.jpg' style='width:250px;'>
                        <h3>カレイの煮つけ</h3>
                        <?php
                        }
                        elseif($recipe == 2){?>
                        <img src='images/dishes/nikujaga.jpg' style='width:250px;'>
                        <h3>肉じゃが</h3>
                        <?php
                        }
                        else {?>
                        <img src='images/dishes/tonkatsu.jpg' style='width:250px;'>
                        <h3>とんかつ</h3>
                        <?php
                        }}
                        
                    else{
                        if($recipe == 1){?>
                        <img src='images/dishes/edamame.jpg' style='width:250px;'>
                        <h3>えだまめ</h3><?php
                        }
                        elseif($recipe == 2){?>
                        <img src='images/dishes/potatofly.jpg' style='width:250px;'>
                        <h3>ポテトフライ</h3><?php
                        }
                        else {?>
                        <img src='images/dishes/takowasa.jpg' style='width:250px;'>
                        <h3>たこわさ</h3><?php
                        }}
                         ?>
            </div>
             </div>
    </div>
</div>

@endsection
</html>