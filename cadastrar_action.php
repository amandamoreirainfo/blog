<?php



    require "conn.php";


    #filtar a input que está sendo enviada como post
    $title_notice = filter_input(INPUT_POST, 'notice');
    $description_notice = filter_input(INPUT_POST, 'description');

    #informa se a variavel foi iniciada, ou seja, está vindo tudo correto
    #se estiver existindo eu vou retornar alguma coisa
    if (isset($title_notice) && isset($description_notice)){

        #prepare - vai preparar meu comando sql.
        #inserindo na tabela notices os valores dos campos
        #:notice - questão de segurança (para evitar burlas)
        #evitando sql injection
        $sql = $pdo->prepare("INSERT INTO notices (title_notice, description_notice) VALUES (:notice, :description)");
        #estou blindando os valores
        $sql->bindValue(':notice', $title_notice);
        $sql->bindValue(":description", $description_notice);
        #executar 
        $sql->execute();

        echo "

            <script>
                alert('Cadastrado com Sucesso!');
                window.location.href = 'index.php';
            </script>
        

        ";
        exit;
    
    } else {

        echo "

            <script>
                alert('Por favor, preencha todos os campos!');
                window.location.href = 'index.php';
            </script>
        
        ";

        exit;

    }

?>