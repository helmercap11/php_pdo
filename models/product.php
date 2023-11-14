<?php 
require_once '../conexao/conexao.php';



class Product {
    public static function save($nome_produto,$preco,$descricao){
        $conexao=Connection::getConn();
        $query="insert into produto(nome_produto,preco,descricao) values(:nome_produto,:preco,:descricao)";
        $salva=$conexao->prepare($query);
        $salva->bindValue(':nome_produto', $nome_produto);
        $salva->bindValue(':preco', $preco);
        $salva->bindValue(':descricao', $descricao);
        $retorno = 0;
        
        if($salva->execute()){
            $retorno = 1;
        }

        return $retorno;
    }
}

?>