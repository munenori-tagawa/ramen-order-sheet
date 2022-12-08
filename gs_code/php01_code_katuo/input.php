
<?php

date_default_timezone_set('Asia/Tokyo');
function funcWeek(){
    return array('日', '月', '火', '水', '木', '金', '土');
}
$w = funcWeek()[date("w")];

echo '現在の日時<br>';
echo date("Y/m/d($w) G:i:s");

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/php01.css">
    <title>質問の多いラーメン屋さん</title>
    <link rel="stylesheet" href="php.css">
    

</head>

<body>
<header>
    <h1 class="headline">  
    <p>質問の多いラーメン屋さん</p>
    </h1>

</header>
  <div class="order-page">
  <form action="write.php" method="post">
    <div><h1>いらっしゃいませ ご注文をどうぞ！</div>

    <p><h2>何味にしますか？</h2></p>
    <h3>醤油・味噌・塩・合わせ・カレー</h3>：<input type="text" name="taste"></p>
    <p><h2>スープは何ベースですか？</h2></p>
    <h3>鶏ガラ・とんこつ・えび・鶏白湯・べジポタ・カツオ</h3>：<input type="text" name="soup"></p>
    <p><h2>麺の太さはどうしますか？</h2></p>
    <h3>太麵・中太麺・中華麺・縮れ麺・細麺</h3>：<input type="text" name="size"></p>
    <p><h2>麺の量はどうしますか？</h2></p>
    <h3>特盛・大盛・並・八分・ハーフ</h3>：<input type="text" name="volume"></p>

    <p>麵の硬さはどうしますか？：
      <select name="firmness">
        <option value="かたい">かたい</option>
        <option value="ややかため">ややかため</option>
        <option value="ほどよい">ほどよい</option>
        <option value="やややわめ">やややわめ</option>
        <option value="やわめ">やわめ</option>
      </select>
    </p>

    <p>スープの温度はどうしますか？：
      <select name="temperature">
        <option value="熱々">熱々</option>
        <option value="熱い">熱い</option>
        <option value="ほどよい">ほどよい</option>
        <option value="ややぬるめ">ややぬるめ</option>
        <option value="ぬるい">ぬるい</option>
      </select>
    </p>

    <p>味の濃さはどうしますか？：
      <select name="darkness">
        <option value="濃い">濃い</option>
        <option value="やや濃い">やや濃い</option>
        <option value="ほどよい">ほどよい</option>
        <option value="やや薄い">やや薄い</option>
        <option value="薄い">薄い</option>
      </select>
    </p>


    <p>野菜はどうしますか？：
      <input type="radio" name="vegetable" value="倍盛り">倍盛り
      <input type="radio" name="vegetable" value="大盛">大盛
      <input type="radio" name="vegetable" value="標準">標準
      <input type="radio" name="vegetable" value="少なめ">少なめ
      <input type="radio" name="vegetable" value="なし">なし
    </p>

    <p>油はどうしますか？：
      <input type="radio" name="oil" value="多め">多め
      <input type="radio" name="oil" value="やや多め">やや多め
      <input type="radio" name="oil" value="ふつう">ふつう
      <input type="radio" name="oil" value="やや少なめ">やや少なめ
      <input type="radio" name="oil" value="少なめ">少なめ
    </p>

    <p>にんにくはどうしますか？：
      <input type="radio" name="garlic" value="多め">多め
      <input type="radio" name="garlic" value="やや多め">やや多め
      <input type="radio" name="garlic" value="ふつう">ふつう
      <input type="radio" name="garlic" value="やや少なめ">やや少なめ
      <input type="radio" name="garlic" value="少なめ">少なめ
    </p>

    <p>他にトッピングなどあればこちらに：</p>
    <p><textarea name="opinion" cols="50" rows="5"></textarea></p>
    <p><input type="submit" name="submitBtn" value="オーダー"></p>
  </form>
  <footer>
    <p>©ramen order ～special thanks～ nabesan,issiy,yone + gino.</p>
    </footer>
</body>
</html>



<!--<html>

<head>
    <meta charset="utf-8">
    <title>はじめてのＰＨＰ</title>
    
</head>


<body>
    <form action="write.php" method="post">
    <h1>アンケート入力ページ</h1>
        <p>お名前を頂戴します: <input type="text" name="name"></p>
        <p>どちらの生まれですか: <input type="text" name="birthPlace"></p>
        <p>好きな食べ物はなんですか:<input type="text" name="favoritefood"><p>
        <p>好きな漫画はなんですか:<input type="text" name="manga"></p>
        
 
        <input type="submit" value="送信">

    </form>
   
</body>
</html>
--->