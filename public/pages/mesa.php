<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Dashboard</title>
</head>
<bod
    <div class="container">
        <!-- BUTÕES -->
        <div class="buttons">
            <button onclick="solicitarNome('Abrir caixa')" class="campo"><img src="../icon/shopping-cart.svg" alt="" srcset="">Abrir caixa</button>
            <button onclick="solicitarNome('Fechar caixa')" class="campo"><img src="../icon/x.svg" alt="" srcset="">Fechar caixa</button>
            <button onclick="information()" class="campo"><img src="../icon/info.svg" alt="" srcset="">Informações</button>
            <button onclick="mesa()" class="campo"><img src="../icon/hexagon.svg" alt="" srcset="">Mesa</button>
            <button onclick="produto()" class="campo"><img src="../icon/shopping-bag.svg" alt="" srcset="">Produtos</button>
            <button onclick="suporte()" class="campo"><img src="../icon/terminal.svg" alt="" srcset="">Autores</button>
            <button onclick="suporte()" class="campo"><img src="../icon/headphones.svg" alt="" srcset="">Suporte</button>
            <button onclick="home()" class="campo"><img src="../icon/log-out.svg" alt="" srcset="">Sair</button>
        </div>
        <!-- HOME -->
        <img src="../imagem/logo.png" alt="" srcset="" class="imagem-home">
        <p id="usuario">bem vindo sr (a): <?php echo $_SESSION['nome_usuario'];?></p>
    </div>
    <!-- informações de mesa -->
    <section class="container-mesa">
        <div class="mesas">
            <p class="title-mesa">MESA 01</p>
            <p class="title-cliente">CLIENTE:</p>
            <p class="title-situacao">SITUAÇÃO:</p>
            <p class="title-reserva">RESERVA:</p>
        </div>
        <div class="mesas">
            <p class="title-mesa">MESA 02</p>
            <p class="title-cliente">CLIENTE:</p>
            <p class="title-situacao">SITUAÇÃO:</p>
            <p class="title-reserva">RESERVA:</p>
        </div>
        <div class="mesas">
            <p class="title-mesa">MESA 03</p>
            <p class="title-cliente">CLIENTE:</p>
            <p class="title-situacao">SITUAÇÃO:</p>
            <p class="title-reserva">RESERVA:</p>
        </div>
        <div class="mesas">
            <p class="title-mesa">MESA 04</p>
            <p class="title-cliente">CLIENTE:</p>
            <p class="title-situacao">SITUAÇÃO:</p>
            <p class="title-reserva">RESERVA:</p>
        </div>
        <div class="mesas">
            <p class="title-mesa">MESA 05</p>
            <p class="title-cliente">CLIENTE:</p>
            <p class="title-situacao">SITUAÇÃO:</p>
            <p class="title-reserva">RESERVA:</p>
        </div>
        <div class="mesas">
            <p class="title-mesa">MESA 06</p>
            <p class="title-cliente">CLIENTE:</p>
            <p class="title-situacao">SITUAÇÃO:</p>
            <p class="title-reserva">RESERVA:</p>
        </div>
    </section>
    <script src="../js/script.js"></script>
</body>
</html>
 