<?php
    function consultarUsuariosBD($conexao){
        $buscar_usuario = 'select * from usuario';
        $query_usuario = mysqli_query($conexao, $buscar_usuario);

        $listaUsuarios = mysqli_fetch_all($query_usuario, MYSQLI_ASSOC);

        mysqli_close($conexao);

        return $listaUsuarios;
    }

    function consultarUsuarioByIdBD($conexao, $id_usuario){
        $buscar_usuario = "select * from usuario where id_usuario = $id_usuario";
        $query_usuario = mysqli_query($conexao, $buscar_usuario);
        $usuario = mysqli_fetch_array($query_usuario, MYSQLI_ASSOC);
        mysqli_close($conexao);
        return $usuario;
    }

    function cadastrarUsuarioBD($conexao, $nome, $email, $senha, $telefone, $endereco){
        
        $senha_hashada = password_hash($senha, PASSWORD_DEFAULT);
        
        $inserir_usuario = "INSERT INTO usuario (nome, email, senha, telefone, endereco ) VALUES ('$nome', '$email', '$senha_hashada', '$telefone', '$endereco')";
        $query_usuario = mysqli_query($conexao, $inserir_usuario);

        if($query_usuario){
            return true;
        } else { 
            return false;
        }
    }

    function editarUsuarioBD($conexao, $id_usuario, $nome, $descricao, $quantidade, $preco){
        $editar_usuario = "UPDATE usuario SET nome='$nome', descricao='$descricao', quantidade = $quantidade, preco=$preco, data_registro=NOW()
        where id_usuario = $id_usuario";
        $query_usuario = mysqli_query($conexao, $editar_usuario);

        if($query_usuario){
            return true;
        } else { 
            return false;
        }
    }

    function excluirUsuarioBD($conexao, $id_usuario){
        $excluir_usuario = "delete from usuario where id_usuario =$id_usuario";
        $query_usuario = mysqli_query($conexao, $excluir_usuario);

        if($query_usuario){
            return true;
        } else { 
            return false;
        }
    }

?>