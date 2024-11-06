<?php
    require $_SERVER['DOCUMENT_ROOT'] .'./projeto/conexao.php';
    require $_SERVER['DOCUMENT_ROOT'] .'./projeto/src/database/usuario.php';

    function consultarUsuarios(){     
        global $conexao;      
        return consultarUsuariosBD($conexao);
    }

    function consultarProdutoById($id_usuario){  
        global $conexao;          
        return consultarProdutoByIdBD($conexao, $id_usuario);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id_produto = $_POST['id_usuario'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];

        if(isset($_POST['inserir'])){
            if(cadastrarUsuarioBD($conexao, $nome, $email, $senha, $telefone, $endereco)){
                header('location:../pages/usuario/listarUsuario.php');  
            }
        } else if(isset($_POST['editar'])){
            if(editarUsuarioBD($conexao, $id_usuario, $nome, $email, $senha, $telefone, $endereco)){
                header('location:../pages/usuario/listarUsuario.php');  
            }
        } else if(isset($_POST['excluir'])){
            if(excluirUsuarioBD($conexao, $id_usuario)){
                header('location:../pages/usuario/listarUsuario.php');  
            }
        }
    }
?>