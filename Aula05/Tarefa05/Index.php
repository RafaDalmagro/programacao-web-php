<?php

    require_once 'Classes/Porta.php';
    require_once 'Classes/Imovel.php';
    require_once 'Classes/Casa.php';
    require_once 'Classes/Edificio.php';

    $casa = new Casa();
    $casa->pinta("Azul");
    $casa->portas[0]->abre();
    $casa->portas[1]->abre();

    echo "A casa tem " . $casa->totalDePortas() . " portas.<br>";
    echo "Portas abertas: " . $casa->quantasPortasEstaoAbertas($casa->portas) . "<br>";

    $edificio = new Edificio();
    $edificio->pinta("Verde");
    $edificio->adicionaPorta(new Porta());
    $edificio->adicionaPorta(new Porta());
    $edificio->adicionarAndar();
    $edificio->portas[0]->abre();

    echo "O edifício tem " . $edificio->totalDePortas() . " portas.<br>";
    echo "Portas abertas: " . $edificio->quantasPortasEstaoAbertas($edificio->portas) . "<br>";
    echo "Andares no edifício: " . $edificio->totalDeAndares() . "<br>";

?>