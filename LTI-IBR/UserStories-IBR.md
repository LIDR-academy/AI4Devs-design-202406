### Motor usado: ChatGPT

- Conversación completa: https://chatgpt.com/share/68e4a41d-c218-4a19-9a56-8b6940406226

---

# User Stories principales para un Sistema de Seguimiento de Candidatos (ATS) con Integración de HireVue

## User Story 1: Crear Publicación de Trabajo

### Título de la Historia de Usuario:

**Crear Publicación de Trabajo**

### Historia de Usuario:

Como **reclutador**,
quiero **crear y publicar ofertas de trabajo de manera intuitiva y rápida**,
para que **pueda atraer candidatos adecuados y prepararlos para entrevistas automatizadas con HireVue**.

### Criterios de Aceptación:

1. El reclutador puede ingresar el título del trabajo, descripción, requisitos y otros detalles relevantes a través de una interfaz intuitiva.
2. El reclutador puede guardar la oferta de trabajo como borrador o publicarla inmediatamente en múltiples tableros de trabajo y redes sociales desde una única interfaz.
3. El sistema ofrece plantillas predefinidas para facilitar la creación rápida de ofertas de trabajo y permite editar y actualizar publicaciones existentes.
4. El sistema puede integrar enlaces de invitación a entrevistas automatizadas de HireVue en las publicaciones de trabajo.

### Notas Adicionales:

- La interfaz debe ser fácil de usar y guiar al usuario a través del proceso de creación de la publicación.
- El sistema debe proporcionar una vista previa de cómo se verá la publicación en diferentes plataformas antes de publicarla.
- El sistema debe permitir al reclutador configurar parámetros específicos para las entrevistas automatizadas de HireVue.

### Historias de Usuario Relacionadas:

- Revisar Solicitudes

---

## User Story 2: Revisar Solicitudes

### Título de la Historia de Usuario:

**Revisar Solicitudes**

### Historia de Usuario:

Como **gerente de contratación**,
quiero **revisar y filtrar las solicitudes recibidas de manera eficiente**,
para **poder evaluar y seleccionar a los candidatos más adecuados rápidamente y acceder a las entrevistas automatizadas de HireVue**.

### Criterios de Aceptación:

1. El gerente de contratación puede ver todas las solicitudes relacionadas con una oferta de trabajo específica y filtrarlas por diferentes criterios (e.g., fecha de recepción, calificaciones).
2. El sistema utiliza IA para analizar y clasificar automáticamente los CVs, destacando a los candidatos más relevantes.
3. El gerente de contratación puede dejar notas y comentarios en cada solicitud para seguimiento futuro y compartirlas con otros miembros del equipo.
4. El sistema permite acceder a los resultados de las entrevistas automatizadas de HireVue directamente desde la interfaz del ATS, incluyendo videos y análisis automatizados.
5. El sistema debe notificar al gerente de contratación cuando se reciban nuevas solicitudes.

### Notas Adicionales:


- La interfaz debe ser amigable y permitir una revisión rápida y detallada de cada solicitud.
- Los resultados y videos de las entrevistas de HireVue deben estar fácilmente accesibles y visualizables.

### Historias de Usuario Relacionadas:

- Crear Publicación de Trabajo
- Programar Entrevistas

---

## User Story 3: Programar Entrevistas

### Título de la Historia de Usuario:

**Programar Entrevistas**

### Historia de Usuario:

Como **reclutador**,
quiero **programar entrevistas con los candidatos seleccionados de manera sencilla y coordinada**,
para **poder gestionar el proceso de entrevistas eficientemente y evitar conflictos de horario, incluyendo entrevistas automatizadas de HireVue**.

### Criterios de Aceptación:

1. El reclutador puede seleccionar candidatos y enviarles invitaciones para entrevistas, seleccionando fechas y horarios disponibles tanto para los candidatos como para los entrevistadores.
2. El sistema envía notificaciones y recordatorios automáticos a todas las partes involucradas, incluyendo los detalles de la entrevista y cualquier cambio en la programación.
3. El sistema se integra con calendarios externos (e.g., Google Calendar, Outlook) para evitar conflictos de programación y permitir la reprogramación en caso de conflictos de última hora.
4. El sistema permite programar y gestionar entrevistas automatizadas de HireVue, notificando a los candidatos y proporcionando enlaces de acceso a las entrevistas.

### Notas Adicionales:

- La interfaz debe ser fácil de usar y permitir una gestión rápida y clara de las entrevistas programadas.
- El sistema debe ofrecer opciones para entrevistas en diferentes modos (e.g., in-person, video call) y gestionar los enlaces de las entrevistas virtuales.
- Las entrevistas automatizadas de HireVue deben ser fáciles de configurar y monitorear desde el ATS.

### Historias de Usuario Relacionadas:

- Revisar Solicitudes


---

# Aspectos técnicos

### 1. **Integración de API**

### Requisitos:
- **Conexión a la API de HireVue**: Acceso a la documentación de la API de HireVue.
- **Capacidades de Desarrollo**: Formación en caso de ser necesario de los desarrolladores en integraciones con APIs RESTful.

## 2. **Seguridad y Cumplimiento**

### Requisitos:
- **Autenticación y Autorización**: Implementación de método OAuth o JWT para la autenticación segura de las solicitudes API.
- **Cifrado**: Cifrado de datos transmitidos hacia y desde HireVue mediante protocolo HTTPS.
- **Cumplimiento de Normativas**: Cumplir con la GPDR.

## 3. **Manejo de Datos**

