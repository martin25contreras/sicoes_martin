<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel
sistema control escolar

#1 Verificar si en la carpeta del proyecto sicoes hay una carpeta llamada vendor si no está, puedes ejecutar en nuestra consola de preferencia el comando: composer install

#2 Luego ejecutas en la consola el comando: composer dum-autoload

#3 Y por último configuramos nuestros archivo env que se localiza dentro de la carpeta de proyecto si no está podemos agarrar el que dice envexample y cambiarle el nombre a env. php y configuramos nuestra base de datos ejemplo de configuración:

-  DB_CONNECTION=pgsql
-  DB_HOST_PG=127.0.0.1
-  DB_PORT=5432
-  DB_DATABASE_PG=sicoes 
-  DB_USERNAME_PG=postgres
-  DB_PASSWORD_PG=12345

Luego ejecutamos el siguiente comando para la creacion de tablas en la base de datos: php artisan migrate

#4 En nuestra consola de preferencia limpiamos cache de configuración con el comando: php artistan config:cache

****Recuerden que el proyecto debe estar conectado con la base de datos PostgreSQL

#5 Para levantar el proyecto sicoes ejecutamos en nuestra consola de preferencia y nos situamos en la carpeta del proyecto cd xampp/htdocs/sicoes y ejecutamos el comando:

php artistan serve

Credenciales para Loguearse:

- 'username' => sicoes 
- 'password' => Sicoes.1



## Documentación sobre Laravel

- Sobre servidor apache local yo uso xampp /sistema operativo windows (ustedes pueden adaptarlo a su preferencia). 

-anoten todos los comando que vayan viendo en los videos.

-recuerden bajarse el composer con la ultima version de php. 

-Herramientas que uso como consola git bash. 

-Es de gran utilidad que aprendan git tambien ya que si todos le vamos a meter mano al proyecto debemos pasarnos los archivos de una formas mas facil. 

-Tambien debemo refrescar html, css, un poco de jquery, javascrit y el fundamental PHP//
pero principalmente php.


-Nota: laravel ya va por su version 8 pero cambian una que otra funcion para eso ir a la documentacion de laravel de su pagina oficial: https://laravel.com/docs/8.x/installation

## Paginas

https://styde.net/laravel-5/
__________________
-videos

-aqui van a encontrar videos mas actualizados laravel version 7 y 8

https://www.youtube.com/c/pildorasinformaticas/playlists

__________________

-aqui estan videos de php html 5 laravel  javascript sql mysql

https://www.youtube.com/c/pildorasinformaticas/playlists
_________________


https://www.youtube.com/c/Aprendible/playlists


__________
-git

https://www.youtube.com/watch?v=ANF1X42_ae4&list=PLU8oAlHdN5BlyaPFiNQcV0xDqy0eR35aU

__________

-Todos los errores que le vayan dando en su paginal, copien el error en google y lo buscan mayormente sale todo, como preferencia escogan estas (stackoverflow.com, laraveles.com)


-mayormente en los videos van a ver mucho laravel con mysql pero recuerden deben usar postgresql

-aqui un link para su conexion:

https://kb.objectrocket.com/postgresql/laravel-and-postgresql-web-app-part-2-886

https://www.enterprisedb.com/postgres-tutorials/how-use-postgresql-laravel


-comandos que mas se utilizan:

 Ejecutamos el comando php artisan list en la consola y nos muestra el listado de todos los comandos actuales.

https://blog.webtraining.zone/comandos-mas-usados-de-laravel-php-artisan/

https://code.tutsplus.com/es/tutorials/25-laravel-tips-and-tricks--pre-92818

-es importante saber las nomenclaturas, osea los nombres de variables singulares y plurales aqui el ejemplo

https://laraveles.com/foro/viewtopic.php?id=2537

https://xqsit.github.io/laravel-coding-guidelines/docs/naming-conventions/

https://www.laraveltip.com/como-nombrar-clases-metodos-y-variables-en-laravel/


y por ultimo leerse la documentacion de laravel collective ayuda a reducir codigo html en las vistaass y actualmente se esta utilizando en el proyecto...

https://laravelcollective.com/docs

https://laravelcollective.com/docs/6.x/html
