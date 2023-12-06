<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadados -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Estilos e scripts externos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Estilos internos -->
    <link rel="stylesheet" href="assets/senha.css">
    
    <!-- Título da página -->
    <title>Esqueci Minha Senha</title>
    
    <!-- Estilo personalizado para o corpo -->
    <style>
        body {
            background: url('img/img.png') center repeat;
            background-size: 100%;
            background-attachment: fixed;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <!-- Contêiner principal -->
    <div class="email-input-container">
        <!-- Formulário de recuperação de senha -->
        <div class="form-container">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><center>
                <h1>ESQUECEU SUA SENHA?</h1>
                <h4>Digite o código que foi enviado a você</h4><br><br><br>
                
                <!-- Formulário de código -->
                <form action="novasenha.php" method="post">
                    <div class="text">
                        <!-- Campo de entrada do código -->
                        <input type="text" name="code" placeholder="Digite o código" required>
                    </div>
                    
                    <!-- Espaçamento e botão de envio -->
                    <br><br><br><br><br><br>
                    <button type="submit">AVANÇAR</button>
                </form>
            </center>
        </div>
    </div>
</body>

</html>
