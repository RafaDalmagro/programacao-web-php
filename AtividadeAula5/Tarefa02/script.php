<?php 

class Empregado{

    //Variaveis.
    private $primeiroNome;
    private $sobrenome;
    private $salarioMensal;

    // Construtor
    public function __construct($primeiroNome, $sobrenome, $salarioMensal){
        $this->primeiroNome = $primeiroNome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
    }
    
    // Getters e setters.
    public function getPrimeiroNome() {
        return $this->primeiroNome;
    }

    public function setPrimeiroNome($primeiroNome) {
        $this->primeiroNome = $primeiroNome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

    // verifica se o salário mensal é negativo ou zero.
    public function setSalarioMensal($salarioMensal) {
        if ($salarioMensal > 0) {
            $this->salarioMensal = $salarioMensal;
        } else {
            $this->salarioMensal = 0.0;
        }
    }

    // Exibe o salário anual do empregado.
    public function getSalarioAnual() {
        return $this->salarioMensal * 12;
    }

    // Aplica o aumento de 10%.
    public function aplicarAumento() {
        $this->salarioMensal *= 1.10;
    }

    // Mostra as informações do empregado.
    public function exibirInformacoes() {
        echo "Nome: " . $this->getPrimeiroNome() . " " . $this->getSobrenome() . "<br>";
        echo "Salário Mensal: R$ " . number_format($this->getSalarioMensal(), 2, ',', '.') . "<br>";
        echo "Salário Anual: R$ " . number_format($this->getSalarioAnual(), 2, ',', '.') . "<br>";
    }
}

?>