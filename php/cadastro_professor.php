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
        
        $professor = $_POST['professor'] ?? ''; 
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
        $formacao = $_POST['formacao'] ?? ''; 
        $faculdade = $_POST['faculdade'] ?? ''; 
        $disciplina = $_POST['disciplina'] ?? '';

        $enderecoCompleto = $endereco . ', ' . $complemento . ', ' . $cep . ', ' . $bairro . ', ' . $cidade;


            $sql = "INSERT INTO professor (
            name_teacher,
            date_born,
            gender,
            cpf,
            address,
            state,
            phone,
            training,
            university,
            matter

        ) VALUES (
            '$professor',
            '$data',
            '$sexo',
            '$cpf',
            '$enderecoCompleto',
            '$estado',
            '$telefone',
            '$formacao',
            '$faculdade',
            '$disciplina'
        )";

        if ($connection->exec($sql)) {
                echo "Dados inseridos";
        }
        



    ?>


</body>
</html>