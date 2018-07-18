@extends('layouts.app')
    <!--<div class="opaque-background" style="background:url(images/children.jpg)" "background-size:cover">-->

@section('content')
     

    <div class="text-center">
        <h1>結果</h1>
           
          <div class="animal"> 
              <div style="font-size:30pt;">
                <?php
                    if($result <= 20){ 
                        print  'あなたはハムスタータイプです' . PHP_EOL; }
                    else if($result <= 40){ 
                        print  'あなたはひつじタイプです' . PHP_EOL; }
                    else if($result <= 60){ 
                        print  'あなたはこじかタイプです' . PHP_EOL; }
                    else if($result <= 80){ 
                        print  'あなたはおおかみタイプです' . PHP_EOL; }
                    else ($result <= 120){ 
                        print  'あなたは鳳凰タイプです' . PHP_EOL }
                        ?>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
        <div class="result">
            <div class="d-block col-sm-5"> 
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">心理テストの詳細結果</h2>
                    </div>
                    <div style="font-size:15pt;">
                        <div style="line-height:160%">
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <?php
                                            if($result <= 20){ 
                                                print  'あなたは、人一倍寂しがり屋さんのようです。ひまわりの種を握りしめ、おがくずにうずくまってしまうあなたは、寂しくても誰かに連絡を取れず一人で部屋に引きこもってしまうことも多いのは？' . PHP_EOL; }
                                            elseif($result <= 40){
                                                print  'あなたは、常に誰かといたいと思う寂しがり屋さんのようです。人の気を引きたくて、すぐにメェと鳴いてしまうのは、群れを作るために仲間が欲しいと思っているからかもしれません。' . PHP_EOL;  }
                                            elseif($result <= 60){
                                                print  'あなたは、人見知りタイプの寂しがり屋さんのようです。生まれたての小鹿のように足がプルプルしているシャイなあなたは、誰かに話しかけたいけれど話しかけるのに多くの勇気を必要としているようです。' . PHP_EOL;  }
                                            elseif($result <= 80){
                                                print  'あなたは、マイペースで一人でいるのが好きなように思われているようです。でも実は不器用で、一人でいるときにワオーンと鳴くことでしか寂しさを表現できないようです。' . PHP_EOL;  }
                                            else{
                                                print  'あなたは、周りからは完全無欠だと思われており、自分もそうでなければならないと思っているようです。何があってもめげず、常に堂々としているあなたは周りに元気を与える存在となっていますが、一人でため込んでしまう癖があるようです。' . PHP_EOL;}
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="d-block  col-sm-offset-1 col-sm-5">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title">おすすめの映画・本</h2>
                </div>
                <div style="font-size:20pt;">
                    <div align="center">    
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <?php 
                                //ハムスター
                                    if($result <= 20){ 
                                        if($content == 1){
                                ?> 
                                
                                            <br><span class="glyphicon glyphicon-film" style="font-size: 120px"></span></br>
                                
                                <?php 
                                            print "<h2> 'The notebook'</h2>" ;
                                            print "<br>";
                                            print  "<font size = 3px> '激しい恋の物語、何も考えるな、感じろ。' </font>". PHP_EOL;
                                        } else{
                                ?>  
                                
                                            <br><span class="glyphicon glyphicon-book" style="font-size: 120px"></span></br>
                                
                                <?php    
                                            print "<h2> 'スイミー' </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 3px>'仲間を失って一人ぼっちのおさかなが、海のさまざまないきものと出会ううちに、勇気をもって踏み出すことを学んでいくお話です。'  </font>". PHP_EOL;
                                    }}
                                //ひつじ
                                    elseif($result <= 40){
                                        if($content == 1){
                                ?>
                                
                                            <br><span class="glyphicon glyphicon-film" style="font-size: 120px"></span></br>
                                
                                <?php
                                            print  "<h2> 'Good will hunting' </h2>"; 
                                            print "<br>";
                                            print "<font size = 3px> '天才的な頭脳を持ちながら喧嘩を繰り返す若者と、彼に数学の才能を見出した教授との交流を通して成長していく過程を描いたヒューマンドラマ。' </font>". PHP_EOL;} 
                                         
                                        else{
                                ?>
                                     
                                            <br><span class="glyphicon glyphicon-book" style="font-size: 120px"></span></br>
                                <?php   
                                            print  "<h2> '嫌われる勇気' </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 3px>'世界はシンプルだ、だれもが幸福になれるというアドラー博士の教えを若者との対話形式で読み解く自己啓���本。'</font>". PHP_EOL;
                                    }}
                                //こじか
                                    elseif($result <= 60){
                                        if($content == 1){
                                ?>
                                
                                            <br><span class="glyphicon glyphicon-film" style="font-size: 120px"></span></br>
                                
                                <?php
                                            print  "<h2> 'マイ・インターン' </h2>"; 
                                            print "<br>";
                                            print "<font size = 3px> 'プライベートと仕事、どっちも大切にしたい。そんなあなたに贈る一作。' </font>". PHP_EOL;} 
                                         
                                        else{
                                ?>
                                     
                                            <br><span class="glyphicon glyphicon-book" style="font-size: 120px"></span></br>
                                <?php   
                                            print  "<h2> '人生はワンチャンス！「仕事」も「遊び」も楽しくなる65の方法' </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 3px>'可愛いワンちゃんに癒されながらも、ページをめくるたびに人生における大切なことを教えてくれる一冊です。'</font>". PHP_EOL;
                                    }}
                                //おおかみ
                                    elseif($result <= 80){
                                        if($content == 1){
                                ?>
                                
                                            <br><span class="glyphicon glyphicon-film" style="font-size: 120px"></span></br>
                                
                                <?php
                                            print  "<h2> 'ズートピア' </h2>"; 
                                            print "<br>";
                                            print "<font size = 3px> '夢を見ることは恥ずかしいことじゃない、あなたへの多くのメッセージがつまった作品です。' </font>". PHP_EOL;} 
                                         
                                        else{
                                ?>
                                     
                                            <br><span class="glyphicon glyphicon-book" style="font-size: 120px"></span></br>
                                <?php   
                                            print  "<h2> '嫌われる勇気' </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 3px>'世界はシンプルだ、だれもが幸福になれるというアドラー博士の教えを若者との対話形式で読み解く自己啓本。'</font>". PHP_EOL;
                                    }}
                                //鳳凰
                                    else{
                                        if($content == 1){
                                ?>
                                    
                                            <br><span class="glyphicon glyphicon-film" style="font-size: 120px"></span></br>
                                    
                                <?php
                                            print  "<h2> 'グレイテストショーマン'</h2>" . PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 3px>'主人公バーナムはオンリーワンの個性を持つ人々を集めたショーで成功することはできるのか…とにかく明るくなりたい人にオススメ！！'</font>" . PHP_EOL;}
                                        else{
                                ?>
                                
                                            <br><span class="glyphicon glyphicon-book" style="font-size: 120px"></span></br>
                                      
                                <?php 
                                            print  "<h2> '深夜特急' </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 3px> '長旅は人間の一生と同等のものである” --インドのデリーからイギリスのロンドンまでの旅を筆者自身の実体験に基づいて執筆した作品。'</font>" . PHP_EOL;}}
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
         <div class="d-block  col-sm-offset-1 col-sm-5">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title">あなたへ贈る名言</h2>
                </div>
                <div style="font-size:20pt;">
                    <div align="center">    
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <?php 
                                //ハムスター
                                    if($result <= 20){ 
                                        if($content == 1){
                                ?> 
                                
                                           
                                
                                <?php 
                                            print "<h2> '名言１'</h2>" ;
                                            print "<br>";
                                            print  "<font size = 3px> '名言言った人１' </font>". PHP_EOL;
                                        } else{
                                ?>
                                <?php    
                                            print "<h2> '名言２' </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 3px>'名言言った人２'  </font>". PHP_EOL;
                                    }}
                                 //ひつじ
                                    elseif($result <= 40){
                                        if($content == 1){
                                ?>
                                <?php
                                            print  "<h2> '名言３' </h2>"; 
                                            print "<br>";
                                            print "<font size = 3px> '名言言った人３' </font>". PHP_EOL;} 
                                        else{
                                ?>
                                <?php   
                                            print  "<h2> '名言４' </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 3px>'名言言った人４</font>". PHP_EOL;
                                    }}
                                //こじか
                                    elseif($result <= 60){
                                        if($content == 1){
                                ?>
                                <?php
                                            print  "<h2> '名言５' </h2>"; 
                                            print "<br>";
                                            print "<font size = 3px> '名言言った人５' </font>". PHP_EOL;} 
                                        else{
                                ?>
                                <?php   
                                            print  "<h2> '名言６' </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 3px>'名言言った人６</font>". PHP_EOL;
                                    }}
                                //おおかみ
                                    elseif($result <= 80){
                                        if($content == 1){
                                ?>
                                <?php
                                            print  "<h2> 'れいこだよ' </h2>"; 
                                            print "<br>";
                                            print "<font size = 3px> 'れいこさん' </font>". PHP_EOL;} 
                                        else{
                                ?>
                                <?php   
                                            print  "<h2> '名言８' </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 3px>'名言言った人８</font>". PHP_EOL;
                                    }}
                                 //鳳凰
                                    else{
                                        if($content == 1){
                                ?>
                                <?php
                                            print  "<h2> '名言９'</h2>" . PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 3px>'名言言った人９'</font>" . PHP_EOL;}
                                        else{
                                ?>
                                <?php 
                                            print  "<h2> '名言１０' </h2>". PHP_EOL; 
                                            print "<br>";
                                            print "<font size = 3px> '名言言った人１０'</font>" . PHP_EOL;}}
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
         <div class="d-block  col-sm-offset-1 col-sm-5">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">あなたにオススメの癒しグッズはこれ！</h3>
                </div>
                <div style="font-size:20pt;">
                    <div align="center">    
                        <div class="panel-body">
                            <ul class="list-unstyled">
                            <?php 
                            //ハムスター
                                if($result <= 20){ 
                                    if($content == 1){
                            ?> 
                            <?php 
                                        print "<h2> 'いやし１'</h2>" ;
                                        print "<br>";
                                        print  "<font size = 3px> '商品説明１' </font>". PHP_EOL;
                                    } else{
                            ?>
                            <?php    
                                        print "<h2> 'いやし２' </h2>". PHP_EOL; 
                                        print "<br>";
                                        print "<font size = 3px>'商品説明２'  </font>". PHP_EOL;
                                }}
                             //ひつじ
                                elseif($result <= 40){
                                    if($content == 1){
                            ?>
                            <?php
                                        print  "<h2> 'いやし３' </h2>"; 
                                        print "<br>";
                                        print "<font size = 3px> '商品説明３' </font>". PHP_EOL;} 
                                    else{
                            ?>
                            <?php   
                                        print  "<h2> 'いやし４' </h2>". PHP_EOL; 
                                        print "<br>";
                                        print "<font size = 3px>'商品説明４</font>". PHP_EOL;
                                }}
                            //こじか
                                elseif($result <= 60){
                                    if($content == 1){
                            ?>
                            <?php
                                        print  "<h2> 'いやし５' </h2>"; 
                                        print "<br>";
                                        print "<font size = 3px> '商品説明５' </font>". PHP_EOL;} 
                                    else{
                            ?>
                            <?php   
                                        print  "<h2> 'いやし６' </h2>". PHP_EOL; 
                                        print "<br>";
                                        print "<font size = 3px>'商品説明６</font>". PHP_EOL;
                                }}
                            //おおかみ
                                elseif($result <= 80){
                                    if($content == 1){
                            ?>
                            <?php
                                        print  "<h2> 'いやし７' </h2>"; 
                                        print "<br>";
                                        print "<font size = 3px> '商品説明７' </font>". PHP_EOL;} 
                                    else{
                            ?>
                            <?php   
                                        print  "<h2> 'いやし８' </h2>". PHP_EOL; 
                                        print "<br>";
                                        print "<font size = 3px>'商品説明８</font>". PHP_EOL;
                                }}
                             //鳳凰
                                else{
                                    if($content == 1){
                            ?>
                            <?php
                                        print  "<h2> 'いやし９'</h2>" . PHP_EOL; 
                                        print "<br>";
                                        print "<font size = 3px>'商品説明９'</font>" . PHP_EOL;}
                                    else{
                            ?>
                            <?php
                                        print  "<h2> 'いやし１０' </h2>". PHP_EOL; 
                                        print "<br>";
                                        print "<font size = 3px> '商品説明１０'</font>" . PHP_EOL;}
                                }
                                       
                            ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-success btn-lg" type="submit">購入したい方はこちら！</button>
        </div>
    </div>
@endsection