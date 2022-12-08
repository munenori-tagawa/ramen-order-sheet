<?php
//日本時間に設定
date_default_timezone_set('Asia/Tokyo');
//関数を作成し曜日をグループ化
function funcWeek(){
    return array('日', '月', '火', '水', '木', '金', '土');
}
//曜日を取得して変数化
$w = funcWeek()[date("w")];
//全て表示
echo '現在の日時<br>';
echo date("Y/m/d($w) G:i:s");
// ファイルを開く
$openFile = fopen('./data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
// fgets($openFile)で、1行を読み込み、それを$strに代入
// 何も読み込むものがなくなると、while文が終了する
while ($str = fgets($openFile)) {
    // nl2br ... textファイルの改行を<br>に変換する関数
    echo nl2br($str);
};

fclose($openFile);
