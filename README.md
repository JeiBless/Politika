
## Politik

Aplicación web desarrollada en Laravel.



## Propósito
Crear una base de datos de ciudadanos que se postulen a cargos publicos y vincularlos a noticias relevantes para que la ciudadania en general pueda tener una mayor claridad de los candidatos a elergi.

## Tecnologías utilizadas
- Laravel 5.8
- Javascript
- CSS
- Bootstrap
- PHP 7+
- Mysql
- Requisitos para ejecutar
- Compositor
- nodo.js (npm) para instalar dependientes
- Git

## Instrucciones para instalar

- Asegúrese de que PHP 7+ y Mysql estén instalados y en ejecución. Recomiendo Xampp para usuarios de Windows.
- Cree una base de datos mysql vacía y anote el nombre, el nombre de usuario y la contraseña.
- Asegúrese de que git está instalado.
- A través de la consola escriba "git clone https://github.com/JeiBless/Politik". Esto creará una carpeta politik en su directorio actual.
- Cd en ese directorio.
- Ejecutar 'instalación de compositor'
- Ejecutar 'npm install'
- copiar el archivo .env.example a .env
- Escriba 'php artisan key:generate'
- Edite el archivo .env (no .env.example) y, en la configuración de mysql, coloque el nombre de la base de datos, el nombre de usuario y la contraseña.
- Escriba 'php artisan migrate' para configurar las tablas en la base de datos.

## Por hacer

- Vistas Mantenedor de los usuarios.
- script python para realizar scraping en twitter sobre los nombres de los candidatos.
- Gráficos con estudios en terminos positivos y negativos.