<?php
    require '../../actions/categoria.php';
    $listaCategorias = consultarCategorias();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Lista de Categorias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../../css/categoria.css">
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <h1>Lista de Categorias</h1>

            <a href="./inserirCategoria.php" class="btn btn-primary">
                <i class="bi bi-plus-square"></i>
                <span>Nova Categoria</span>
            </a>
        </div>

        <div class="row">
            <table class="table bg-success">
                <thead>
                    <tr>
                        <th>ID CATEGORIA</th>
                        <th>NOME</th>
                        <th>DESCRIÇÃO</th>
                        <th>DATA DE REGISTRO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($listaCategorias as $categoria) { ?>
                    <tr>
                        <td scope="row"> <?php echo $categoria['id_categoria'] ?> </td>
                        <td> <?php echo $categoria['nome'] ?> </td>
                        <td> <?php echo $categoria['descricao'] ?> </td>
                        <td> <?php echo $categoria['data_registro'] ?> </td>
                        <td>
                            <a class="btn btn-primary" href="./editarCategoria.php?id_categoria=<?php echo $categoria['id_categoria'] ?>">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        </td>
                        <td>
                            <form action="../../actions/categoria.php" method="post">
                                <input type="number" name="id_categoria" id="id_categoria" value=<?php echo $categoria['id_categoria'] ?> hidden>
                                <button type="submit" name="excluir" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir categoria?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>