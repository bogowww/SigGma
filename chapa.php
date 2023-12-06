<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadados -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Estilos e scripts externos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/menu.css">
    <link rel="stylesheet" href="assets/chapa.css">
</head>

<body>
    <!-- Inclusão do menu -->
    <?php include 'menu.php' ?>
    <div class="container">

        <!-- Título -->
        <h1 class="h1">CHAPAS INSCRITAS</h1>
        <br><br>

        <!-- Linha com duas colunas -->
        <div class="row">
            <!-- Primeira coluna -->
            <div class="col-md-6">
                <!-- Contêiner quadrado com imagem -->
                <div class="square-container">
                    <div class="square-content">
                        <img src="img/upload.png" alt="Chapa Image"><br>
                    </div>
                </div>
                <br><br>
                <!-- Título da chapa -->
                <h2 class="h2">NOME DA CHAPA</h2>
                <br><br>
                <!-- Descrição da chapa -->
                <h3 class="texto">Gabriel da Cunha Barbosa, Inti Bohmann Leite da Luz, Gustavo Preilipper, Victor Hugo Reinicke, Guilherme Cellarius Dubiela, Nicole Rezena, Laila
                    Vitória Marconatto, Gustavo Gomes Giancristofaro, Alison Nazário, Pedro H. Bezerra dos Santos.</h3>
            </div>

            <!-- Segunda coluna -->
            <div class="col-md-6">
                <!-- Contêiner quadrado com imagem -->
                <div class="square-container">
                    <div class="square-content">
                        <img src="img/upload.png" alt="Chapa Image"><br>
                    </div>
                </div>
                <br><br>
                <!-- Título da chapa -->
                <h2 class="h2">NOME DA CHAPA</h2>
                <br><br>
                <!-- Descrição da chapa -->
                <h3 class="texto">Gabriel da Cunha Barbosa, Inti Bohmann Leite da Luz, Gustavo Preilipper, Victor Hugo Reinicke, Guilherme Cellarius Dubiela, Nicole Rezena, Laila
                    Vitória Marconatto, Gustavo Gomes Giancristofaro, Alison Nazário, Pedro H. Bezerra dos Santos.</h3>
            </div>
        </div>
        <br><br><br>
    </div>
    <!-- Parágrafo de aviso -->
    <p class="text">Para votar é necessário ter CADASTRO! <a href="login.php">Fazer Login</a></p>

    <!-- Contêiner de texto fora do layout -->
    <div class="texto-fora-container">
        <!-- Botão de votar com acionamento de modal -->
        <button class="button" data-bs-toggle="modal" data-bs-target="#votarModal">VOTAR</button>
    </div>

    <!-- Modal de votação -->
    <div class="modal fade" id="votarModal" tabindex="-1" aria-labelledby="votarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Contêiner dentro do modal -->
                    <div class="container">
                        <!-- Linha dentro do contêiner -->
                        <div class="row">
                            <!-- Coluna 1 -->
                            <div class="col-md-6">
                                <!-- Contêiner quadrado com imagem -->
                                <div class="square-container">
                                    <div class="square-content">
                                        <img src="img/upload.png" alt="Chapa Image"><br>
                                        <h6 class="fontchapa"> CHAPA 01</h6>
                                    </div>
                                </div><br><br><br>

                                <!-- Checkbox e texto da Chapa 1 -->
                                <input type="checkbox" name="" id="" class="fontc"> Chapa 1</input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
