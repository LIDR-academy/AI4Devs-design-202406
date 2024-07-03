# HISTORIAS DE USUARIO

## Historia de Usuario HU001: Crear y Gestionar Vacantes

**Título:** Como reclutador, quiero poder crear y gestionar vacantes para diferentes puestos de trabajo, para atraer a candidatos adecuados.

**Criterios de Aceptación:**
- El reclutador puede crear una nueva vacante ingresando información como título del puesto, descripción, requisitos y fecha límite.
- El reclutador puede editar detalles de una vacante existente.
- El reclutador puede archivar vacantes que ya no estén activas.
- Las vacantes deben mostrarse en una lista con opciones de búsqueda y filtrado.

**Notas Adicionales:**
- Las vacantes archivadas no deben aparecer en la lista activa por defecto pero deben ser accesibles.
- Debe haber validación de campos obligatorios al crear o editar vacantes.

**Historias de Usuario Relacionadas:**
- HU002: Administrar Aplicaciones de Candidatos
- HU003: Colaborar con Managers en la Selección de Candidatos

---

## Historia de Usuario HU002: Administrar Aplicaciones de Candidatos

**Título:** Como reclutador, quiero poder revisar y gestionar las aplicaciones de los candidatos para cada vacante, para facilitar el proceso de selección.

**Criterios de Aceptación:**
- El reclutador puede ver una lista de todas las aplicaciones recibidas para una vacante específica.
- El reclutador puede filtrar y ordenar aplicaciones por diferentes criterios (fecha de aplicación, experiencia, etc.).
- El reclutador puede cambiar el estado de una aplicación (ej. en revisión, entrevistado, rechazado, contratado).
- El reclutador puede agregar notas y comentarios a cada aplicación.

**Notas Adicionales:**
- Los estados de la aplicación deben ser configurables por el administrador del sistema.
- Las notificaciones deben enviarse a los candidatos cuando su estado cambia.

**Historias de Usuario Relacionadas:**
- HU001: Crear y Gestionar Vacantes
- HU004: Automatizar Notificaciones a Candidatos

---

## Historia de Usuario HU003: Colaborar con Managers en la Selección de Candidatos

**Título:** Como reclutador, quiero colaborar en tiempo real con los managers en la selección de candidatos, para tomar decisiones informadas y rápidas.

**Criterios de Aceptación:**
- Los managers pueden acceder a las aplicaciones de candidatos y agregar sus comentarios.
- Los reclutadores y managers pueden comunicarse en tiempo real a través de un chat integrado en la plataforma.
- Los managers pueden ver las notas y estados de las aplicaciones actualizados por los reclutadores.
- Se pueden asignar tareas y responsabilidades específicas a cada manager para el proceso de selección.

**Notas Adicionales:**
- El historial de comunicaciones debe ser accesible para referencia futura.
- Las notificaciones deben enviarse a los participantes cuando hay nuevos comentarios o cambios importantes.

**Historias de Usuario Relacionadas:**
- HU001: Crear y Gestionar Vacantes
- HU002: Administrar Aplicaciones de Candidatos

---

## Historia de Usuario HU004: Automatizar Notificaciones a Candidatos

**Título:** Como reclutador, quiero que las notificaciones a los candidatos sean automatizadas en función del estado de su aplicación, para mantenerlos informados sin esfuerzo manual.

**Criterios de Aceptación:**
- Se deben enviar notificaciones automáticas a los candidatos cuando su estado de aplicación cambia.
- Las notificaciones deben ser personalizables en contenido y frecuencia por el reclutador.
- Los candidatos deben recibir confirmaciones de recepción al aplicar a una vacante.
- Los candidatos deben poder optar por recibir notificaciones adicionales sobre nuevas vacantes similares.

**Notas Adicionales:**
- Las notificaciones pueden ser enviadas por correo electrónico y/o mensajes SMS.
- Debe haber un registro de todas las notificaciones enviadas a cada candidato.

**Historias de Usuario Relacionadas:**
- HU002: Administrar Aplicaciones de Candidatos



# Backlog Priorizado para ATS

