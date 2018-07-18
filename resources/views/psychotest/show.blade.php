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
                <?php
                     if($result <= 40){ print  'あなたはREIKO MASTERタイプです。' . PHP_EOL; }
                     elseif($result <= 80){ print  'あなたはGINOタイプです。日々いろんな人と飲み歩いているため、一見明るくだれとでも仲良く振舞るように見えますが、ふと我に返り、真の友情とは、本当の人間関係と何か悩むことがあります。悩んだ末に、昔の友達や今の同期など、様々な人と遊んでしまいがちですが、週末など一人の時間も大切です。ラッキーアイテムはブルガリの香水です。自分だけの生き方を見出して、簡単にぶれない人間になりましょう。' . PHP_EOL;  }
                     else{ print  'あなたは七月彦タイプです。' . PHP_EOL;}
                ?> 
                        
                      
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
                <?php
                     if($result <= 40){ print  'あなたはREIKO MASTERタイプです。' . PHP_EOL; }
                     elseif($result <= 80){ print  'あなたはGINOタイプです。日々いろんな人と飲み歩いているため、一見明るくだれとでも仲良く振舞るように見えますが、ふと我に返り、真の友情とは、本当の人間関係と何か悩むことがあります。悩んだ末に、昔の友達や今の同期など、様々な人と遊んでしまいがちですが、週末など一人の時間も大切です。ラッキーアイテムはブルガリの香水です。自分だけの生き方を見出して、簡単にぶれない人間になりましょう。' . PHP_EOL;  }
                     else{ print  'あなたは七月彦タイプです。' . PHP_EOL;}
                ?>
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