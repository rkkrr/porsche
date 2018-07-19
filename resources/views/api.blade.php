<?php
/*****************************************************************************************
 　ぐるなびWebサービスのマスタ検索APIをパースするプログラム
 　注意：アクセスキーはユーザ登録後に発行されたkeyを指定してください。
*****************************************************************************************/
 
//エンドポイントのURIとフォーマットパラメータを変数に入れる
$uri   = "https://api.gnavi.co.jp/master/GAreaMiddleSearchAPI/20150630/";
//APIアクセスキーを変数に入れる
$acckey= "9e1e75a5a9d5f15e6c27fa6d681e3e60";
//返却値のフォーマットを指定
$format= "json";
 
//URI組み立て
$url  = sprintf("%s%s%s%s%s", $uri, "?format=", $format,"&keyid=", $acckey);
//API実行
$json = file_get_contents($url);
//取得した結果をオブジェクト化
$obj  = json_decode($json);
 
//結果をパース
foreach((array)$obj as $key => $val){
   if(strcmp($key,"garea_middle") == 0){
       foreach($val as $k =>$v){
          echo $v->{'pref'}->{'pref_code'}. "\t";
          echo $v->{'pref'}->{'pref_name'}. "\t";
          echo $v->{'garea_large'}->{'areacode_l'} . "\t";
          echo $v->{'garea_large'}->{'areaname_l'} ."\t";
          echo $v->{'areacode_m'}."\t";
          echo $v->{'areaname_m'}."\n";
       }
   }
}
 
?>