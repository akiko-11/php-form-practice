<?php
$userName = $_POST["userName"];
$mailAddress = $_POST["mailAddress"];
$age = $_POST["age"];

// HTMLに表示するとき用
$userName = htmlspecialchars($userName, ENT_QUOTES, "UTF-8");
$mailAddress = htmlspecialchars($mailAddress, ENT_QUOTES, "UTF-8");
$age = htmlspecialchars($age, ENT_QUOTES, "UTF-8");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - 完了</title>
</head>
<body>
    <h1>ユーザー登録（３/３）完了</h1>
    <p><?= $userName ?>さん、登録が完了しました！</p>
    <p>確認メールを <?= $mailAddress ?>に送信しました。</p>
    <a href='input.php'>最初に戻る</a>
</body>
</html>