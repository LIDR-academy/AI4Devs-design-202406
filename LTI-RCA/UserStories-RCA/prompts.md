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

### Historia de Usuario: Publicación Automática de Vacantes

#### Tareas Técnicas:

1. **Diseñar el Servicio de Publicación Automática:**
   - Revisar requisitos de diseño de la arquitectura.
   - Definir la estructura de datos para las vacantes.

2. **Implementar Servicio de Publicación Automática:**
   - Desarrollar el componente de backend para gestionar la publicación.
   - Integrar con las plataformas de terceros para la publicación automática.
   - Implementar lógica de gestión de errores y reintentos.

3. **Crear Interfaz de Usuario para Configuración:**
   - Diseñar la interfaz de usuario en el panel administrativo.
   - Desarrollar la parte frontend para configurar las plataformas de publicación.

4. **Pruebas Unitarias y de Integración:**
   - Escribir pruebas unitarias para el servicio de publicación automática.
   - Realizar pruebas de integración con las plataformas de terceros.

5. **Documentación:**
   - Documentar el funcionamiento del servicio de publicación automática.
   - Actualizar el manual de usuario con las nuevas funcionalidades.

---

### Historia de Usuario: Filtro Automático de Candidatos

#### Tareas Técnicas:

1. **Diseñar Criterios de Filtro:**
   - Definir los criterios de filtrado basados en requisitos de negocio y diseño técnico.

2. **Implementar Lógica de Filtro en Backend:**
   - Desarrollar el componente backend para aplicar los criterios de filtro.
   - Integrar con la base de datos centralizada de candidatos.

3. **Crear Interfaz de Usuario para Configuración de Filtros:**
   - Diseñar la interfaz de usuario para gestionar y configurar los criterios de filtro.
   - Implementar la parte frontend para la configuración de filtros.

4. **Pruebas Automatizadas de Filtro:**
   - Desarrollar y ejecutar pruebas automatizadas para verificar la precisión del filtro.
   - Realizar pruebas de rendimiento para asegurar la eficiencia del filtro.

5. **Documentación y Actualización de Manuales:**
   - Documentar los criterios de filtro implementados.
   - Actualizar la documentación del sistema con los nuevos ajustes de configuración.

---

### Historia de Usuario: Programación Automática de Entrevistas

#### Tareas Técnicas:

1. **Diseñar Servicio de Programación Automática:**
   - Definir la arquitectura del servicio de programación de entrevistas.
   - Establecer la comunicación con los calendarios de los entrevistadores y candidatos.

2. **Desarrollar Lógica de Programación de Entrevistas:**
   - Implementar la lógica para identificar la disponibilidad de entrevistadores y candidatos.
   - Integrar con servicios de calendario externos (por ejemplo, Google Calendar, Outlook).

3. **Crear Interfaz de Usuario para Programación de Entrevistas:**
   - Diseñar la interfaz de usuario para que los reclutadores programen las entrevistas automáticamente.
   - Implementar la interfaz de usuario utilizando tecnologías frontend adecuadas.

4. **Pruebas y Validaciones de Programación:**
   - Realizar pruebas exhaustivas para asegurar que las entrevistas se programen correctamente.
   - Verificar la sincronización de datos entre el sistema y los calendarios externos.

5. **Documentación de Funcionalidades y Actualización de Manuales:**
   - Documentar el proceso de programación automática de entrevistas.
   - Actualizar la documentación del usuario final y del administrador del sistema.

