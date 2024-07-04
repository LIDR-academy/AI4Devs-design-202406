
# Índice

1. [Publicación de Vacantes](#publicación-de-vacantes)
2. [Gestión de Candidatos](#gestión-de-candidatos)
3. [Aplicación a Vacantes](#aplicación-a-vacantes)

# Historias de Usuario para el Sistema ATS

## 1. Publicación de Vacantes

### Historia de Usuario 1
**Título de la Historia de Usuario:** Creación de una Nueva Vacante

Como Reclutador,
quiero crear una nueva vacante,
para que pueda atraer candidatos calificados.

**Criterios de Aceptación:**
- El reclutador puede acceder a un formulario de creación de vacantes.
- El formulario permite ingresar detalles de la vacante como título, descripción, requisitos, y beneficios.
- La vacante creada queda guardada en estado "Pendiente de aprobación".

**Notas Adicionales:**
Ninguna

**Historias de Usuario Relacionadas:**
Revisar y aprobar vacantes (Historia de Usuario 2)

**Tareas de Desarrollo:**
1. Diseñar el formulario de creación de vacantes con los campos necesarios (título, descripción, requisitos, beneficios).
2. Implementar la interfaz del formulario en el sistema.
3. Desarrollar la lógica para guardar la vacante en estado "Pendiente de aprobación".
4. Crear la funcionalidad para notificar al manager sobre la nueva vacante pendiente.
5. Realizar pruebas unitarias y de integración para asegurar el correcto funcionamiento del formulario de creación de vacantes.

### Historia de Usuario 2
**Título de la Historia de Usuario:** Aprobación de Vacantes

Como Manager,
quiero revisar y aprobar las vacantes creadas,
para asegurar que cumplan con los requisitos de la empresa.

**Criterios de Aceptación:**
- El manager puede ver una lista de vacantes pendientes de aprobación.
- El manager puede revisar los detalles de la vacante.
- El manager puede aprobar o rechazar la vacante.
- Si se aprueba, la vacante se publica en el portal de empleo. Si se rechaza, el reclutador recibe una notificación con los motivos del rechazo.

**Notas Adicionales:**
Ninguna

**Historias de Usuario Relacionadas:**
Crear una nueva vacante (Historia de Usuario 1)

## 2. Gestión de Candidatos

### Historia de Usuario 3
**Título de la Historia de Usuario:** Revisión de Aplicaciones de Candidatos

Como Reclutador,
quiero revisar las aplicaciones de los candidatos,
para seleccionar a los más adecuados para la vacante.

**Criterios de Aceptación:**
- El reclutador puede ver una lista de candidatos que han aplicado a una vacante.
- El reclutador puede ver los detalles del perfil y currículum de cada candidato.
- El reclutador puede cambiar el estado del candidato (en revisión, seleccionado para entrevista, rechazado).

**Notas Adicionales:**
Ninguna

**Historias de Usuario Relacionadas:**
Programar entrevistas (Historia de Usuario 4)

### Historia de Usuario 4
**Título de la Historia de Usuario:** Programación de Entrevistas

Como Reclutador,
quiero programar entrevistas con los candidatos seleccionados,
para evaluarlos adecuadamente.

**Criterios de Aceptación:**
- El reclutador puede seleccionar una fecha y hora para la entrevista.
- El sistema envía notificaciones a los candidatos con los detalles de la entrevista.
- El reclutador y el manager pueden ver el calendario de entrevistas.

**Notas Adicionales:**
Ninguna

**Historias de Usuario Relacionadas:**
Revisión de aplicaciones de candidatos (Historia de Usuario 3)

### Historia de Usuario 5
**Título de la Historia de Usuario:** Actualización del Estado de los Candidatos

Como Manager,
quiero actualizar el estado de los candidatos después de la entrevista,
para mantener el proceso de selección organizado.

**Criterios de Aceptación:**
- El manager puede acceder a la lista de candidatos entrevistados.
- El manager puede actualizar el estado del candidato (aprobado, rechazado, en espera).

**Notas Adicionales:**
Ninguna

**Historias de Usuario Relacionadas:**
Programar entrevistas (Historia de Usuario 4)

## 3. Aplicación a Vacantes

### Historia de Usuario 6
**Título de la Historia de Usuario:** Registro y Creación de Perfil

Como Candidato,
quiero registrarme y crear un perfil en el sistema ATS,
para poder aplicar a las vacantes.

**Criterios de Aceptación:**
- El candidato puede registrarse con su correo electrónico y contraseña.
- El candidato puede completar su perfil con información personal, experiencia laboral, y educación.
- El candidato puede subir su currículum.

**Notas Adicionales:**
Ninguna

**Historias de Usuario Relacionadas:**
Buscar vacantes (Historia de Usuario 7)

### Historia de Usuario 7
**Título de la Historia de Usuario:** Búsqueda de Vacantes

Como Candidato,
quiero buscar vacantes disponibles,
para encontrar oportunidades que se ajusten a mis habilidades e intereses.

**Criterios de Aceptación:**
- El candidato puede buscar vacantes por palabra clave, ubicación, y categoría.
- El candidato puede ver los detalles de cada vacante.

**Notas Adicionales:**
Ninguna

**Historias de Usuario Relacionadas:**
Registro y creación de perfil (Historia de Usuario 6)
Aplicar a una vacante (Historia de Usuario 8)

### Historia de Usuario 8
**Título de la Historia de Usuario:** Aplicación a una Vacante

Como Candidato,
quiero aplicar a una vacante,
para poder ser considerado para el puesto.

**Criterios de Aceptación:**
- El candidato puede seleccionar una vacante y aplicar a ella.
- El sistema confirma la aplicación y envía una notificación al candidato.

**Notas Adicionales:**
Ninguna

**Historias de Usuario Relacionadas:**
Buscar vacantes (Historia de Usuario 7)
