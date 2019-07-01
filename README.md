# Instalação do Magento 2.3.2
 
E necessário que clone este repositorio, certifique-se que em seu diretório de instalação já existe um diretório com o nome magento2
 
## Instalação
 
### Clonar repositório
```
$ git clone https://github.com/MaickSilva/magento2.git
```
 
Em seguida entre no diretório
```
$ cd magento2
```
 
### Composer Install
 
Após clonar certifique-se de entrar no diretório baixado
 
```
$ composer install
```
 
 
### Permissões
 
Vamos dar permissões as pastas do nosso projeto
 
```
$ sudo chown -R :www-data .
$ sudo find var generated vendor pub/static pub/media app/etc -type f -exec chmod g+w {} +
$ sudo find var generated vendor pub/static pub/media app/etc -type d -exec chmod g+ws {} +
```
 
Em seguida você pode entrar na url que você definiu no seu servidor para acessar, deve abrir normalmente na tela de setup, mas eu irei instalar via linha de código
 
### Banco de dados via CLI
 
Você pode criar um banco de dados e um novo usuário para fazer a instalação, no caso estou disponibilizando um sql para que seu banco fique igual ao meu contento meu bloco personalizado
[Minha database atual](https://drive.google.com/file/d/113MtbwufKYHhJAxSaYR3wcHwja7Er7CT/view?usp=sharing).
 
Muita atenção abaixo, você precisa inserir com muita atenção as informações para que seja feito a conexão sem problemas.
os principais campos para observação são: `--base-url`,`--db-host`,`--db-name`,`--db-user` e `--db-password`
```
$ sudo bin/magento setup:install \
--base-url=http://local.magento2.com \
--db-host=localhost \
--db-name=magento_gh \
--db-user=user_magento \
--db-password=magento \
--backend-frontname=admin \
--admin-firstname=admin \
--admin-lastname=admin \
--admin-email=admin@admin.com \
--admin-user=admin \
--admin-password=admin123 \
--language=pt_BR \
--currency=BRL \
--timezone=America/Sao_Paulo \
--use-rewrites=1 
```
 
## Após este último passo, se você seguiu todos os passos e está utilizando o banco que disponibilizei você deve estar vendo algo parecido com isso:
 
![alt text](screenshots/FrontendHomepage.png "Página inicial com blocos adicionais")

## Dentro do ADMIN indo até Content > Blocks, você irá encontrar algo como isso:

![alt text](screenshots/AdminBlock.png "Tela de Blocos no Admin")
 
 
## Indo até Content > Pages > Home Page e indo em editar você irá ver algo assim:

![alt text](screenshots/AdminHomePage.png "Admin Pagina Home page")
 
 
## Links de ajuda
Vídeo feito por mim [Instalação via composer](https://streamable.com/mhwrf).
 
Documentação do Magento [Install Magento using Composer](https://devdocs.magento.com/guides/v2.3/install-gde/composer.html).
