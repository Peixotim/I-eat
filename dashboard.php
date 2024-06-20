<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Ieat";

$mysqli = new mysqli($hostname,$username,$password,$database);
if($mysqli->connect_error){
    echo "Falha na conexão" . $mysqli -> connect_error;
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I eat</title>
</head>

<body>
    <h1>I Eat</h1>
    <div class="btn">
        <button><img src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/japonesa_FP14.png?imwidth=128 1x, 
    https://static.ifood-static.com.br/image/upload/t_medium/discoveries/japonesa_FP14.png?imwidth=256 2x" alt="Sushi" width="100px"></button>
        <button></button>
    </div>
</body>

</html>