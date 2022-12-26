<h1> 📞 Agenda Telefónica Backend 📞</h1>

## 📚 Contenido

- Introducción
- Requerimientos
- Instalación
- Configuración
- Verificación
- Especificaciones
- Fronted
- Maintainer

## 📂 Introducción
Código backend que consta de realizar una agenda telefónica utilizando php, base de datos en mysql y haciendo el uso del framework symfony.

## 📂 Requerimientos
- PHP 8.0.8
- Composer 2.3.5
- Symfony 6.2
- Gestor de base de datos (MAMP)

## 📁 Instalación

1. Clonar el repositoria dentro de la carpeta 'htdocs' o afín de acuerdo al gestor de base de datos que tengas instalado.
2. Abrir una terminal cmd en la carpeta del repositorio clonado, a continuación, ejecutar el siguiente comando:
```bash
composer install
```
3. Una vez ejecutado el comando anterior podras visualizar las carpetas generadas desde tu gestor de código.


## 📂 Configuración
1. Configurar el URL para la base de datos en el archivo ".env"

En este caso el gestor de servicios para base de datos que se usó fue MAMP, así que habra unas pequeñas modificaciones:

<p>
  <img src="https://user-images.githubusercontent.com/100662882/209512176-c8e2bfb4-4c90-4e01-b452-e2998db7ae04.png" />
</p>

Considerando el formato "usuario:password", deberás cambiar la palabra "root" por el nombre de usuario que usas para entrar a tu gestor (en caso de que uses el mismo usuario, dejalo de la misma forma) para el siguiente campo de "root" será tu contraseña en caso de que la tengas, de no ser así deberás borrar ":root" del url.

Por último, revisando que puerto tienes para mysql deberas modificar la parte de 8809 por 3306, según sea el caso.

2. Inicializar tu gestor de servicio de base de datos, es importante que la mantengas inicializada durante este proceso.

<p>
  <img width="529" alt="image" src="https://user-images.githubusercontent.com/100662882/209513476-d91f185a-e07c-4408-a6da-53657b909a0c.png">
</p>

3. Dirigete a la consola del proyecto y ejecuta el siguiente comando para generar la base de datos:
```bash
php bin/console doctrine:database:create
```
4. Dirigite a la carpeta de migraciones y en caso de encontrar un documento ".php" borralo para poder realizar el siguiente paso.
<img width="164" alt="image" src="https://user-images.githubusercontent.com/100662882/209513874-d50a5e6e-b7d0-4bfa-8dea-11e9d9f96cba.png">

5. La base de datos aún no contiene la tablas, por lo tanto, ejecuta el siguiente comando para añadirlas:
```bash
php bin/console make:migration
```
6. Para finalizar, este comando ejecuta todos los archivos de migración que aún no se han ejecutado en su base de datos:
```bash
php bin/console doctrine:migrations:migrate
```
7. ¡Importante! En caso de que te marque algún tipo de error dirigete a un gestor de base de datos y borra la base de datos manualmente, una vez hecho esto ejecuta los pasos desde el número 3.

## 📂 Verificación

Una vez hayas realizado los pasos anteriores en la sección de configuración es necesesario corroborar que todo funcione correctamente, para ello:

1. Inicializa el servidor desde la consola ejecutada de tu proyecto:
 ```bash
php -S localhost:8000 -t public
```
2. Deberás poder visualizar la siguiente pantalla:
<img width="1381" alt="Captura de pantalla 2022-12-25 a la(s) 19 02 51" src="https://user-images.githubusercontent.com/100662882/209515410-cad541f1-0704-4a06-97fb-6bf2a1ce3632.png">

3. Dirigete a la url de tu navegador y agregale "api/contactos", similar a http://localhost:8000/api/contactos
4. Visualizarás en formato "JSON" un arreglo vacío debido a que no tienes datos en tu tabla contactos, pero si ingresaste de manera manual algun dato podras observar algo similar a la siquiete imagen:
<img width="1440" alt="Captura de pantalla 2022-12-25 a la(s) 21 36 33" src="https://user-images.githubusercontent.com/100662882/209515453-a52d9c19-9371-4ed2-9059-82bb61762493.png">

## 📂 Especificaciones

* 🟣 Deberás tener el servidor encendido para poder usar la API.
* 🟣 Los campos de la entidad contacto son los siguientes:
- Nombre
- Apellido 
- Número telefónico
- Dirección
- Email
* 🟣 La tabla de otros números únicamente registrará el ide y el nuevo número telefónico.
* 🟣 La tabla contacto otros número, establecerá la relación entre el id del nuevo número y el id del contacto al cual se le asignará. 

## 📂 Fronted
Podrás encontrar el repositoria del fronted para que puedas realizar las pruebas necesarias del CRUD.
<br>

[Fronted de la aplicación](https://github.com/Lizzyter/agendaFronted)


## Maintainer
En caso de encontrar algún problema o bug en su ejecución, házmelo saber lo más pronto posible para dar una respuesta inmediata

<br>
<p align='center'>
  <img src='https://img.shields.io/badge/Versión-1.0.0-9fc?style=flat-square' />
  <img src='https://img.shields.io/badge/Estatus-Terminado-blueviolet?style=flat-square' />
</p>

💟 Code by [Elizabeth Aguilar](https://github.com/Lizzyter)
