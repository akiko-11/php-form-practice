<?php
//  送信されたか判定
$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";

// 入力値を取得
$userName = $_POST["userName"] ?? "";
$mailAddress = $_POST["mailAddress"] ?? "";
$age = $_POST["age"] ?? "";

// HTMLに表示するとき用
$userName = htmlspecialchars($userName, ENT_QUOTES, "UTF-8");
$mailAddress = htmlspecialchars($mailAddress, ENT_QUOTES, "UTF-8");
$age = htmlspecialchars($age, ENT_QUOTES, "UTF-8")
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

                <lable for="userName">お名前：</lable>
                <input type="text" name="userName" id="userName" value="<?= $userName ?>" required>
        </div>
        <div>
            <label for="mailAddress">メールアドレス：</label>
            <input type="email" name="mailAddress" id="mailAddress" value="<? $mailAddress ?>" required>
        </div>
        <div>
                <label for="age"></label>年齢<label for=""></label>
                <input type="number" min="0" max="120" name="age" id="age" value="<?= $age ?>" required>
        </div>

        <button type="submit">確認画面へ</button>

    </form>
</body>
</html>