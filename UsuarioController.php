<?php

    require 'models/Usuario.php'; //recuperada model do usuário
    require 'models/usuario-service.php'; //recupera camada de serviços com os métodos
    require 'conexao.php'; //recupera arquivo de conexao


    $usuario = new Usuario();
    $usuario->__set('nome', $_POST['nome']);
    $usuario->__set('email', $_POST['email']);
    $usuario->__set('senha', $_POST['senha']);

    $conexao = new Conexao();

    $usuarioService = new UsuarioService($conexao, $usuario);
    $usuarioService->inserir();

    header('location:painel.php');

    
?>


