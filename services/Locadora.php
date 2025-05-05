<?php
namespace Services;
// locadora

use Models\{Veiculo, Carro, Moto};

// classe para gerenciar a locação 
class Locadora {
    private array $veiculos = [];

    public function __construct(){
        $this->carregarVeiculos();
    }

    private function carregarVeiculos(): void{
        // verfica se o arquivo json existe , pega o arquivo converte jogar no vetor 
        if (file_exists(ARQUIVO_JSON)){
            // decodifica o arquivo json
            // armazena na variavel $dado
            $dados = json_decode(file_get_contents(ARQUIVO_JSON),true);

            // foreach= para cada 
            foreach ($dados as $dado){
                if($dado['tipo']=== 'Carro'){
                    $veiculo = new Carro($dado['modelo'], $dado['placa']);
                } else {
                    $veiculo = new Moto($dado['modelo'], $dado['placa']);
                }
                $veiculo->setDisponivel($dado['disponivel']);

                $this->veiculos[] = $veiculo;
            }
        }
    }
    // funçao salvar veiculos
    private function salvarVeiculos(): void{
        $dados = [];

        foreach($this->veiculos as $veiculo){
            $dados[] = [
                'tipo' => ($veiculo instanceof Carro) ? 'Carro' : 'Moto',
                'modelo' => $veiculo -> getModelo(),
                'placa' => $veiculo -> getPlaca(),
                'disponivel' => $veiculo -> isDisponivel()
            ];
        }
            $dir =dirname(ARQUIVO_JSON);

            if(!is_dir($dir)){
                mkdir($dir, 0777, true);
            }

            file_put_contents(ARQUIVO_JSON, json_encode($dados,JSON_PRETTY_PRINT));
        }

    // adiciona novo veiculo
    public function adicionarVeiculo(Veiculo $veiculo): void{
        $this->veiculos[] = $veiculo;
        $this->salvarVeiculos();
    }

    // funçao Remover veiculo
    public function revomerVeiculo(string $modelo, $placa): string{
        
        foreach($this->veiculos as $key => $veiculo){
            // ver se o medelo e placa pertence ao mesmo veiculo
            // verifica se modelo e placa correspodem
            if($veiculo->getModelo() === $modelo && $veiculo->getPlaca() === $placa ){
                // remover veiculo do array / sempre que usa o this ta chamando um vetor
                unset($this->veiculos[$key]);

                // reorganizar os indices
                $this->veiculos = array_values($this->veiculos);

                // salvar novo estado
                $this->salvarVeiculos();
                return "Veiculo '{} removido com sucesso!";
            }
        }
        // se caso nao for encontrado
        return "Veiculo não encontrado";
    }

    // funçao alugar veiculo por x dias

    // funçao devolver veiculo

    // funçao retornar a lista de veiculos

    // funçao calcular previsao do valor

}
