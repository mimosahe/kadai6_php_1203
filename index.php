<?php
    session_start();
    $csrf =  base64_encode( openssl_random_pseudo_bytes(32));
    $_SESSION['csrf'] = $csrf;
?>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <h1>スタイリストアプリ</h1>
    <ul>
        <li><a href="input.php">手持ち服の登録</a></li> 
        <li><a href="write.php">ファイル書き込み</a></li>
        <li><a href="read.php">手持ち服の確認</a></li>
    </ul>

</body>

</html>
