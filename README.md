# situacao_login

## Parte 1

## Importante
Cada aluno terá uma branch especifica com seu nome, caso não tenha a sua criada no repositório, solicitar o professor.

## Iniciando

1) Realizar clone do repositório na maquina
2) `git fetch`
3) `git checkout seu_nome`
4) Alterar os `title` das páginas `login.php` e `bemvindo.php`
5) Realizar `commit` com as alterações na sua respectiva branch 

6) Crie um [Pull Request](https://github.com/wistech7l/situacao_login/compare) da sua branch para `main`
`base:main` <- `compare: sua_branch`


Em seguida o aluno deverá resolver a situação da seguinte maneira

## 1) 
Será necessário construir um banco de dados e uma tabela com nome `users`

a tabela deverá conter as seguites colunas 
* 1) *id:* chave primária, inteiro, AUTO_INCREMENT
* 2) *login:* varchar(50)
* 3) *password:* varchar(100)
* 4) *nome:* varchar(100)
* 5) *tipo:* inteiro

Após criada a tabela utilizar o seguinte comando SQL:

``` SQL
INSERT INTO users (login, password, nome, tipo) VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrador', 1);
```


## 2) 
A página de login enviar uma requisição `POST` para `lib\valida.php`
Na valida.php deverá verificar o login, password e consultar no banco de dados se o login e senha existem e estão corretos.

_Obs.: lembrando que o password deverá ser convertido para `md5`._

Caso o login e password estejam corretos redirecionar o usuário para a página `bemvindo.php` e em caso de erro redirecionar para página de `login.php?error=`contatenado com uma mensagem de error.

## 3)

Criar as configurações do banco de dados utilizando o arquivo `.env` para conectar ao banco de dados. 

## 4) TESTES

Verifique se o seu código possui o o arquivo de deploy, disponível em ```.github/workflows/deploy.yml```

Para testar se está tudo ok, basta realizar o commit na sua branch verificar se houve o deploy completo
no [GitHub Actions](https://github.com/wistech7l/situacao_login/actions).

Em seguida depois acessar: 
`http://wistech.epizy.com/<sua_branch>`

_Ex.: http://wistech.epizy.com/main/_

## Referências

* Biblioteca dotenv: https://github.com/vlucas/phpdotenv

* GitHub da concessionária: https://github.com/wistech7l/Crud_Concessionaria

# Parte 2

Antes de tudo vocês vão precisar juntar o código aqui da branch `main` com o código da branch de vocês, para isso vocÊs vão executar os seguintes comandos `GIT`

### 1) Git pull
`git pull`

### 2) Mudar para Branch
`git checkout main`

### 3) Git Pull na branch Main
`git pull origin main`

### 4) Mudar para sua Branch
`git checkout <sua_branch>`

### 5) Mesclagem do código com a Main
`git merge main`

### 6) Conflitos
Muito provavelmente haverá conflitos ao realizarem a mesclagem do código de vocês com a `main`

Então será preciso resolve-los primeiro. Realizar o commit do código e continuar a atividade.

### Agora complete o código
 Completar a área de cadastro de usuários.

Caso o cadastro seja bem sucessedido, redirecionar o usuário para página de login.
E tente realizar o login.

caso haja erro no cadastro redirecionar o usuário para própria página de cadastro com um requisição `GET` `erro=cadastro`

# Parte 3

Agora que você implmentou o cadastro de usuários, crie uma página para lista-los e que contenham dois botões (`[Editar]` `[Excluir]`) em uma coluna opções, conforme a tabela abaixo: 

|Nome| login| Tipo| Opções|
| ---| ---| ---| ---|
| Administrador| admin | Admistrador|  [Editar] [Excluir] |
| João| jao | Cliente |[Editar] [Excluir]|
| ... |  |  | [Editar] [Excluir]|


## Crie as funções dos botões:
* **Editar:** O usuário será redirecionado para um formulário de edição. 

* **Excluir:** deverá remover a linha que o usuário clicou.


# Parte 4

Vamos agora adicionar mais uma funcionalidade no nosso projeto. 
Vamos adicionar `Session` para verificar que um usuário esta logado ou não.
E permita o acesso a páginas de cadastro, lista de usuários, editar e excluir apenas para os usuários do `tipo 1`, que são os Administradores do sistema.

Na branch `wisley` desse projeto vocês encontrarão exemplo de como implementar `session`

# Parte 5

Adicione mais uma funcionalidade em seu projeto
Cadastro de `Marcas` de carro
a tabela deverá conter as seguites colunas 
* 1) *id:* chave primária, inteiro, AUTO_INCREMENT
* 2) *nome:* varchar(50)

Adicione também uma página de listar, editar e excluir

# Parte 6

Adicione outra funcionalidade em seu projeto
Cadastro de `Carros`

a tabela deverá conter as seguites colunas 
* 1) *id:* chave primária, inteiro, AUTO_INCREMENT
* 2) *nome:* varchar(50), NOT NULL
* 3) *marcaId:* inteiro (Referente a tabela `Marcas`)
* 4) *ano*: inteiro, NOT NULL
* 5) *valor*: float, NOT NULL
* 6) *vendido*: boolean, NOT NULL