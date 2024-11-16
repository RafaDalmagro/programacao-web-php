<?php

function consultarClientesBD( $conexao ) {
    $buscar_clientes = 'select * from cliente';
    $query_clientes =  mysqli_query( $conexao, $buscar_clientes );

    $clientes =  mysqli_fetch_all( $query_clientes, MYSQLI_ASSOC );

    mysqli_close( $conexao );

    return $clientes;
}

function consultarClienteByIdBD( $conexao, $idCliente ) {

    $buscar_cliente = "select * from cliente where id_cliente= $idCliente";
    $query_cliente =  mysqli_query( $conexao, $buscar_cliente );
    $cliente = mysqli_fetch_array( $query_cliente );

    mysqli_close( $conexao );

    return $cliente;

}

function cadastrarClienteBD( $conexao, $nome, $email, $senha, $telefone, $endereco ) {
    $inserir_cliente = "insert into cliente (nome, email, senha, telefone, endereco) values ('$nome', '$email', '$senha','$telefone', '$endereco')";
    $query_cliente = mysqli_query( $conexao, $inserir_cliente );

    if ( $query_cliente ) {
        return true;
    } else {
        return false;
    }

}

function editarClienteBD( $conexao, $idCliente, $nome, $email, $senha, $telefone, $endereco ) {

    $alterarCliente =
    "UPDATE cliente 
    SET nome = '$nome', 
        email = '$email', 
        senha = '$senha',
        telefone = '$telefone', 
        endereco = '$endereco' ,
        data_registro = NOW()
    WHERE id_cliente = $idCliente";

    $query_cliente = mysqli_query( $conexao, $alterarCliente );

    if ( $query_cliente ) {
        return true;
    } else {
        return false;
    }
}

function excluirClienteBD( $conexao, $idCliente ) {
    $excluirCliente = "delete from cliente where id_cliente= $idCliente";

    $query_cliente = mysqli_query( $conexao, $excluirCliente );

    if ( $query_cliente ) {
        return true;
    } else {
        return false;
    }
}

?>