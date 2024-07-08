# Prompt #01: Información del PRD
Se almacena la información del producto y el PRD básico del sistema de Gestión de Candidatos (ATS).

# Prompt # 02: Generación de historias de usuario principales o hitos
A continuación se presentan las historias de usuario para cada funcionalidad del sistema ATS:

### Creación de ofertas

#### Historia de Usuario 1: Crear Descripción de Puesto
1. **Título de la Historia de Usuario**: Crear Descripción de Puesto
2. **Formato estándar**: "Como reclutador, quiero crear una descripción de puesto para definir claramente las responsabilidades y requisitos del trabajo."
3. **Descripción**: Permite a los reclutadores crear y configurar descripciones de puestos de manera intuitiva, asegurando claridad y precisión.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador en la página de creación de ofertas, **cuando** ingreso y guardo los detalles del puesto, **entonces** debería poder ver la nueva descripción de puesto en el listado de ofertas.
   - **Dado que** soy un reclutador en la página de creación de ofertas, **cuando** dejo campos obligatorios en blanco y trato de guardar la oferta, **entonces** debería ver mensajes de error indicándome que complete esos campos.
   - **Dado que** soy un reclutador en la página de creación de ofertas, **cuando** ingreso detalles del puesto, **entonces** debería poder usar una plantilla predefinida para agilizar el proceso.
5. **Notas adicionales**: Las plantillas predefinidas deben ser editables por el usuario.
6. **Historias de Usuario Relacionadas**: Publicar Oferta, Revisar Oferta

#### Historia de Usuario 2: Editar Descripción de Puesto
1. **Título de la Historia de Usuario**: Editar Descripción de Puesto
2. **Formato estándar**: "Como reclutador, quiero editar la descripción de un puesto existente para actualizar los requisitos y responsabilidades."
3. **Descripción**: Permite a los reclutadores editar descripciones de puestos ya creadas para mantener la información actualizada.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador en la página de listado de ofertas, **cuando** selecciono una oferta y elijo editarla, **entonces** debería poder modificar los detalles del puesto y guardar los cambios.
   - **Dado que** soy un reclutador en la página de edición de ofertas, **cuando** realizo cambios y guardo, **entonces** debería ver una confirmación de que los cambios han sido guardados correctamente.
   - **Dado que** soy un reclutador en la página de edición de ofertas, **cuando** trato de guardar cambios sin llenar campos obligatorios, **entonces** debería ver mensajes de error indicándome que complete esos campos.
5. **Notas adicionales**: La edición debe ser auditada para tener un historial de cambios.
6. **Historias de Usuario Relacionadas**: Crear Descripción de Puesto, Publicar Oferta

### Publicación de ofertas

#### Historia de Usuario 1: Publicar Oferta en Bolsas de Trabajo
1. **Título de la Historia de Usuario**: Publicar Oferta en Bolsas de Trabajo
2. **Formato estándar**: "Como reclutador, quiero publicar una oferta en múltiples bolsas de trabajo para alcanzar a una mayor audiencia."
3. **Descripción**: Facilita la distribución de las vacantes en múltiples plataformas como bolsas de trabajo para alcanzar a una amplia audiencia.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador con una oferta lista para publicar, **cuando** selecciono las bolsas de trabajo y publico la oferta, **entonces** debería ver una confirmación de que la oferta ha sido publicada en todas las plataformas seleccionadas.
   - **Dado que** soy un reclutador en la página de publicación de ofertas, **cuando** selecciono una oferta para publicar y elijo las bolsas de trabajo, **entonces** debería poder ver un resumen de dónde se publicará la oferta.
   - **Dado que** soy un reclutador en la página de publicación de ofertas, **cuando** se completa la publicación de la oferta, **entonces** debería recibir una notificación o correo electrónico confirmando la publicación exitosa.
5. **Notas adicionales**: Las plataformas de bolsas de trabajo deben ser configurables desde la administración del sistema.
6. **Historias de Usuario Relacionadas**: Crear Descripción de Puesto, Recepción de Candidatos

