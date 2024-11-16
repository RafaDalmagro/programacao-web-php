<?php
    require $_SERVER['DOCUMENT_ROOT'] .'/PHP/Aula06/ProjetoCRUD/conexao.php';
    require $_SERVER['DOCUMENT_ROOT'] .'/PHP/Aula06/ProjetoCRUD//src/database/categoria.php';

    function consultarCategorias(){     
        global $conexao;      
        return consultarCategoriasBD($conexao);
    }

    function consultarCategoriaById($id_categoria){  
        global $conexao;          
        return consultarCategoriaByIdBD($conexao, $id_categoria);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_categoria = $_POST['id_categoria'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        if(isset($_POST['inserir'])){
            if(cadastrarCategoriaBD($conexao, $nome, $descricao)){
                header('location:../pages/categoria/listarCategoria.php');  
            }
        } else if(isset($_POST['editar'])){
            if(editarCategoriaBD($conexao, $id_categoria, $nome, $descricao)){
                header('location:../pages/categoria/listarCategoria.php');  
            }
        } else if(isset($_POST['excluir'])){
            if(excluirCategoriaBD($conexao, $id_categoria)){
                header('location:../pages/categoria/listarCategoria.php');   
            }
        }
    }
?>