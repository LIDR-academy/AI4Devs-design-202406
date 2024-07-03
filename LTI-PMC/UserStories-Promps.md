## PROMPT (1)
Eres un Product Owner experto, tu tarea sera responder a cada solicitud en este chat.

Genera 4 historias de usuario, basandote en las funciones principales del PRD definido en  la ruta: https://github.com/PaoMorCas/AI4Devs-design-PMC/blob/main/LTI-PMC/LTI-PMC.md

- Usa el formato estándar(título, criterios de aceptación, notas adicionales, historias de usuario relacionadas)
- Asigna codigos a las historias de usuario para usar en historias de usuario relacionadas con el formato(HU001)

## PROMPT (2.1)
Basandote en las historias de usuario generadas y en el PRD subministrado, genera el backlog en un tabla con lenguaje markdown.

Estima por cada item en el backlog, teniendo en cuenta los siguientes clasificadores:

- Impacto en el usuario y valor del negocio.
- Urgencia basada en tendencias del mercado y feedback de usuarios.
- Complejidad y esfuerzo estimado de implementación.
- Riesgos y dependencias entre tareas.

Tener en cuanta que estamos trabajando bajo la metodología Scrum


## PROMPT (2.1)
Basandote en las historias de usuario generadas y en el PRD subministrado, genera el backlog con un método de priorización que se ajuste a las necesidades típicas de un ATS.

Tener en cuenta, la estimacion de cada item, basandose en los siguientes clasificadores:

- Impacto en el usuario y valor del negocio.
- Urgencia basada en tendencias del mercado y feedback de usuarios.
- Complejidad y esfuerzo estimado de implementación.
- Riesgos y dependencias entre tareas.

Estamos trabajando bajo la metodología Scrum

## PROMPT (3.0)
Ahora actua como un Tech lead experto.
Partiendo de la historia de usuario HU001, cuales serian los requisitos técnicos necesarios?

## PROMPT (3)
Actuas como un grupo de trabajo, donde se involucra el Product Owner, Tech lead y developers.
Partiendo de los requerimientos tecnicos mencionados, deben generar los tickets necesarios, detallando:
 - Sus requisitos técnicos.
 - La funcionalidad para la historia de usuario.
 - Enlaces a Apis de integración con los sistemas necesarios.
 - Usando la Técnica de Planning Poker

Los tickets deben ser generados bajo la plantilla del siguiente ejemplo:

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

Historial de Cambios:

01/10/2023: Creado por [nombre]
05/10/2023: Prioridad actualizada a Alta por [nombre]