#### Historia de Usuario 2: Publicar Oferta en Redes Sociales
1. **Título de la Historia de Usuario**: Publicar Oferta en Redes Sociales
2. **Formato estándar**: "Como reclutador, quiero publicar una oferta en redes sociales para atraer candidatos que están activos en estas plataformas."
3. **Descripción**: Facilita la distribución de las vacantes en redes sociales para atraer a candidatos activos en estas plataformas.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador con una oferta lista para publicar, **cuando** selecciono las redes sociales y publico la oferta, **entonces** debería ver una confirmación de que la oferta ha sido publicada en todas las redes sociales seleccionadas.
   - **Dado que** soy un reclutador en la página de publicación de ofertas, **cuando** selecciono una oferta para publicar y elijo las redes sociales, **entonces** debería poder ver un resumen de dónde se publicará la oferta.
   - **Dado que** soy un reclutador en la página de publicación de ofertas, **cuando** se completa la publicación de la oferta, **entonces** debería recibir una notificación o correo electrónico confirmando la publicación exitosa.
5. **Notas adicionales**: Las plataformas de redes sociales deben ser configurables desde la administración del sistema.
6. **Historias de Usuario Relacionadas**: Crear Descripción de Puesto, Recepción de Candidatos

### Recepción de candidatos

#### Historia de Usuario 1: Recibir Aplicaciones en un Solo Lugar
1. **Título de la Historia de Usuario**: Recibir Aplicaciones en un Solo Lugar
2. **Formato estándar**: "Como reclutador, quiero recibir todas las aplicaciones en un solo lugar para gestionarlas de manera ordenada y accesible."
3. **Descripción**: Centraliza la recolección de aplicaciones, permitiendo una gestión ordenada y accesible de todos los candidatos que aplican.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador en la página de recepción de aplicaciones, **cuando** se recibe una nueva aplicación, **entonces** debería verla listada con los detalles del candidato y la oferta aplicada.
   - **Dado que** soy un reclutador en la página de recepción de aplicaciones, **cuando** hago clic en una aplicación, **entonces** debería poder ver el perfil completo del candidato con su CV adjunto.
   - **Dado que** soy un reclutador en la página de recepción de aplicaciones, **cuando** se recibe una aplicación duplicada, **entonces** debería ver una alerta indicándome el posible duplicado.
5. **Notas adicionales**: Las aplicaciones duplicadas deben ser marcadas y revisadas manualmente.
6. **Historias de Usuario Relacionadas**: Revisión de Candidatos, Realización de Pruebas en Línea

#### Historia de Usuario 2: Filtro de Aplicaciones
1. **Título de la Historia de Usuario**: Filtro de Aplicaciones
2. **Formato estándar**: "Como reclutador, quiero filtrar las aplicaciones recibidas por diferentes criterios para identificar rápidamente a los candidatos más adecuados."
3. **Descripción**: Proporciona herramientas para filtrar candidatos según criterios predefinidos, mejorando la calidad de las selecciones.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador en la página de recepción de aplicaciones, **cuando** aplico un filtro (ej. años de experiencia), **entonces** debería ver una lista de candidatos que cumplan con ese criterio.
   - **Dado que** soy un reclutador en la página de recepción de aplicaciones, **cuando** aplico múltiples filtros, **entonces** debería ver una lista de candidatos que cumplan con todos los criterios seleccionados.
   - **Dado que** soy un reclutador en la página de recepción de aplicaciones, **cuando** elimino los filtros aplicados, **entonces** debería ver la lista completa de todas las aplicaciones recibidas.
5. **Notas adicionales**: Los filtros deben ser configurables y guardables para usos futuros.
6. **Historias de Usuario Relacionadas**: Recibir Aplicaciones en un Solo Lugar, Revisión de Candidatos

### Revisión de candidatos

