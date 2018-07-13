@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>結果</h1>
        <h1>あなたの寂しさ度は{{$result}}点！！！！</h1>
    </div>
<br>
<div class="container">
<div class="result">
    <div class="d-block col-sm-5"> 
    <div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">心理テストの詳細結果</h3>
    </div>
        <div style="font-size:15pt;">
        <div style="line-height:160%">
        <div class="panel-body">
        <ul class="list-unstyled">
            <?php
                if($result <= 40){ 
                    print  'あなたはReiko Master タイプです。Reiko Masterタイプのあなたは自立していて日々の生活においてさみしさを感じることがほとんどないようです。一人の時間を楽しむことができ、趣味が充実しているようです。自分のスタイルを貫く傾向がありますが、たまには気分を変えて明るい色の服を着て外出してみてはいかがでしょうか。ラッキーアイテムはスシローのおすし。' . PHP_EOL; }
                elseif($result <= 80){
                    print  'あなたはGINOタイプです。日々いろんな人と飲み歩いているため、一見明るくだれとでも仲良く振舞るように見えますが、ふと我に返り、真の友情とは、本当の人間関係と何か悩むことがあります。悩んだ末に、昔の友達や今の同期など、様々な人と遊んでしまいがちですが、週末など一人の時間も大切です。ラッキーアイテムはブルガリの香水です。自分だけの生き方を見出して、簡単にぶれない人間になりましょう。' . PHP_EOL;  }
                else{
                    print  'あなたは七月彦タイプです。普段会社でカラ元気を装ってはいませんか？実は家では孤独感に苛まれ、虚無感から脱することができず、自分の存在に対して少しばかりの疑念を抱いてしまう傾向があるようです。人肌が恋しいものの、素直になれず、心の奥底で常にスキンシップを憧憬しています。この都会には沢山の人々がいますが、不特定多数との希薄なつながりで心を満たすことを今すぐやめ、魂の繋がりを大切にしましょう。ラッキーアイテムは姿見です。' . PHP_EOL;}
            ?>
        </ul>
        </div>
        </div>
        </div>
    </div>
    </div>
</div>
    <div class="d-block  col-sm-offset-1 col-sm-5">
        <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">おすすめのコンテンツ</h3>
        </div>
            <div style="font-size:20pt;">
            <div align="center">    
            <div class="panel-body">
            <ul class="list-unstyled">
                <?php 
                    if($result <= 40){ 
                        if($content == 1){
                ?> 
                
                            <br><span class="glyphicon glyphicon-film" style="font-size: 120px"></span></br>
                
                <?php 
                            print  'The notebook' ;
                            print "<br>";
                            print '激しい恋の物語、何も考えるな、感じろ。' . PHP_EOL;
                        } else{
                ?>  
                
                            <br><span class="glyphicon glyphicon-book" style="font-size: 120px"></span></br>
                
                <?php    
                            print  'スイミー' . PHP_EOL; 
                            print "<br>";
                            print '仲間を失って一人ぼっちのおさかなが、海のさまざまないきものと出会ううちに、勇気をもって踏み出すことを学んでいくお話です。' . PHP_EOL;
                    }}elseif($result <= 80){
                        if($content == 1){
                ?>
                
                            <br><span class="glyphicon glyphicon-film" style="font-size: 120px"></span></br>
                
                <?php
                            print  'Good will hunting' . PHP_EOL; 
                            print "<br>";
                            print '天才的な頭脳を持ちながら喧嘩を繰り返す若者と、彼に数学の才能を見出した教授との交流を通して成長していく過程を描いたヒューマンドラマ。' . PHP_EOL;} 
                         
                        else{
                ?>
                     
                            <br><span class="glyphicon glyphicon-book" style="font-size: 120px"></span></br>
                <?php   
                            print  '嫌われる勇気' . PHP_EOL; 
                            print "<br>";
                            print '世界はシンプルだ、だれもが幸福になれるというアドラー博士の教えを若者との対話形式で読み解く自己啓発本。'. PHP_EOL;
                    }}else{
                        if($content == 1){
                ?>
                    
                            <br><span class="glyphicon glyphicon-film" style="font-size: 120px"></span></br>
                    
                <?php
                            print  'グレイテストショーマン' . PHP_EOL; 
                            print "<br>";
                            print '主人公バーナムはオンリーワンの個性を持つ人々を集めたショーで成功することはできるのか…とにかく明るくなりたい人にオススメ！！' . PHP_EOL;}
                        else{
                ?>
                
                            <br><span class="glyphicon glyphicon-book" style="font-size: 120px"></span></br>
                      
                <?php 
                            print  '深夜特急' . PHP_EOL; 
                            print "<br>";
                            print '“長旅は人間の一生と同等のものである” --インドのデリーからイギリスのロンドンまでの旅を筆者自身の実体験に基づいて執筆した作品。' . PHP_EOL;}}
                ?>
            </ul>
            </div>
            </div>
            </div>
        </div>
    </div>

</div>
<div class="text-center">
    <button class="btn btn-success btn-lg" type="submit">購入したい方はこちら！</button>
</div>
@endsection