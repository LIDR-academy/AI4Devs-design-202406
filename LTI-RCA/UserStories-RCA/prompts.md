# ASISTENTE UTILIZADO

ChatGPT 4o

# PROMPT 1

Actua como un Product Owner y genera User Stories partiendo del documento adjunto que actuará como un PRD básico. Como primer paso simplemente quiero que describas las User Stories necesarias siguiendo el formato de la siguiente plantilla:

## PLANTILLA:

**Título de la Historia de Usuario** : [Título de la Historia de Usuario]

**Como** [rol del usuario],
**quiero** [acción que desea realizar el usuario],
**para que** [beneficio que espera obtener el usuario].

**Criterios de Aceptación:**

**Dado** [contexto], **cuando** [evento], **entonces** [resultado].
**Dado** [contexto], **cuando** [evento], **entonces** [resultado].
**Dado** [contexto], **cuando** [evento], **entonces** [resultado].

## BUENAS PRÁCTICAS

+ Utiliza el formato de la plantilla para crear las User Stories.
+ Utiliza el formato de la plantilla para crear los Criterios de Aceptación.
+ Sigue los criterios INVEST para crear las User Stories.
+ Sigue los criterios INVEST para crear los Criterios de Aceptación.
+ Haz que las historias de usuario sean simples y fáciles de entender.

# FORMATO DE RESPUESTA

Genera tu respuesta en formato markdown

# PROMPT 2

Partiendo de las historias de usuario que has creado crea y prioriza el Product Backlog. Utiliza el sistema RICE para crear una tabla en la que indiques para cada historia de usuario:
- Reach
- Impact
- Confidence
- Effort

El esfuerzo calculalo utilizando como punto de partida la primera historia de usuario, que tendrá un esfuerzo de 1. Para el resto de historias calcula su esfuerzo en base a esta y utiliza el sistema Fibonacci como valores válidos para el cálculo.

Finalmente prioriza las historias de usuario en base a los resultados obtenidos. 

# PROMPT 2b

Partiendo de las historias de usuario que has creado crea y prioriza el Product Backlog. 
Valora las historias a través de un sistema de Planning Poker simulando que en el equipo participan:

- Un desarrollador Frontend
- Un desarrollador Backend
- Un desarrollador de Infraestructura
- Un ingeniero de QA
- Un analista de Datos
- Un experto en Business

Finalmente prioriza las historias de usuario en base a los resultados obtenidos. 

# FORMATO DE RESPUESTA

Genera tu respuesta en formato markdown

# PROMPT 2c

Partiendo de las historias de usuario que has creado crea y prioriza el Product Backlog. Ten en cuenta los siguientes criterios para priorizarlo:

+ Valor del Negocio: Identificar las user stories y mejoras que aportan el mayor valor al negocio o a los usuarios finales. Esto incluye impacto en la retención de usuarios, atractivo para nuevos usuarios y potencial de ingresos.
+ Urgencia: Determinar qué características son más urgentes en términos de necesidades del mercado o compromisos con los stakeholders.
+ Dependencias: Reconocer y priorizar tareas que otras tareas dependen para su implementación. Esto asegura un flujo de trabajo lógico y eficiente.
+ Coste de implementación: Considerar el esfuerzo, los recursos y el tiempo necesarios para cada tarea. Priorizar aquellas con la mejor relación costo-beneficio.
+ Riesgos y obstáculos potenciales: Evaluar los riesgos asociados con cada user story o mejora y su impacto potencial en el proyecto.
+ Feedback del usuario: Integrar las opiniones y preferencias de los usuarios, especialmente en áreas críticas de la interfaz de usuario y la experiencia del usuario.
+ Madurez tecnológica: Considerar la madurez y la viabilidad de las soluciones tecnológicas propuestas para cada tarea.

Ahora actúa como un stakeholder de esta aplicación y ten en cuenta su opinión para repriorizar el backlog

# FORMATO DE RESPUESTA

Genera tu respuesta en formato markdown

# PROMPT 3:

Ahora genera los items de trabajo necesarios para las 3 primeras historias de usuario tal como lo haría un equipo de desarrollo durante una Sprint Planning. Si es necesario divide las historias de usuario en tareas técnicas más pequeñas. Ten en cuenta el documento que adjunté al principio de esta conversación en la que se indican arquitectura, modelos de datos y otras partes del diseño técnico de la aplicación.

