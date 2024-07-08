LLM Utilizado: ChatGPT 4o

# Prompt #01: Información del PRD

Te daré la información del producto y la información del documento de requerimientos del producto (PRD), guardalo para cuándo te solicite realizar alguna tarea posterior.

Producto: Sistema de Gestión de Candidatos (ATS)

PRD Básico

Objetivo del Producto: Proveer una plataforma fácil de usar para que los usuarios puedan optimizar y automatizar el proceso de reclutamiento, desde la creación de ofertas hasta la contratación final. Este sistema ayuda a las empresas a gestionar de manera eficiente y eficaz a los candidatos a lo largo de todo el ciclo de contratación.

Funcionalidades Principales:
1. Creación de ofertas: Permite diseñar y configurar descripciones de puestos y requisitos de manera intuitiva, asegurando claridad y precisión.
2. Publicación de ofertas: Facilita la distribución de las vacantes en múltiples plataformas como bolsas de trabajo, sitios web corporativos y redes sociales, alcanzando a una amplia audiencia.
3. Recepción de candidatos: Centraliza la recolección de aplicaciones, permitiendo una gestión ordenada y accesible de todos los candidatos que aplican.
4. Revisión de candidatos: Proporciona herramientas para evaluar y filtrar candidatos según criterios predefinidos, mejorando la calidad de las selecciones.
5. Realización de pruebas en línea: Integra evaluaciones y pruebas de habilidades que los candidatos pueden completar en línea, agilizando la preselección.
6. Programación de entrevistas: Automatiza la coordinación de entrevistas, permitiendo la asignación de horarios y seguimiento de confirmaciones.
7. Contratación de candidatos seleccionados: Facilita la generación de ofertas de trabajo y la gestión del proceso de incorporación, asegurando una transición fluida de los nuevos empleados.

# Prompt # 02: Generación de historias de usuario principales o hitos

Actua como un Product Manager y Business Analyst.

Con la información anterior del PRD, vas a generar 2 historias de usuario por cada funcionalidad del sistema ATS que sigan el siguiente template para crear una historia de usuario:

1. Título de la Historia de Usuario
2. Formato estándar: "Como [tipo de usuario], quiero [realizar una acción] para [obtener un beneficio]".
3. Descripción: Una descripción concisa y en lenguaje natural de la funcionalidad que el usuario desea.
4. Criterios de Aceptación: Condiciones específicas que deben cumplirse para considerar la User Story como "terminada", éstos deberian de seguir un formato similar a “Dado que” [contexto inicial], "cuando” [acción realizada], “entonces” [resultado esperado]. (Genera 3 criterios de aceptación)
5. Notas adicionales:  Notas que puedan ayudar al desarrollo de la historia.
6. Historias de Usuario Relacionadas: [Relaciones con otras historias de usuario]

# Prompt # 03: Priorización del backlog por el criterio de valor para la organización

Considera el backlog de producto creado anteriormente para el sistema ATS.
Realiza la priorización de las backlog por su criterio de valor. para las 5 primeras historias de usaurio priorizadas coloca una breve descripción del por qué es tan valiosa la historia para el proyecto.

# Prompt # 04: Prompt 03 editado - Priorización del backlog por el criterio de MoSCoW

Considera el backlog de producto creado anteriormente para el sistema ATS.
Realiza la priorización de las backlog por la técnica MoSCoW. No es necesario que expliques el método pero si la razón de ser de la priorización de las 5 primeras historias de usaurio que queden priorizadas.

# Prompt # 05: Prompt 03 editado - Priorización del backlog por el método de Mapas de historias de usuario, de Jeff Patton

Considera el backlog de producto creado anteriormente para el sistema ATS.
Realiza la priorización del backlog por el método de mapas de historias de usuario, de Jeff Patton. No es necesario que expliques el método pero si la razón de ser de la priorización de las 5 primeras historias de usaurio que queden priorizadas. Deja las demás historias priorizadas según el orden de priorización que les has dado.

De acuerdo con las respuestas obtenidas me quedo con la priorización por el crtireio de valor, ya que al conbinarlo con el MoSCoW han dado como resultado las mismas historias con informaicón muy simiar.
El prompt seleccionado en este caso es este:
**Prompt # 03: Priorización del backlog por el criterio de valor para la organización**

# Prompt # 06: Generar tickets de trabajo

Vas a detallar la historia de usuario "Filtrar Candidatos Evaluados", para esto vas a generar todos los tickets de trabajo que consideres necesarios para llevar la historia a su estado "Done", esto incluye tareas de tipo técnico, funcional, etc. Ten en cuenta el siguiente template para definir los tickets:

Lo siguiente es el template para cada uno de los tickets.

Título: [Título del ticket]
Descripción: [Descripción de la tarea]
Criterios de Aceptación: [Listado máximo de 3 criterios de aceptación]
Prioridad: [Alta, Media, Baja]
Estimación: [Estimar por el método de poker planning]
Asignado a: [Equipo de Backend, Frontend, Testing, UX, Otro que consideres]
Etiquetas: [Algunos ejemplos como Seguridad, Backend, Sprint 10]
Comentarios: [Información importante para lograr completar el ticket]
Enlaces: [Ejemplo: Documento de Especificación de Requerimientos de Seguridad]
Historial de Cambios. Algunos ejemplos como:
- 01/10/2023: Creado por [nombre]
- 05/10/2023: Prioridad actualizada a Alta por [nombre]

