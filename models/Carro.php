<?php
namespace Models;
// limita espaços o namespace
use Interfaces\Locavel;

// classe que representa um carro

class Carro extends Veiculo implements Locavel {

    // cria a funçao de calcular aluguel / float = dinheiro
    public function calcularAluguel(int $dias): float {
        return $dias * DIARIA_CARRO;
        // VARIAVEL QUE RECEBEU $DIAS VEZES A DIARIA
    }

    // funçao de alugar
    public function alugar(): string {
        if ($this->disponivel){
            $this->disponivel = false;
            return "Carro '{$this->modelo}' alugado com sucesso!";
        }
        return "Carro '{$this->modelo}' nâo está disponivel.";
    }
}