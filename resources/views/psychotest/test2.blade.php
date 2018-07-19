@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'test2.take2']) !!}
  <table class="table table-hover">
        
    <tr>
   <th> <h4>いま何食べたい気分？</h4></th>
    <th><label><input type="radio" name="q1" id="radio1" value="0">中華 </label></th>
    <th><label><input type="radio" name="q1" id="radio1" value="5">イタリアン</label></th>
    <th><label><input type="radio" name="q1" id="radio1" value="10">和食</label></th>
    <th><label><input type="radio" name="q1" id="radio1" value="15" >飲み</label></th>
    </tr>
   
    </table>
   

  {!! Form::submit('同じ気分の人を見てみよう！', ['class' => 'btn btn-primary btn-block']) !!}
  {!! Form::close() !!}


@endsection
