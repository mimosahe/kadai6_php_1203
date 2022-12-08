<?php
ini_set('display_errors', 'On');

// 画像ファイルの情報の取得
$imgfile = $_FILES['img'];
$filename = basename($imgfile['name']);
$tmp_path = $imgfile['tmp_name'];
$file_err = $imgfile['error'];
$filesize = $imgfile['size'];
$upload_dir = './item_img/';
$itemID = uniqid('item_');
$save_filename = $itemID.".png";

// 画像ファイル以外の情報の取得
$color = $_POST['color'];
$category1 = $_POST['category1'];
$category2 = $_POST['category2'];

$add_itemData = array(
    $itemID => array(
        "color" => $color,
        "category1" => $category1,
        "category2" => $category2
    )
);

// 画像ファイルのバリデーション＆修正
    // ファイルサイズは1MB未満か
    if($filesize > 1048576 || $filesize === 2) {
        echo 'ファイルサイズは1MB未満にしてください';
    }

    // 拡張子は画像形式か
    $allow_ext = array('png', 'jpeg', 'jpg');
    $file_ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array(strtolower($file_ext), $allow_ext)) {
        echo '画像ファイル（png, jpeg）を添付してください';
    }

// 画像ファイル以外の情報のバリデーション
if(empty($color)) {
    echo '色を入力してください';
}
if(empty($category1)){
    echo 'カテゴリ1を入力してください';
}

// 取得した画像ファイルをitem_imgフォルダに格納
if (is_uploaded_file($tmp_path)) {
    if (move_uploaded_file($tmp_path, $upload_dir.$save_filename)) {
        echo '登録しました';
    } else {
        echo 'ファイルが保存できませんでした';
    }
} else {
    echo 'ファイルが選択されていません';
}

// 取得したデータをファイルに書き込み
$orig_itemDataJson = file_get_contents(__DIR__."/data/itemData.json");
$orig_itemData = (array)json_decode($orig_itemDataJson); //オブジェクト形式を配列形式に直す
if ($orig_itemData == null ) {
    $itemDataJson = json_encode($add_itemData);
    // echo "データ初登録！";
} else {
    $itemDataJson = json_encode(array_merge($orig_itemData, $add_itemData));
}
file_put_contents(__DIR__."/data/itemData.json" , $itemDataJson);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>持ち服登録_データ登録</title>
</head>

<body>
    <ul>
        <li><a href="read.php">持ち服リストを見る</a></li>
        <li><a href="post.php">持ち服を登録する</a></li>
    </ul>
</body>

</html>
