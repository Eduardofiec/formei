<?php

$host="localhost";
$port="3307";
/*porta pode ser diferente, nesse caso, precisa ser configurada*/ 
$database="formei";
$username="root";
$password=1234;

try {
    $conexao=new PDO("mysql:host=$host; dbname=$database", $username, $password);
}catch (Exception $e){
    echo $e->getMessage();
}

?>