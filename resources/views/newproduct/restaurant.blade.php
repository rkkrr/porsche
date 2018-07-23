<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="{{ secure_asset('css/result.css') }}">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
@extends('layouts.app')

@section('content')

<div class="container">
            <div class="text-center">
        <h1>あなたと同じことしたい同期は・・・？</h1>
       
        <table border="1">
        <tr>
        <th><h1><font face="MS明朝"><strong>同期</strong></font></h1>
        <th><h2><strong>名前</strong></h2></th>
        </tr>
        <tr>
        <th>&nbsp;</th>
        <th><h2><strong>なつひこ     @include('commons.invite_button')</strong></h2></th>
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
                 <?php
                    $results = 0;
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
    <div class="d-block  col-sm-offset-1 col-sm-5">
        <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">レシピ</h3>
        </div>
            <div class="panel-body">
                <?php
                    $results = 10;
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
<?php
/*****************************************************************************************
 　ぐるなびWebサービスのレストラン検索APIで緯度経度検索を実行しパースするプログラム
 　注意：緯度、経度、範囲の値は固定で入れています。
 　　　　アクセスキーはユーザ登録時に発行されたキーを指定してください。
*****************************************************************************************/
 
//エンドポイントのURIとフォーマットパラメータを変数に入れる
$uri   = "https://api.gnavi.co.jp/RestSearchAPI/20150630/";
//APIアクセスキーを変数に入れる
$acckey= "	
9e1e75a5a9d5f15e6c27fa6d681e3e60";
//返却値のフォーマットを変数に入れる
$format= "json";
//緯度・経度、範囲を変数に入れる
//緯度経度は日本測地系で日比谷シャンテのもの。範囲はrange=1で300m以内を指定している。
$lat   = 35.612783;
$lon   = 139.626772;
$range = 2;
 
//URL組み立て
$url  = sprintf("%s%s%s%s%s%s%s%s%s%s%s", $uri, "?format=", $format, "&keyid=", $acckey, "&latitude=", $lat,"&longitude=",$lon,"&range=",$range);
//API実行
$json = file_get_contents($url);
//取得した結果をオブジェクト化
$obj  = json_decode($json);
 
//結果をパース
//トータルヒット件数、店舗番号、店舗名、最寄の路線、最寄の駅、最寄駅から店までの時間、店舗の小業態を出力
foreach((array)$obj as $key => $val){
   if(strcmp($key, "total_hit_count" ) == 0 ){
       echo "total:".$val."\n";
   }
 
   if(strcmp($key, "rest") == 0){
       foreach((array)$val as $restArray){
            if(checkString($restArray->{'id'}))   echo $restArray->{'id'}."\t";
            if(checkString($restArray->{'name'})) echo $restArray->{'name'}."\t";
            if(checkString($restArray->{'access'}->{'line'}))    echo (string)$restArray->{'access'}->{'line'}."\t";
            if(checkString($restArray->{'access'}->{'station'})) echo (string)$restArray->{'access'}->{'station'}."\t";
            if(checkString($restArray->{'access'}->{'walk'}))    echo (string)$restArray->{'access'}->{'walk'}."分\t";
 
            foreach((array)$restArray->{'code'}->{'category_name_s'} as $v){
                if(checkString($v)) echo $v."\t";
            }
            echo "\n";
       }
 
   }
}
 
//文字列であるかをチェック
function checkString($input)
{
    if(isset($input) && is_string($input)) {
        return true;
    }else{
        return false;
    }
}

?>


@endsection
</html>