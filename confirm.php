<?php
//入力データを受け取る
$userName = $_POST["userName"];
$mailAddress = $_POST["mailAddress"];
$age = $_POST["age"];

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
    <title>ユーザー登録 - 確認</title>
</head>
<body>
    <h1>ユーザー登録（２/３）確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>

    <!-- テーブル表示 -->
     <table border="1">
        <tr>
            <th>お名前</th>
            <td><?= $userName ?></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?= $mailAddress ?></td>
        </tr>
        <tr>
            <th>年齢</th>
            <td><?= $age ?></td>
        </tr>
     </table>

     <form action="complete.php" method="post">
        <!-- hidden属性で、データを隠して送信 -->
        <input type="hidden" name="userName" value= "<?= $userName ?>">
        <input type="hidden" name="mailAddress" value= "<?= $mailAddress ?>">
        <input type="hidden" name="age" value= "<?= $age ?>">

        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">登録する</button>

    </form>
</body>
</html>