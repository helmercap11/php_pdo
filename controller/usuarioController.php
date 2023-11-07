<?php
require_once'../conexao/conexao.php';
require_once'../models/usuario.php';


$p=$_GET['p'];

if($p=="salvar"){
    $nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING); 
    $senha=filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $contacto=filter_input(INPUT_POST, 'contacto', FILTER_SANITIZE_STRING);
    $morada=filter_input(INPUT_POST, 'morada', FILTER_SANITIZE_STRING);


    $retorno=USUARIO::salvar($nome,$email,$senha,$contacto,$morada);
    if($retorno==1){
        echo "Sucesso";
    } else {
        echo "erro";
    }
}

?>