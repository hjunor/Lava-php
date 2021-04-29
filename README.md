<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


<h1 align="center" style="font-size:30px " >
    CadProducts
</h1>


<p align="center">
  <a href="#rocket-sobre">Descrição</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#rocket-tecnologias">Tecnologias</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-como-contribuir">Como contribuir</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#zap-rodando-o-projeto">Rodando o Projeto</a>
</p>

<h2>
Hero Link
</h2>

## 🚀 Descrição da Aplicação

Aplicação Web Desenvolvida como projeto para diciplina de LPIII. Um gerenciador de cadastro de produtos.

## :rocket: Tecnologias

Esse projeto foi desenvolvido com a seguinte tecnologiaa:

- [Laravel](https://laravel.com/)

\* Para mais detalhes, veja o <kbd>[composer.json](./composer.json) [package.json](./package.json)</kbd>


## 🤔 Como contribuir

- Faça um fork desse repositório;
- Cria uma branch com a sua feature: `git checkout -b minha-feature`;
- Faça commit das suas alterações: `git commit -m 'feat: Minha nova feature'`;
- Faça push para a sua branch: `git push origin minha-feature`.

Depois que o merge da sua pull request for feito, você pode deletar a sua branch.

## :zap: Rodando o projeto

### Pré-requisitos

1 - Fazer o clone da aplicaçao:

2 - variaveis de ambiente, no arquivo [.env-example](./.env-example) voce vai copia-lo de depois retirar "-example" no final.

```env
DB_CONNECTION=mysql  # banco de dados
DB_HOST=127.0.0.1    # endereço host
DB_PORT=33006        # porta
DB_DATABASE=laravel  # nome do data base
DB_USERNAME=root     # nome do usuário
DB_PASSWORD=         # senha do usuário do banco de dados
```



3 - Instalar os pacotes com o comando composer e npm:

```bash
# Em um terminal, entrar na raiz do projeto e rodar o comando:

 composer install 

 ### depois

 php artisan storage:link  

 ### depois

 npm i && npm run dev

 ###depois

 php artisan key:generate  

 ### depois 

 php artisan serve 
``` 

Depois `php artisan serve `
Open [http://localhost:8000](http://localhost:8000) to view it in the browser.


