<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Aula 4</title>
</head>
<body>
    <form action="" class="">
        <h1>Formulário de Feedback</h1>

        <div>
            <label>O que achou do site?</label><br>
            <input type="radio" id="muito-bom" name="opiniao-site" value="muito-bom">
            <label for="muito-bom">Muito bom</label><br>

            <input type="radio" id="bom" name="opiniao-site" value="bom">
            <label for="bom">Bom</label><br>

            <input type="radio" id="ruim" name="opiniao-site" value="ruim">
            <label for="ruim">Regular</label><br>

            <input type="radio" id="lixo" name="opiniao-site" value="lixo">
            <label for="lixo">Um lixo</label><br>
        </div>

        <br>

        <div>
            <label for="secao">Qual seção gostou mais?</label><br>
            <select id="secao" name="secao">
                <option value="em-cartaz">Em cartaz</option>
                <option value="fora-cartaz">Fora de cartaz</option>
            </select>

            <label for="outra">Outra:</label><br>
            <input type="text" id="outra" name="outra">
        </div>

        <br>

        <div>
            <label>Digite seus comentários no campo abaixo</label><br>
            <input type="text">
        </div>

        <button type="submit">Enviar</button>
    </form>

    <?php 

    ?>
</body>
</html>