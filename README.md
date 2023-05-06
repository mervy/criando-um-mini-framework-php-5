# Criando um mini framework PHP 5

Curso do Matheus Moura, primeiro MVC prático que aprendi
como o PHP 5

## Legado
Criação do código original do MVC do Matheus Moura.

Executando no Wampserver com *`PHP Version 5.6.40`*

## Primeira aula

Estrutura de pastas
```code
├── app
│   ├── controllers
│   │   ├── indexController.php
│   │   └── produtosController.php
│   ├── models
│   │   └── model.php
│   └── views
│       ├── index.phtml
│       ├── produtosIndex.phtml
│       └── produtosNovos.phtml
├── index.php
├── .htaccess
└── system
    ├── config.php
    └── controller.php
```

.htaccess
```php
RewriteEngine on

RewriteCond %{SCRIPT_FILENAME} !-f
RewriteCond %{SCRIPT_FILENAME} !-d 

RewriteRule ^(.*)$ index.php?key=$1
```

index.php
```php
<?php

$_GET['key'] = (isset($_GET['key'])) ? $_GET['key'] .'/' : 'index/index';
$key = $_GET['key'];
$separator = explode('/', $key);
$controller = $separator[0];
$action = ($separator[1] == null ? 'index' : $separator[1]);

require_once('system/controller.php');

require_once('app/controllers/'.$controller.'Controller.php');
$app = new $controller();
$app->$action();
```

system/controller.php
```php
<?php

class Controller
{
    protected function view($nome)
    {
        return require_once('app/views/' . $nome . '.phtml');
    }
}
```

app/controllers/produtosController.php
```php
<?php

class Produtos extends Controller
{

    public function index()
    {
        $this->view('produtosIndex');
    }

    public function novos()
    {
        $this->view('produtosNovos');
    }
}
```

app/views/produtosNovos.phtml
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <title>Mini Framework MVC</title>
</head>
<body>
    <h1>Produtos novos view</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
</body>
</html>
```

Esses são os principais arquivos para o sistema funcionar.

## Segunda aula

Nesta aula será iniciado os códigos para os models

Também será refatorado/melhorado alguns códigos

