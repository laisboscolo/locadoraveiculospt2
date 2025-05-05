<?php
//backend
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>ADM - Locadora de veículos</title>
</head>
<body class="container py-4">
    <div class="container py-4">
        <!-- Barra de informações de usuario -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between alien-items-center inicio">
                    <h1>Lista de Locadora de veículos</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person" style="font-size: 24px;"></i>
                        </span>
                        <!-- Bem vindo,(usuario) -->
                        <span class="welcome-text">
                            Bem-vindo, <strong>Administrador</strong>
                        </span>
                        <!-- botão de logout -->
                        <a href="" class="btn btn-outline-danger d-flex align-items-center gap-1"><i class="bi bi-box-arrow-in-right"></i>Sair</a>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulário para adicionar novos veiculos -->
        <div class="row same-height-row">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4>Adicionar novo veículo</h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo:</label>
                                <input type="text" class="form-control" name="modelo" required>
                                <div class="invalid-feedback">
                                    Informe um modelo válido"
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="placa" class="form-label">Placa:</label>
                                <input type="text" class="form-control" name="placa" required>
                                <div class="invalid-feedback">
                                    Informe uma placa válida
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo:</label>
                                <select name="tipo" class="form-select" id="tipo" required>
                                    <option value="">Carro</option>
                                    <option value="">Moto</option>
                                    <option value="">Helicoptero</option>
                                </select>
                            </div>
                            <button class="btn btn-success w-100" type="submit" name="adicionar">Adicionar veículo</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Calcular a previsão de aluguel
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="" class="input-label">Tipo de veículo:</label>
                                <select class="form-select" name="" id="" required>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">Quantidade de dias</label>
                                <input type="number" name="quantidade" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100" name="calcular">Calcular</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- agora sim sou eu -->
    <!-- tabela de veiculos cadastrados -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">
                        <!-- mb- margin botton -->
                        Veículos Cadastrados 🚗
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>Tipo</th>
                                <th>Modelo</th>
                                <th>Placa</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- tr = table row -->
                                    <td>Carro</td>
                                    <td>Uno</td>
                                    <td>21LA1PV</td>
                                    <td><span class="badge bg-warning">Alugado ❌</span>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <form action="post" class="btn-group-actions">
                                                <!-- botao deletar (sempre fica disponivel para o 'adm/Admin') -->
                                                 <!-- delete-btn nao e do bootstrap vou fazer a classe -->
                                                 <button class="btn btn-danger btn-sm delete-btn" type="submit" name="deletar">Deletar</button>

                                                 <!-- botoes condicionais -->
                                                  <div class="rent-group">
                                                    <!-- Veiculos alugado/devolver -->
                                                     <button class="btn btn-warning btn-sm" type="submit" name="devolver">Devolver</button>

                                                     <!-- veiculo disponivel -->
                                                      <!-- name e oq voce ta selecionando se fosse meses ia colocar meses /  required = obrigatorio -->
                                                      <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                      <button class="btn btn-primary" name="alugar" type="submit">Alugar</button>
                                                  </div>
                                            </form>  
                                        </div>
                                    </td>
                                </tr>

                                <td>Moto</td>
                                    <td>Shadow 750</td>
                                    <td>RT1X39I</td>
                                    <td><span class="badge bg-success">Disponivel ✅</span>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <form action="post" class="btn-group-actions">
                                                <!-- botao deletar (sempre fica disponivel para o 'adm/Admin') -->
                                                 <!-- delete-btn nao e do bootstrap vou fazer a classe -->
                                                 <button class="btn btn-danger btn-sm delete-btn" type="submit" name="deletar">Deletar</button>

                                                 <!-- botoes condicionais -->
                                                  <div class="rent-group">
                                                    <!-- Veiculos alugado/devolver -->
                                                     <button class="btn btn-warning btn-sm" type="submit" name="devolver">Devolver</button>

                                                     <!-- veiculo disponivel -->
                                                      <!-- name e oq voce ta selecionando se fosse meses ia colocar meses /  required = obrigatorio -->
                                                      <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                      <button class="btn btn-primary" name="alugar" type="submit">Alugar</button>
                                                  </div>
                                            </form>  
                                        </div>
                                    </td>
                                </tr>
                                <td>Moto</td>
                                    <td>Strada cbx-200</td>
                                    <td>12AGT8I</td>
                                    <td><span class="badge bg-success">Disponivel ✅</span>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <form action="post" class="btn-group-actions">
                                                <!-- botao deletar (sempre fica disponivel para o 'adm/Admin') -->
                                                 <!-- delete-btn nao e do bootstrap vou fazer a classe -->
                                                 <button class="btn btn-danger btn-sm delete-btn" type="submit" name="deletar">Deletar</button>

                                                 <!-- botoes condicionais -->
                                                  <div class="rent-group">
                                                    <!-- Veiculos alugado/devolver -->
                                                     <button class="btn btn-warning btn-sm" type="submit" name="devolver">Devolver</button>

                                                     <!-- veiculo disponivel -->
                                                      <!-- name e oq voce ta selecionando se fosse meses ia colocar meses /  required = obrigatorio -->
                                                      <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                      <button class="btn btn-primary" name="alugar" type="submit">Alugar</button>
                                                  </div>
                                            </form>  
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


</body>
</html>