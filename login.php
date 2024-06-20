<?php 
$hostname=  "localhost";
$username = "root";
$password = "";
$database = "Ieat";

$mysqli = new mysqli($hostname,$username,$password,$database);
if($mysqli -> connect_error){
    echo "Falha na conexão" . $mysqli -> connect_error;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="Inputs">
        Nome: <input type="text" placeholder="Nome"><br></br>
        Email: <input type="email" placeholder="Email"><br></br>
        Senha: <input type="password" placeholder="Senha"><br></br>
        Telefone: <input type="number" placeholder="Telefone"><br></br>
    </div>
    <div class="btn">
        <button>Registre</button>
    </div>
</body>
</html>