### Requisitos:
- **Sincronización de Datos**: Correcto traspaso de datos entre nuestro sistema y HireVue.
- **Almacenamiento y Acceso**: Definición de sistema de almacenamiento de los resultados de las entrevistas así como el acceso de los usuarios (reclutadores y gerentes de contratación) a los mismos desde el ATS.
- **Integridad de los Datos**: Implementación de sistemas de validación que aseguren la integridad de los datos en la transferencia entre sistemas.

## 4. **Interfaz de Usuario (UI/UX)**

### Requisitos:
- **Integración en el ATS**: Creación de interfaces dentro del sistema ATS que permitan a los usuarios crear, monitorear y revisar entrevistas de HireVue sin salir del mismo.
- **Acceso a Resultados**: Proporcionar una interfaz amigable para el usuario con el objetivo de visualizar y analizar los resultados de las entrevistas, incluyendo videos y análisis automatizados.

## 5. **Desempeño y Escalabilidad**

### Requisitos:
- **Performance**: Optimizar las llamadas a la API para minimizar la latencia. Valorar el uso de caché para datos estáticos o frecuentemente solicitados.
- **Escalabilidad**: Diseñar un sistema asegurando un aumento en el volumen de entrevistas y datos sin afectar el rendimiento del mismo.

## 6. **Pruebas y Mantenimiento**

### Requisitos:
- **Pruebas Unitarias e Integración**: Implementación de pruebas unitarias para todas las funcionalidades. Asegúrate de que las pruebas cubran el  happu path así como los edge cases.
- **Monitoreo y Logging**: Definición de un sistema de monitoreo y logging para rastrear el uso de la API y poder diagnosticar posibles problemas en tiempo real.
- **Actualizaciones y Mantenimiento**: Planificación de actualizaciones regulares y mantenimiento de la integración con HireValue. Implementación de sistema de integración continua.

## Ejemplo de Flujo de Trabajo

1. **Creación de Entrevistas**:
    - El reclutador usa el ATS para crear una entrevista.
    - El ATS envía una solicitud a la API de HireVue para crear la entrevista.
    - HireVue devuelve una confirmación de creación y detalles de la entrevista.

2. **Notificación a Candidatos**:
    - HireVue notifica a los candidatos con detalles y enlaces para completar la entrevista.

3. **Revisión de Entrevistas**:
    - Los resultados y videos de las entrevistas se sincronizan de HireVue al ATS.
    - El reclutador o gerente de contratación accede a estos resultados desde la interfaz del ATS.

4. **Análisis y Decisiones**:
    - Los usuarios revisan los resultados y análisis proporcionados por HireVue.

---

# Principales posibles problemas desplosados por tipo de usuario

## 1. Problemas Comunes para Reclutadores

### **Problemas de Sincronización y Conectividad**
**Descripción:**
- Problemas de conectividad con la API de HireVue pueden resultar en fallos de sincronización de datos, lo que puede impedir que se acceda a los resultados correctamente.

**Impacto:**
- Interrupciones en el proceso de selección.
- Dificultades para gestionar y revisar entrevistas.

**Solución:**
- Implementar sistemas de monitoreo y alertas para detectar y solucionar problemas de conectividad rápidamente.
- Establecer redundancias y mecanismos de recuperación ante fallos.

## 2. Problemas Comunes para Gerentes de Contratación

### **Dificultad para Acceder y Revisar Resultados de HireVue**
**Descripción:**
- Los gerentes pueden tener dificultades para acceder y revisar los resultados de las entrevistas automatizadas de HireVue desde el ATS debido a posibles problemas de integración.

**Impacto:**
- Retrasos en el proceso de evaluación y toma de decisiones.

**Solución:**
- Mejorar la integración y accesibilidad de los resultados de HireVue en la interfaz del ATS.

## 3. Problemas Comunes para Candidatos

### **Complejidad y Falta de Claridad en el Proceso de Solicitud**
**Descripción:**
- El proceso de solicitud puede ser percibido como complicado y confuso por los candidatos, especialmente si hay muchos pasos o requisitos no claros.

**Impacto:**
- Abandono de la solicitud por parte de los candidatos.
- Menor tasa de finalización de solicitudes.

**Solución:**
- Simplificar y clarificar el proceso de solicitud.
- Proporcionar instrucciones claras y concisas en cada etapa del proceso.

---

# Tabla de Estimación de Backlog

| Item                                   | Tipo                  | Impacto | Urgencia | Complejidad | Riesgos | Prioridad |
|----------------------------------------|-----------------------|---------|----------|-------------|---------|-----------|
| Crear Publicación de Trabajo           | Historia de Usuario   | 5       | 4        | 3           | 2       | 4         |
| Revisar Solicitudes                    | Historia de Usuario   | 5       | 5        | 4           | 3       | 3         |
| Programar Entrevistas                  | Historia de Usuario   | 4       | 3        | 3           | 2       | 2         |
| Integración con HireVue                | Técnica               | 5       | 4        | 5           | 4       | 0         |
| Mejoras de Rendimiento                 | Técnica               | 4       | 3        | 3           | 2       | 2         |
| Capacitación del Usuario               | Soporte               | 4       | 4        | 2           | 1       | 5         |
| Soporte Técnico y Resolución de Problemas | Soporte            | 4       | 4        | 3           | 2       | 3         |
| Documentación de Usuario               | Soporte               | 3       | 3        | 2           | 1       | 3         |
| Monitoreo y Alertas                    | Técnica               | 3       | 3        | 3           | 2       | 1         |
| Implementación de Seguridad            | Técnica               | 5       | 5        | 4           | 3       | 3         |

