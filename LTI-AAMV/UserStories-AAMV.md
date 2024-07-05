# Entregable de Desarrollo de Sistema ATS (Applicant-Tracking System) de LTI

## Conversación completa
https://chatgpt.com/c/2cca756b-b2a2-4951-8fe5-19d223413074

## Prompt 1
```prompt
Eres un experto product manager, brillante stakeholder y experto business analyst y tomando el contexto de la conversación y Dado el objetivo de producto un sistema ATS (Applicant-Tracking System) y las funcionalidades principales definidas en los casos de uso, genera las 5 principales historias de usuario siguiendo para cada una la plantilla estándar especificada más adelante y considerando diferentes tipos de usuarios y sus necesidades.

Plantilla estandar:

Título de la Historia de Usuario: 

    Como [rol del usuario],
    quiero [acción que desea realizar el usuario],
    para que [beneficio que espera obtener el usuario].

Criterios de Aceptación:

    [Detalle específico de funcionalidad]
    [Detalle específico de funcionalidad]
    [Detalle específico de funcionalidad]

Notas Adicionales:

    [Cualquier consideración adicional]

Historias de Usuario Relacionadas:

    [Relaciones con otras historias de usuario]
```

## 1. Generar las User Stories

### User Story 1: Publicar Oferta de Trabajo
**Título:** Publicar Oferta de Trabajo

**Descripción:** 
    Como Reclutador,
    quiero publicar ofertas de trabajo en múltiples portales de empleo,
    para que pueda atraer a una mayor cantidad de candidatos calificados.

**Criterios de Aceptación:**
- El sistema debe permitir la creación de una nueva oferta de trabajo con título, descripción, requisitos, salario, y fecha de cierre.
- El sistema debe permitir la selección de múltiples portales de empleo para publicar la oferta.
- El sistema debe confirmar la publicación exitosa de la oferta en los portales seleccionados.

### User Story 2: Aprobar Oferta de Trabajo
**Título:** Aprobar Oferta de Trabajo

**Descripción:** 
    Como Administrador,
    quiero aprobar las ofertas de trabajo creadas por los reclutadores,
    para asegurarme de que cumplen con las políticas y estándares de la empresa.

**Criterios de Aceptación:**
- El sistema debe permitir que el administrador revise las ofertas de trabajo pendientes de aprobación.
- El sistema debe proporcionar opciones para aprobar o rechazar una oferta de trabajo con comentarios.
- El sistema debe notificar al reclutador sobre la aprobación o rechazo de la oferta.

### User Story 3: Gestionar Candidatos
**Título:** Gestionar Candidatos

**Descripción:** 
    Como Reclutador,
    quiero gestionar los perfiles de los candidatos,
    para que pueda realizar un seguimiento eficaz de su progreso a lo largo del proceso de selección.

**Criterios de Aceptación:**
- El sistema debe permitir la búsqueda y filtrado de candidatos por diversos criterios (nombre, habilidades, fecha de aplicación, etc.).
- El sistema debe permitir actualizar el perfil del candidato con notas y documentos adicionales.
- El sistema debe mostrar el estado actual del candidato en el proceso de selección.

### User Story 4: Evaluar Candidatos
**Título:** Evaluar Candidatos

**Descripción:** 
    Como Gerente de Contratación,
    quiero evaluar a los candidatos mediante entrevistas y pruebas,
    para que pueda seleccionar a los mejores candidatos para el puesto.

**Criterios de Aceptación:**
- El sistema debe permitir programar entrevistas con los candidatos.
- El sistema debe permitir registrar las evaluaciones y puntuaciones de las entrevistas y pruebas.
- El sistema debe proporcionar un resumen de las evaluaciones de todos los entrevistadores.

### User Story 5: Notificar a Candidatos Existentes
**Título:** Notificar a Candidatos Existentes

**Descripción:** 
    Como Reclutador,
    quiero notificar a los candidatos existentes sobre nuevas ofertas de trabajo,
    para que puedan postularse rápidamente a nuevas oportunidades.

