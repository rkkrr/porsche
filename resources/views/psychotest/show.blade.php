<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="{{ secure_asset('css/result.css') }}">
@extends('layouts.app')

@section('content')
     
    <div class="text-center d-block">
        <h3> 結果 </h3>
           <br>
          <div class="animal d-block"> 
              <div style="font-size:30pt;">
                <?php
                    if($result <= 25){ 
                        print  'あなたは鳳凰タイプです' . PHP_EOL;
                        ?>
                        <div class="center background">
                            <img src="images/houou.png" style='width:250px;'>
                        </div>   
                    <?php  }
                        
                    else if($result <= 50){ 
                        print  'あなたはおおかみタイプです' . PHP_EOL; 
                         ?>
                        <div class="center background">
                            <img src="images/ookami.png" style='width:250px;'>
                        </div>   
                    <?php }
                    else if($result <= 75){ 
                        print  'あなたはこじかタイプです' . PHP_EOL; 
                         ?>
                        <div class="center background">
                            <img src="images/deer image.jpg" style='width:250px;'>
                        </div>   
                    <?php }
                    else if($result <= 100){ 
                        print  'あなたはひつじタイプです' . PHP_EOL;  
                         ?>
                        <div class="center background">
                            <img src="images/sheep image.jpg" style='width:250px;'>
                        </div>   
                    <?php }
                    else { 
                        print  'あなたはハムスタータイプです' . PHP_EOL;
                     ?>
                        <div class="center background">
                            <img src="images/hamster.png" style='width:250px;'>
                        </div>
                    <?php }
                     ?>
            </div>
        </div>
    </div>
        <br><br>
        
                       
                   
        </div>
        </div>
        
        <br>
        <div class="container1">
        <div class="row">
        <div class="d-block">
            <div class="result">
                <div class="d-block col-sm-offset-1 col-sm-5"> 
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2 class="panel-title">心理テストの詳細結果</h2>
                        </div>
                        <br><br>
                        <div style="font-size:15pt;">
                            <div style="line-height:160%">
                                <div class="panel-body">
                                    <ul class="list-unstyled">
                                    @include('psychotest.result')
                                </ul>
                               <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="d-block col-sm-5">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title">おすすめの映画・本</h2>
                </div>
                <div style="font-size:20pt;">
                    <div align="center">    
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <?php 
                                //鳳凰
                                    if($result <= 25){ 
                                        if($content == 1){
                                ?> 
                                
                                            <br><span class="glyphicon glyphicon-film" style="font-size: 40px"></span></br>
                                
                                <?php 
                                            print "<h2> 'The notebook'</h2>" ;
                                            print "<br>";
                                            print  "<font size = 4px> 激しい恋の物語、何も考えるな、感じろ。 </font>". PHP_EOL;
                                        } else{
                                ?>  
                                
                                            <br><span class="glyphicon glyphicon-book" style="font-size: 40px"></span></br>
                                
                                <?php    
                                            print "<h2> 『スイミー』 </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 4px>仲間を失って一人ぼっちのおさかなが、海のさまざまないきものと出会ううちに、勇気をもって踏み出すことを学んでいくお話です。 </font>". PHP_EOL;
                                    }}
                                //おおかみ
                                    elseif($result <= 50){
                                        if($content == 1){
                                ?>
                                
                                            <br><span class="glyphicon glyphicon-film" style="font-size: 40px"></span></br>
                                
                                <?php
                                            print  "<h2> 'Good will hunting' </h2>"; 
                                            print "<br>";
                                            print "<font size = 4px> 天才的な頭脳を持ちながら喧嘩を繰り返す若者と、彼に数学の才能を見出した教授との交流を通して成長していく過程を描いたヒューマンドラマ。 </font>". PHP_EOL;} 
                                         
                                        else{
                                ?>
                                     
                                            <br><span class="glyphicon glyphicon-book" style="font-size: 40px"></span></br>
                                <?php   
                                            print  "<h2> 『嫌われる勇気』 </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 4px>世界はシンプルだ、だれもが幸福になれるというアドラー博士の教えを若者との対話形式で読み解く自己啓発本。<font>". PHP_EOL;
                                    }}
                                //こじか
                                    elseif($result <= 75){
                                        if($content == 1){
                                ?>
                                
                                            <br><span class="glyphicon glyphicon-film" style="font-size: 40px"></span></br>
                                
                                <?php
                                            print  "<h2> 'マイ・インターン' </h2>"; 
                                            print "<br>";
                                            print "<font size = 4px> プライベートと仕事、どっちも大切にしたい。そんなあなたに贈る一作。 </font>". PHP_EOL;} 
                                             else{
                                ?>
                                         
                                                <br><span class="glyphicon glyphicon-book" style="font-size: 40px"></span></br>
                                                
                                    <?php   
                                                print  "<h2> 『嫌われる勇気』 </h2>". PHP_EOL; 
                                                print "<br>";
                                                print "<font size = 4px>世界はシンプルだ、だれもが幸福になれるというアドラー博士の教えを若者との対話形式で読み解く自己啓発本。<font>". PHP_EOL;
                                        }}
                                    //こじか
                                        elseif($result <= 75){
                                            if($content == 1){
                                    ?>
                                    
                                                <br><span class="glyphicon glyphicon-film" style="font-size: 40px"></span></br>
                                    
                                    <?php
                                                print  "<h2> 'マイ・インターン' </h2>"; 
                                                print "<br>";
                                                print "<font size = 4px> プライベートと仕事、どっちも大切にしたい。そんなあなたに贈る一作。 </font>". PHP_EOL;} 
                                             
                                            else{
                                    ?>
                                         
                                                <br><span class="glyphicon glyphicon-book" style="font-size: 40px"></span></br>
                                    <?php   
                                                print  "<h2> 『人生はワンチャンス！』 </h2>". PHP_EOL; 
                                                print "<br>";
                                                print "<font size = 4px>可愛いワンちゃんに癒されながらも、ページをめくるたびに人生における大切なことを教えてくれる一冊です。</font>". PHP_EOL;
                                        }}
                                    //ひつじ
                                        elseif($result <= 100){
                                            if($content == 1){
                                    ?>
                                    
                                                <br><span class="glyphicon glyphicon-film" style="font-size: 40px"></span></br>
                                    
                                    <?php
                                                print  "<h2> 'ズートピア' </h2>"; 
                                                print "<br>";
                                                print "<font size = 4px> 夢を見ることは恥ずかしいことじゃない、あなたへの多くのメッセージがつまった作品です。 </font>". PHP_EOL;} 
                                             
                                            else{
                                    ?>
                                         
                                                <br><span class="glyphicon glyphicon-book" style="font-size: 40px"></span></br>
                                    <?php   
                                                print  "<h2> 『365日世界一周絶景の旅』 </h2>". PHP_EOL; 
                                                print "<br>";
                                                print "<font size = 4px>365日、毎日世界中の絶景スポットに行ったような気分になれる一冊です。</font>". PHP_EOL;
                                        }}
                                    //ハムスター
                                        else{
                                            if($content == 1){
                                    ?>
                                        
                                                <br><span class="glyphicon glyphicon-film" style="font-size: 40px"></span></br>
                                        
                                    <?php
                                                print  "<h2> 'グレイテストショーマン'</h2>" . PHP_EOL; 
                                                print "<br>";
                                                print "<font size = 4px>主人公バーナムはオンリーワンの個性を持つ人々を集めたショーで成功することはできるのか…とにかく明るくなりたい人にオススメ！！</font>" . PHP_EOL;}
                                            else{
                                    ?>
                                    
                                                <br><span class="glyphicon glyphicon-book" style="font-size: 40px"></span></br>
                                          
                                    <?php 
                                                print  "<h2> 『深夜特急』 </h2>". PHP_EOL; 
                                                print "<br>";
                                                print "<font size = 4px> 長旅は人間の一生と同等のものである” --インドのデリーからイギリスのロンドンまでの旅を筆者自身の実体験に基づいて執筆した作品。</font>" . PHP_EOL;}}
                                    ?>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div class="container1">
        <div class="row">
       
            <div class="d-block col-sm-offset-1 col-sm-5">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">あなたにオススメの癒しグッズはこれ！</h3>
                    </div>
                    <div style="font-size:20pt;">
                        <div align="center">    
                            <div class="panel-body d-block">
                                <ul class="list-unstyled">
                                <?php 
                                //鳳凰
                                    if($result <= 25){ 
                                        if($content == 1){
                                ?> 
                                  <br><span class="glyphicon glyphicon-leaf" style="font-size: 40px"></span></br>
                                <?php 
                                            print "<h2> 【王様の抱き枕】</h2>" ;
                                            print "<br>";
                                            print  "<font size = 4px> 抱きつきながら眠る幸せ、ムニュふわ～の新感覚！</font>". PHP_EOL;
                                        } else{
                                ?>
                                  <br><span class="glyphicon glyphicon-leaf" style="font-size: 40px"></span></br>
                                <?php    
                                            print "<h2> 【アクアチューブ　クラゲ】 </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 4px>まるで小さな水族館。3匹のクラゲが優雅にゆらめく癒しのファンタジーアート  </font>". PHP_EOL;
                                    }}
                                 //おおかみ
                                    elseif($result <= 50){
                                        if($content == 1){
                                ?>
                                <br><span class="glyphicon glyphicon-leaf" style="font-size: 40px"></span></br>
                                <?php
                                            print  "<h2> 【セラミックアロマランプ】 </h2>"; 
                                            print "<br>";
                                            print "<font size = 4px> つややかな質感の陶器のレリーフから、やさしく温かみのある柔らかな灯りがこぼれるアロマランプ </font>". PHP_EOL;} 
                                        else{
                                ?>
                                <br><span class="glyphicon glyphicon-leaf" style="font-size: 40px"></span></br>
                                <?php   
                                            print  "<h2> 【バスアロマ　YURA】 </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 4px>心地よいアロマの香りで素敵なバスタイムを。</font>". PHP_EOL;
                                    }}
                                //こじか
                                    elseif($result <= 75){
                                        if($content == 1){
                                ?>
                                <br><span class="glyphicon glyphicon-leaf" style="font-size: 40px"></span></br>
                                <?php
                                            print  "<h2> 【美睡眠　あしまくら】 </h2>"; 
                                            print "<br>";
                                            print "<font size = 4px> 脚にもまくらを。あなたの脚の形にフィットしてくれるカーブ形状、脚用まくらです！</font><br>". PHP_EOL;} 
                                        else{
                                ?>
                                <br><span class="glyphicon glyphicon-leaf" style="font-size: 40px"></span></br>
                                <?php   
                                            print  "<h2> 【光るアロマディフューザー】 </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 4px>アロマの優しい香り広がる空間で心も体も癒されます。あなたの気分に合わせて7色から光の色を調節できます。</font>". PHP_EOL;
                                    }}
                                //ひつじ
                                    elseif($result <= 100){
                                        if($content == 1){
                                ?>
                                <br><span class="glyphicon glyphicon-leaf" style="font-size: 40px"></span></br>
                                <?php
                                            print  "<h2> 【ビーズスライム】 </h2>"; 
                                            print "<br>";
                                            print "<font size = 4px> カラフルな丸いつぶつぶが入った、のびーるスライム。音フェチにはたまらない、つついたり混ぜるたびにプチプチ音がします♪ </font>". PHP_EOL;} 
                                        else{
                                ?>
                                <br><span class="glyphicon glyphicon-leaf" style="font-size: 40px"></span></br>
                                <?php   
                                            print  "<h2> 【ファービー】 </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 4px>愛らしいファービーとの会話やふれあいを楽しみませんか？ファービーたちはあなたと遊べる日を待っています！</font>". PHP_EOL;
                                    }}
                                 //ハムスター
                                    else{
                                        if($content == 1){
                                ?>
                                <br><span class="glyphicon glyphicon-leaf" style="font-size: 40px"></span></br>
                                <?php
                                            print  "<h2> 【リラックスバスセット】</h2>" . PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 4px>忙しいあなたへ、温かいお風呂にゆっくり使って自分にご褒美をあげましょう。オススメ入浴剤がたっぷり30種類！</font>" . PHP_EOL;}
                                        else{
                                ?>
                                <br><span class="glyphicon glyphicon-leaf" style="font-size: 40px"></span></br>
                                <?php
                                            print  "<h2> 【ハーブティーセット】 </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 4px> ハーブティーでリラックス！美肌やデトックス、すっきり睡眠などの効果も見込めます。お好きなブレンドで日常をお茶でもっと豊かに♪ </font>" . PHP_EOL;}
                                    }
                                           
                                ?>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
            
            <div class="d-block col-sm-5">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">あなたへ贈る名言</h2>
                    </div>
                    <div style="font-size:20pt;">
                        <div align="center">    
                            <div class="panel-body d-block">
                                <ul class="list-unstyled">
                                    <?php 
                                    //鳳凰
                                        if($result <= 25){ 
                                            if($content == 1){
                                    ?> 
    
                                    
                                    <?php 
                                                print "<h3> 'みんな自分の能力を疑いすぎるのです。自分で自分を疑っていては、最善を尽くすことなんてできないんです。自分が信じなかったとしたら、誰が信じてくれるのでしょう？'</h3>" ;
                                                print "<br>";
                                                print  "<font size = 3px> 'マイケル・ジャクソン' </font>". PHP_EOL;
                                            } else{
                                    ?>
                                    <?php    
                                                print "<h3> '私はこれまでの人生でずっと「私は愛されない人間なんだ」と思ってきたの。でも私の人生にはそれよりもっと悪いことがあったと、はじめて気がついたの。私自身、心から人を愛そうとしなかったのよ。' </h3>". PHP_EOL; 
                                                print "<br>";
                                                print "<font size = 3px>'マリリン・モンロー'  </font>". PHP_EOL;
                                        }}
                                     //おおかみ
                                        elseif($result <= 50){
                                            if($content == 1){
                                    ?>
                                    <?php
                                                print  "<h3> '世界には、きみ以外には誰も歩むことのできない唯一の道がある。その道はどこに行き着くのか、と問うてはならない。ひたすら進め。' </h3>"; 
                                                print "<br>";
                                                print "<font size = 3px> 'ニーチェ' </font>". PHP_EOL;} 
                                            else{
                                    ?>
                                    <?php   
                                                print  "<h3> '過去ばかり振り向いていたのではダメだ。自分がこれまで何をして、これまでに誰だったのかを受け止めた上で、それを捨てればいい。' </h3>". PHP_EOL; 
                                                print "<br>";
                                                print "<font size = 3px>'スティーブ・ジョブズ'</font>". PHP_EOL;
                                        }}
                                    //こじか
                                        elseif($result <= 75){
                                            if($content == 1){
                                    ?>
                                    <?php
                                                print  "<h3> 'どんな日であれ、その日をとことん楽しむこと。ありのままの一日。ありのままの人々。過去は、現在に感謝すべきだということをわたしに教えてくれたような気がします。未来を心配してばかりいたら、現在を思うさま楽しむゆとりが奪われてしまうわ。' </h3>"; 
                                                print "<br>";
                                                print "<font size = 3px> 'オードリー・ヘップバーン' </font>". PHP_EOL;} 
                                            else{
                                    ?>
                                    <?php   
                                                print  "<h3> '私は失敗したことがない。ただ、1万通りの、うまく行かない方法を見つけただけだ。' </h3>". PHP_EOL; 
                                                print "<br>";
                                                print "<font size = 3px>'トーマス・エジソン'</font>". PHP_EOL;
                                        }}
                                    //ひつじ
                                        elseif($result <= 100){
                                            if($content == 1){
                                    ?>
                                    <?php
                                                print  "<h3> '太陽の光と雲ひとつない青空があって、それを眺めていられるかぎり、どうして悲しくなれるというの？' </h3>"; 
                                                print "<br>";
                                                print "<font size = 3px> 'アンネ・フランク' </font>". PHP_EOL;} 
                                            else{
                                    ?>
                                    <?php   
                                                print  "<h3> '名誉を失っても、もともとなかったと思えば生きていける。財産を失ってもまたつくればよい。しかし勇気を失ったら、生きている値打ちがない。' </h3>". PHP_EOL; 
                                                print "<br>";
                                                print "<font size = 3px>'ゲーテ</font>". PHP_EOL;
                                        }}
                                     //ハムスター
                                        else{
                                            if($content == 1){
                                    ?>
                                    <?php
                                                print  "<h2> '孤独な人ほど愛情が苦手。自分を守ろうとしないで、包み込むような愛情に身を任せてみては。'</h2>" . PHP_EOL; 
                                                print "<br>";
                                                print "<font size = 3px>'美輪明宏'</font>" . PHP_EOL;}
                                            else{
                                    ?>
                                    <?php 
                                                print  "<br><br><h2> '自分の生きる人生を愛せ。自分の愛する人生を生きろ。' </h2>". PHP_EOL; 
                                                print "<br>";
                                                print "<font size = 3px> 'ボブ・マーリー'</font><br><br>" . PHP_EOL;}}
                                    ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <br><br>
            <a class="jump2 btn btn-lg btn-warning col-md-offset-2" href="{{ route("test2.take2") }}" role="button">やっぱり誰かと過ごしたい人はこちら！</a> 
            <a class="jump2 btn btn-lg btn-warning col-md-offset-2" href="{{ route("psychotest.testresult") }}" role="button">他のタイプも見てみたい人はこちら！！</a> 

            <br><br><br><br><br><br><br><br><br>
    </div>
</div>
@endsection
</html>