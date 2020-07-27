# Simples Formulário de Contato

Simples formulário de contato com envio de arquivo.

## Para que o programa funcione

### Install via Composer

 - `composer install` - Instalar todos os pacotes de dependêcia do composer;
 - `cp .env.example .env` - Copiar `.env.example` para `.env` e configurar `DB_*`variáveis relacionadas e `EMAIL_*` variáveis relacionadas (para que seja possivel o envio do email);
      laravel Suporta MySql e SQLite, porém sugiro usar o MySql;
 - `php artisan migrate` - Depois de configurar o banco de dados, execute a a migração para criar todas as tabelas;
 - `php artisan serve` - Execute este comando para iniciar um servidor de desenvolvimento local;
 -Basta acessar `http: //127.0.0.1: 8000` e você já deverá ver a primeira etapa do formulário de registro;

## Banco de dados

Foi utilizado o gerenciador de banco MariaBd (pode usar qualquer um de sua preferência):
 - `sudo apt install mariadb-server` instalando o gerenciador;
 - `sudo mysql_secure_installationr` para configurar sua senha;
 - `mysql -u root -p`  para entrar no seu banco ;
  #Comandos necessário:
  `select * from contato.formulario` - Para visualizar todos os dados adicionados em seu banco;
  `insert into contato.formulario (nome,telefone,email,arquivo,menssagem,ip, create_at) values ('inserir valores')` - Para adicionar dados em seu banco;
  
## Testes Automátizados
Foi implementado um teste simples utilizando o DUSK 

- `php artisan dusk:install` - para instalar;
- `php artisan dusk` - para rodar os testes;

OBS.: para mais configurações visite o site oficial https://laravel.com/docs/7.x/dusk

