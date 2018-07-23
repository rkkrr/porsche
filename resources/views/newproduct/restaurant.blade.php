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
        <th><h1><strong>名前</strong></h1></th>
        </tr>
        <tr>
        <th>&nbsp;</th>
        <th>なつひこ     @include('commons.invite_button')  </th>
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
                        <img src='images/restaurant.jpg' style='width:250px;'><?php
                        ;}
                        else if($restaurant == 2){?>
                        <img src='images/raising.jpg' style='width:250px;'><?php
                        ;}
                        else {?>
                        <img src='images/ookami.jpg' style='width:250px;'><?php
                        ;}}
                    elseif($results == 5){
                        if($restaurant == 1){?>
                        <img src='images/children.jpg' style='width:250px;'><?php
                        ;}
                        elseif($restaurant == 2){?>
                        <img src='images/panda1.jpg' style='width:250px;'><?php
                        }
                        else {?>
                        <img src='images/ookami.jpg' style='width:250px;'><?php
                        }}
                        
                    elseif($results == 10){
                        if($restaurant == 1){?>
                        <img src='images/deer image.jpg' style='width:250px;'><?php
                        }
                        elseif($restaurant == 2){?>
                        <img src='images/recipe.jpg' style='width:250px;'><?php
                        }
                        else {?>
                        <img src='images/ghamster.jpg' style='width:250px;'><?php
                        }}
                        
                    else{
                        if($restaurant == 1){?>
                        <img src='images/restaurant.jpg' style='width:250px;'><?php
                        }
                        elseif($restaurant == 2){?>
                        <img src='images/raising.jpg' style='width:250px;'><?php
                        }
                        else {?>
                        <img src='images/ookami.jpg' style='width:250px;'><?php
                        }}
                         ?>
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
                <?php
                    $results = 10;
                    $recipe = rand(1,3);
                    if($results == 0){
                        if($recipe == 1){?>
                        <img src='images/restaurant.jpg' style='width:250px;'><?php
                        ;}
                        else if($recipe == 2){?>
                        <img src='images/raising.jpg' style='width:250px;'><?php
                        ;}
                        else {?>
                        <img src='images/ookami.jpg' style='width:250px;'><?php
                        ;}}
                    elseif($results == 5){
                        if($recipe == 1){?>
                        <img src='images/children.jpg' style='width:250px;'><?php
                        ;}
                        elseif($recipe == 2){?>
                        <img src='images/panda1.jpg' style='width:250px;'><?php
                        }
                        else {?>
                        <img src='images/ookami.jpg' style='width:250px;'><?php
                        }}
                        
                    elseif($results == 10){
                        if($recipe == 1){?>
                        <img src='images/Restaurant/chinese1.jpg' style='width:250px;'>
                        <h3>渋谷　南翔饅頭店</h3>
                        <?php
                        }
                        elseif($recipe == 2){?>
                        <img src='images/Restaurant/chinese2.jpg' style='width:250px;'>
                        <h3>渋谷　タイガー餃子会館</h3>
                        <?php
                        }
                        else {?>
                        <img src='images/Restaurant/chinese3.jpg' style='width:250px;'>
                        <h3> 燕来香 </h3>
                        <?php
                        }}
                        
                    else{
                        if($recipe == 1){?>
                        <img src='images/restaurant.jpg' style='width:250px;'><?php
                        }
                        elseif($recipe == 2){?>
                        <img src='images/raising.jpg' style='width:250px;'><?php
                        }
                        else {?>
                        <img src='images/ookami.jpg' style='width:250px;'><?php
                        }}
                         ?>
            </div>
             </div>
    </div>
</div>
@endsection
</html>