<?php
require_once('classes/usuario.class.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $usuarios = Usuario::listar();


    var_dump($_POST);
    foreach ($usuarios as $usuario) {
        if ($usuario['nome'] === $username && $usuario['senha'] === $password) {
            header('Location: chapa.php');
            exit();
        }
    }
    header('Location: login.php?error=1');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h2 class="text-center" id="spaceTitle">Entre na sua conta</h2>
                <div class="d-flex justify-content-center">
                    <form action="login.php" method="post">
                        <div class="mb-4">
                            <input class="form-control" type="text" id="input" name="username" placeholder="Nome de usuário">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="password" id="input" name="password" placeholder="Senha">
                        </div>
                        <div class="d-flex justify-content-end mb-5">
                            <a href="senha.php">Esqueci a senha</a>
                        </div>
                        <div class="d-grid col-8 mx-auto" id="space">
                            <button class="button">Entrar</button>
                        </div>
                        <div class="d-flex justify-content-center mt-5">
                            <p>Não tem conta? <a href="cadastro.php">Clique aqui para fazer cadastro.</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block imagem">
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