**Criterios de Aceptación:**
- El sistema debe permitir la selección de candidatos existentes basados en criterios específicos.
- El sistema debe enviar notificaciones personalizadas a los candidatos seleccionados.
- El sistema debe registrar el envío y la recepción de las notificaciones.

## 2. Arma el Backlog de Producto

## Prompt 2
```prompt
/* Nota (Esta parte de la nota no fue parte del prompt): Ejecute 7 versiones de este prompt para variar el modelo de estimación (poker planning, matriz de Eisenhower, MoSCoW, Kano Model, Value vs. Effort/Effort vs. Impact, RICE Scoring Model, Story Mapping)*/

Considera el backlog de producto creado anteriormente para el sistema ATS (Applicant-Tracking System):
User Stories
* User Story 1: Publicar Oferta de Trabajo. Como Reclutador, quiero publicar ofertas de trabajo en múltiples portales de empleo, para que pueda atraer a una mayor cantidad de candidatos calificados.
* User Story 2: Aprobar Oferta de Trabajo. Como Administrador, quiero aprobar las ofertas de trabajo creadas por los reclutadores, para asegurarme de que cumplen con las políticas y estándares de la empresa.
* User Story 3: Gestionar Candidatos. Como Reclutador, quiero gestionar los perfiles de los candidatos, para que pueda realizar un seguimiento eficaz de su progreso a lo largo del proceso de selección.
* User Story 4: Evaluar Candidatos. Como Gerente de Contratación, quiero evaluar a los candidatos mediante entrevistas y pruebas, para que pueda seleccionar a los mejores candidatos para el puesto.
* User Story 5: Notificar a Candidatos Existentes. Como Reclutador, quiero notificar a los candidatos existentes sobre nuevas ofertas de trabajo, para que puedan postularse rápidamente a nuevas oportunidades.
Estima por cada item en el backlog (genera una tabla markdown):
* Impacto en el usuario y valor del negocio.
* Urgencia basada en tendencias del mercado y feedback de usuarios.
* Complejidad y esfuerzo estimado de implementación.
* Riesgos y dependencias entre tareas.
* Haz sesiones con stakeholders clave en el proceso de priorización para asegurar que el backlog refleje los objetivos del negocio.
* Utiliza RICE Scoring Model para consensuar la importancia de cada tarea.
* El backlog debe ser dinámico, reevaluando y ajustando las prioridades regularmente a medida que avanza el proyecto y surgen nuevos datos.
```

### Metodología de Priorización: RICE Scoring Model

| User Story                               | Impacto en el Usuario y Valor del Negocio | Urgencia Basada en Tendencias del Mercado y Feedback de Usuarios | Complejidad y Esfuerzo Estimado de Implementación | Riesgos y Dependencias entre Tareas                                              | Reach | Impact | Confidence | Effort | RICE Score |
|------------------------------------------|------------------------------------------|-----------------------------------------------------------------|-------------------------------------------------|----------------------------------------------------------------------------------|-------|--------|-------------|--------|------------|
| Publicar Oferta de Trabajo               | Alto                                      | Alto                                                            | Medio                                           | Dependencia de la aprobación de ofertas de trabajo (User Story 2)                | 300   | 4      | 0.9         | 3      | 360        |
| Aprobar Oferta de Trabajo                | Alto                                      | Medio                                                           | Bajo                                            | Dependencia de la creación de ofertas de trabajo (User Story 1)                  | 200   | 3      | 0.8         | 1      | 480        |
| Gestionar Candidatos                     | Alto                                      | Alto                                                            | Alto                                            | Dependencia de la creación de perfiles de candidatos y evaluaciones (User Story 4) | 250   | 4      | 0.9         | 4      | 225        |
| Evaluar Candidatos                       | Muy Alto                                  | Muy Alto                                                        | Alto                                            | Dependencia de la gestión de candidatos (User Story 3)                           | 200   | 5      | 0.8         | 4      | 200        |
| Notificar a Candidatos Existentes        | Medio                                     | Medio                                                           | Medio                                           | Dependencia de la creación de ofertas de trabajo (User Story 1)                  | 150   | 2      | 0.7         | 2      | 105        |

