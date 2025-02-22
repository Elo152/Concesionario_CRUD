# Concesionario_CRUD

Proyecto para la gestión de coches en un concesionario. Permite registrar, editar, mostrar y eliminar información de los coches en la base de datos.

## Características

Este proyecto es un CRUD (Crear, Leer, Actualizar, Eliminar) de coches para un concesionario. Las principales funcionalidades son:

- Registrar nuevos coches en la base de datos con su marca, modelo, año, precio, etc.
- Mostrar la lista de coches registrados.
- Editar la información de un coche.
- Eliminar un coche de la base de datos.

--- 

## Instalación

Para instalar el proyecto, sigue los siguientes pasos:

### Clonar el repositorio

git clone https://github.com/Elo152/Concesionario-CRUD.git

### Configuración del entorno

1. Renombrar el fichero .env.example a .env
2. Modificar las propiedades de la base de datos en el archivo .env para configurar tu propia conexión

### Instalar dependencias 

Situarse en la carpeta del proyecto y ejecutar composer install

### Actualizar la base de datos

Para crear la base de datos y las tablas necesarias, ejecutar el comando php artisan migrate. 

En este proyecto hay datos de ejemplos cargados.

---

### Usar la aplicación

1. Iniciar el servidor de desarrollo ejecutando el comando php artisan serve
2. Acceder a la aplicación desde tu navegador en la dirección http://localhost:8000
3. Generar una key si es necesario con el comando php artisan key:generate
4. Volver a arrancar el proyecto si es necesario con el comando php artisan serve
5. Acceder a la dirección http://localhost:8000/coches