#### Historia de Usuario 1: Evaluar Candidatos
1. **Título de la Historia de Usuario**: Evaluar Candidatos
2. **Formato estándar**: "Como reclutador, quiero evaluar a los candidatos según criterios predefinidos para seleccionar a los más adecuados."
3. **Descripción**: Proporciona herramientas para evaluar y filtrar candidatos según criterios predefinidos.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador en la página de evaluación de candidatos, **cuando** selecciono un candidato y aplico un criterio de evaluación, **entonces** debería poder ver la puntuación o calificación del candidato.
   - **Dado que** soy un reclutador en la página de evaluación de candidatos, **cuando** completo la evaluación de un candidato, **entonces** debería poder ver un resumen de su desempeño en los criterios evaluados.
   - **Dado

 que** soy un reclutador en la página de evaluación de candidatos, **cuando** realizo evaluaciones para múltiples candidatos, **entonces** debería poder comparar sus puntuaciones y calificaciones.
5. **Notas adicionales**: Los criterios de evaluación deben ser personalizables según las necesidades del puesto.
6. **Historias de Usuario Relacionadas**: Filtro de Aplicaciones, Realización de Pruebas en Línea

#### Historia de Usuario 2: Filtrar Candidatos Evaluados
1. **Título de la Historia de Usuario**: Filtrar Candidatos Evaluados
2. **Formato estándar**: "Como reclutador, quiero filtrar a los candidatos evaluados para identificar rápidamente a los que cumplen con los criterios necesarios."
3. **Descripción**: Permite filtrar a los candidatos evaluados según las calificaciones y criterios aplicados.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador en la página de candidatos evaluados, **cuando** aplico un filtro (ej. puntuación mínima), **entonces** debería ver una lista de candidatos que cumplan con ese criterio.
   - **Dado que** soy un reclutador en la página de candidatos evaluados, **cuando** aplico múltiples filtros, **entonces** debería ver una lista de candidatos que cumplan con todos los criterios seleccionados.
   - **Dado que** soy un reclutador en la página de candidatos evaluados, **cuando** elimino los filtros aplicados, **entonces** debería ver la lista completa de todos los candidatos evaluados.
5. **Notas adicionales**: Los filtros deben ser configurables y guardables para usos futuros.
6. **Historias de Usuario Relacionadas**: Evaluar Candidatos, Filtro de Aplicaciones

### Realización de pruebas en línea

#### Historia de Usuario 1: Crear Pruebas en Línea
1. **Título de la Historia de Usuario**: Crear Pruebas en Línea
2. **Formato estándar**: "Como reclutador, quiero crear pruebas en línea para evaluar las habilidades de los candidatos de manera eficiente."
3. **Descripción**: Integra evaluaciones y pruebas de habilidades que los candidatos pueden completar en línea.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador en la página de creación de pruebas, **cuando** ingreso los detalles de la prueba y guardo, **entonces** debería poder ver la nueva prueba en el listado de pruebas disponibles.
   - **Dado que** soy un reclutador en la página de creación de pruebas, **cuando** dejo campos obligatorios en blanco y trato de guardar la prueba, **entonces** debería ver mensajes de error indicándome que complete esos campos.
   - **Dado que** soy un reclutador en la página de creación de pruebas, **cuando** ingreso detalles de la prueba, **entonces** debería poder usar una plantilla predefinida para agilizar el proceso.
5. **Notas adicionales**: Las plantillas predefinidas deben ser editables por el usuario.
6. **Historias de Usuario Relacionadas**: Programación de Entrevistas, Evaluar Candidatos

