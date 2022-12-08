<?php

$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$kike = $_POST['kike'];
$content = $_POST['content'];

$time = date('Y-m-d H:i:s');
// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $time . $name . $age . $sex . $email . $kike . $content . "\n");
fclose($file);
//文字作成

if(count($_POST)){
    $url = 'https://script.google.com/macros/s/AKfycbyHvZVUL1InN-7reKdlqDqmeMyjMa3G-sTPoiGdxeBhanDIr8uZIOGQ8hECpqfisvh2/exec';
    $data = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'sex' => $_POST['sex'],
        'email' => $_POST['email'],
        'kike' => $_POST['kike'],
        'content' => $_POST['content'],
    );
    $context = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
            'content' => http_build_query($data)
        )
    );
    $response_json = file_get_contents($url, false, stream_context_create($context));
    $response_data = json_decode($response_json);
    var_dump($response_data);
}


?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>

    <ul>
        <li><a href="read.php">./data/data.txtを確認する</a></li>
        <li><a href=https://docs.google.com/spreadsheets/d/1lT-RJcc0tuKcYjryjxoKY7OIY9YGXryG_lHHuuie-Ak/edit#gid>スプレットシートを確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
