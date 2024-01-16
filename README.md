# Wordpress Atratis

Este projeto consiste de um tema para Wordpress que será utilizado no site da Atratis.

## Instalação

Para começar é preciso ter feito um clone do projeto, para isso execute o comando:

```bash
git clone git@github.com:JoaoPedroGiffoni/projeto-landing-page.git
```

Depois de clonar o projeto podemos configurar o ambiente e subir os containers com o comando:

```bash
make init
```

> Caso não tenha o _make_ instalado em sua máquina, você pode ir para a
> seção [Configuração manual](#Configuração manual).

### Configuração manual

Posicione o projeto em seu ambiente conforme a disposição do mesmo de forma a deixar a pasta `atratis` dentro da pasta raiz
do servidor. Em seguida restaure o arquivo `backup.sql` que está em `database/dumps` no seu banco de dados.

Garante que as variáveis de ambiente abaixo estão configuradas com os valores apropriados:
- ATRATIS_MYSQL_HOST: IP ou nome do host do banco de dados
- ATRATIS_MYSQL_DATABASE: Nome do banco de dados dentro da instância do MySQL
- ATRATIS_MYSQL_USER: Usuário que o wordpress utilizará para acessar o banco de dados
- ATRATIS_MYSQL_PASSWORD: Senha do usuário do banco de dados

## Acessando o site

Para acessar o site, basta acessar o endereço [http://localhost/atratis](http://localhost/atratis) em seu navegador.

## Acessando o painel administrativo

Para acessar o painel administrativo, basta acessar o endereço
[http://localhost/atratis/wp-admin](http://localhost/atratis/wp-admin) em seu navegador.

> Usuário: admin
> Senha: admin
