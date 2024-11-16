<?php

function validarLoginBD($conexao, $email,  $senha){
    $buscar_login = "select senha from cliente where email = '$email'";
    $query_login = mysqli_query($conexao, $buscar_login);

    $cliente = mysqli_fetch_array($query_login);
    $hash_senha_armazenada = $cliente['senha'];

    if(password_verify($senha, $hash_senha_armazenada)){       
        mysqli_close($conexao);
        return true;
    }else{
        mysqli_close($conexao);
        return false;
    }


}



?>