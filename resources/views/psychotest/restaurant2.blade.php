<?php
                    $results = $data->foodtype;
                    $restaurant = rand(1,3);
                    if($results == 1){
                        if($restaurant == 1){?>
                        <img src='images/Restaurant/chinese1.jpg' style='width:250px;'>
                        <h3>渋谷　南翔饅頭店</h3><?php
                        ;}
                        else if($restaurant == 2){?>
                        <img src='images/Restaurant/chinese2.jpg' style='width:250px;'>
                        <h3>渋谷　タイガー餃子会館</h3><?php
                        ;}
                        else {?>
                        <img src='images/Restaurant/chinese3.jpg' style='width:250px;'>
                        <h3>三軒茶屋 燕来香 </h3><?php
                        ;}}
                    elseif($results == 2){
                        if($restaurant == 1){?>
                        <img src='images/Restaurant/shinjukutelase.jpg' style='width:250px;'>
                        <h3>新宿　チーズの店、新宿テラス</h3><?php
                        ;}
                        elseif($restaurant == 2){?>
                        <img src='images/Restaurant/shinjukutelase.lpg' style='width:250px;'>
                        <h3>新宿　スパッカナポリ</h3><?php
                        }
                        else {?>
                        <img src='images/Restaurant/gyozafondue.jpg' style='width:250px;'>
                        <h3>渋谷　餃子フォンデュ</h3><?php
                        }}
                        
                    elseif($results == 3){
                        if($restaurant == 1){?>
                        <img src='images/Restaurant/imai-lunch.jpg' style='width:250px;'>
                        <h3>中目黒　今井</h3><?php
                        }
                        elseif($restaurant == 2){?>
                        <img src='images/Restaurant/s-0ｎbp.jpg' style='width:250px;'>
                        <h3>浅草　みそら屋</h3><?php
                        }
                        else {?>
                        <img src='images/Restaurant/s-0ｎbp.jpg' style='width:250px;'>
                        <h3>浅草　kamotowine to and be yourserf.</h3><?php
                        }}
                        
                    else{
                        if($restaurant == 1){?>
                        <img src='images/Restaurant/izakaya1.jpg' style='width:250px;'>
                        <h3>二子玉川　あひるの台所</h3><?php
                        }
                        elseif($restaurant == 2){?>
                        <img src='images/Restaurant/izakaya2.jpg' style='width:250px;'>
                        <h3>渋谷　バッハ</h3><?php
                        }
                        else {?>
                        <img src='images/Restaurant/izakaya3.jpg' style='width:250px;'>
                        <h3>新宿　ゴールデン街</h3><?php
                        }}
?>