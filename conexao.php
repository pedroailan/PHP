<?php
    $hostname = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "db_equipamentos";
    $conexao = mysqli_connect($hostname, $usuario, $senha, $db);

    /* try{
        $conexao = mysqli_connect($dsn, $usuario, $senha);
        $query = '
            insert into tb_equipamentos(
                tipo, quantidade, data_cadastro
            ) values (
                "Jorge", "a@Q", "12345"
            )
        ';

        $retorno = $conexao->exec($query);
        echo $retorno;
    } catch(PDOException $e) {
        echo 'Erro:  '.$e->getCode(). 'Mensagem: '.$e->getMessage();
    } */


?>