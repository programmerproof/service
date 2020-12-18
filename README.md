# service

API "service" to {JSON} Placeholder REST API for testing and prototyping.

## Requirements

- git >= 2.5.3
- composer >= 2.0.8
- Laravel framework >= 8.19.0
- Apache Server >= 2.4.43
- PHP >= 7.3
- MariaDB >= 10.4.13

## Installation

Download package.
- https://git-scm.com/downloads
- https://getcomposer.org/download/
- composer create-project --prefer-dist laravel/laravel my-project
- https://httpd.apache.org/download.cgi
- http://php.net/downloads.php
- https://dev.mysql.com/downloads/installer/

## Documentation

- https://git-scm.com/doc
- https://getcomposer.org/doc/00-intro.md
- https://styde.net/documentacion-de-laravel-en-espanol/
- https://httpd.apache.org/docs/
- http://php.net/docs.php
- https://dev.mysql.com/doc/

## technical details

#### Installation and execution
1. Descargar archivos del proyecto o clonar proyecto y hacer su respectiva actualización.
2. Colocar en ubicación del equipo donde este instalado el servidor web. 
3. Ejecutar aplicación:
4. Abrir navegador de preferencia y ejecutar url de acuerdo a configuración del servidor web instalado en el equipo.

#### development logic
Se ha desarrollado una interfaz para uso de la API REST (pruebas y prototipos {JSON} Placeholder=>https://jsonplaceholder.typicode.com/), se represetan los métodos diponibles que provee la API:
  NOTA:(x es un dato numérico).

- GET /posts
- GET /posts/x
- GET /posts/x/comments 
- GET /comments?postId=x
- GET /posts?userId=x
- POST /posts/x 
- PUT /posts/x 
- PATCH /posts/x 
- DELETE /posts/x 

Los métodos (GET, POST, PUT, PATCH, DELETE) se ejecuntan diligenciando los datos requeridos y dando click en el botón {RUN}. El método GET también se puede ejecutar directamente por la url siguiendo la siguiente lógica:
  NOTA:(x es un dato numérico):

- GET/posts
- GET/posts/x
- GET/posts/x/comments
- GET/comments/postId/x
- GET/posts/userId/x

El resultado de la petición se representa en un listado con colores de fondo aleatorios.

## Versión
v1.0

## Licencia
[MIT License](LICENSE)