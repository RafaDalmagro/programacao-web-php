<?php

class Biblioteca {

    // array para colocar os livros cadastrados
    private $livros = []; 

    // método para cadastrar um novo livro e verificar se ele está disponível.
    public function cadastrarLivro($titulo) {
        if (!isset($this->livros[$titulo])) {     
            $this->livros[$titulo] = true;  
            echo "O livro '$titulo' foi cadastrado.";
        } else {
            echo "O livro '$titulo' já esta cadastrado.";
        }
    }

    // método para fazer o empréstimo de um livro e valida se ele já está emprestado e se está cadastrado.
    public function emprestarLivro($titulo) {
        if (isset($this->livros[$titulo])) {
            if ($this->livros[$titulo]) {
                $this->livros[$titulo] = false;
                echo "Empréstimo do livro '$titulo' realizado com sucesso.<br>";
            } else {
                echo "O livro '$titulo' já está emprestado.";
            }
        } else {
            echo "O livro '$titulo' não está cadastrado.";
        }
    }

    // método para devolver um livro, valida se ele estava emprestado e se ele estava cadastrado ou não.
    public function devolverLivro($titulo) {
        if (isset($this->livros[$titulo])) {
            if (!$this->livros[$titulo]) {
                $this->livros[$titulo] = true;  // True significa que o livro foi devolvido
                echo "Livro '$titulo' devolvido.";
            } else {
                echo "O livro '$titulo' não estava emprestado.";
            }
        } else {
            echo "O livro '$titulo' não está cadastrado.";
        }
    }

    // método para verificar se um livro está disponível e valida assim como as outras funções se ele estava emprestado ou se estava cadastrado.
    public function verificarDisponibilidade($titulo) {
        if (isset($this->livros[$titulo])) {
            if ($this->livros[$titulo]) {
                echo "O livro '$titulo' está disponível.";
            } else {
                echo "O livro '$titulo' está emprestado.";
            }
        } else {
            echo "O livro '$titulo' não está cadastrado.";
        }
    }
}

?>