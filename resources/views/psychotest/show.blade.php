@extends('layouts.app')

@section('content')
  
     
        　<div class="text-center">
            　<h1>結果</h1>
    　　　</div>
    　</div>
    
            <div class="text-center">
                <h1>あなたの寂しさ度は{{$result}}点！！！！</h1>
        </div>
    </div>
    
    
<div class="container">
        <div class="d-block col-sm-5">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                    おすすめのコンテンツ
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                      <li><a href="#">友達リクエストが1件あります</a></li>
                      <li><a href="#">メッセージが3件届いています</a></li>
                      <li><a href="#">今日開催のイベントがあります</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="result">
        <div class="d-block col-sm-offset-2 col-sm-5"> 
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        心理テストの詳細結果
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li><a href="#">友達リクエストが1件あります</a></li>
                        <li><a href="#">メッセージが3件届いています</a></li>
                        <li><a href="#">今日開催のイベントがあります</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <button class="btn btn-success btn-lg" type="submit">購入したい方はこちら！</button>
</div>
@endsection