<?php
    if($result <= 25){ 
        print  'あなたは、寂しさは感じず、一人で生きていくことができるような人間のように思われているようです。何があってもめげず、常に堂々としているあなたは周りに元気を与える存在となっていますが、一人でため込んでしまう癖があります。
        このタイプの人は決して友達が少ないわけではないので自分では相談する必要がないと思うような些細なことでも友達に相談してみるといいでしょう。' . PHP_EOL; }
    elseif($result <= 50){
        print  'あなたは、マイペースで一人でいるのが好きなように思われているようです。でも実は不器用で、一人でいるときにワオーンと鳴くことでしか寂しさを表現できないようです。
        このタイプは、自分の世界をしっかり持っていて、ちょっとやそっとのことでは人に影響されたりはしないのですが、いつもよりも人の話を聞いているときにその意見を取り入れるように意識してみてもいいかもしれません。' . PHP_EOL;  }
    elseif($result <= 75){
        print  'あなたは、人見知りタイプの寂しがり屋さんのようです。生まれたての小鹿のように足がプルプルしているシャイなあなたは、誰かに話しかけたいけれど話しかけるのに多くの勇気を必要としているようです。
        困ったときには相手に対して質問をたくさん投げかけて会話の糸口を探してみるようにすると、緊張した雰囲気が和みますよ！' . PHP_EOL;  }
    elseif($result <= 100){
        print 'あなたは、常に誰かといたいと思う寂しがり屋さんのようです。人の気を引きたくて、すぐにメェと鳴いてしまうのは、群れを作るために仲間が欲しいと思っているからかもしれません。このタイプの人は何がしたいという意思が弱い傾向にあり、
        自分が主張してしまうと友達に嫌われてしまうのではないかと考えている人が多いのではないでしょうか。全員に好かれる人はいません。もう少し自分をさらけ出して行くとあなたの魅力がより分かってもらえるでしょう。'  . PHP_EOL;  }
    else{
        print  'あなたは、人一倍寂しがり屋さんのようです。ひまわりの種を握りしめ、おがくずにうずくまってしまうあなたは、寂しくても誰かに連絡を取れず一人で部屋に引きこもってしまうことも多いのでは？
        まずは自分の頭に思い浮かぶ、一番仲のいい友達を何か遊びに誘ってみましょう。「独りでいるくらいなら死んだ方がマシ」とまで考え始めるようになる前に、もっと孤独に強くなることをオススメします。' . PHP_EOL;}
                                    ?>