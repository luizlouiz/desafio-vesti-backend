# DESAFIO TÉCNICO Vesti - Desenvolvedor Web SR (Angular).


Este desafio foi realizado para à vaga de  Desenvolvedor Web SR (Angular). Foi utilizado Laravel como framework para a criação API que será consumida pelo frontend como serviço.

**FUNCIONALINADES:**
- Listar CLIENTES
- Adicionar novo CLIENTE
- Editar CLIENTE
- Excluir CLIENTE

Banco de dados utilizado: MySql |
Framewrk: Laravel |
Linguagem: PHP 

## Passo a Passo para rodar o projeto 

- Inicialmente executar <code>composer install</code>no diretório ../desafio-vesti-backend  (https://getcomposer.org/download/)
- Alterar .env.example para .env | DB_DATABASE=vesti
- executar <code>php artisan key:generate</code> 
- executar <code>php artisan config:clear</code>
- Com o schema criado no banco, e as credenciais no .env, executar <code>php artisan migrate</code>
- executar <code>php artisan serve</code> 



