# Funcionamento do Sistema de Locadora de Veículos com PHP e BOOTSTRAP

Este documento descreve o funcionameto do Sistema de Locadora de Veículos desenvolvido em PHP, utilizando o Bootstrap para interface, com autenticação de usuários, gerenciamento de veículos (carros e motos) e persistência de dados em arquivos JSON. O foco principal é explicar o funcionamento geral do sistema, com ênfase especial nos perfis de acesso (admin e usuário).

## 1. Visâo Geral do Sistema

O Sistema de Locadora de Veículos é uma aplicação Web que permite:
- Autenticação de usuário com dois perfis: **Admin** (Administrador) e **Usuário**;
- Cadastro de veículos: cadastro, aluguel e exclusão;
- Cálculo de previsão de aluguel: com base no tipo de veículo (carro ou moto) e número de dias;
- Interface responsiva.

Os dados são armazenados em dois arquivos JSON:
- `usuario.json`: username, senha criptografada e perfil;
- `veiculos.json`:Tipo do veículo, modelo, placa e status de disbonibilidade