### Prompts Usados para Generar el Backlog

#### Prompt Inicial
Genera un backlog de producto para el sistema ATS basado en las siguientes user stories y prioriza usando el modelo RICE:

    User Story 1: Publicar Oferta de Trabajo
    User Story 2: Aprobar Oferta de Trabajo
    User Story 3: Gestionar Candidatos
    User Story 4: Evaluar Candidatos
    User Story 5: Notificar a Candidatos Existentes

Para cada user story, calcula Reach, Impact, Confidence, y Effort, y luego calcula el RICE Score para priorizarlas.


#### Prompt Final (Más Efectivo)
Genera un backlog de producto para el sistema ATS (Applicant-Tracking System) priorizando las siguientes user stories usando el modelo RICE:

    User Story 1: Publicar Oferta de Trabajo
    User Story 2: Aprobar Oferta de Trabajo
    User Story 3: Gestionar Candidatos
    User Story 4: Evaluar Candidatos
    User Story 5: Notificar a Candidatos Existentes

Para cada user story, calcula:

    Reach: Número de usuarios impactados por trimestre.
    Impact: Cuánto afectará esta funcionalidad al producto en una escala de 1 a 5.
    Confidence: Qué tan seguros estamos sobre nuestras estimaciones (0.1 a 1).
    Effort: Esfuerzo estimado en puntos de historia.
    Calcula el RICE Score y prioriza las user stories en el backlog basado en estos puntajes.


**Conclusión:**
El segundo prompt fue más efectivo porque proporciona instrucciones claras y detalladas para calcular cada componente del RICE Score, lo que resulta en una priorización más precisa y objetiva.

## 3. Genera los Tickets de Trabajo para "Aprobar Oferta de Trabajo"

## Prompt 3
```prompt
Seleccionando la estrategia RICE sobre las otras y analizando que existe una historia de usuario con el mas alto score RICE que es Aprobar Oferta de Trabajo, generar todas las subtareas de esta historia de usuario para alcanzar a cumplir con todos los criterios de aceptación de esta historia de usuario.

Ten en cuenta los diferentes roles que pueden ser asignados cada subtarea, por ejemplo si la historia de usuario tiene componente de FrontEnd, asignarla al equipo de FrontEnd, si hay componente de desarrollo BackEnd lo mismo ser asignado al equipo de BackEnd, tambien subtarea de testing, spikes, tambien subtarea para el despliegue para el equipo de devops, etc, incluye el resto de subtareas necesarias para llegar a la completitud de esta historia.

El formato de las subtareas debe ser la siguiente:

1. Título Claro y Conciso

Un resumen breve que refleje la esencia de la tarea. Debe ser lo suficientemente descriptivo para que cualquier miembro del equipo entienda rápidamente de qué se trata el ticket.

2. Descripción Detallada

    Propósito: Explicación de por qué es necesaria la tarea y qué problema resuelve.
    Detalles Específicos: Información adicional sobre requerimientos específicos, restricciones, o condiciones necesarias para la realización de la tarea.

3. Criterios de Aceptación

    Expectativas Claras: Lista detallada de condiciones que deben cumplirse para que el trabajo en el ticket se considere completado.
    Pruebas de Validación: Pasos o pruebas específicas que se deben realizar para verificar que la tarea se ha completado correctamente.

4. Prioridad

    Nivel de Urgencia: Una clasificación de la importancia y la urgencia de la tarea, lo cual ayuda a determinar el orden en que deben ser abordadas las tareas dentro del backlog.

5. Estimación de Esfuerzo

    Puntos de Historia o Tiempo Estimado: Una evaluación del tiempo o esfuerzo que se espera que tome completar el ticket. Esto es esencial para la planificación y gestión del tiempo del equipo.

6. Asignación

    Responsable: Quién o qué equipo será responsable de completar la tarea. Esto asegura que todos los involucrados entiendan quién está a cargo de cada parte del proyecto.

7. Etiquetas o Tags

    Categorización: Etiquetas que ayudan a clasificar el ticket por tipo (bug, mejora, tarea, etc.), por características del producto (UI, backend, etc.), o por sprint/versión.

8. Comentarios y Notas

    Colaboración: Espacio para que los miembros del equipo agreguen información relevante, hagan preguntas, o proporcionen actualizaciones sobre el progreso de la tarea.

9. Enlaces o Referencias

    Documentación Relacionada: Enlaces a documentos, diseños, especificaciones o tickets relacionados que proporcionen contexto adicional o información necesaria para la ejecución de la tarea.

10. Historial de Cambios

    Rastreo de Modificaciones: Un registro de todos los cambios realizados en el ticket, incluyendo actualizaciones de estado, reasignaciones y modificaciones en los detalles o prioridades.

Y el resultado generado en markdown.
```

