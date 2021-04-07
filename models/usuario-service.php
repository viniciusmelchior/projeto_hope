<?php

class UsuarioService{

    private $conexao;
    private $usuario;

    public function __construct(Conexao $conexao, Usuario $usuario)
    {
        $this->conexao = $conexao->conectar();
        $this->usuario = $usuario;
    }

    public function inserir(){
        $query = 'insert into usuarios(nome,email,senha)values(:nome,:email,:senha)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $this->usuario->__get('nome'));
        $stmt->bindValue(':email', $this->usuario->__get('email'));
        $stmt->bindValue(':senha', $this->usuario->__get('senha'));
        $stmt->execute();
    }

    public function recuperar(){

    }

    public function atualizar(){

    }

    public function remover(){

    }


}