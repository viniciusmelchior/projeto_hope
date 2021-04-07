<?php 
     $titulo = 'Doe Já';
    include 'componentes/head.php';
    include 'componentes/header.php';
?>

<main class="main-doe-ja">  
        <div class="tela-cadastro-login">
            <div>
                <h3>Já possui conta?</h3>
                <p>Faça o login</p>
                <form action="login.php" method="POST">
                     <div>
                         <label for="email">Email</label>
                         <input type="email" name="email" id="input-email" placeholder="email@exemplo.com">
                     </div>
                     <div>
                     <label for="senha">Senha</label>
                    <input type="password" name="senha" id="input-senha">
                     </div>
                     <div>
                     <input type="submit" value="Login">
                     </div>
                </form>
            </div>
            <hr>
            <div>
                <h3>Não possui conta?</h3>
                <a href="form-cadastro.php">Registre-se agora</a>
            </div>
        </div>      
        <div class="container1">
            <div>
                <img src="imagens/fmpg.jpeg">
            </div>
            <div>
                <img src="imagens/fmpg1.png">
            </div>
            <div>
                <img src="imagens/fmpg2.png">
            </div>
            <div>
                <img src="imagens/fmpg4.png">
            </div>
        </div>
    </main>

<?php
    include 'componentes/footer.php';
   