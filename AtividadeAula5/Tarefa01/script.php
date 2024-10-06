<?php 

class Invoice{

    // declaração das variáveis.
    private $numeroDoItem;
    private $descricaoDoItem;
    private $quantidadeComprada;
    private $precoUnitario;
    
    // Criação do construtor.
    public function __construct($numeroDoItem, $descricaoDoItem, $quantidadeComprada, $precoUnitario) {
        $this->numeroDoItem = $numeroDoItem;
        $this->descricaoDoItem = $descricaoDoItem;
        $this->quantidadeComprada = $quantidadeComprada;
        $this->precoUnitario = $precoUnitario;
    }
    
    // Criação do metodo set para que verifique se a quantidade é positiva ou não.
    public function setQuantidadeComprada($quantidadeComprada) {
        if ($quantidadeComprada > 0) {
            $this->quantidadeComprada = $quantidadeComprada;
        } else {
            $this->quantidadeComprada = 0;
        }
    }

    // Metodo get quantidade.
    public function getQuantidadeComprada() {
        return $this->quantidadeComprada;
    }
    
    // Metodo set do preço para verificar se é positivo.
    public function setPrecoUnitario($precoUnitario) {
        if ($precoUnitario > 0) {
            $this->precoUnitario = $precoUnitario;
        } else {
            $this->precoUnitario = 0.0;
        }
    }
    
    // metodo get do preço unitário.
    public function getPrecoUnitario() {
        return $this->precoUnitario;
    }
    
    // metodos get e set para descrição e o numero do item.
    public function setNumeroItem($numeroDoItem) {
        $this->numeroDoItem = $numeroDoItem;
    }
    public function getNumeroItem() {
        return $this->numeroDoItem;
    }
    public function setDescricaoItem($descricaoDoItem) {
        $this->descricaoDoItem = $descricaoDoItem;
    }
    public function getDescricaoItem() {
        return $this->descricaoDoItem;
    }
    
    //Função invoiceAmount que calcula o valor da fatura e retorna o valor.
    public function getInvoiceAmount() {
        return $this->quantidadeComprada * $this->precoUnitario;
    }
}

?>