#### Historia de Usuario 2: Asignar Pruebas a Candidatos
1. **Título de la Historia de Usuario**: Asignar Pruebas a Candidatos
2. **Formato estándar**: "Como reclutador, quiero asignar pruebas en línea a los candidatos para evaluar sus habilidades específicas."
3. **Descripción**: Permite asignar pruebas en línea a los candidatos, facilitando la evaluación de sus habilidades específicas.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador en la página de asignación de pruebas, **cuando** selecciono un candidato y una prueba, **entonces** debería poder asignar la prueba y notificar al candidato.
   - **Dado que** soy un reclutador en la página de asignación de pruebas, **cuando** se asigna una prueba, **entonces** debería poder ver el estado de la prueba (ej. pendiente, completada).
   - **Dado que** soy un reclutador en la página de asignación de pruebas, **cuando** se completa una prueba, **entonces** debería poder ver los resultados de la prueba en el perfil del candidato.
5. **Notas adicionales**: Las pruebas asignadas deben tener un límite de tiempo configurable para su realización.
6. **Historias de Usuario Relacionadas**: Crear Pruebas en Línea, Evaluar Candidatos

### Programación de entrevistas

#### Historia de Usuario 1: Programar Entrevistas
1. **Título de la Historia de Usuario**: Programar Entrevistas
2. **Formato estándar**: "Como reclutador, quiero programar entrevistas para coordinar las reuniones con los candidatos de manera eficiente."
3. **Descripción**: Automatiza la coordinación de entrevistas, permitiendo la asignación de horarios y seguimiento de confirmaciones.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador en la página de programación de entrevistas, **cuando** selecciono un candidato y un horario disponible, **entonces** debería poder programar la entrevista y notificar al candidato.
   - **Dado que** soy un reclutador en la página de programación de entrevistas, **cuando** se programa una entrevista, **entonces** debería poder ver el estado de la entrevista (ej. pendiente, confirmada).
   - **Dado que** soy un reclutador en la página de programación de entrevistas, **cuando** el candidato confirma la entrevista, **entonces** debería ver una actualización del estado a "confirmada".
5. **Notas adicionales**: La disponibilidad de horarios debe sincronizarse con el calendario del reclutador.
6. **Historias de Usuario Relacionadas**: Asignar Pruebas a Candidatos, Evaluar Candidatos

#### Historia de Usuario 2: Reprogramar Entrevistas
1. **Título de la Historia de Usuario**: Reprogramar Entrevistas
2. **Formato estándar**: "Como reclutador, quiero reprogramar entrevistas para ajustar los horarios según las necesidades de los candidatos y los entrevistadores."
3. **Descripción**: Permite reprogramar entrevistas de manera flexible, ajustando los horarios según las necesidades de los candidatos y entrevistadores.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador en la página de programación de entrevistas, **cuando** selecciono una entrevista programada y elijo un nuevo horario, **entonces** debería poder reprogramar la entrevista y notificar al candidato.
   - **Dado que** soy un reclutador en la página de programación de entrevistas, **cuando** se reprograma una entrevista, **entonces** debería poder ver el nuevo estado y horario de la entrevista.
   - **Dado que** soy un reclutador en la página de programación de entrevistas, **cuando** el candidato confirma el nuevo horario, **entonces** debería ver una actualización del estado a "confirmada".
5. **Notas adicionales**: La disponibilidad de horarios debe sincronizarse con el calendario del reclutador y del entrevistador.
6. **Historias de Usuario Relacionadas**: Programar Entrevistas, Asignar Pruebas a Candidatos

### Contratación de candidatos seleccionados

#### Historia de Usuario 1: Generar Ofertas de Trabajo
1. **Título de la Historia de Usuario**: Generar Ofertas de Trabajo
2. **Formato estándar**: "Como reclutador, quiero generar ofertas de trabajo para los candidatos seleccionados para formalizar el proceso de contratación."
3. **Descripción**: Facilita la generación de ofertas de trabajo para los candidatos seleccionados, asegurando una transición fluida.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador en la página de generación de ofertas, **cuando** selecciono un candidato y genero una oferta, **entonces** debería poder ver la oferta generada con los detalles del puesto.
   - **Dado que** soy un reclutador en la página de generación de ofertas, **cuando** reviso y guardo la oferta generada, **entonces** debería poder enviar la oferta al candidato.
   - **Dado que** soy un reclutador en la página de generación de ofertas, **cuando** el candidato acepta la oferta, **entonces** debería ver una actualización del estado a "aceptada".
