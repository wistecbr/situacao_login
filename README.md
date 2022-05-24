# situacao_login

## Importante
Cada aluno terá uma branch especifica com seu nome, caso não tenha a sua criada no repositório, solicitar o professor.

Em seguida o aluno deverá resolver a situação da seguinte maneira

## 1) 
Será necessário construir um banco de dados e uma tabela com nome `user`

a tabela deverá conter as seguites colunas 
* 1) id: chave primária, inteiro
* 2) login: varchar(50)
* 3) password: varchar(50)
* 4) nome: varchar(100)
* 5) tipo: inteiro

## 2) 
A página de login enviar uma requisição `POST` para `lib\valida.php`
Na valida.php deverá verificar o login, password e consultar no banco de dados se o login e senha existem e estão corretos.

_Obs.:lembrando que o password deverá ser convertido para md5._

Caso o login e password estejam corretos redirecionar o usuário para a página `bemvindo.php` e em caso de erro redirecionar para página de `login.php?error=`contatenado com uma mensagem de error.

## 3)

Criar as configurações do banco de dados utilizando o arquivo `.env` para conectar ao banco de dados. 

## Referências

* Biblioteca dotenv: https://github.com/vlucas/phpdotenv

* GitHub da concessionária: https://github.com/wistech7l/Crud_Concessionaria