### Subtarea 1: Crear Pantalla de Aprobación de Ofertas (FrontEnd)
**Título Claro y Conciso:** Crear Pantalla de Aprobación de Ofertas

**Descripción Detallada:**
- **Propósito:** Permitir a los administradores revisar las ofertas de trabajo pendientes de aprobación.
- **Detalles Específicos:** La pantalla debe mostrar una lista de ofertas de trabajo con detalles como título, descripción, fecha de creación, y botones para aprobar o rechazar la oferta.

**Criterios de Aceptación:**
- La pantalla debe listar todas las ofertas de trabajo pendientes de aprobación.
- Cada oferta debe tener botones de aprobación y rechazo.
- Debe haber una sección de comentarios para que el administrador deje notas.

**Prioridad:** Alta

**Estimación de Esfuerzo:** 5 puntos

**Asignación:** Equipo de FrontEnd

**Etiquetas o Tags:** UI, FrontEnd, Aprobación

**Comentarios y Notas:** Utilizar componentes reutilizables existentes para la lista de ofertas.

**Enlaces o Referencias:** [Diseño de Pantalla](link_al_diseno)

**Historial de Cambios:** N/A

---

### Subtarea 2: Implementar API para Aprobación de Ofertas (BackEnd)
**Título Claro y Conciso:** Implementar API para Aprobación de Ofertas

**Descripción Detallada:**
- **Propósito:** Proveer una API que permita a los administradores aprobar o rechazar ofertas de trabajo.
- **Detalles Específicos:** La API debe manejar solicitudes de aprobación y rechazo, actualizar el estado de la oferta y guardar cualquier comentario dejado por el administrador.

**Criterios de Aceptación:**
- La API debe aceptar solicitudes de aprobación y rechazo de ofertas.
- Debe actualizar el estado de la oferta en la base de datos.
- Debe guardar los comentarios del administrador.

**Prioridad:** Alta

**Estimación de Esfuerzo:** 8 puntos

**Asignación:** Equipo de BackEnd

**Etiquetas o Tags:** API, BackEnd, Aprobación

**Comentarios y Notas:** Asegurarse de manejar correctamente los estados de error y éxito.

**Enlaces o Referencias:** [Documentación de API](link_a_la_documentacion_api)

**Historial de Cambios:** N/A

---

### Subtarea 3: Configurar Pruebas Unitarias y de Integración (Testing)
**Título Claro y Conciso:** Configurar Pruebas Unitarias y de Integración

**Descripción Detallada:**
- **Propósito:** Asegurar que la funcionalidad de aprobación de ofertas de trabajo funciona correctamente y no introduce errores.
- **Detalles Específicos:** Crear pruebas unitarias para la lógica de negocio y pruebas de integración para la API.

**Criterios de Aceptación:**
- Pruebas unitarias deben cubrir todos los casos de la lógica de aprobación.
- Pruebas de integración deben validar el flujo completo de aprobación y rechazo de ofertas.

**Prioridad:** Alta

**Estimación de Esfuerzo:** 5 puntos

**Asignación:** Equipo de Testing

