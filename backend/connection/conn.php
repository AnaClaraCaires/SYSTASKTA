<?php
//onde esta o banco
    $hostname = "localhost";
//nome do banco
    $dbname = "systaskta";
//"root" como padrao
    $username = "root";
//nao foi solicitado a senha = " "
    $password = "";

// if/try (tente alguma coisa) e else/catch
    try{
        $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
//'teste todos os erros e excessões de erros';
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'A conexão com o banco de dados '.$dbname.', foi realizado com sucesso';

    }
// "PDOExcepition" = analisa o codigo de cima e guarda na variavel $e; pega o erro e passa para a função 'getMenssage' - soltando um texto
    catch(PDOExcepition $e){
        echo 'ERROR: '.$e->getMessage();
    }