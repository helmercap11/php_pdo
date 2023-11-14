<?php
require_once '../conexao/conexao.php';
require_once '../models/product.php';


$p=$_GET['p'];

if($p=="save"){
    
    $nome_produto=filter_input(INPUT_POST, 'nome_produto', FILTER_SANITIZE_STRING);
    $preco=filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
    $descricao=filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);


    $retorno=Product::save($nome_produto, $preco, $descricao);

    if($retorno==1) {
        echo "sucesso";
    } else {
        echo "erro";
    }


}

?>