**Etiquetas o Tags:** Testing, Unit Tests, Integration Tests

**Comentarios y Notas:** Utilizar frameworks de pruebas existentes.

**Enlaces o Referencias:** [Guía de Pruebas](link_a_la_guia_de_pruebas)

**Historial de Cambios:** N/A

---

### Subtarea 4: Realizar Spike para Validación de Reglas de Negocio (Spike)
**Título Claro y Conciso:** Realizar Spike para Validación de Reglas de Negocio

**Descripción Detallada:**
- **Propósito:** Investigar y validar las reglas de negocio específicas para la aprobación de ofertas de trabajo.
- **Detalles Específicos:** Identificar y documentar todas las reglas de negocio que deben cumplirse para la aprobación de una oferta.

**Criterios de Aceptación:**
- Documentación de todas las reglas de negocio.
- Validación de las reglas con los stakeholders.

**Prioridad:** Media

**Estimación de Esfuerzo:** 3 puntos

**Asignación:** Equipo de Análisis de Negocio

**Etiquetas o Tags:** Spike, Business Analysis

**Comentarios y Notas:** Consultar con los stakeholders para asegurar que todas las reglas de negocio están cubiertas.

**Enlaces o Referencias:** [Documento de Reglas de Negocio](link_al_documento)

**Historial de Cambios:** N/A

---

### Subtarea 5: Desplegar Funcionalidad en el Entorno de Producción (DevOps)
**Título Claro y Conciso:** Desplegar Funcionalidad en el Entorno de Producción

**Descripción Detallada:**
- **Propósito:** Asegurar que la funcionalidad de aprobación de ofertas esté disponible en el entorno de producción.
- **Detalles Específicos:** Preparar scripts de despliegue, configurar pipelines de CI/CD y realizar el despliegue.

**Criterios de Aceptación:**
- La funcionalidad debe estar desplegada en el entorno de producción.
- Verificación de que la funcionalidad está operativa y accesible.

**Prioridad:** Alta

**Estimación de Esfuerzo:** 3 puntos

**Asignación:** Equipo de DevOps

**Etiquetas o Tags:** Deployment, DevOps, CI/CD

**Comentarios y Notas:** Coordinar con el equipo de QA para realizar pruebas de smoke después del despliegue.

**Enlaces o Referencias:** [Guía de Despliegue](link_a_la_guia_de_despliegue)

**Historial de Cambios:** N/A

---

### Subtarea 6: Realizar Pruebas de Aceptación con Usuarios (UAT)
**Título Claro y Conciso:** Realizar Pruebas de Aceptación con Usuarios

**Descripción Detallada:**
- **Propósito:** Validar que la funcionalidad cumple con los requisitos y es aceptada por los usuarios finales.
- **Detalles Específicos:** Planificar y ejecutar pruebas de aceptación con un grupo de usuarios administradores.

**Criterios de Aceptación:**
- Feedback positivo de los usuarios finales.
- Identificación y resolución de cualquier problema encontrado durante las pruebas.

**Prioridad:** Media

**Estimación de Esfuerzo:** 4 puntos

**Asignación:** Equipo de QA y Análisis de Negocio

**Etiquetas o Tags:** UAT, QA, Feedback

**Comentarios y Notas:** Asegurar que los usuarios están disponibles para las pruebas y proporcionarles la documentación necesaria.

**Enlaces o Referencias:** [Plan de UAT](link_al_plan_de_UAT)

**Historial de Cambios:** N/A

---

### Subtarea 7: Actualizar Documentación del Sistema
**Título Claro y Conciso:** Actualizar Documentación del Sistema

**Descripción Detallada:**
- **Propósito:** Asegurar que la documentación del sistema refleja la nueva funcionalidad de aprobación de ofertas.
- **Detalles Específicos:** Actualizar manuales de usuario, guías de administración y documentación técnica.

**Criterios de Aceptación:**
- Toda la documentación relevante está actualizada y accesible.
- La documentación ha sido revisada y aprobada por el equipo.

**Prioridad:** Media

