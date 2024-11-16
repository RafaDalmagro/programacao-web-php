<?php

require '../../actions/cliente.php';

if ( session_status() == PHP_SESSION_NONE ) {
    session_start();
}

if ( isset( $_GET[ 'id' ] ) ) {
    $idCliente = $_GET[ 'id' ];
}

$cliente = consultarClienteById( $idCliente );

?>

<!doctype html>
<html lang='pt-br'>

<head>
    <title>Editar Cliente</title>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>

    <link rel='stylesheet' href='../../../css/cliente.css'>

</head>

<body>

    <div class='container'>
        <h1>Editar Cliente</h1>

        <div class='w-100'>
            <?php include( '../../../mensagem.php' )?>
        </div>

        <form action='' method='post'>

            <div class='form-group'>
                <input type='text' class='form-control' name='id_cliente' id='id_cliente'
                    value=<?php echo $cliente[ 'id_cliente' ] ?> hidden>
            </div>

            <div class='form-group'>
                <label for='nome'>Nome:</label>
                <input type='text' class='form-control' name='nome' id='nome' value="<?php echo $cliente['nome']?>"
                    placeholder="Informe
seu nome">
            </div>

            <div class='form-group'>
                <label for='email'>Email:</label>
                <input type='email' class='form-control' name='email' id='email' value="<?php echo $cliente['email']?>"
                    placeholder='Informe seu email'>
            </div>

            <div class='form-group'>
                <label for='senha'>Senha:</label>
                <input type='password' class="form-control <?php echo isset($_GET['erro']) ? 'erro' : '';?>"
                    name='senha' id='senha' placeholder='Informe sua senha' value='123456'>
            </div>

            <div class='form-group'>
                <label for='confirmar-senha'>Confirmação de senha:</label>
                <input type='password' class="form-control <?php echo isset($_GET['erro']) ? 'erro' : '';?>"
                    name='confirmar-senha' id='confirmar-senha' placeholder='Informe novamente sua senha'
                    value='123456'>
            </div>

            <div class='form-group'>
                <label for='telefone'>Telefone:</label>
                <input type='tel' class='form-control' name='telefone' id='telefone'
                    value="<?php echo $cliente['telefone']?>" placeholder='Informe seu telefone'>
            </div>

            <div class='form-group'>
                <label for='endereco'>Endereço:</label>
                <input type='text' class='form-control' name='endereco' id='endereco'
                    value="<?php echo $cliente['endereco']?>" placeholder='Informe seu endereço'>
            </div>

            <div class='form-group'>
                <a href='./listarCliente.php' class='btn btn-secondary'>Cancelar</a>
                <button type='submit' name='editar' class='btn btn-success'>Salvar Alterações</button>
            </div>
        </form>
    </div>

    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'
        integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'>
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'
        integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'>
    </script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'
        integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'>
    </script>
    <script src='../../../js/mensagem.js'></script>
</body>

</html>

?>