5. **Notas adicionales**: Las ofertas generadas deben ser personalizables y auditables.
6. **Historias de Usuario Relacionadas**: Evaluar Candidatos, Programar Entrevistas

#### Historia de Usuario 2: Gestión del Proceso de Incorporación
1. **Título de la Historia de Usuario**: Gestión del Proceso de Incorporación
2. **Formato estándar**: "Como reclutador, quiero gestionar el proceso de incorporación para asegurar una transición fluida de los nuevos empleados."
3. **Descripción**: Facilita la gestión del proceso de incorporación, asegurando una transición fluida de los nuevos empleados.
4. **Criterios de Aceptación**:
   - **Dado que** soy un reclutador en la página de gestión de incorporación, **cuando** un candidato acepta una oferta, **entonces** debería poder ver un listado de tareas de incorporación para completar.
   - **Dado que** soy un reclutador en la página de gestión de incorporación, **cuando** completo las

 tareas de incorporación, **entonces** debería ver una actualización del estado de cada tarea.
   - **Dado que** soy un reclutador en la página de gestión de incorporación, **cuando** se completa el proceso de incorporación, **entonces** debería ver una confirmación de que el nuevo empleado está listo para comenzar.
5. **Notas adicionales**: Las tareas de incorporación deben ser configurables y asignables a diferentes miembros del equipo.
6. **Historias de Usuario Relacionadas**: Generar Ofertas de Trabajo, Programar Entrevistas

# Prompt # 03: Priorización del backlog por el criterio de valor para la organización

Backlog de producto con las historias de usuario priorizadas por su criterio de valor, junto con una breve descripción de la importancia de las 5 primeras:

### Prioridad del Backlog

1. **Recepción de Aplicaciones en un Solo Lugar**
   - **Título de la Historia de Usuario**: Recibir Aplicaciones en un Solo Lugar
   - **Descripción**: "Como reclutador, quiero recibir todas las aplicaciones en un solo lugar para gestionarlas de manera ordenada y accesible."
   - **Importancia**: Centralizar la recepción de aplicaciones es fundamental para organizar y manejar eficientemente el flujo de candidatos desde el inicio, permitiendo a los reclutadores trabajar de manera ordenada y efectiva.

2. **Filtrar Candidatos Evaluados**
   - **Título de la Historia de Usuario**: Filtrar Candidatos Evaluados
   - **Descripción**: "Como reclutador, quiero filtrar a los candidatos evaluados para identificar rápidamente a los que cumplen con los criterios necesarios."
   - **Importancia**: Filtrar candidatos evaluados ayuda a priorizar y seleccionar los mejores candidatos de manera rápida y precisa, mejorando la calidad de las contrataciones y ahorrando tiempo a los reclutadores.

3. **Evaluar Candidatos**
   - **Título de la Historia de Usuario**: Evaluar Candidatos
   - **Descripción**: "Como reclutador, quiero evaluar a los candidatos según criterios predefinidos para seleccionar a los más adecuados."
   - **Importancia**: Evaluar a los candidatos de manera estructurada garantiza que las decisiones de contratación se basen en criterios objetivos y consistentes, mejorando la calidad de las selecciones.

4. **Crear Descripción de Puesto**
   - **Título de la Historia de Usuario**: Crear Descripción de Puesto
   - **Descripción**: "Como reclutador, quiero crear una descripción de puesto para definir claramente las responsabilidades y requisitos del trabajo."
   - **Importancia**: Crear descripciones de puestos claras y precisas es esencial para atraer a los candidatos adecuados y evitar confusiones desde el principio del proceso de contratación.

