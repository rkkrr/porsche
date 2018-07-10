@extends('layouts.app')

@section('content')

{!! Form::open(['route' => 'answer.store']) !!}
<div class="table-responsive">
  <table class="table table-hover">
    <tr>
   <th> <h4>Q1、私は私の生き方を誰かが理解してくれると思う。</h4></th>
    <th><label><input type="radio" name="q1" id="radio1" value="5">とても感じる </label></th>
    <th><label><input type="radio" name="q1" id="radio1" value="4">少し感じる </label></th>
    <th><label><input type="radio" name="q1" id="radio1" value="3">どちらともいえない </label></th>
    <th><label><input type="radio" name="q1" id="radio1" value="2" > あまり感じない</label></th>
    <th><label><input type="radio" name="q1" id="radio1" value="1" > 全く感じない</label></th>
    </tr>
    
     <tr>
    <th><h4>Q2、人間は、互いに相手の気持ちを分かり合えると思う。</h4></th>
    <th><label><input type="radio" name="q2" id="radio1" value="5">とても感じる </label></th>
    <th><label><input type="radio" name="q2" id="radio1" value="4">少し感じる </label></th>
    <th><label><input type="radio" name="q2" id="radio1" value="3">どちらともいえない </label></th>
    <th><label><input type="radio" name="q2" id="radio1" value="2" > あまり感じない</label></th>
    <th><label><input type="radio" name="q2" id="radio1" value="1" > 全く感じない</label></th>
    </tr>
    
    <tr>
    <th><h4>Q3、悩んでいる時、慰めてくれる人が私にはいる。</h4></th>
    <th><label><input type="radio" name="q3" id="radio1" value="5">とても感じる </label></th>
    <th><label><input type="radio" name="q3" id="radio1" value="4">少し感じる </label></th>
    <th><label><input type="radio" name="q3" id="radio1" value="3">どちらともいえない </label></th>
    <th><label><input type="radio" name="q3" id="radio1" value="2" > あまり感じない</label></th>
    <th><label><input type="radio" name="q3" id="radio1" value="1" > 全く感じない</label></th>
    </tr>
    
    <tr>
    <th><h4>Q4、自分の課題は、最後は、自分で解決しなくてはならないのだと思う。</h4></th>
    <th><label><input type="radio" name="q4" id="radio1" value="5">とても感じる </label></th>
    <th><label><input type="radio" name="q4" id="radio1" value="4">少し感じる </label></th>
    <th><label><input type="radio" name="q4" id="radio1" value="3">どちらともいえない </label></th>
    <th><label><input type="radio" name="q4" id="radio1" value="2" > あまり感じない</label></th>
    <th><label><input type="radio" name="q4" id="radio1" value="1" > 全く感じない</label></th>
    </tr>
    
    <tr>
    <th><h4>Q5、私のことに親身に相談相手になってくれる人はいないと思う。</h4></th>
    <th><label><input type="radio" name="q5" id="radio1" value="5">とても感じる </label></th>
    <th><label><input type="radio" name="q5" id="radio1" value="4">少し感じる </label></th>
    <th><label><input type="radio" name="q5" id="radio1" value="3">どちらともいえない </label></th>
    <th><label><input type="radio" name="q5" id="radio1" value="2" > あまり感じない</label></th>
    <th><label><input type="radio" name="q5" id="radio1" value="1" > 全く感じない</label></th>
    </tr>
    
    <tr>
    <th><h4>Q6、私の考えや感情を誰もわかってくれないと思う。</h4></th>
    <th><label><input type="radio" name="q6" id="radio1" value="5">とても感じる </label></th>
    <th><label><input type="radio" name="q6" id="radio1" value="4">少し感じる </label></th>
    <th><label><input type="radio" name="q6" id="radio1" value="3">どちらともいえない </label></th>
    <th><label><input type="radio" name="q6" id="radio1" value="2" > あまり感じない</label></th>
    <th><label><input type="radio" name="q6" id="radio1" value="1" > 全く感じない</label></th>
    </tr>
    
    <tr>
    <th><h4>Q7、人の気持ちを理解することはできないことだと思う。</h4></th>
    <th><label><input type="radio" name="q7" id="radio1" value="5">とても感じる </label></th>
    <th><label><input type="radio" name="q7" id="radio1" value="4">少し感じる </label></th>
    <th><label><input type="radio" name="q7" id="radio1" value="3">どちらともいえない </label></th>
    <th><label><input type="radio" name="q7" id="radio1" value="2" > あまり感じない</label></th>
    <th><label><input type="radio" name="q7" id="radio1" value="1" > 全く感じない</label></th>
    </tr>
    
    <tr>
   <th> <h4>Q8、人と一緒に喜びや悩みを分かち合うことなどできないと思う。</h4></th>
    <th><label><input type="radio" name="q8" id="radio1" value="5">とても感じる </label></th>
    <th><label><input type="radio" name="q8" id="radio1" value="4">少し感じる </label></th>
    <th><label><input type="radio" name="q8" id="radio1" value="3">どちらともいえない </label></th>
    <th><label><input type="radio" name="q8" id="radio1" value="2" > あまり感じない</label></th>
    <th><label><input type="radio" name="q8" id="radio1" value="1" > 全く感じない</label></th>
    </tr>
    
    <tr>
   <th> <h4>Q9、私はひとりぼっちではないと思う。</h4></th>
    <th><label><input type="radio" name="q9" id="radio1" value="5">とても感じる </label></th>
    <th><label><input type="radio" name="q9" id="radio1" value="4">少し感じる </label></th>
    <th><label><input type="radio" name="q9" id="radio1" value="3">どちらともいえない </label></th>
    <th><label><input type="radio" name="q9" id="radio1" value="2" > あまり感じない</label></th>
    <th><label><input type="radio" name="q9" id="radio1" value="1" > 全く感じない</label></th>
    </tr>
    
    <tr>
    <th><h4>Q10、私と全く同じ考えや感情を持っている人が、必ずどこかにいると思う。</h4></th>
    <th><label><input type="radio" name="q10" id="radio1" value="5">とても感じる </label></th>
    <th><label><input type="radio" name="q10" id="radio1" value="4">少し感じる </label></th>
    <th><label><input type="radio" name="q10" id="radio1" value="3">どちらともいえない </label></th>
    <th><label><input type="radio" name="q10" id="radio1" value="2" > あまり感じない</label></th>
    <th><label><input type="radio" name="q10" id="radio1" value="1" > 全く感じない</label></th>
    </tr>
    
    <tr>
    <th><h4>Q11、結局、人間は、一人で生きられるように運命づけられていると思う。</h4></th>
    <th><label><input type="radio" name="q11" id="radio1" value="5">とても感じる </label></th>
    <th><label><input type="radio" name="q11" id="radio1" value="4">少し感じる </label></th>
    <th><label><input type="radio" name="q11" id="radio1" value="3">どちらともいえない </label></th>
    <th><label><input type="radio" name="q11" id="radio1" value="2" > あまり感じない</label></th>
    <th><label><input type="radio" name="q11" id="radio1" value="1" > 全く感じない</label></th>
    </tr>
    
  </table>
  </div>
    

    
    
  {!! Form::submit('あなたの孤独度は…！', ['class' => 'btn btn-primary btn-block']) !!}
  
  
  
{!! Form::close() !!}

@endsection
