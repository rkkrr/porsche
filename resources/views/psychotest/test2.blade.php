@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'answer2.store2']) !!}
  <table class="table table-hover">
        
    <tr>
   <th> <h4>いま何食べたい気分？</h4></th>
    <th><label><input type="radio" name="food" id="radio1" value="1">中華 </label></th>
    <th><label><input type="radio" name="food" id="radio1" value="2">イタリアン</label></th>
    <th><label><input type="radio" name="food" id="radio1" value="3">和食</label></th>
    <th><label><input type="radio" name="food" id="radio1" value="4" >飲み</label></th>
    </tr>
   
    </table>
   

  {!! Form::submit('同じ気分の人を見てみよう！', ['class' => 'btn btn-primary btn-block']) !!}
  {!! Form::close() !!}


@endsection
