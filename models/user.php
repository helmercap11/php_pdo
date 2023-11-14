<?php
require_once'../conexao/conexao.php';

class USUARIO {
    
    public static function save($nome,$email,$senha,$contacto,$morada){
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

    /*public static edit_user($nome,$email,$senha,$contacto,$morada){
        $conexao=Connection::getConn();
        $save=$conexao->prepare("update usuario set nome:n, email:e, senha:s, contacto:c, morada:m");
        $save->bindValue(':n',$nome);
        $save->bindValue(':e', $email);
        $save->bindValue(':s', $senha);
        $save->bindValue(':c', $contacto);
        $save->bindValue(':m', $morada);
        $return = 0;
        if($save->execute()){
            $return = 1;
        }
        return $return;
    }*/
}
?>