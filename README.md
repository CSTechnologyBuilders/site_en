## Laravel 8 Botman Chatbot Tutorial

Read More: https://realprogrammer.in/laravel-8-botman-chatbot-tutorial/

## About

First Step: download in your system.

```
    git clone https://github.com/siddharth018/botman-chatbot.git

```

```
    cd botman-chatbot
```


```

    composer install

```


```

    cp .env.example .env

```


Put your credentils .env file.

```.env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=botman
    DB_USERNAME=root
    DB_PASSWORD=root@123

```
Add botMan in your PATH environment 
```
-Command::  composer global require "botman/installer"
-$HOME/.composer/vendor/bin ( copier le dossier botMan installé dans le dossier composer )
- copier le chemin du dossier botMan dans la variable d'environnement

Install botMan in your project
```
Command: composer require botman/botman
```
Step second: Run server
```
    php artisan serve

```


