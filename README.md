# CursoLaravel
Creando un sistema web con laravel (PHP - MYSQL)


cmd linea de comandos para empezar a crear una app

para crear el proyecto :

1: CREAMOS UNA CARPETA EN C:/ y con el cmd nos ubicamos ahi y escribimos

    composer create--project  --prefer-dist laravel/laravel NOMBRE_PROYECTO    -> con laravel 6
    composer create-project  --prefer-dist laravel/laravel NOMBRE_PROYECTO    -> con laravel 7

    composer create-project  --prefer-dist laravel/laravel NOMBRE_PROYECTO  "6.*"   -> con laravel personalizado

// estilos aqui con este comando

    composer require laravel/ui "^1.0" --dev

// para activar vue y el sistema de autentificacion de laravel

    php artisan ui vue  --auth


// para correr los estilos en el sistema de autentificacion en resumen es compilando lo nuevo
    npm install && npm run dev

// con esto es para usar boostrap, vue , autentificacion, etc...
    composer require laravel/ui



2: para cambiar el nombre a la app:

    en el proyecto donde podemos ver como se llama ruta es:

    CARPETA_DE_PROYECTO/app/Http/Controller.php(si no has cambiado saldra app/Http/Controller)

    linea de comando 

    php artisan app:name NOMBRE_PROYECTO (de preferencia que sea igual al de la carpeta)
    (NOTA: la v 6.+ laravel quito el app:name asi que corremos el en terminal de vs el comando
    composer require andrey--helldar/laravel-app --dev    eso es para bajar el app:name)

    php artisan app:name NOMBRE_PROYECTO



:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
CAMBIAMOS EN config/app.php 


    'debug' => env('APP_DEBUG', true),
    /*
     para que nos muestre errores ya que estamos en etapa de desarrollo, por defecto eso estara en modo false,
     una ves que publiquemos nuestra app lo cambiamos a false 
    */

:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

    
    'timezone' => 'UTC',
    
    'timezone' => 'America/Lima',// PERU lima
    /*
    Cambiamos la zona horarios dependiendo en que lugar estes, googleamos nomas el timezone
    https://www.php.net/manual/es/timezones.america.php
    */

:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

    
    'locale' => 'es',
    /*
    Por defecto estara en modo en => ingles pero lo cambiamos al que nos acomodes
    https://github.com/Laraveles/spanish
    por cada idioma debemos crearle su carpeta en la ruta resources/lang/AQUI_CARPETA_DE_IDIOMA

    */
    
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
:::: CLASE 5  CLASE 4  CLASE 4  CLASE 4  CLASE 4  CLASE 4  CLASE 4  CLASE 4  CLASE 4  CLASE 4  CLASE 4 ::::
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

 .env => en la raiz sirve para cambiar la conexion a su base de datos

:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

para crear los modelos, ya que laravel trabaja a base MVC , creamos con el comando:

    php artisan make:model Nombre_Modelo (recuerda que siempre debe ir 1era letra con mayuscula)

 y lo podemos ver en la ruta app/Nombre_modelo.php , viene uno por defecto que es user para crear usuarios....
 y de ahi pasamos a configurarlos


:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
configuracion de rutas

    app/routes/web.php

:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
:::: CLASE 5  CLASE 5  CLASE 5  CLASE 5  CLASE 5  CLASE 5  CLASE 5  CLASE 5  CLASE 5  CLASE 5  CLASE 5 ::::
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Crear Controllers con el comando

    php artisan make:controller nombreControlador

    y se crea en la ruta app/Http/Controllers/nombreControlador.php

:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Crear requests con el comando

    php artisan make:request nombreRequest

    y se crea en la ruta app/Http/Requests/nombreRequest.php


:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
:::: CLASE 6  CLASE 6  CLASE 6  CLASE 6  CLASE 6  CLASE 6  CLASE 6  CLASE 6  CLASE 6  CLASE 6  CLASE 6 ::::
:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Vistas y plantillas Blade    

agregamos el comando 

    composer require laravelcollective/html ----> para leer los estilos del css
    y actualizamos el json con el comando 
    composer update


