@extends('layouts.app')

@section('content')

{!! Form::open(['route' => 'answer.store']) !!}
    <p>Q1、あなたは孤独を感じますか？</p>
    <label><input type="radio" name="q1" id="radio1" value="3">とても感じる </label>
    <label><input type="radio" name="q1" id="radio1" value="2" >どちらともいえない </label>
    <label><input type="radio" name="q1" id="radio1" value="1" > 全く感じない</label>

    <p>Q2、今の気分はいかがですか？</p>
  <label><input type="radio" name="q2" id="radio2" value="3">good </label>
  <label><input type="radio" name="q2" id="radio2" value="2" >so so </label>
  <label><input type="radio" name="q2" id="radio2" value="1" > bad</label>

    <p>Q3、実家に帰りたいと思いますか？</p>
  <label><input type="radio" name="q3" id="radio3" value="3">とても感じる </label>
  <label><input type="radio" name="q3" id="radio3" value="2" >どちらともいえない </label>
  <label><input type="radio" name="q3" id="radio3" value="1" > 全く感じない</label>
  {!! Form::submit('送信！', ['class' => 'btn btn-primary btn-block']) !!}
{!! Form::close() !!}



<br>
 <button class="btn btn-success btn-lg">
     <a href="result">あなたの孤独度は...</a></button>
@endsection