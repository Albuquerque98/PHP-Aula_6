<?php

    class Usuario{

        //Atributos da classe
       public $nome;
       protected $cpf;
       private $endereco;

       //Construtor da classe
       function Usuario(){

       }

       //Métodos
       private function preparaUsuario(){
        $this->nome = "Leonardo";
        $this->cpf = "9999999999";
        $this->endereco = "Rua Fulano de Tal, Número 0";
       }

       public function getCpf(){
        return $this->cpf;
       }

       public function getNome(){
        return $this->nome;
       }

       public function getEnder(){
        return $this->endereco;
       }
    }

    //Instanciando o objeto e acessando seus respectivos objetos
    $usu - new Usuario();

    $usu->getCpf();

    $usu->getNome();

    ?>