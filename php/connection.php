<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $password = "Yuri123208ma";
    $username = "root";
    $servername = "localhost";
    $database = "sistema_academico";
    try{
        $connection = new PDO("mysql:host=$servername; dbname=$database" , $username , $password );
        
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die("". $e->getMessage());
        } 
    ?>
</body>
</html>