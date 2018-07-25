@extends('layouts.app')

@section('content')


<div class="text-center">
    <img src='images/panda1.jpg' width=700px;><br><br>
    {!! Form::open(['route' => 'food.store']) !!}
    <div style="font-size:20pt; display:inline-block;">いま何食べたい気分？</div>
        {{Form::select('age',  [
            '1' => '中華',
            '2' => 'イタリアン',
            '3' => '和食',
            '4' => '飲み'], null, ['class' => 'btn btn-default input-lg dropdown-toggle']
        )}}
        <br><br><br><br><br><br>
        {!! Form::submit('同じ気分の人を見てみよう！', ['class' => 'btn btn-lg btn-warning']) !!}
        {!! Form::close() !!}
</div> 
@endsection
