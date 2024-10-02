<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ex 02</title>
</head>
<body>
    <form action="script.php" method="POST" class="d-flex flex-column p-5 bg">
        <div>
            <h1>Avaliação do Site</h1>

            <div class="mb-3">
                <h2>O que achou do site?</h2>
                <div class="m-1">
                    <input type="radio" id="muitoBom" name="avaliacao" value="Muito bom" class="form-check-input">
                    <label for="muitoBom" class="form-check-label">Muito bom</label>
                </div>
                <div class="m-1">
                    <input type="radio" id="bom" name="avaliacao" value="Bom" class="form-check-input">
                    <label for="bom" class="form-check-label">Bom</label>
                </div>
                <div class="m-1">
                    <input type="radio" id="regular" name="avaliacao" value="Regular" class="form-check-input">
                    <label for="regular" class="form-check-label">Regular</label>
                </div>
                <div class="m-1">
                    <input type="radio" id="lixo" name="avaliacao" value="Um lixo" class="form-check-input">
                    <label for="lixo" class="form-check-label">Um lixo</label>
                </div>
            </div>

            <div class="mb-3">
                <h2>Qual a seção que você mais gostou?</h2>
                <select class="form-select" name="selecao" aria-label="Default select example">
                    <option value="Em cartaz" selected>Em cartaz</option>
                    <option value="Lançamento">Lançamento</option>
                    <option value="Esgotada">Esgotada</option>
                    <option value="3D">3D</option>
                </select>

                <div class="mt-2">
                    <label for="outras" class="form-label">Outra: </label>
                    <input type="text" class="form-control" name="outras" id="outras">
                </div>
            </div>

            <div class="mb-3">
                <h2>Digite seus comentários abaixo:</h2>
                <textarea class="form-control" name="comentarios" id="comentarios" rows="5"></textarea>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-sm-4">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="col-sm-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="e-mail">
                </div>
                <div class="col-sm-4">
                    <label for="fone" class="form-label">Fone</label>
                    <input type="tel" class="form-control" name="fone">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="novidades" id="novidades">
                    <label class="form-check-label" for="novidades">
                        Quero receber as novidades do site por e-mail
                    </label>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary" value="Enviar!" name="enviar">Enviar dados</button>
                <button type="reset" class="btn btn-secondary">Limpar formulário</button>
            </div>
        </div>
    </form>
</body>
</html>