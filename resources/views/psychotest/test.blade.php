@extends('layouts.app')

@section('content')

<div class="q1">
    <p>Q1、あなたは孤独を感じますか？</p>
        <label><input type="radio" name="q1" id="radio1" value="3">とても感じる </label>
        <label><input type="radio" name="q1" id="radio1" value="2" >どちらともいえない </label>
        <label><input type="radio" name="q1" id="radio1" value="1" > 全く感じない</label>
</div>

<div class="q2">
    <p>Q2、今の気分はいかがですか？</p>
  <label><input type="radio" name="q2" id="radio2" value="3">good </label>
  <label><input type="radio" name="q2" id="radio2" value="2" >so so </label>
  <label><input type="radio" name="q2" id="radio2" value="1" > bad</label>
</div>

<div class="q3">
    <p>Q3、実家に帰りたいと思いますか？</p>
  <label><input type="radio" name="q3" id="radio3" value="3">とても感じる </label>
  <label><input type="radio" name="q3" id="radio3" value="2" >どちらともいえない </label>
  <label><input type="radio" name="q3" id="radio3" value="1" > 全く感じない</label>
</div>

 <button class="btn btn-success btn-lg">
     <a href="result">あなたの孤独度は...</a></button>














@endsection