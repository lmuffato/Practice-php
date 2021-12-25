# Configuração Inicial para desenvolver em PHP

1. Instalando o PHP no Linux (Ubuntu)

```
sudo apt install php libapache2-mod-php
sudo apt-get update
```

2. Utilizando PHP no VsCode

Existem duas maneiras de executar o código PHP no VsCode: 

2.1. Instalar a extensão "Code runner", que executa o código no terminal do VsCode e imprime o resultado no `Output` no terminal. Só executa os scripts dentro de `<?php ... ?>`.

2.2. Instalar a extensão "PHP Server" para rodar o código no navegador.
Essa extenão executa o HTML e os scripts do arquivo PHP, executando diretamento
no navegador.

# Informações adicionais na utilização do APACHE

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
