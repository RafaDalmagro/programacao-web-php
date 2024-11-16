<?php
require $_SERVER[ 'DOCUMENT_ROOT' ] .'/projetoaula/conexao.php';
require $_SERVER[ 'DOCUMENT_ROOT' ] .'/projetoaula/src/database/produto.php';

if ( session_status() == PHP_SESSION_NONE ) {
    session_start();
}

function consultarProdutos() {
    global $conexao;
    return consultarProdutosBD( $conexao );
}

function consultarProdutoById( $idProduto ) {
    global $conexao;
    return consultarProdutoByIdBD( $conexao, $idProduto ) ;
}

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {

    $id_produto = $_POST[ 'id_produto' ];
    $nome = $_POST[ 'nome' ];
    $descricao = $_POST[ 'descricao' ];
    $quantidade = $_POST[ 'quantidade' ];
    $preco = $_POST[ 'preco' ];

    if ( isset( $_POST[ 'inserir' ] ) ) {

        if ( cadastrarProdutoBD( $conexao, $nome, $descricao, $quantidade, $preco ) ) {
            $_SESSION[ 'mensagem' ] = 'Produto cadastrado com sucesso!';
            $_SESSION[ 'acao_sucesso' ] = true;
            header( 'location:../pages/produto/listarProduto.php' );
            exit();
        } else {
            $_SESSION[ 'mensagem' ] = 'Erro ao cadastrar produto!';
            $_SESSION[ 'acao_sucesso' ] = false;
            header( 'location:../pages/produto/listarProduto.php' );
            exit();
        }
    } else if ( isset( $_POST[ 'editar' ] ) ) {
        if ( editarProdutoBD( $conexao, $id_produto, $nome, $descricao, $quantidade, $preco ) ) {
            $_SESSION[ 'mensagem' ] = 'Produto editado com sucesso!';
            $_SESSION[ 'acao_sucesso' ] = true;
            header( 'location:../pages/produto/listarProduto.php' );
            exit();
        } else {
            $_SESSION[ 'mensagem' ] = 'Erro ao editar produto!';
            $_SESSION[ 'acao_sucesso' ] = false;
            header( 'location:../pages/produto/listarProduto.php' );
            exit();
        }

    } else if ( isset( $_POST[ 'excluir' ] ) ) {
        if ( excluirProdutoBD( $conexao, $id_produto ) ) {
            $_SESSION[ 'mensagem' ] = 'Produto excluído com sucesso!';
            $_SESSION[ 'acao_sucesso' ] = true;
            header( 'location:../pages/produto/listarProduto.php' );
            exit();
        } else {
            $_SESSION[ 'mensagem' ] = 'Erro ao excluir produto!';
            $_SESSION[ 'acao_sucesso' ] = false;
            header( 'location:../pages/produto/listarProduto.php' );
            exit();
        }

    }

}
?>