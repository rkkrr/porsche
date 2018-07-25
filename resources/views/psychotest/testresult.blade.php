<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="{{ secure_asset('css/testresult.css') }}">
@extends('layouts.app')

@section('content')

    <div class='title'>
        <h1>診断結果は全部で5種類あるよ！</h1>
    </div>

<div class = 'container','d-block col-sm-offset-4 col-sm-4'>
    <div class ='hako1'>
        <div class ='box1'>
         <span class="box-title">Lv.5</span>
        <img src="images/hamster.png" style='width:250px;'>
        <h2>ハムスタータイプ</h2>
        </div>
        
        <div class ='box2'>
         <p>なかなかの寂しがり屋さん、、、。<br>友達をぜひ誘ってみような！</p>
        </div>
    </div>
    
    <div class ='hako2'>
        
        <div class='box3'>
          <span class="box-title">Lv.4</span>
         <img src="images/sheep image.jpg" style='width:250px;'>  
         <h2>ひつじタイプ</h2>
        </div>
        
        <div class='box4'>
        <p>やっぱり少し寂しいみたい。<br>おすすめコンテンツで寂しさを癒されてね。</p>
        </div>
        
    </div>
    <div class ='hako3'>
        
        <div class='box5'>
          <span class="box-title">Lv.3</span>
          <img src="images/deer image.jpg" style='width:250px;'>
          <h2>こじかタイプ</h2>
        </div>
        
        <div class='box6'>
          <p>たまに寂しい時もあるのかな？<br>みんなでいる時の会話の糸口になるコンテンツが見つかりますよーに★</p> 
        </div>
    </div>
    
     <div class ='hako4'>
         
        <div class ='box7'>
         <span class="box-title">Lv.2</span>
         <img src="images/ookami.png" style='width:250px;'>
         <h2>おおかみタイプ</h2>
        </div>
        
        <div class ='box8'>
         <p>基本的には寂しくないおおかみさん！<br>一人の時間は癒しグッズでのんびりしてみてね。</p>
        </div>
    </div>
    
     <div class ='hako5'>
         
        <div class ='box9'>
         <span class="box-title">Lv.1</span>
　　　　<img src="images/houou.png" style='width:250px;'>
        <h2>鳳凰タイプ</h2>
        </div>
        
        <div class ='box10'>
        <p>寂しくても寂しくなくても、<br>その時の気分でこのサイトを利用してみて☆彡</p>
        </div>
    </div>
</div>
