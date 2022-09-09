<p align="center">
  <a href="https://github.com/modavidc">
    <img alt="Zip Codes API logo" src="assets/uploads/img/robot.png" width="100px" height="92px"/>
  </a>
</p>

<h1 align="center">
  🤖 Yana API
</h1>

<p align="center">
    <a href="#">
        <img src="https://img.shields.io/badge/Redis-3.1-red.svg?style=flat-square&logo=codeigniter" alt="Redis 2.0"/>
    </a>
    <a href="#">
        <img src="https://img.shields.io/badge/php-8.1-blue.svg?style=flat-square&logo=php" alt="PHP 8.0"/>
    </a>
    <a href="#">
        <img src="https://img.shields.io/badge/MySQL-8.0-white.svg?style=flat-square&logo=mysql" alt="MySQL 8.0"/>
    </a>
</a>
</p>

<p align="center">

<strong>Yana API</strong> que permite hacer inicio de sesión, crear usuarios y consultar el historial de conversaciones de los usuarios. 🗣️🤖.
<br />
<br />
·
<a href="https://github.com/modavidc/yana-challenge/issues">Reportar un error</a>
·
<a href="https://github.com/modavidc/yana-challenge/issues">Solicitar una característica</a>

</p>

## 💪 Reto:

Puedes encontrar los requerimientos del reto en el siguiente Notion: 

- https://www.notion.so/Backend-Challenge-9b635365b71c4f6486a8993cacf46835

## 🛠️ Requerimientos

- PHP >= 5.3.7 (8.1 recommended).
- MySQL >= 5.1.0 (8.0 recommended)

## 🚀 Configuración del entorno

1. Clonar este proyecto: `git clone https://1github.com/modavidc/yana-challenge`
2. Moverse a la carpeta del proyecto: `cd yana-challenge`
3. Instalar las dependencias con: `composer install`
4. Configurar las credenciales de MySQL:

    `hostname = localhost` <br>
    `username = root` <br>
    `password = 123456` <br>
    `database = YANADB`
5. Importar la base de datos: `YANADB.sql` 

## 🔥 Ejecución de la aplicación

1. Moverse a la carpeta del proyecto: `cd yana-challenge`

2. Ejecutar el siguiente comando:
    `php -S localhost:8000`

3. Tendrás la API de disponible en:
    `http://localhost:8000`

### 🎯 Arquitectura MVC

Este repositorio sigue el patrón de MVC propuesto por Codeigniter. Con esto, podemos ver que la estructura es:

```scala
$ tree -L 4 src

application
|___ controllers
|   |___ Api.php
|___ helpers
|   |___ json_responses_helper.php
|   |___ security_helper
|___ models
    |___ User_model.php
    |___ User_activity_model.php
|___ views
    |___ index.php
```

- controllers: Se encarga del manejo de las peticiones HTTP. 

- helpers: Contiene utilidades generales. 

- models: Se encarga de la interacción con la base de datos MySQL. 

- views: Se encarga del manejo de las vistas. 

## 👤 Autor

**Moisés Cedeño**

-   Email: [moisesdavidaaron@gmail.com](mailto:moisesdavidaaron@gmail.com)
-   Github: [@modavidc](https://github.com/modavidc)

## 🤝 Contribuciones

Las contribuciones, los problemas y las solicitudes de funciones son bienvenidos. Siéntase libre de comprobar [issues page](https://github.com/modavidc/yana-challenge/issues) si quieres contribuir.<br />


## 🧑 Créditos:

-   [Íconos de buzones creados por Nikita Golubev - Flaticon](https://www.flaticon.com/free-icons/robot)

## 📝 Licencia

Copyright © 2022 [modavidc](https://github.com/modavidc).<br />
Este proyecto es [MIT](https://github.com/kefranabg/readme-md-generator/blob/master/LICENSE) licensed.

---

__Este README fue generado con ❤️ por [readme-md-generator](https://github.com/kefranabg/readme-md-generator)_
