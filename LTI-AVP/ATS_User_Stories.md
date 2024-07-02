
# User Stories para el Sistema ATS

## Casos de Uso Principales para un Sistema ATS

### 1. Publicación de Vacantes
1. **User Story**: Como Reclutador, quiero crear una nueva vacante para que pueda atraer candidatos calificados.
   - **Prioridad**: Alta
   - **Criterios de Aceptación**:
     - El reclutador puede acceder a un formulario de creación de vacantes.
     - El formulario permite ingresar detalles de la vacante como título, descripción, requisitos, y beneficios.
     - La vacante creada queda guardada en estado "Pendiente de aprobación".

2. **User Story**: Como Manager, quiero revisar y aprobar las vacantes creadas para asegurar que cumplan con los requisitos de la empresa.
   - **Prioridad**: Alta
   - **Criterios de Aceptación**:
     - El manager puede ver una lista de vacantes pendientes de aprobación.
     - El manager puede revisar los detalles de la vacante.
     - El manager puede aprobar o rechazar la vacante.
     - Si se aprueba, la vacante se publica en el portal de empleo. Si se rechaza, el reclutador recibe una notificación con los motivos del rechazo.

### 2. Gestión de Candidatos
3. **User Story**: Como Reclutador, quiero revisar las aplicaciones de los candidatos para seleccionar a los más adecuados para la vacante.
   - **Prioridad**: Alta
   - **Criterios de Aceptación**:
     - El reclutador puede ver una lista de candidatos que han aplicado a una vacante.
     - El reclutador puede ver los detalles del perfil y currículum de cada candidato.
     - El reclutador puede cambiar el estado del candidato (en revisión, seleccionado para entrevista, rechazado).

4. **User Story**: Como Reclutador, quiero programar entrevistas con los candidatos seleccionados para evaluarlos adecuadamente.
   - **Prioridad**: Media
   - **Criterios de Aceptación**:
     - El reclutador puede seleccionar una fecha y hora para la entrevista.
     - El sistema envía notificaciones a los candidatos con los detalles de la entrevista.
     - El reclutador y el manager pueden ver el calendario de entrevistas.

5. **User Story**: Como Manager, quiero actualizar el estado de los candidatos después de la entrevista para mantener el proceso de selección organizado.
   - **Prioridad**: Media
   - **Criterios de Aceptación**:
     - El manager puede acceder a la lista de candidatos entrevistados.
     - El manager puede actualizar el estado del candidato (aprobado, rechazado, en espera).

### 3. Aplicación a Vacantes
6. **User Story**: Como Candidato, quiero registrarme y crear un perfil en el sistema ATS para poder aplicar a las vacantes.
   - **Prioridad**: Alta
   - **Criterios de Aceptación**:
     - El candidato puede registrarse con su correo electrónico y contraseña.
     - El candidato puede completar su perfil con información personal, experiencia laboral, y educación.
     - El candidato puede subir su currículum.

7. **User Story**: Como Candidato, quiero buscar vacantes disponibles para encontrar oportunidades que se ajusten a mis habilidades e intereses.
   - **Prioridad**: Alta
   - **Criterios de Aceptación**:
     - El candidato puede buscar vacantes por palabra clave, ubicación, y categoría.
     - El candidato puede ver los detalles de cada vacante.

8. **User Story**: Como Candidato, quiero aplicar a una vacante para poder ser considerado para el puesto.
   - **Prioridad**: Alta
   - **Criterios de Aceptación**:
     - El candidato puede seleccionar una vacante y aplicar a ella.
     - El sistema confirma la aplicación y envía una notificación al candidato.

## Priorización de User Stories

1. Crear una nueva vacante (Reclutador) - **Alta**
2. Revisar y aprobar vacantes (Manager) - **Alta**
3. Revisar aplicaciones de candidatos (Reclutador) - **Alta**
4. Registrarse y crear un perfil (Candidato) - **Alta**
5. Buscar vacantes (Candidato) - **Alta**
6. Aplicar a una vacante (Candidato) - **Alta**
7. Programar entrevistas (Reclutador) - **Media**
8. Actualizar el estado de candidatos después de la entrevista (Manager) - **Media**
