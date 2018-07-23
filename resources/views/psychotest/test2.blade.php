@extends('layouts.app')

@section('content')


<div class="text-center">
    <img src='images/panda1.jpg' width=700px;>
    {!! Form::open(['route' => 'food.store']) !!}
    <br>
    <div style="font-size:20pt; display:inline-block;">いま何食べたい気分？</div>
   {{Form::select('age',  [
     '0' => '中華',
     '5' => 'イタリアン',
     '10' => '和食',
     '15' => '飲み'], null, ['class' => 'custom-select custom-select-lg mb-3']
  )}}
  <br><br><br><br><br><br>
  {!! Form::submit('同じ気分の人を見てみよう！', ['class' => 'btn btn-lg btn-primary']) !!}
  {!! Form::close() !!}
    </div> 
</div>
@endsection
