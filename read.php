<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
<?php
// ファイルを変数に格納
$filename = 'data/data.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
echo "<table>";
echo "<tr class='bg-green-200 text-lg'><th class='border p-4'>日時</th><th class='border p-4'>名前</th><th class='border p-4'>アドレス</th></tr>";


// whileで行末までループ処理
while (!feof($fp)) 
{
    // fgetsでファイルを読み込み、変数に格納
    $txt = fgets($fp);
    //配列にしました
    $table = explode(",", $txt);
//配列をテーブルに入れました
    echo "<tr><th class='border p-4'>$table[0]</th><td class='border p-4'>$table[1]</td><td class='border p-4'>$table[2]</td></tr>";    
}
echo "</table>";

?>    
</body>
</html>
