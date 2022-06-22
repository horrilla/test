<?php

// 1 задание
$array = [
    1, 2, 3, 4, 5, 6, 7, 8, 9, 10
];

foreach ($array as $value) {
    if ($value !== count($array)) {
        echo $value . ', ';
    } else {
        echo $value;
    }
}


// 2 задание

$pdo = new PDO($dsn, 'root','root', $options);
$sql_query = 'SELECT * FROM table WHERE id = :id';
$params = ['id' => $id];
$query = $pdo->prepare($sql_query);
$query->execute($params);
$res = $query->fetch();

// 3 задание
$arrayInfo = [
    'name' => 'Ivan',
    'surname' => 'Ivanov',
    'adress' => 'Petrovsk',
    'telephone' => '8 (985) 222-33-44'
];

foreach ($arrayInfo as $key => $value) {
    echo "$key: $value <br>";
}


// 4 здаание
$arraymonth = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март'
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь'
    ]
];

foreach ($arraymonth as $arr) {
    foreach ($arr as $value) {
        echo $value . '<br>';
    }
}

// 5 задание

foreach ($data->years as $value) {
    echo $value . '<br>';
}
// либо можно преобразовать его в ассоциативный массив с помощью json_decode() и перебрать как массив

// 6 задание
// 1 вопрос - запрос выполнен не будет, т.к. в mysqli_connect передаются параметры не в том порядке, должно быть: hostname, username, password, database
// 2 вопрос - т.к. подключение к базе данных не выполнено, до запроса дело не дойдет, т.к. mysqli_connect выдаст false
// 3 вопрос -

$host = 'localhost';
$db = 'panel';
$user = 'root';
$password = 'root';
$dsn = "mysql:host=$host;dbname=$db;charset=utf8";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];


$pdo = new PDO($dsn, $user,$password, $options);
$sql_query = 'DELETE FROM users WHERE id = :id1 BETWEEN id <= :id2 LIMIT 1';
$params = ['id1' => 9, 'id2' => 11];
$query = $pdo->prepare($sql_query);
$query->execute($params);
$res = $query->fetch();


// 7 задание
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="text">
    <button type="submit">Send</button>
</form>
</body>
</html>
<?php
if (!empty($_POST)) {
    file_put_contents(__DIR__ . '/logs.txt', print_r($_POST, 1), FILE_APPEND);
}
?>