5. **Generar Ofertas de Trabajo**
   - **Título de la Historia de Usuario**: Generar Ofertas de Trabajo
   - **Descripción**: "Como reclutador, quiero generar ofertas de trabajo para los candidatos seleccionados para formalizar el proceso de contratación."
   - **Importancia**: La generación de ofertas de trabajo formaliza el proceso de contratación, asegurando que los candidatos seleccionados reciban propuestas claras y oficiales, lo que es crucial para cerrar el ciclo de contratación.

### Historias de Usuario Restantes

6. Publicar Oferta en Bolsas de Trabajo
   - **Título de la Historia de Usuario**: Publicar Oferta en Bolsas de Trabajo
   - **Descripción**: "Como reclutador, quiero publicar una oferta en múltiples bolsas de trabajo para alcanzar a una mayor audiencia."

7. Publicar Oferta en Redes Sociales
   - **Título de la Historia de Usuario**: Publicar Oferta en Redes Sociales
   - **Descripción**: "Como reclutador, quiero publicar una oferta en redes sociales para atraer candidatos que están activos en estas plataformas."

8. Asignar Pruebas a Candidatos
   - **Título de la Historia de Usuario**: Asignar Pruebas a Candidatos
   - **Descripción**: "Como reclutador, quiero asignar pruebas en línea a los candidatos para evaluar sus habilidades específicas."

9. Programar Entrevistas
   - **Título de la Historia de Usuario**: Programar Entrevistas
   - **Descripción**: "Como reclutador, quiero programar entrevistas para coordinar las reuniones con los candidatos de manera eficiente."

10. Reprogramar Entrevistas
    - **Título de la Historia de Usuario**: Reprogramar Entrevistas
    - **Descripción**: "Como reclutador, quiero reprogramar entrevistas para ajustar los horarios según las necesidades de los candidatos y los entrevistadores."

11. Crear Pruebas en Línea
    - **Título de la Historia de Usuario**: Crear Pruebas en Línea
    - **Descripción**: "Como reclutador, quiero crear pruebas en línea para evaluar las habilidades de los candidatos de manera eficiente."

12. Filtro de Aplicaciones
    - **Título de la Historia de Usuario**: Filtro de Aplicaciones
    - **Descripción**: "Como reclutador, quiero filtrar las aplicaciones recibidas por diferentes criterios para identificar rápidamente a los candidatos más adecuados."

13. Editar Descripción de Puesto
    - **Título de la Historia de Usuario**: Editar Descripción de Puesto
    - **Descripción**: "Como reclutador, quiero editar la descripción de un puesto existente para actualizar los requisitos y responsabilidades."

14. Gestión del Proceso de Incorporación
    - **Título de la Historia de Usuario**: Gestión del Proceso de Incorporación
    - **Descripción**: "Como reclutador, quiero gestionar el proceso de incorporación para asegurar una transición fluida de los nuevos empleados."

# Prompt # 04: Prompt 03 editado - Priorización del backlog por el criterio de MoSCoW

### Prioritización del Backlog del Producto ATS usando la Técnica MoSCoW

#### Must Have (M)
1. **Recibir Aplicaciones en un Solo Lugar**
2. **Crear Descripción de Puesto**
3. **Publicar Oferta en Bolsas de Trabajo**
4. **Evaluar Candidatos**
5. **Programar Entrevistas**

#### Should Have (S)
6. **Generar Ofertas de Trabajo**
7. **Asignar Pruebas a Candidatos**
8. **Filtro de Aplicaciones**
9. **Crear Pruebas en Línea**
10. **Publicar Oferta en Redes Sociales**

#### Could Have (C)
11. **Reprogramar Entrevistas**
12. **Editar Descripción de Puesto**
13. **Gestión del Proceso de Incorporación**
14. **Filtrar Candidatos Evaluados**

#### Won’t Have (W)
15. **Ninguna historia actualmente en esta categoría**

### Razón de ser de la priorización de las 5 primeras historias de usuario

