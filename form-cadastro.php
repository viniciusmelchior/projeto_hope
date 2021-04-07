<?php 
     $titulo = 'Cadastro';
    include 'componentes/head.php';
    include 'componentes/header.php';
?>

<div class="tela-registro">
    <form action="UsuarioController.php" method="POST">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="input-nome">
        </div>
        <div>
            <label for="nome">Email</label>
            <input type="email" name="email" id="input-email">
        </div>
        <div>
            <label for="nome">Senha</label>
            <input type="password" name="senha" id="input-senha">
        </div>
        <div>
            <label for="nome">Idade</label>
            <input type="number" name="idade" id="input-idade" min="18" max="130">
        </div>
        <input type="submit" value="Confirmar">
    </form>
</div>

<?php
    include 'componentes/footer.php';