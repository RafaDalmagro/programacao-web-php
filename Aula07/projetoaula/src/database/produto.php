<?php

function consultarProdutosBD( $conexao ) {
    $buscar_produtos = 'select * from produto';
    $query_produtos = mysqli_query( $conexao, $buscar_produtos );

    $listaProdutos = mysqli_fetch_all( $query_produtos, MYSQLI_ASSOC );

    mysqli_close( $conexao );

    return $listaProdutos;

}

function consultarProdutoByIdBD( $conexao, $idProduto ) {
    $buscar_produto = "select * from produto where id_produto = $idProduto";
    $query_produto = mysqli_query( $conexao, $buscar_produto );

    $produto = mysqli_fetch_array( $query_produto, MYSQLI_ASSOC );

    mysqli_close( $conexao );

    return $produto;

}

function cadastrarProdutoBD( $conexao, $nome, $descricao, $quantidade, $preco ) {
    $inserir_produto = "INSERT INTO produto (nome, descricao, qtde_estoque, preco) VALUES ('$nome', '$descricao', $quantidade, $preco)";
    $query_produto = mysqli_query( $conexao, $inserir_produto );

    if ( $query_produto ) {
        return true;
    } else {

        return false;
    }
}

function editarProdutoBD( $conexao, $id_produto, $nome, $descricao, $quantidade, $preco ) {
    $editar_produto = "UPDATE produto  set nome = '$nome', descricao = '$descricao', qtde_estoque=$quantidade, preco = $preco  where id_produto = $id_produto";
    $query_produto = mysqli_query( $conexao, $editar_produto );

    if ( $query_produto ) {
        return true;
    } else {

        return false;
    }
}

function excluirProdutoBD( $conexao, $id_produto ) {
    $excluir_produto = "delete from produto where id_produto = $id_produto";
    $query_produto = mysqli_query( $conexao, $excluir_produto );

    if ( $query_produto ) {
        return true;
    } else {

        return false;
    }
}

?>