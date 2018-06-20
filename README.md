# Composer para iniciantes - Udemy


---

## <a name="indice">Índice</a>

- [1. Apresentação](#parte1)   
- [2. Básico do composer](#parte2)   
- [3. Composer install e update](#parte3)   
- [4. Composer require](#parte4)   
- [5. Versionamento dos pacotes](#parte5)   
- [6. Arquivo lock](#parte6)   
- [7. Autoload com psr4 do PHP Fig](#parte7)   
- [8. Autoload psr4 do composer](#parte8)   
- [9. Arquivo gerado dos autoloads](#parte9)   
- [10. Autoload das funções](#parte10)   
- [11. Aula 11 [Extra] - Enviando emails com phpmailer e composer](#parte11)   

---

## <a name="parte1">1. Apresentação</a>

- https://getcomposer.org/

O Composer é uma ferramenta para o gerenciamento de dependências em PHP. Ele permite que você declare as bibliotecas que seu projeto necessita e ele gerencia (instala / atualiza) elas para você¹.

Para quem já está familiarizado com outras linguagens como o Node, por exemplo, temos o npm que faz isso no Java, o Maven e ainda o Bundler, no Ruby. No caso do Composer do PHP, este foi fortemente inspirado pelos npm (Node) e o bundler (Ruby).

Tá com pouco tempo? Clica no play e ouça toda o conteúdo. 😉

Para quem adotou o PHP como linguagem de aprendizado deve estar se perguntando o que é um gerenciador de dependências. Para explicar melhor, vou iniciar explicando o que são dependências de projeto.

#### O que são dependências?

São todos os artefatos (bibliotecas/ pacotes) de software ou de sistemas de terceiros que seu projeto utiliza para funcionar.

####Para que serve o Composer?

Imagine que você tem o seu projeto e escolheu um framework, que é a abstração (captura) de funcionalidades comuns a várias aplicações. Para construção deste projeto, o framework passa a ser uma biblioteca do seu sistema e, provavelmente, dependa de outras bibliotecas para funcionar. É aí que entra o Composer fazendo sua “mágica”, já que é ele quem irá gerenciar essas bibliotecas que o seu projeto necessita. Ou seja, com ele você irá declarar essas bibliotecas e ele, por sua vez, irá achar quais as versões delas que seu projeto necessita e irá instalar elas em uma pasta chamada vendor.

(...)O Fornecedor da Biblioteca (Library Publisher); a Biblioteca em si (Library), no caso as frutas e verduras na imagem; o Cliente (Library Consumer), Consumidor dessa biblioteca; seu projeto e o Packagist – que seria a feira com o anúncio dos fornecedores, a qual entraremos com mais detalhes em outro post sobre o assunto.

--- REF: https://king.host/blog/2018/02/composer-o-que-e-como-instalar-como-usar/ ---



[Voltar ao Índice](#indice)

---

## <a name="parte2">2. Básico do composer</a>

Instalação:

- https://getcomposer.org/download/

```
+ Adicionar pasta do composer no PATH do windows
    + C:\Users\userName\AppData\Roaming\Composer\vendor\bin
+ Outros Caminhos importantes:    
    + C:\Users\userName\xampp_php7.2.1\php
    + C:\Users\userName\xampp_php7.2.1\php\pear
```

- https://packagist.org


```json
{
    "name": "josemalcher/workspace-composer-para-iniciantes",
    "require": {
        "phpmailer/phpmailer": "^6.0"
    },
    "authors": [
        {
            "name": "José Stélio R. Malcher Junior",
            "email": "contato@josemalcher.net"
        }
    ]
}

```

- \app\classes\Email.php

```php
<?php
use PHPMailer\PHPMailer\PHPMailer;
class Email extends PHPMailer
{
    public function send()
    {
        return 'Email enviado com sucesso';
    }

}
```

- index.php

```php
<?php
require 'vendor/autoload.php';
require 'app/classes/Email.php';

$email = new Email;
echo $email->send();
```


[Voltar ao Índice](#indice)

---

## <a name="parte3">3. Composer install e update</a>

```
    composer init
```

```
    composer install
```

```
    composer update
```

```json
{
    "name": "josemalcher/workspace-composer-para-iniciantes",
    "require": {
        "phpmailer/phpmailer": "^6.0",
        "symfony/var-dumper" : "4.1.0"
    },
    "authors": [
        {
            "name": "José Stélio R. Malcher Junior",
            "email": "contato@josemalcher.net"
        }
    ]
}

```



[Voltar ao Índice](#indice)

---

## <a name="parte4">4. Composer require</a>

- Adicionar libs
- 
```
    composer require php-activerecord/php-activerecord
```

- https://getcomposer.org/doc/04-schema.md#minimum-stability

```
{
    "name": "josemalcher/workspace-composer-para-iniciantes",
    "minimum-stability":"stable",
    "require": {
        "phpmailer/phpmailer": "^6.0",
        "symfony/var-dumper" : "4.1.0",
        "php-activerecord/php-activerecord": "^1.2"
    },
    "authors": [
        {
            "name": "José Stélio R. Malcher Junior",
            "email": "contato@josemalcher.net"
        }
    ]
}

```


- https://getcomposer.org/doc/06-config.md#preferred-install


[Voltar ao Índice](#indice)

---

## <a name="parte5">5. Versionamento dos pacotes</a>


[Voltar ao Índice](#indice)

---

## <a name="parte6">6. Arquivo lock</a>


[Voltar ao Índice](#indice)

---

## <a name="parte7">7. Autoload com psr4 do PHP Fig</a>


[Voltar ao Índice](#indice)

---

## <a name="parte8">8. Autoload psr4 do composer</a>


[Voltar ao Índice](#indice)

---

## <a name="parte9">9. Arquivo gerado dos autoloads</a>


[Voltar ao Índice](#indice)

---

## <a name="parte10">10. Autoload das funções</a>


[Voltar ao Índice](#indice)

---

## <a name="parte11">11. Aula 11 [Extra] - Enviando emails com phpmailer e composer</a>


[Voltar ao Índice](#indice)

---
