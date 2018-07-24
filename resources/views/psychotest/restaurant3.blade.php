<?php
                
                    $results = $data->foodtype;
                    $recipe = rand(1,3);
                    if($results == 1){
                        if($recipe == 1){?>
                        <img src='images/dishes/banbanzi-.jpg' style='width:250px;'>
                        <h3>バンバンジー</h3><?php
                        ;}
                        else if($recipe == 2){?>
                        <img src='images/dishes/cha-han.jpg' style='width:250px;'>
                        <h3>チャーハン</h3><?php
                        ;}
                        else {?>
                        <img src='images/dishes/hoiko-ro-.jpg' style='width:250px;'>
                        <h3>ホイコーロー</h3><?php
                        ;}}
                    elseif($results == 2){
                        if($recipe == 1){?>
                        <img src='images/dishes/lasagna.jpg' style='width:250px;'>
                        <h3>ラザニア</h3><?php
                        ;}
                        elseif($recipe == 2){?>
                        <img src='images/dishes/margherita.jpg' style='width:250px;'>
                        <h3>マルゲリータ</h3><?php
                        }
                        else {?>
                        <img src='images/dishes/napolitan.jpg' style='width:250px;'>
                        <h3>ナポリタン</h3><?php
                        }}
                        
                    elseif($results == 3){
                        if($recipe == 1){?>
                        <img src='images/dishes/karei_nitsuke.jpg' style='width:250px;'>
                        <h3>カレイの煮つけ</h3>
                        <?php
                        }
                        elseif($recipe == 2){?>
                        <img src='images/dishes/nikujaga.jpg' style='width:250px;'>
                        <h3>肉じゃが</h3>
                        <?php
                        }
                        else {?>
                        <img src='images/dishes/tonkatsu.jpg' style='width:250px;'>
                        <h3>とんかつ</h3>
                        <?php
                        }}
                        
                    else{
                        if($recipe == 1){?>
                        <img src='images/dishes/edamame.jpg' style='width:250px;'>
                        <h3>えだまめ</h3><?php
                        }
                        elseif($recipe == 2){?>
                        <img src='images/dishes/potatofly.jpg' style='width:250px;'>
                        <h3>ポテトフライ</h3><?php
                        }
                        else {?>
                        <img src='images/dishes/takowasa.jpg' style='width:250px;'>
                        <h3>たこわさ</h3><?php
                        }}
                         ?>