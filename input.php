<?php

// POSTで送信された入力値を取得
// 初回表示、送信されていない場合は空文字
$userName = $_POST["userName"] ?? "";
$mailAddress = $_POST["mailAddress"] ?? "";
$age = $_POST["age"] ?? "";

// HTMLに表示するときのために、特殊文字をエスケープ
$userName = htmlspecialchars($userName, ENT_QUOTES, "UTF-8");
$mailAddress = htmlspecialchars($mailAddress, ENT_QUOTES, "UTF-8");
$age = htmlspecialchars($age, ENT_QUOTES, "UTF-8");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - 入力</title>
</head>
<body>
    <h1>ユーザー登録（１/３）入力</h1>

    <form action="confirm.php" method="post">
        <div>
            <label for="userName">お名前：</label>
            <!-- name="userName" の値は、PHP側で $_POST["userName"] として受け取る -->
            <input type="text" name="userName" id="userName" value="<?= $userName ?>" required>
        </div>
        <div>
            <label for="mailAddress">メールアドレス：</label>
            <input type="email" name="mailAddress" id="mailAddress" value="<?= $mailAddress ?>" required>
        </div>
        <div>
                <label for="age">年齢</label>
                <input type="number" min="0" max="120" name="age" id="age" value="<?= $age ?>" required>
        </div>

        <button type="submit">確認画面へ</button>

    </form>
</body>
</html>