<?php
    function consultarProdutosBD($conexao){
        $buscar_produtos = "SELECT p.id_produto, p.nome, p.descricao, p.qtde_estoque, p.preco, p.data_registro, c.nome AS categoria FROM Produto p LEFT JOIN Categoria c ON p.id_categoria = c.id_categoria";
        $query_produtos = mysqli_query($conexao, $buscar_produtos);

        $listaProdutos = mysqli_fetch_all($query_produtos, MYSQLI_ASSOC);

        mysqli_close($conexao);

        return $listaProdutos;
    }

    function consultarProdutoByIdBD($conexao, $id_produto){
        $buscar_produto = "select * from produto where id_produto = '$id_produto'";
        $query_produto = mysqli_query($conexao, $buscar_produto);

        $produto = mysqli_fetch_array($query_produto, MYSQLI_ASSOC);

        mysqli_close($conexao);

        return $produto;

    }

    function cadastrarProdutoBD($conexao, $nome, $descricao, $quantidade, $preco){
        $inserir_produto = "INSERT INTO produto (nome, descricao, qtde_estoque, preco) VALUES ('$nome', '$descricao', $quantidade, $preco)";
        $query_produto = mysqli_query($conexao, $inserir_produto);

        if($query_produto){
            return true;
        } else { 
            return false;
        }
    }

    function editarProdutoBD($conexao, $id_produto, $nome, $descricao, $quantidade, $preco, $id_categoria) {

        $editar_produto = "UPDATE produto SET nome = '$nome', descricao = '$descricao', qtde_estoque = $quantidade, preco = $preco,  id_categoria = $id_categoria, data_registro = NOW() WHERE id_produto = $id_produto";
        $query_produto = mysqli_query($conexao, $editar_produto);
    
        if ($query_produto) {
            return true;
        } else { 
            return false;
        }
    }
    
    function excluirProdutoBD($conexao, $id_produto){
        $excluir_produto = "delete from produto where id_produto =$id_produto";
        $query_produto = mysqli_query($conexao, $excluir_produto);

        if($query_produto){
            return true;
        } else { 
            return false;
        }
    }

?>