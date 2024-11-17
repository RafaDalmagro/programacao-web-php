<?php

if ( session_status() == PHP_SESSION_NONE ) {
    session_start();
}

require $_SERVER[ 'DOCUMENT_ROOT' ] .'/PHP/Aula07/projetoaula/conexao.php';
require $_SERVER[ 'DOCUMENT_ROOT' ] .'/PHP/Aula07/projetoaula/src/database/cliente.php';

function consultarClientes() {
    global $conexao;

    return consultarClientesBD( $conexao );
}

function consultarClienteById( $idCliente ) {
    global $conexao;

    return consultarClienteByIdBD( $conexao, $idCliente );
}

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {

    $idCliente = $_POST[ 'id_cliente' ];

    if ( $_POST[ 'senha' ] != $_POST[ 'confirmar-senha' ] ) {

        $_SESSION[ 'mensagem' ] = 'As senhas não conferem!';
        $_SESSION[ 'acao' ] = false;

        if ( isset( $_POST[ 'inserir' ] ) ) {
            header( 'location:../pages/cliente/inserirCliente.php?erro=1' );
        } else {
            header( 'location:../cliente/editarCliente.php?id=' . $idCliente . '&erro=1' );
        }
        exit();

    } else {

        $nome = $_POST[ 'nome' ];
        $email = $_POST[ 'email' ];
        $senha = password_hash( $_POST[ 'senha' ], PASSWORD_DEFAULT );
        $telefone = $_POST[ 'telefone' ];
        $endereco = $_POST[ 'endereco' ];

        if ( isset( $_POST[ 'inserir' ] ) ) {
            if ( cadastrarClienteBD( $conexao, $nome, $email, $senha, $telefone, $endereco ) ) {
                $_SESSION[ 'mensagem' ] = 'Cliente inserido com sucesso!';
                $_SESSION[ 'acao_sucesso' ] = true;

                header( 'location:../pages/cliente/listarCliente.php' );
                exit();
            } else {
                $_SESSION[ 'mensagem' ] = 'Erro ao cadastrar cliente!';
                $_SESSION[ 'acao_sucesso' ] = false;
                header( 'location:../pages/cliente/listarCliente.php' );
                exit();
            }

        } else if ( isset( $_POST[ 'editar' ] ) ) {
            if ( editarClienteBD( $conexao, $idCliente, $nome, $email, $senha, $telefone, $endereco ) ) {
                $_SESSION[ 'mensagem' ] = 'Cliente alterado com sucesso!';
                $_SESSION[ 'acao_sucesso' ] = true;

                header( 'location:/projeto/src/pages/cliente/listarCliente.php' );
                exit();
            } else {
                $_SESSION[ 'mensagem' ] = 'Erro ao editar cliente!';
                $_SESSION[ 'acao_sucesso' ] = false;
                header( 'location:../pages/cliente/listarCliente.php' );
                exit();
            }

        } else if ( isset( $_POST[ 'excluir' ] ) ) {
            if ( excluirClienteBD( $conexao, $idCliente ) ) {
                $_SESSION[ 'mensagem' ] = 'Cliente excluído com sucesso!';
                $_SESSION[ 'acao_sucesso' ] = true;

                header( 'location:../pages/cliente/listarCliente.php' );
                exit();
            } else {
                $_SESSION[ 'mensagem' ] = 'Erro ao excluir cliente!';
                $_SESSION[ 'acao_sucesso' ] = false;
                header( 'location:../pages/cliente/listarCliente.php' );
                exit();
            }
        }
    }
}

?>