1. **Recibir Aplicaciones en un Solo Lugar**
   - **Razón**: Es fundamental centralizar las aplicaciones para una gestión eficiente desde el principio. Sin esta funcionalidad, los reclutadores no pueden manejar de manera efectiva el flujo de candidatos, lo que puede llevar a una pérdida de oportunidades y duplicación de esfuerzos.

2. **Crear Descripción de Puesto**
   - **Razón**: La creación de descripciones de puestos es el primer paso del proceso de reclutamiento. Sin una descripción clara y precisa, no se pueden crear ofertas ni atraer a los candidatos adecuados. Esta funcionalidad es esencial para definir claramente los roles y responsabilidades desde el inicio.

3. **Publicar Oferta en Bolsas de Trabajo**
   - **Razón**: Una vez que se han creado las descripciones de puestos, es crucial publicarlas en múltiples bolsas de trabajo para atraer a una amplia audiencia de candidatos. Esto aumenta la visibilidad de las ofertas y la posibilidad de encontrar candidatos calificados.

4. **Evaluar Candidatos**
   - **Razón**: Evaluar a los candidatos es una parte vital del proceso de selección. Sin una herramienta de evaluación, los reclutadores no pueden filtrar y seleccionar a los candidatos más adecuados de manera efectiva, lo que podría resultar en una contratación subóptima.

5. **Programar Entrevistas**
   - **Razón**: Después de evaluar a los candidatos, programar entrevistas es el siguiente paso lógico. Facilitar la coordinación y programación de entrevistas asegura que los reclutadores puedan avanzar rápidamente con los candidatos más prometedores sin demoras innecesarias.

# Prompt # 05: Prompt 03 editado - Priorización del backlog por el método de Mapas de historias de usuario, de Jeff Patton

Para priorizar el backlog del producto utilizando el método de mapas de historias de usuario de Jeff Patton, generalmente se agrupan las historias en clusters o temas relacionados y se priorizan según su valor para el usuario y la viabilidad técnica. Aquí están las 5 primeras historias de usuario priorizadas del sistema ATS, junto con una breve justificación para cada una:

1. **Crear Pruebas en Línea**
   - **Justificación**: Esta funcionalidad permite a los reclutadores evaluar las habilidades de los candidatos de manera eficiente, lo cual es esencial para mejorar la calidad de las contrataciones desde el inicio del proceso.

2. **Recepción de Candidatos**
   - **Justificación**: Centralizar la recolección de aplicaciones asegura una gestión ordenada y accesible de todos los candidatos, mejorando la eficiencia del proceso de reclutamiento desde el inicio.

3. **Publicación de Ofertas**
   - **Justificación**: Facilitar la distribución de vacantes en múltiples plataformas amplía el alcance de reclutamiento, atrayendo a una audiencia más amplia de candidatos calificados.

4. **Programación de Entrevistas**
   - **Justificación**: Automatizar la coordinación de entrevistas mejora la eficiencia del proceso de selección, asegurando que los reclutadores puedan gestionar mejor su tiempo y los candidatos tengan una experiencia fluida.

5. **Filtrar Aplicaciones**
   - **Justificación**: Filtrar candidatos basados en criterios predefinidos mejora la calidad de las selecciones iniciales, ahorrando tiempo y recursos en la revisión de perfiles.

Las demás historias de usuario seguirían priorizadas según el orden establecido durante el proceso de mapeo y priorización. Esta priorización inicial se centra en funcionalidades clave que impactan directamente en la eficiencia del reclutamiento, la calidad de los candidatos y la experiencia general del usuario del sistema ATS.

# Prompt # 06: Generar tickets de trabajo

Aquí tienes los tickets detallados para la historia de usuario "Filtrar Candidatos Evaluados":

