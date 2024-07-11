<?php


    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "bd_blog";

    #tratamento de erro 
    try{

        #variavel pdo na qual vou instancia uma classe chamada pdo, vms fazer a conexao
        #guardei toda conexao
        $pdo = new PDO("mysql:host=" . $host . ";dbname=" . $dbname,  $user, $pass);
        #dps setto o atributo para fazer um relatorio de erro, guarda na variavel pdo
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        #retorna se a conexão foi efetuada com sucesso
        #echo "Conexão efetuada com sucesso!";

    #eu vou armazenar o erro que deu ali na variavel err
    } catch(PDOException $err){

        #vai retornar essa emnsagem com o erro
        echo  "Houve um erro no banco de dados" . $err->getMessage();
        exit;

    }

?>


