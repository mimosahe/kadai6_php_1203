<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="style.css">

<html>

<head>
    <meta charset="utf-8">
    <title>持ち服登録_データ入力</title>
</head>

<body>
    <h2 class="header">
        <p class="header_text">持ち服登録</p>
    </h2>

<?php
define('IMAGE_MAX_WIDTH', 600); // アップロード画像の最大幅の指定

session_start();
if ($_SESSION['csrf'] !== $_POST['csrf']) {
    header('Location: ./');
    exit;
}
?>

    <div>
        <form enctype="multipart/form-data" action="write.php" method="post">
            <div class="file-up">
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                <input name="img" type="file" accept="image/*">
                <input type="hidden" name="csrf" value="<?=$csrf?>">
            </div>
            <div>
                <dl>
                    <dt>色</dt>
                    <dd><input type="text" name="color"></dd>
                    <dt>カテゴリ1</dt>
                    <dd><input type="text" name="category1"></dd>
                    <dt>カテゴリ2</dt>
                    <dd><input type="text" name="category2"></dd>
                </dl>
            </div>
            <div>
                <input type="submit" value="登録">
            </div>
        </form>

        <ul>
            <li><a href="read.php">持ち服リストを見る</a></li>
        </ul>

    </div>
    
</body>

</html>