### Ticket 1: Diseño de Interfaz de Usuario para Filtros
- **Descripción**: Diseñar la interfaz de usuario que permita a los reclutadores aplicar filtros a los candidatos evaluados.
- **Criterios de Aceptación**:
  1. Debe haber opciones claras y accesibles para aplicar diferentes filtros como puntaje mínimo, habilidades específicas, etc.
  2. Los filtros deben ser intuitivos y fáciles de usar para los reclutadores.
  3. La interfaz debe ser responsive para adaptarse a diferentes dispositivos.
- **Prioridad**: Alta
- **Estimación**: 5 puntos (estimación por poker planning)
- **Asignado a**: Equipo de Frontend
- **Etiquetas**: Frontend, UX
- **Comentarios**: Es crucial que la interfaz sea fácil de usar y eficiente para los reclutadores.

### Ticket 2: Implementación de Backend para Aplicar Filtros
- **Descripción**: Desarrollar la lógica en el backend que permita aplicar los filtros seleccionados por los reclutadores a los candidatos evaluados.
- **Criterios de Aceptación**:
  1. El backend debe recibir los parámetros de filtro desde el frontend de manera segura.
  2. Debe aplicar los filtros correctamente a la lista de candidatos evaluados almacenados en la base de datos.
  3. Debe devolver los resultados filtrados al frontend de manera eficiente.
- **Prioridad**: Alta
- **Estimación**: 8 puntos
- **Asignado a**: Equipo de Backend
- **Etiquetas**: Backend, Seguridad
- **Comentarios**: Asegurar que la implementación sea eficiente y segura, manejando adecuadamente la carga de datos.

### Ticket 3: Pruebas de Integración de Filtros
- **Descripción**: Realizar pruebas de integración para asegurar que los filtros aplicados en el frontend y backend funcionen correctamente juntos.
- **Criterios de Aceptación**:
  1. Deben ejecutarse pruebas automatizadas para verificar la correcta aplicación de filtros.
  2. Los resultados filtrados deben coincidir con los criterios seleccionados por los reclutadores.
  3. No deben producirse errores de rendimiento significativos debido a los filtros aplicados.
- **Prioridad**: Alta
- **Estimación**: 3 puntos
- **Asignado a**: Equipo de Testing
- **Etiquetas**: Testing, Automatización
- **Comentarios**: Esencial para garantizar que la funcionalidad sea robusta y confiable antes de su implementación.

### Ticket 4: Documentación de Funcionalidad de Filtros
- **Descripción**: Documentar cómo usar y administrar los filtros de candidatos evaluados para los reclutadores y otros miembros del equipo.
- **Criterios de Aceptación**:
  1. Crear una guía clara y concisa de usuario para aplicar y gestionar filtros.
  2. Incluir ejemplos prácticos de uso de filtros y casos de uso comunes.
  3. La documentación debe estar disponible para consulta interna.
- **Prioridad**: Media
- **Estimación**: 4 puntos
- **Asignado a**: Equipo de Documentación
- **Etiquetas**: Documentación
- **Comentarios**: Importante para facilitar la adopción y el uso correcto de la funcionalidad por parte de los usuarios.

### Ticket 5: Implementación de Opciones de Guardar Filtros
- **Descripción**: Desarrollar la funcionalidad que permita a los reclutadores guardar y cargar configuraciones de filtros personalizadas.
- **Criterios de Aceptación**:
  1. Debe haber opciones claras para guardar y gestionar múltiples configuraciones de filtros.
  2. Los filtros guardados deben ser fácilmente accesibles y aplicables.
  3. Debe incluir funcionalidad para editar y eliminar configuraciones guardadas.
- **Prioridad**: Media
- **Estimación**: 6 puntos
- **Asignado a**: Equipo de Backend y Frontend
- **Etiquetas**: Backend, Frontend, UX
- **Comentarios**: Mejorará la eficiencia permitiendo a los reclutadores reutilizar configuraciones de filtros personalizados.

Estos tickets cubren los aspectos técnicos y funcionales necesarios para completar la historia de usuario "Filtrar Candidatos Evaluados" y asegurar su implementación exitosa dentro del sistema ATS.