<?php
                    $results = $data->foodtype;
                    $restaurant = rand(1,3);
                    if($results == 1){
                        if($restaurant == 1){?>
                        <a href="https://tabelog.com/tokyo/A1303/A130301/13104306/"><img src='images/Restaurant/chinese1.jpg' style='width:250px;'>
                        <h3>渋谷　南翔饅頭店</h3></a><?php
                        ;}
                        else if($restaurant == 2){?>
                        <a href="https://tabelog.com/tokyo/A1303/A130301/13173607/"><img src='images/Restaurant/chinese2.jpg' style='width:250px;'>
                        <h3>渋谷　タイガー餃子会館</h3></a><?php
                        ;}
                        else {?>
                        <a href="https://tabelog.com/tokyo/A1317/A131706/13092469/"><img src='images/Restaurant/chinese3.jpg' style='width:250px;'>
                        <h3>三軒茶屋 燕来香</h3></a><?php
                        ;}}
                    elseif($results == 2){
                        if($restaurant == 1){?>
                        <a href="https://tabelog.com/tokyo/A1304/A130401/13187399/"><img src='images/Restaurant/shinjukutelase.png' style='width:250px;'>
                        <h3>新宿　チーズの店、新宿テラス</h3></a><?php
                        ;}
                        elseif($restaurant == 2){?>
                        <a href="https://r.gnavi.co.jp/g454118/"><img src='images/Restaurant/sppakanapoli.png' style='width:250px;'>
                        <h3>新宿　スパッカナポリ</h3></a><?php
                        }
                        else {?>
                        <a href="https://tabelog.com/tokyo/A1310/A131002/13199828/"><img src='images/Restaurant/gyozafondue.jpg' style='width:250px;'>
                        <h3>神田　WARASHIBE GYOZA</h3></a><?php
                        }}
                        
                    elseif($results == 3){
                        if($restaurant == 1){?>
                        <a href="https://tabelog.com/tokyo/A1317/A131701/13160388/"><img src='images/Restaurant/imai-lunch.jpg' style='width:250px;'>
                        <h3>中目黒　三盃</h3></a><?php
                        }
                        elseif($restaurant == 2){?>
                        <a href="https://tabelog.com/tokyo/A1311/A131102/13205593/"><img src='images/Restaurant/s_0nbp.jpg' style='width:250px;'>
                        <h3>浅草　みそら屋</h3></a><?php
                        }
                        else {?>
                        <a href="https://tabelog.com/tokyo/A1311/A131102/13159975/"><img src='images/Restaurant/s_0nbp.jpg' style='width:250px;'>
                        <h3>浅草　わいん家</h3></a><?php
                        }}
                        
                    else{
                        if($restaurant == 1){?>
                        <a href="https://tabelog.com/tokyo/A1317/A131708/13018244/"><img src='images/Restaurant/izakaya1.jpg' style='width:250px;'>
                        <h3>二子玉川　あひるの台所</h3></a><?php
                        }
                        elseif($restaurant == 2){?>
                        <a href="https://tabelog.com/tokyo/A1303/A130301/13182198/"><img src='images/Restaurant/izakaya2.jpg' style='width:250px;'>
                        <h3>渋谷　バッハ</h3></a><?php
                        }
                        else {?>
                        <a href="https://icotto.jp/presses/582"><img src='images/Restaurant/izakaya3.jpg' style='width:250px;'>
                        <h3>新宿　ゴールデン街</h3></a><?php
                        }}
?>