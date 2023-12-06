<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Definindo o conjunto de caracteres -->
    <meta charset="UTF-8">
    
    <!-- Definindo a largura da viewport e a escala inicial para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Importando a biblioteca Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- Importando o framework Bootstrap e seu JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    
    <!-- Importando o arquivo de estilo personalizado para a página de redefinição de senha -->
    <link rel="stylesheet" href="assets/senha.css">

    <!-- Título da página -->
    <title>Esqueci Minha Senha</title>

    <!-- Estilos específicos para o corpo da página -->
    <style>
        body {
            background: url('img/img.png') center repeat;
            background-size: 100%;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <!-- Container principal para o formulário de redefinição de senha -->
    <div class="email-input-container">
        <div class="form-container">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><center>
            
                <!-- Título da página -->
                <h1>ESQUECEU SUA SENHA?</h1>
                
                <!-- Subtítulo da página -->
                <h4>Digite a sua nova senha</h4><br><br><br>
                
                <!-- Formulário para a redefinição de senha -->
                <form action="enviar_email.php" style="vertical-align: center;" method="post">
                    
                    <!-- Campo de senha -->
                    <div class="input-group password-input submit-line">
                        <input type="password" name="password" id="senha" placeholder="Senha" required>
                        <!-- Ícones para mostrar/ocultar a senha -->
                        <img src="img/olho.png" id="olhoF" alt="" width="20" class="olho" onclick="esconder()">
                        <img src="img/visivel.png" id="olhoA" alt="" width="20" class="olho" hidden onclick="mostrar()">
                        <div class="input-group-append"></div>
                    </div>
                    
                    <!-- Campo para repetir a senha -->
                    <input type="password" name="password" id="senha1" placeholder="Repita a sua senha" required><br><br>
                    
                    <!-- Checkbox para lembrar a senha -->
                    <div style="display: flex; align-items: center;">
                        <input type="checkbox" name="lembrar" id="lembrar">
                        <label class="gotham" for="lembrar">Lembrar a senha</label>
                    </div>
                    
                    <!-- Espaçamento adicional -->
                    <br><br><br><br><br><br>
                    
                    <!-- Botão de envio do formulário -->
                    <button type="submit">SALVAR</button>
                
                </form>
            
            </center>
        </div>
    </div>

    <!-- Script JavaScript para mostrar/ocultar a senha -->
    <script>
        function mostrar() {
            olho = document.getElementById("olhoF");
            olho.removeAttribute("hidden");
            olho1 = document.getElementById("olhoA");
            olho1.setAttribute("hidden", "true");
            senha = document.getElementById("senha");
            senha.setAttribute("type", "password");
            senha1 = document.getElementById("senha1");
            senha1.setAttribute("type", "password");
        }

        function esconder() {
            olho = document.getElementById("olhoA");
            olho.removeAttribute("hidden");
            olho1 = document.getElementById("olhoF");
            olho1.setAttribute("hidden", "true");
            senha = document.getElementById("senha");
            senha.setAttribute("type", "text");
            senha1 = document.getElementById("senha1");
            senha1.setAttribute("type", "text");
        }
    </script>
</body>

</html>
