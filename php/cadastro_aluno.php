<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("connection.php");
        
        $aluno = $_POST['aluno'] ?? ''; 
        $data = $_POST['data'] ?? ''; 
        $sexo = $_POST['sexo'] ?? ''; 
        $cpf = $_POST['cpf'] ?? ''; 
        $endereco = $_POST['endereco'] ?? '';
        $complemento = $_POST['complemento'] ?? '';
        $cep = $_POST['cep'] ?? ''; 
        $bairro = $_POST['bairro'] ?? ''; 
        $cidade = $_POST['cidade'] ?? ''; 
        $estado = $_POST['estado'] ?? ''; 
        $telefone = $_POST['telefone'] ?? ''; 


        $enderecoCompleto = $endereco . ', ' . $complemento . ', ' . $cep . ', ' . $bairro . ', ' . $cidade;


            $sql = "INSERT INTO aluno (
            name_teacher,
            date_born,
            gender,
            cpf,
            address,
            state,
            phone

        ) VALUES (
            '$aluno',
            '$data',
            '$sexo',
            '$cpf',
            '$enderecoCompleto',
            '$estado',
            '$telefone'

        )";

        if ($connection->exec($sql)) {
                echo "Dados inseridos";
        }else{
            echo "ERROR";
        }
        



    ?>


</body>
</html>