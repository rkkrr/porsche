@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'food.store']) !!}
  <table class="table table-hover">
        
    <tr>
   <th> <h4>いま何食べたい気分？</h4></th>
    <th><label><input type="radio" name="food" id="radio13" value="1">中華 </label></th>
    <th><label><input type="radio" name="food" id="radio13" value="2">イタリアン</label></th>
    <th><label><input type="radio" name="food" id="radio13" value="3">和食</label></th>
    <th><label><input type="radio" name="food" id="radio13" value="4" >飲み</label></th>
    </tr>
   
    <br><div style="font-size:20pt; display:inline-block;">いま何食べたい気分？</div>
   
   {{Form::select('age',  [
   '0' => '中華',
   '5' => 'イタリアン',
   '10' => '和食',
   '15' => '飲み'], null, ['class' => 'btn btn-primary btn-lg dropdown-toggle']
)}}
<br><br><br><br><br><br>
  {!! Form::submit('同じ気分の人を見てみよう！', ['class' => 'btn btn-lg btn-primary']) !!}
  {!! Form::close() !!}
    </div> 
@endsection
