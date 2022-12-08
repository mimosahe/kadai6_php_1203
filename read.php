<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="style.css">

<html>

<head>
    <meta charset="utf-8">
    <title>持ち服登録_データ表示</title>
</head>

<body>
    <h2 class="header">
        <p class="header_text">持ち服リスト</p>
    </h2>
    <ul>
        <li><a href="post.php">持ち服を登録する</a></li>
    </ul>

<?php
$openfile = fopen(__DIR__."/data/itemData.json", 'rb');

echo "<div class= 'item_container'>";
while ($itemDataJson = fgets($openfile)) {
    $itemData = (array)json_decode($itemDataJson);

    foreach($itemData as $key1 => $value1) {
        // 画像ファイルの情報を取得
        $filepath = "./item_img/".$key1.".png";
        
        // 画像ファイル以外の情報を取得
        foreach($value1 as $key2 => $value2) {
            if ($key2 === "color") {
                $color = $value2;
            } else if ($key2 === "category1") {
                $category1 = $value2;
            } else if ($key2 === "category2") {
                $category2 = $value2;
            }
        }
        
        // 結果を表示
        echo "<div class= 'item_wrapper'>";
        echo    "<div class= 'img_wrapper'>";
        echo        "<img src=". $filepath. " alt='' width='200'>";
        echo    "</div>";
        echo    "<div class= 'itemDescr_wrapper'>";
        echo        "<p>色：". $color. "</p>";
        echo        "<p>カテゴリ1: ". $category1. "</p>";
        echo        "<p>カテゴリ2: ". $category2. "</p>";
        echo    "</div>";
        echo "</div>";
    }
}
echo "</div>";
fclose($openFile);
?>

</body>

</html>