| ID   | Historia de Usuario                              | Estimación de Esfuerzo | Impacto en el Usuario y Valor del Negocio | Urgencia | Complejidad y Esfuerzo de Implementación | Riesgos y Dependencias                   |
|------|---------------------------------------------------|-------------------------|-------------------------------------------|---------|------------------------------------------|------------------------------------------|
| HU002| Administrar Aplicaciones de Candidatos            | Alto                    | Muy Alto                                  | Alta    | Alto                                     | Integración con Sistema de Aplicaciones   |
| HU003| Colaborar con Managers en la Selección de Candidatos| Alto                  | Muy Alto                                  | Alta    | Alto                                     | Integración en Tiempo Real, Sistema de Notificaciones |
| HU001| Crear y Gestionar Vacantes                        | Medio                   | Alto                                      | Alta    | Medio                                    | Dependencia en UI/UX                     |
| HU004| Automatizar Notificaciones a Candidatos           | Bajo                    | Medio                                     | Media   | Medio                                    | Integración con Sistema de Notificaciones|



# Backlog de Tickets para ATS

## Ticket 1: Implementación de Interfaz de Usuario para Crear Vacantes

**Descripción:** Desarrollar la interfaz de usuario para permitir a los reclutadores crear nuevas vacantes.

**Criterios de Aceptación:**
- Interfaz debe incluir campos para título del puesto, descripción, requisitos y fecha límite.
- Validación de campos obligatorios y formatos de entrada.
- Implementar diseño responsive para diferentes dispositivos.

**Prioridad:** Alta

**Estimación:** 5 puntos de historia

**Asignado a:** Equipo de Frontend

**Etiquetas:** Frontend, UI/UX, Sprint 1

**Comentarios:** Considerar la accesibilidad web para cumplir con estándares WCAG.

**Enlaces:** Documento de Especificación de Requerimientos de Interfaz de Usuario

---

## Ticket 2: Diseño de Base de Datos para Gestión de Vacantes

**Descripción:** Diseñar la estructura de base de datos para almacenar y gestionar información detallada de cada vacante.

**Criterios de Aceptación:**
- Crear tablas para vacantes, incluyendo campos para título, descripción, requisitos y estado.
- Establecer relaciones adecuadas entre entidades relacionadas.

**Prioridad:** Media

**Estimación:** 3 puntos de historia

**Asignado a:** Equipo de Backend

**Etiquetas:** Backend, Base de Datos, Sprint 2

**Comentarios:** Asegurar que el diseño de base de datos sea escalable y cumpla con los requisitos de integridad de datos.

**Enlaces:** Documento de Especificación de Requerimientos de Base de Datos

---

## Ticket 3: Integración con Sistema de Gestión de Candidatos (CRM)

**Descripción:** Integrar el ATS con un sistema de gestión de candidatos externo para importar perfiles automáticamente.

**Criterios de Aceptación:**
- Configurar y probar conexión API con el CRM para importar datos de candidatos.
- Mapear campos entre el ATS y el CRM para asegurar consistencia de datos.

**Prioridad:** Alta

**Estimación:** 8 puntos de historia

**Asignado a:** Equipo de Integración

**Etiquetas:** Integración, API, Backend, Sprint 3

**Comentarios:** Coordinar con el equipo de CRM para asegurar compatibilidad y correcto flujo de datos.

**Enlaces:** Documento de Especificación de Requerimientos de Integración

---

## Ticket 4: Implementación de Seguridad y Gestión de Roles para Acceso a Vacantes

**Descripción:** Implementar medidas de seguridad para proteger el acceso y manipulación de vacantes.

**Criterios de Aceptación:**
- Configurar roles de usuario (reclutador, administrador) con permisos específicos.
- Autenticación y autorización basadas en roles para acceder a las funcionalidades de gestión de vacantes.

**Prioridad:** Alta

**Estimación:** 8 puntos de historia

**Asignado a:** Equipo de Backend

**Etiquetas:** Seguridad, Backend, Sprint 4

**Comentarios:** Realizar pruebas exhaustivas de seguridad y asegurar cumplimiento con estándares de protección de datos.

**Enlaces:** Documento de Especificación de Requerimientos de Seguridad
