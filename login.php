<?php
$hostname =  "localhost";
$username = "root";
$password = "";
$hostname = "ieat";

$mysqli = new mysqli($hostname, $username, $password,$hostname);
if ($mysqli->connect_error) {
    echo "Falha na conexão" . $mysqli->connect_error;
}
function addlogin($nome,$email,$senha,$mysqli){
    $mysqli->query("INSERT INTO usuarios(nome,email,senha VALUES ('{$nome}','{$email}','{$senha}')");
}
function addMensagem($mensagem){
    echo $mensagem;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    addlogin($nome,$email,$senha,$mysqli);
    addMensagem("Você foi cadastrado com sucesso!");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="/foto.ico">
    <title>Pagina de login ieat</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container Registrar">
            <form>
                <h1>Crie Sua Conta!</h1>
                <input type="text" placeholder="Nome" name="nome"required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Senha" name="senha" required>
                <button>Registrar</button>
            </form>
        </div>
        <div class="form-container login">
            <form>
                <h1>Faça seu login!</h1>
                <input type="email" placeholder="Email"  name="email" required>
                <input type="password" placeholder="Senha" name="senha" required>
                <a href="#">Esqueceu sua senha?</a>
                <button>Login</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem vindo de volta!</h1>
                    <p>Caso já possua uma conta faça seu login com ela!</p>
                    <button class="hidden" id="login">Login</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá caro comedor!</h1>
                    <p>Registre sua conta para utilizar o site e pedir altas gostosuras!</p>
                    <button class="hidden" id="register">Registrar-se</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>