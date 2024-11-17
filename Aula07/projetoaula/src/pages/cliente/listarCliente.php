<?php   
    if (session_status() == PHP_SESSION_NONE) {

        session_start(); 
    }

    require '../../../conexao.php';
    require '../../../src/actions/cliente.php';

    $clientes = consultarClientes();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Cadastro de Cliente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/sidebar.css">
    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>
    <?php include('../menus/sidebar.php')?>
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <h1>Listar Clientes</h1>
            <a href="./inserirCliente.php" type="button" class="btn btn-primary mb-4 mt-4">
                <i class="bi bi-plus-square"></i>
                <span> Novo Cliente</span>
            </a>
        </div>
        <div class="w-100">
            <?php include('../../../mensagem.php')?>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID CLIENTE</th>
                    <th> NOME </th>
                    <th> EMAIL </th>
                    <th> TELEFONE </th>
                    <th> ENDEREÇO </th>
                    <th> DATA REGISTRO </th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php
                
                foreach($clientes as $cliente):

                ?>
                <tr>
                    <td scope="row">
                        <?php echo  $cliente['id_cliente']; ?>
                    </td>
                    <td><?php echo $cliente['nome']; ?></td>
                    <td><?php echo $cliente['email']; ?></td>
                    <td><?php echo $cliente['telefone']; ?></td>
                    <td><?php echo $cliente['endereco']; ?></td>
                    <td><?php echo $cliente['data_registro']; ?></td>
                    <td>
                        <a class="btn btn-primary" href="./editarCliente.php?id=<?php echo $cliente['id_cliente']?>">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                    <td>

                        <form action="../../actions/cliente.php" method="post">
                            <input hidden type="text" name="id_cliente" id="id_cliente"
                                value=<?php echo $cliente['id_cliente'] ?>>
                            <button class="btn btn btn-danger"
                                onclick="return confirm('Tem certeza que deseja excluir?')" name="excluir"
                                type="submit"><i class="bi bi-trash3"></i></button>
                        </form>
                    </td>
                </tr>

                <?php endforeach; ?>


            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="../../../js/mensagem.js"></script>
</body>

</html>