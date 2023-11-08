<?php
require_once('classes/usuario.class.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmacao_senha = $_POST['confirmacao_senha'];

    if ($senha === $confirmacao_senha) {
        $novoUsuario = new Usuario(null, $nome, $matricula, $senha, $email);

        $inserido = $novoUsuario->inserir();

        if ($inserido) {
            header('Location: login.php');
            exit();
        } else {
            header('Location: cadastro.php?error=1');
            exit();
        }
    } else {
        header('Location: cadastro.php?error=2');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login_cadastro.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-none d-md-block imagem">
            </div>
            <div class="col-md-6 col-sm-12">
                <h2 class="text-center" id="spaceTitleCadastro">Crie uma conta</h2>
                <div class="d-flex justify-content-center">
                    <form action="" method="post">
                        <div class="mb-4">
                            <input class="form-control input" type="text" id="nome" name="nome" placeholder="Nome de usuário">
                        </div>
                        <div class="mb-4">
                            <input class="form-control input" type="text" id="matricula" name="matricula"  placeholder="Número de matrícula">
                        </div>
                        <div class="mb-4">
                            <input class="form-control input" type="email" id="email" name="email" placeholder="Endereço de e-mail">
                        </div>
                        <div class="mb-4">
                            <input class="form-control input" type="password" id="senha"  name="senha"  placeholder="Senha">
                        </div>
                        <div class="mb-4">
                            <input class="form-control input" type="password" id="confirmacao_senha"  name="confirmacao_senha"  placeholder="Repita sua senha">
                        </div>
                        <div class="mb-4">
                            <input type="checkbox" class="" name="lembrar_senha" id="lembrar_senha">
                            <label class="" for="lembrar_senha">Lembrar senha</label>
                        </div>
                        <div class="d-grid col-8 mx-auto" id="space">
                            <button class="button">Entrar</button>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <p>Já tem conta? <a href="login.php">Clique aqui para fazer login.</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
