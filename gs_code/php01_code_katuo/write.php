<?php

$taste = $_POST['taste'];
$soup = $_POST['soup'];
$size = $_POST['size'];
$volume = $_POST['volume'];
$firmness = $_POST['firmness'];
$temperature = $_POST['temperature'];
$darkness = $_POST['darkness'];
$vegetable = $_POST['vegetable'];
$oil = $_POST['oil'];
$garlic = $_POST['garlic'];
$opinion = $_POST['opinion'];

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
// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $time . '/' . $taste . '/' . $soup . '/' . $size . '/' . $volume . '/' . $firmness . '/' . $temperature . '/' . $darkness . '/' .  $vegetable . '/' .  $oil . '/' .  $garlic . '/' . $opinion . "\n");
fclose($file);
//文字作成
?>


<html>

<head>
    <meta charset="utf-8">
    <title>オーダー受け取り</title>

</head>

<body>

    <h1>オーダーが入りました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">オーダーを確認する</a></li>
        <li><a href="input.php">オーダーに戻る</a></li>
    </ul>
</body>

</html>
