@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'answer2.store2']) !!}
        
    <h4>いま何食べたい気分？</h4></th>
   
   <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="radio1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" name="q1" value="0">Action</a>
    <a class="dropdown-item" name="q1" value="5">Another action</a>
    <a class="dropdown-item" name="q1" value="10">Something else here</a>
    
  </div>
</div>
    <label><input type="radio" name="q1" id="radio1" value="0">中華 </label></th>
    <label><input type="radio" name="q1" id="radio1" value="5">イタリアン</label></th>
    <label><input type="radio" name="q1" id="radio1" value="10">和食</label></th>
    <label><input type="radio" name="q1" id="radio1" value="15" >飲み</label></th>
   
   

  {!! Form::submit('同じ気分の人を見てみよう！', ['class' => 'btn btn-primary btn-block']) !!}
  {!! Form::close() !!}


@endsection
