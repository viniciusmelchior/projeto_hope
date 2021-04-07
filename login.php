<?php 

echo "<h1>sistema de login</h1>";

$email = $_POST['email'];
$senha = $_POST['senha'];

echo "usuário: ".$email;
echo "<br>";
echo "senha: ".$senha;