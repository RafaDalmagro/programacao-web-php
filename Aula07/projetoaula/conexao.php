<?php
    $host = 'localhost';
    $user = 'root';
    $password= '';
    $bd_name = 'comercio';

    $conexao = mysqli_connect($host, $user, $password, $bd_name);

    // http://localhost/projeto/conexao.php
    if(!$conexao){
        die("Conexão falhou: " . mysqli_connect_error());
    } 



?>