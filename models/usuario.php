<?php
require_once'../conexao/conexao.php';

class USUARIO {
    
    public static function salvar($nome,$email,$senha,$contacto,$morada){
        $conexao=Connection::getConn();
        $query="insert into usuario(nome, email,senha, contacto, morada) values(:nome,:email, :senha,:contacto,:morada)";
        $salva=$conexao->prepare($query);
        $salva->bindValue(':nome', $nome);
        $salva->bindValue(':email', $email);
        $salva->bindValue(':senha', $senha);
        $salva->bindValue(':contacto', $contacto);
        $salva->bindValue(':morada', $morada);

        $retorno =0;
        
        if($salva->execute()){
            $retorno=1;
        }
        return $retorno;

    
    }
}
?>