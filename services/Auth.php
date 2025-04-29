<!-- autentificação -->
<?php
// define espaço para organizaçâo do codigo
namespace Services;

// declarar classes
// class principal

class Auth{
    // esta privado pq nao e pra ter em nenhum lugar a mais
    private array $usuarios = [];

    // Método construtor /  ele chama de forma automatica para chamar os usuarios 
    public function __construct(){
        $this ->carregarUsuarios();
    }

    // carregar usuarios/variavel
    // Método para carregar usuarios do arquivo JSON
    private function carregarUsuarios(): void {
        
        // verificar se existe o arquivo 
        if(file_exists(ARQUIVO_USUARIOS)){
            
        }
    }
}
