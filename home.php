<?php
echo '<a class="btnSair" href="?logout">sair</a>';
include('cabecalho.php');
echo '<h4 class="cabecalhoHome">Bem vindo ' . $_SESSION['login'] . '</h4>';
?>
<div class="botoesInicial">
    <button class="botaoInicial" onclick="location.href='/buscar'">
        <img src="./images/botaolupa.svg" alt="">
        <p>Busco Veículos para alugar</p>
    </button>
    <button class="botaoInicial">
        <img src="./images/botaoanunciar.svg" alt="">
        <p>Quero anunciar meu veículo para locação!</p>
    </button>
</div>