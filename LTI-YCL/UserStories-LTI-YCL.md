# Creación del Backlog de Producto LTI

**chatGPT 4o**

## Creación de historias de usuarios

###  **Prompt(1)**:
- Actua como un Product Manager y Business Analyst
- Dame un resumen del objetivo del producto ATS, segun el diseno y funcionalidades creados anteiormente

###  **Prompt(2)**:

- Dame un resumen de las funcionalidades propuestas anteriormente

###  **Prompt(3)**:

- Dado el objetivo de producto mencionado anteriormente, las funcionalidades principales creadas y el disenio propuesto, define los títulos de 5 historias de usuario principales, enfocate en las funcionalidades principales y las que hacen la diferencia. 
  Para ello sigue el siguiente formato estándar: "Como [tipo de usuario], quiero [realizar una acción] para [obtener un beneficio]"

###  **Prompt(4)**:

- Para los titulos de historias de usuarios creados anteriormente, construye las historias de usuario con la siguiente estructura:

Título de la Historia de Usuario: 
	1. Como [rol del usuario],
	2. quiero [acción que desea realizar el usuario],
	3. para que [beneficio que espera obtener el usuario].
Criterios de Aceptación:
	1. [Detalle específico de funcionalidad]
	2. [Detalle específico de funcionalidad]
	3. [Detalle específico de funcionalidad]
Notas Adicionales:
	• [Cualquier consideración adicional]
Historias de Usuario Relacionadas:
[Relaciones con otras historias de usuario]

###  **Prompt(5)**:

 - Para las historias de usuario creadas anteriormente organiza el backlog usando una combinacion entre la tecnica de MoSCoW y valor vs esfuerzo

 #### Conclusiones de priorización del backlog:

 - En este caso elegi la metodologia de MoSCoW y esfuerzo valor, dado que es una nueva aplicación, creo que lo que mas da valor es lo primero en lo que debemos centrarnos, y Moscow no permite tambien visualizar lo que es importante y necesario, antes de lo que podria ser mas fancy.

###  **Prompt(6)**:

Considera la historia Filtrado Automático de Candidatos. Genera una  todos los tickets de trabajo necesarios usando el siguiente ejemplo como base de la creacion de tickets y estima utilizando poker planning:

Título: Implementación de Autenticación de Dos Factores (2FA)

Descripción: Añadir autenticación de dos factores para mejorar la seguridad del login de usuarios. Debe soportar aplicaciones de autenticación como Authenticator y mensajes SMS.

Criterios de Aceptación:

Los usuarios pueden seleccionar 2FA desde su perfil.
Soporte para Google Authenticator y SMS.
Los usuarios deben confirmar el dispositivo 2FA durante la configuración.
Prioridad: Alta

Estimación: 8 puntos de historia

Asignado a: Equipo de Backend

Etiquetas: Seguridad, Backend, Sprint 10

Comentarios: Verificar la compatibilidad con la base de usuarios internacionales para el envío de SMS.

Enlaces: Documento de Especificación de Requerimientos de Seguridad


