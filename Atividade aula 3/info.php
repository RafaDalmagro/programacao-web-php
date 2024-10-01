<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: #d4d4d4;
        }
        img{
            max-width: 200px;
        }
    </style>
</head>
<body class="d-flex flex-column align-items-center p-5">
    <div class="w-75 rounded bg-light p-3">
        <div class="text-center bg-light p-2">
            <h1>Rafael Lima Dalmagro <span class="badge text-bg-dark">Exercício PHP</span></h1>
        </div>
        <div class="text-center">
            <div class="my-2 p-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                <h2 class="px-2">
                    Legenda
                </h2>
                <ul class="list-group">
                    <li class="list-group-item bg-dark text-white">Echo</li>
                    <li class="list-group-item bg-info">Resposta</li>
                </ul>
            </div>
        </div>
    
        <?php
            $old_error_reporting = error_reporting();
            error_reporting($old_error_reporting & ~E_WARNING);
            
            echo '<h2><span class="badge text-bg-primary my-2">Exercício 1</span></h2>';
            $nome = "Rafael";
            $idade = 25;
            
            echo '<h2><span class="badge text-bg-primary my-2">Exercício 2</span></h2>';
            $resposta2 = 'Resposta: Com as aspas duplas ele interpreta o valor das variáveis contidas dentro delas ao invés de apenas reproduzir o que está escrito de forma literal.';
            $linguagem = "PHP";

            echo '<div class="bg-dark text-white  p-3 rounded-top">' . "Programar em $linguagem é muito legal!<BR>" . "</div>";
            echo '<div class="bg-dark text-white  p-3">' . 'Programar em $linguagem é muito legal!<BR>' . "</div>";
            echo "<div class=\"bg-info rounded-bottom p-3 \">$resposta2</div>";
            
            echo '<h2><span class="badge text-bg-primary my-2">Exercício 3</span></h2>';
            $resposta3 = 'Resposta: O esperado era que ele exibisse a string "fruta" mas pelo que entendi ao colocar mais um "$" ele entende o valor dela como outra variável e então tras o valor já armazenado na outra variável com o mesmo nome como resultado final.';
            $id = "fruta";
            $fruta = "laranja";

            echo '<div class="bg-dark text-white  p-3 rounded-top">' . $id . "<BR>" . "</div>";
            echo '<div class="bg-dark text-white  p-3">' . $$id . "<BR>" . "</div>";
            echo "<div class=\"bg-info rounded-bottom p-3 \">$resposta3</div>";

            echo '<h2><span class="badge text-bg-primary my-2">Exercício 4</span></h2>';
            $resposta4 = 'Utilizei os "." para poder separar as aspas simples e aspas duplas e poder reproduzir que precisava.';

            echo '<div class="bg-dark text-white rounded-top p-3">' . "I'm the best PHP programer in the World!" . "</div>";
            echo "<div class=\"bg-info rounded-bottom p-3 \">$resposta4</div>";

            echo '<h2><span class="badge text-bg-primary my-2">Exercício 5</span></h2>';
            
            $a = 10;
            $b = "20";
            echo '<div class="bg-dark text-white  p-3 rounded-top">' . $a + $b . "</div>";
            echo '<div class="bg-info p-3 ">' . 'O PHP faz uma conversão automática de tipos. O número 10 é somado com a string "20", que é convertido pra numero inteiro 20.' . "</div>";

            $a = "10";
            $b = "20";
            echo '<div class="bg-dark text-white  p-3">' . $a + $b . "</div>";
            echo '<div class="bg-info p-3 ">' . 'Como as 2 variáveis são strings, elas são convertidas em números antes de somar.' . "</div>";
            
            $a = "10";
            $b = "20";
            echo '<div class="bg-dark text-white  p-3">' . $a . $b . "</div>";
            echo '<div class="bg-info p-3 ">' . 'Nesse caso, eles são apenas concatenados pelo "." e formam uma string completa.' . "</div>";

            $a = "10";
            $b = "20 vinte";
            echo '<div class="bg-dark text-white  p-3">' .  "Warning: A non-numeric value encountered in C:\xampp\htdocs\aula3\info.php on line 80<BR>". @$a + @$b . "</div>";
            echo '<div class="bg-info p-3 ">' . 'É apresentado um "Warning" sobre um valor não numérico e a parte que não é numérida da string é ignorada, logo é feita a soma dos numeros como se fossem inteiros e trazido o resultado da soma.' . "</div>";

            $a = "10";
            $b = "vinte 20";
            echo '<div class="bg-dark text-white  p-3">' . "Fatal error: Uncaught TypeError: Unsupported operand types: string + string in C:\xampp\htdocs\aula3\info.php:85 Stack trace: #0 {main} thrown in C:\xampp\htdocs\aula3\info.php on line 85" . "</div>";
            echo '<div class="bg-info rounded-bottom p-3 ">' . 'Apresenta um "Fatal error e interrompe a execução das outras funções." ' . "</div>";

            echo '<h2><span class="badge text-bg-primary my-2">Exercício 6</span></h2>';

            $estado = [ 
                "SC" => 'Florianópolis',
                "RS" => 'Porto Alegre',
                "PR" => 'Curitiba'
             ];

            echo '<div class="bg-dark text-white rounded-top p-3">' . "A capital de Santa Catarina é: " . $estado['SC'] . "</div>";
            echo '<div class="bg-dark text-white p-3">' . "A capital de Santa Catarina é: " . $estado['RS'] . "</div>";
            echo '<div class="bg-dark text-white rounded-bottom p-3">' . "A capital de Santa Catarina é: " . $estado['PR'] . "</div>";
            

            echo '<h2><span class="badge text-bg-primary my-2">Exercício 7</span></h2>';

            echo '<table class="bg-info rounded p-3"><tr>';
            for($i=1; $i<=10; $i++){
            echo '<td class="p-3">'. $i .'</td>';
            }
            echo "</tr></table>";
            
            echo '<h2><span class="badge text-bg-primary my-2">Exercício 8</span></h2>';
            
            echo '<table class="bg-info rounded text-white text-center" style="margin: 0 auto;">';
            for($i=1; $i<=10; $i++){
                if($i % 2){
                    echo "<tr>" . '<td class="p-3">' . $i . "</td></tr>";
                }
                else{
                    echo '<tr class="bg-success">' . '<td class="p-3">' . $i . "</td></tr>";
                }
            }
            echo '</table>';

            echo '<h2><span class="badge text-bg-primary my-2">Exercício 9</span></h2>';

            $curso = [
                "nome" => 'PHP',
                "data" => '25/09/2024',
                "carga horaria" => '80 Horas',
                "local" => 'Caçador'
            ];

            foreach($curso as $chave => $valor){
                echo '<div class="bg-info p-3">O nome do curso: ' . $curso["nome"] . "</div>"; 
            }

            echo '<h2><span class="badge text-bg-primary my-2">Exercício 10</span></h2>';

            echo '<table class="bg-info">';

            echo '<tr>';
            echo '<td class="p-2"><img src="foto01.jpg" alt="Foto 01"></td>';
            echo '<td class="p-2"><img src="foto02.jpg" alt="Foto 02"></td>';
            echo '<td class="p-2"><img src="foto03.jpg" alt="Foto 03"></td>';
            echo '<td class="p-2"><img src="foto04.jpg" alt="Foto 04"></td>';
            echo '<td class="p-2"><img src="foto05.jpg" alt="Foto 05"></td>';
            echo '</tr>';

            echo '<tr>';
            echo '<td class="p-2"><img src="foto06.jpg" alt="Foto 06"></td>';
            echo '<td class="p-2"><img src="foto07.jpg" alt="Foto 07"></td>';
            echo '<td class="p-2"><img src="foto08.jpg" alt="Foto 08"></td>';
            echo '<td class="p-2"><img src="foto09.jpg" alt="Foto 09"></td>';
            echo '<td class="p-2"><img src="foto10.jpg" alt="Foto 10"></td>';
            echo '</tr>';

            echo '</table>';  
        ?>
    </div>
</body>
</html>