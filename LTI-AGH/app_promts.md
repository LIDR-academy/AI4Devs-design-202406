# Creación sistema ATS - CI4

**Prompt 1:** Para comenzar con el proyecto, primero necesitamos instalar CodeIgniter 4 y configurar la estructura básica del sistema. Luego, basándonos en los requisitos proporcionados, podemos crear un diagrama ER y la base de datos correspondiente.

```plaintext
composer create-project codeigniter4/appstarter project-name
````

**Prompt 2:** ok, generemos entonces el producto para un ATS, de recursos humanos, necesitamos un sistema con login para administradores, con permisos de accesos por niveles, el registro de los candidatos, sus fases, documentos, fechas de entrevistas,  generar empleos con sus respectivos requerimientos, en la parte del front deberemos listar los empleos y al darle click ver los detalles, tambien hay que generar fake data, iniciemos con estructura de las tablas, utilizaremos sqlite, posteriormente hay que crear modelos, controladores, y front;

**Prompt 3:** continua generando las demas tablas en base al contexto de requerimiento que te proporcione

**Prompt 4:** se te olvida la instruccion de spark para generar tanto los archivos como hacer la migracion y configuracion del sqlite

```plaintext
php spark make:migration CreateUsersTable
php spark make:migration CreateJobPostsTable
php spark make:migration CreateApplicationsTable
php spark make:migration CreateDocumentsTable
````

**Prompt 5:** genera el diagrama de entidad relacion para poder entender mejor lo que estas haciendo, regresa codigo para mermaid

**Prompt 6:** prosigamos con los controladores y las vistas, iniciemos creando el puesto en parte de administracion y mostrando la lista con su detalle en el front, por cierto, extiende mas la estructura de los puestos y tambien deben tener un detalle donde diremos mas de la propuesta laboral, como la oferta economica, los horarios, lugar, empresa, requerimientos minimos del aspirante, etc. basate en los sistemas de reclutamiento existentes

**Prompt 7:** ya que la tabla de jbos tiene cambios, como se aplican usando el migrate ?

```
php spark make:migration ModifyJobPostsTable
````

**Prompt 8:** tambien quiero generar los controladores con instrucciones de spark

```
php spark make:controller Admin/JobPostController --suffix
```
**Prompt 9:** y las rutas para cuando?, los views ? generalos

**Prompt 10:** existe una instruccion para crear las vistas con spark ?

**Prompt 11:** ok, como le digo que la lista de jobs sea. el controlador inicial ?

**Prompt 12:** me genera un error pero no me dice que esta fallando, como habilitamos el debuggeo ?

**Prompt 13:** no has generado el modelo

**Prompt 14:** las vistas deben ser aplicar estilos de bs5, deben ser responsivas y agrega jquery de una vez por si ocupamos a futuro 

**Prompt 15:** actualiza tus links de bootstrap, no existen los que proporcionas

**Prompt 16:** comenzamos con problemas al crear un puesto "" NOT NULL constraint failed: job_posts.created_by ""

**Prompt 17:** siguiente error: ""  Invalid file: "admin/job_posts/index.php"  ""

**Prompt 18:** te falto generar el detalle, nos da un error ""  Invalid file: "job_posts/show.php"  ""

**Prompt 19:** genera un estilo que se vea atractivo, utiliza de referencia freelancer.com, tambien agrega un boton para regresar al indes a ver mas empleos

**Prompt 20:** genera la parte para editar el puesto

**Prompt 21:** te falta mostrar los errores en el admin en caso de que no se cree el empleo y en la lista del admin que informe que se ha creado el empleo correctamente

**Prompt 22:** pasemos al front, genera una plantilla con tema azul que tenga un header, un footer, y la lista de empleos dentro de una card, inspirate para que se ve aprofesional

**Prompt 23:** lo mismo para backend pero con tema dark

**Prompt 24:** la lista de puestos del admin metela en datatables, no olvides agregar las referencias

**Prompt 25:** para el front crea gradientes de azules para las barras de navegacion, el footer  y los botones, que no se vea tan simple

**Prompt 26:** vamos bien, ahora  una vez que el usuario aplica en el puesto, debe tener un boton de aplicar  donde el candidato se va a registrar para darle seguimiento, utiliza la tabla de users que has creado

**Prompt 27:** no está registrando al usuario y tampoco muestra porqué

**Prompt 28:** tambien no olvides ligar al usuario con el puesto para que sepamos donde quiere aplicar

**Prompt 29:** agrega la funcionalidad en el administrador, ahora tambien se deben de ver las personas que han aplicado a la oferta de empleo

**Prompt 30:** vamos al administrador, necesitamos ver que gente a aplicado a que oferta

 **Prompt 31:** Controller method is not found: "applications" 
 
 **Prompt 32:** dentro de las aplicaciones, hay que darle mas opciones al reclutador, como marcarle al candidato, ponerle en que fase se encuentra, envarle un correo, etc, analiza la situacion y sugiere las mejoras, tambien modifica la tabla de usuarios para que no pida password, sino celular para poder contactarlo,  que ingrese su experiencia, etc.
 
 **Prompt 33:** te falto ponerme el comando de spark para crear la modificacion y actualizar la base 
 
 **Prompt 34:** sucedio un error  Undefined array key "phase" 
 
 **Prompt 35:** te falta modificar el menu del administrador, ahora quiero que pongas un side menu y mantengas
 
 **Prompt 36:** el navbar con el nombre nada más,  agrega iconos que hagan referencia a las acciones o los enlaces 

 **Prompt 37:** genera un script sql con fake data para llenar las vacantes, todas crealas para reclutar gente en el area de informatica, toma los campos de @JobPostModel.php

 Version online https://lidr.mirrorlinux.net/