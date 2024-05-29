<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$br = ",";

//文字作成
$str = date("Y-m-d H:i:s").$br.$name.$br.$mail.$br.$age;
//File書き込み
$file = fopen("data/data.txt", "a"); //ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="post.php">戻る</a></li>
        <li><a href="read.php">結果</a></li>
    </ul>

</body>

</html>