**Estimación de Esfuerzo:** 2 puntos

**Asignación:** Equipo de Documentación

**Etiquetas o Tags:** Documentation, Updates

**Comentarios y Notas:** Coordinar con los equipos de FrontEnd y BackEnd para asegurar la precisión de la documentación.

**Enlaces o Referencias:** [Documentación del Sistema](link_a_la_documentacion_del_sistema)

**Historial de Cambios:** N/A

---

### Subtarea 8: Capacitación para Administradores
**Título Claro y Conciso:** Capacitación para Administradores

**Descripción Detallada:**
- **Propósito:** Asegurar que los administradores saben cómo utilizar la nueva funcionalidad de aprobación de ofertas.
- **Detalles Específicos:** Planificar y realizar sesiones de capacitación, y proporcionar materiales de apoyo.

**Criterios de Aceptación:**
- Todos los administradores han completado la capacitación.
- Evaluación positiva de la capacitación por parte de los administradores.

**Prioridad:** Media

**Estimación de Esfuerzo:** 3 puntos

**Asignación:** Equipo de Formación

**Etiquetas o Tags:** Training, User Education

**Comentarios y Notas:** Recoger feedback de los administradores para futuras mejoras.

**Enlaces o Referencias:** [Materiales de Capacitación](link_a_los_materiales)

**Historial de Cambios:** N/A

## 4. Estimación del Esfuerzo de los Tickets de Trabajo

## Prompt 4
```prompt
Para las subtareas generadas crea una tabla donde añadas tu sugerencia de estimación de puntos de complejidad donde 0.5 y 1 son tareas sencillas, dos puntos tiene una complejidad basica, 3 y 5 puntos una complejidad media y de 8, 13 y más puntos una complejidad alta que en un sprint no se solucionará, usa una metodologia de planning poker para estimar estos puntos entre el equipo de trabajo y tomando un pivote de referencia para la estimación y guiar a cada integrante del equipo a refinar la estimación.

Genera el resultado en markdown.
```

### Metodología de Planning Poker

Para estimar los puntos de complejidad de cada subtarea, utilizamos la metodología de planning poker:

1. **Referencia Pivote:**
   - **Pivote:** Actualizar Documentación del Sistema (2 puntos)
   - Esta tarea se utiliza como referencia para guiar las estimaciones de otras tareas.

2. **Proceso:**
   - Cada miembro del equipo recibe una baraja de cartas con los números de Fibonacci (0.5, 1, 2, 3, 5, 8, 13, etc.).
   - Se lee la descripción de la subtarea a estimar.
   - Cada miembro selecciona una carta que representa su estimación de la complejidad de la subtarea.
   - Las cartas se revelan simultáneamente.
   - Se discuten las diferencias significativas en las estimaciones y se ajustan hasta llegar a un consenso.

### Resultados del Planning Poker

| Subtarea                                 | Complejidad Sugerida (Puntos) | Complejidad Final (Puntos) |
|------------------------------------------|------------------------------|---------------------------|
| Crear Pantalla de Aprobación de Ofertas  | 5                            |                           |
| Implementar API para Aprobación de Ofertas | 8                            |                           |
| Configurar Pruebas Unitarias y de Integración | 5                            |                           |
| Realizar Spike para Validación de Reglas de Negocio | 3                            |                           |
| Desplegar Funcionalidad en el Entorno de Producción | 3                            |                           |
| Realizar Pruebas de Aceptación con Usuarios | 3                            |                           |
| Actualizar Documentación del Sistema      | 2                            | 2                         |
| Capacitación para Administradores         | 3                            |                           |

### Notas Adicionales
- La **Complejidad Final (Puntos)** será determinada después de realizar las sesiones de planning poker con el equipo.
- Es importante tener en cuenta que las estimaciones pueden cambiar a medida que se obtiene más información o surgen nuevos datos durante el proyecto.
- Las subtareas con una complejidad final alta (8, 13 o más puntos) deben ser revisadas para ver si pueden ser desglosadas en tareas más pequeñas y manejables.

