<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5</title>
</head>
<body>
    <form action="">
        <div>
            <h2>O que achou do site?</h2>
            <input type="radio" id="muitoBom" name="feedback" value="4">
            <label for="muitoBom">Muito bom</label>

            <input type="radio" id="bom" name="feedback" value="3">
            <label for="bom">Bom</label>

            <input type="radio" id="regular" name="feedback" value="2">
            <label for="regular">Regular</label>

            <input type="radio" id="lixo" name="feedback" value="1">
            <label for="lixo">Um lixo</label>
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
            <input type="text" style="width: 300px; height: 200px;">
        </div>
        <div>
            <h2>Diga-nos como entrar em contato com você:</h2>
            <label for="nome">Nome</label>
            <input type="text"><br>
            <label for="email">E-mail</label>
            <input type="email"><br>
            <label for="nome">Fone</label>
            <input type="tel"><br>
        </div>
        <div>
            <input type="checkbox">
            <label for="quero">Quero receber novidades por e-mail</label><br>
        </div>
        <div>
            <input type="button" value="Enviar Dados">
            <input type="button" value="Limpar Formulário">
        </div>
    </form>
</body>
</html>