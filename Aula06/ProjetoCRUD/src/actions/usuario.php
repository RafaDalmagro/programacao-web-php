<?php
    require $_SERVER['DOCUMENT_ROOT'] .'/PHP/Aula06/ProjetoCRUD/conexao.php';
    require $_SERVER['DOCUMENT_ROOT'] .'/PHP/Aula06/ProjetoCRUD//src/database/usuario.php';

    function consultarUsuarios(){     
        global $conexao;      
        return consultarUsuariosBD($conexao);
    }

    function consultarUsuarioById($id_usuario){  
        global $conexao;          
        return consultarUsuarioByIdBD($conexao, $id_usuario);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_usuario = $_POST['id_usuario'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        
        $senha = $_POST['senha'];
        $senhaHashada = password_hash($senha, PASSWORD_DEFAULT);
        
        $telefone = $_POST['telefone'];
        $telefone = $_POST['telefone'];
        $telefone = preg_replace('/\D/', '', $telefone);
        if (strlen($telefone) === 11) {
            $telefone = preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $telefone);
        } elseif (strlen($telefone) === 10) {
            $telefone = preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $telefone);
        }


        if(isset($_POST['inserir'])){
            if(cadastrarUsuarioBD($conexao, $nome, $email, $senhaHashada, $telefone, $endereco)){
                header('location:../pages/usuario/listarUsuario.php');  
            }
        } else if(isset($_POST['editar'])){
            if(editarUsuarioBD($conexao, $id_usuario, $nome, $email, $telefone, $endereco)){
                header('location:../pages/usuario/listarUsuario.php');  
            }
        } else if(isset($_POST['excluir'])){
            if(excluirUsuarioBD($conexao, $id_usuario)){
                header('location:../pages/usuario/listarUsuario.php');  
            }
        }
    }
?>