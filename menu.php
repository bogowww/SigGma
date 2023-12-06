<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Definindo o conjunto de caracteres -->
    <meta charset="UTF-8">
    
    <!-- Especificando a versão do Internet Explorer e seu modo de renderização -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Definindo a largura da viewport e a escala inicial para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Importando o arquivo de estilo para o menu -->
    <link rel="stylesheet" href="assets/menu.css">
</head>

<body>
    <!-- Barra de navegação -->
    <nav class="body navbar navbar-expand-lg">
        <!-- Logomarca no menu -->
        <li class="font menu-item">
            <img src="img/logomenu.png" alt="Ícone" />
        </li>
        
        <!-- Botão de alternância para menus responsivos -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Itens de navegação -->
        <div class="nav-item" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <!-- Item de navegação - Sobre -->
                <li class="font nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Sobre</a>
                </li>
                
                <!-- Item de navegação - Arrecadação -->
                <li class="font nav-item">
                    <a class="nav-link" href="#">Arrecadação</a>
                </li>
                
                <!-- Item de navegação - Votação -->
                <li class=" font ">
                    <a class="nav-link" href="#">Votação</a>
                </li>
                
                <!-- Item de navegação - Contato -->
                <li class="font nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                
                <!-- Item de navegação - Manual (com link para download de um PDF) -->
                <li class="font nav-item">
                    <a class="nav-link" href="pdf/pdfSiGma.pdf" download>Manual</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Imagem abaixo do menu -->
    <img class="image-below-menu" src="img/tela.png" alt="Imagem abaixo do menu">

    <!-- Container principal -->

        <!-- Espaçamento adicional no início e no final do container -->
        <br><br>
    </div>
</body>

</html>
