<!doctype html>
<html lang="pt-br">

<head>
    <title>Cadastrar Usuário</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Cadastro de Usuário</h1>
        </div>

        <form action="../../actions/usuario.php" method="post">
            <div class="form-group">
                <label for="nome">Nome do Usuário:</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe o nome completo do usuário">
            </div>

            <div class="form-group">
                <label for="email">E-mail do usuário:</label>
                <input type="email" class="form-control" name="email" id="email"placeholder="Informe seu e-mail">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Informe seu número de telefone">
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Informe seu endereço">
            </div>

            <div class="form-group">
                <button type="reset" name="limpar" class="btn btn-secondary">Limpar</button>
                <button type="submit" name="inserir" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
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