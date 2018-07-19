@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'answer.store']) !!}
  <table class="table table-hover">
    <tr>
    <th><h4><label>質問項目 </label></h4></th>
    <th><label>とても感じる </label></th>
    <th><label>どちらともいえない </label></th>
    <th><label>全く感じない</label></th>
    </tr>
        
    </tr>
    <tr>
   <th> <h4>Q1、誰かが自分の生き方を理解してくれると思う。</h4></th>
    <th><label><input type="radio" name="q1" id="radio1" value="0"> </label></th>
    <th><label><input type="radio" name="q1" id="radio1" value="10"checked></label></th>
    <th><label><input type="radio" name="q1" id="radio1" value="20" ></label></th>
    </tr>
    
     <tr>
    <th><h4>Q2、人間は互いに相手の気持ちを分かり合えると思う。</h4></th>
　　<th><label><input type="radio" name="q2" id="radio2" value="0"> </label></th>
    <th><label><input type="radio" name="q2" id="radio2" value="10"checked></label></th>
    <th><label><input type="radio" name="q2" id="radio2" value="20" ></label></th>
    </tr>
    
    <tr>
    <th><h4>Q3、悩んでいる時、慰めてくれる人がいる。</h4></th>
 　<th><label><input type="radio" name="q3" id="radio3" value="5"> </label></th>
    <th><label><input type="radio" name="q3" id="radio3" value="3"checked></label></th>
    <th><label><input type="radio" name="q3" id="radio3" value="1" ></label></th>
    </tr>
    
    <tr>
    <th><h4>Q4、もっと人にやさしくされてもいいと思う。</h4></th>
 　 <th><label><input type="radio" name="q4" id="radio4" value="5"> </label></th>
    <th><label><input type="radio" name="q4" id="radio4" value="3"checked></label></th>
    <th><label><input type="radio" name="q4" id="radio4" value="1" ></label></th>
    </tr>
    
    <tr>
    <th><h4>Q5、親身に相談相手になってくれる人はいないと思う。</h4></th>
　　<th><label><input type="radio" name="q5" id="radio5" value="5"> </label></th>
    <th><label><input type="radio" name="q5" id="radio5" value="3"checked></label></th>
    <th><label><input type="radio" name="q5" id="radio5" value="1" ></label></th>
    </tr>
    
    <tr>
    <th><h4>Q6、私の考えや感情を誰もわかってくれないと思う。</h4></th>
　　<th><label><input type="radio" name="q6" id="radio6" value="20"> </label></th>
    <th><label><input type="radio" name="q6" id="radio6" value="10"checked></label></th>
    <th><label><input type="radio" name="q6" id="radio6" value="0" ></label></th>
    </tr>
    
    <tr>
    <th><h4>Q7、人の気持ちを理解することはできないことだと思う。</h4></th>
　　<th><label><input type="radio" name="q7" id="radio7" value="20"> </label></th>
    <th><label><input type="radio" name="q7" id="radio7" value="10"checked></label></th>
    <th><label><input type="radio" name="q7" id="radio7" value="0" ></label></th>
    </tr>
    
    <tr>
   <th> <h4>Q8、人と喜びを分かち合いたい。</h4></th>
　　<th><label><input type="radio" name="q8" id="radio8" value="5"> </label></th>
    <th><label><input type="radio" name="q8" id="radio8" value="3"checked></label></th>
    <th><label><input type="radio" name="q8" id="radio8" value="1" ></label></th>
    </tr>
    
    <tr>
   <th> <h4>Q9、ひとりでいるよりも大勢で出かけるのが好きだ。</h4></th>
　　<th><label><input type="radio" name="q9" id="radio9" value="5"> </label></th>
    <th><label><input type="radio" name="q9" id="radio9" value="3"checked></label></th>
    <th><label><input type="radio" name="q9" id="radio9" value="1" ></label></th>
    </tr>
    
    <tr>
    <th><h4>Q10、私と全く同じ考えや感情を持っている人が、必ずどこかにいると思う。</h4></th>
　　<th><label><input type="radio" name="q10" id="radio10" value="0"> </label></th>
    <th><label><input type="radio" name="q10" id="radio10" value="10"checked></label></th>
    <th><label><input type="radio" name="q10" id="radio10" value="20" ></label></th>
    </tr>
    
    <tr>
    <th><h4>Q11、結局、人間は一人で生きていくことを運命づけられていると思う。</h4></th>
　　<th><label><input type="radio" name="q11" id="radio11" value="20"> </label></th>
    <th><label><input type="radio" name="q11" id="radio11" value="10"checked></label></th>
    <th><label><input type="radio" name="q11" id="radio11" value="0" ></label></th>
    </tr>
    <tr>
    &nbsp;
    </tr>  
    
     <tr>
    <th><h4><label> </label></h4></th>
    <th><label> </label></th>
    <th><h4><label>映画 </label></h4></th>
    <th><label> </label></th>
    <th><h4><label>本</label></h4></th>
    <th><label></label></th>
    </tr>
        
    
    <tr>
     <th><h4>Q12、あなたは映画と本ならどちらが好きですか？</h4></th>
     <th><label> </label></th>
     <th><label><input type="radio" name="q12" id="radio12" value="1"></label></th>
     <th><label> </label></th>
     <th><label><input type="radio" name="q12" id="radio12" value="2"></label></th>
     <th><label> </label></th>
    </tr>
    
     <tr>
    &nbsp;
    </tr>  
    </table>
    
    
   

  {!! Form::submit('あなたの孤独度は…！', ['class' => 'btn btn-primary btn-block']) !!}
  {!! Form::close() !!}
  


@endsection
