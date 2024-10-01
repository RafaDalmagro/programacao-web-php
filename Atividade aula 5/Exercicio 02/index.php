<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ex 02</title>
</head>
<body>
    <form action="" class="d-flex flex-column align-items-center bg-danger">
        <div class="p-0 m-0 bg-success w-100 p-5">
            <div>
                <h1>Avaliação do Site</h1>
            </div>
            <div class="mb-3">
                <h2>O que achou do site?</h2>
                <input type="radio" id="muitoBom" name="feedback" value="4" class="form-control">
                <label for="muitoBom" class="form-label">Muito bom</label>
    
                <input type="radio" id="bom" name="feedback" value="3" class="form-control">
                <label for="bom" class="form-label">Bom</label>
    
                <input type="radio" id="regular" name="feedback" value="2" class="form-control">
                <label for="regular" class="form-label">Regular</label>
    
                <input type="radio" id="lixo" name="feedback" value="1" class="form-control">
                <label for="lixo" class="form-label">Um lixo</label>
            </div>
            <div>
                <h2>Qual a seção que você mais gostou??</h2>
                <select id="frutas" name="frutas">
                    <option value="cartaz">Em cartaz</option>
                    <option value="lancamento">Lançamento</option>
                    <option value="esgotada">Esgotada</option>
                    <option value="3d">3D</option>
                </select>
                <label for="outra">Outra:</label>
                <input type="text">
            </div>
    
            <div>
                <h2>Digite seus comentários abaixo:</h2>
                <input type="text">
            </div>
            <div>
                <h2>Diga-nos como entrar em contato com você:</h2>
                <div class="d-flex align-items-center">
                    <div class="mx-2">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mx-2">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mx-2">
                        <label for="nome" class="form-label">Fone</label>
                        <input type="tel" class="form-control">
                    </div>
                </div>
            </div>
            <div>
                <input type="checkbox">
                <label for="quero">Quero receber novidades por e-mail</label>
            </div>
            <div>
                <input type="button" value="Enviar Dados">
                <input type="button" value="Limpar Formulário">
            </div>
        </div>
    </form>
</body>
</html>