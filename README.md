# Configuração Inicial para desenvolver em PHP

1. Instalr o PHP (Ubuntu)

```
sudo apt install php libapache2-mod-php
sudo apt-get update
```

2. Utilizando PHP no Vs Code

2.1. Instalar a extensão "code runner" para rodar o código no VS Code e receber o output no terminal.

2.2. Instalar a extensão "PHP Server" para rodar o código no navegador.

# Configuração do APACHE

1. Arquivo de configuração do APACHE:
`HTTPD.CONF`

2. Portas padrão:
`80, 443`

3. Porta padrão MySQL
`3306`

4. Verificar as configurações locais do APACHE
Colocar o seguinte endereço na barra de url:

```
127.0.0.1/dashboard/phpinfo.php
```
