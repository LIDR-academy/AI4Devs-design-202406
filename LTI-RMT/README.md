# LTI - Applicant Tracking System

## Descripción Breve del Software LTI
LTI es un sistema de seguimiento de candidatos (ATS) diseñado para revolucionar el proceso de reclutamiento. Nuestro objetivo es aumentar la eficiencia de los departamentos de recursos humanos, mejorar la colaboración en tiempo real entre reclutadores y managers, y automatizar tareas clave con la asistencia de inteligencia artificial.

## Valor Añadido
LTI ofrece una solución integral que no solo gestiona el proceso de reclutamiento, sino que también proporciona herramientas avanzadas de análisis y automatización. A diferencia de otras soluciones en el mercado, LTI se enfoca en la experiencia del usuario, tanto para los reclutadores como para los candidatos, asegurando un proceso de selección más fluido y eficiente.

## Ventajas Competitivas
- **Automatización Avanzada**: LTI utiliza inteligencia artificial para automatizar tareas repetitivas, permitiendo a los reclutadores centrarse en actividades estratégicas.
- **Colaboración en Tiempo Real**: Herramientas integradas para la colaboración entre equipos, facilitando la comunicación y la toma de decisiones.
- **Análisis y Reportes Detallados**: Generación de informes y análisis detallados para medir la eficiencia del proceso de reclutamiento.
- **Integración Sencilla**: Compatible con múltiples plataformas y sistemas de recursos humanos existentes.
- **Experiencia del Candidato**: Portales y herramientas diseñadas para mejorar la experiencia del candidato durante el proceso de selección.

## Funciones Principales
1. **Gestión de Candidatos**:
   - Almacenamiento y organización de perfiles de candidatos.
   - Seguimiento del estado de cada candidato en el proceso de selección.

2. **Publicación de Ofertas de Trabajo**:
   - Creación y publicación de ofertas de trabajo en múltiples plataformas y portales de empleo.
   - Integración con redes sociales y sitios web de la empresa.

3. **Filtrado y Clasificación de Candidatos**:
   - Herramientas de búsqueda y filtrado para identificar candidatos adecuados.
   - Clasificación automática de candidatos según criterios predefinidos.

4. **Comunicación con Candidatos**:
   - Envío de correos electrónicos y mensajes automáticos a los candidatos.
   - Programación de entrevistas y recordatorios.

5. **Colaboración del Equipo de Reclutamiento**:
   - Herramientas para la colaboración y comunicación entre los miembros del equipo de reclutamiento.
   - Asignación de tareas y seguimiento del progreso.

6. **Integración con Otros Sistemas**:
   - Integración con sistemas de recursos humanos (HRIS) y otras herramientas de gestión.
   - Sincronización con calendarios y sistemas de correo electrónico.

7. **Análisis y Reportes**:
   - Generación de informes y análisis sobre el proceso de selección.
   - Métricas de rendimiento y eficiencia del reclutamiento.

8. **Cumplimiento Legal y Seguridad**:
   - Almacenamiento seguro de datos personales de los candidatos.
   - Cumplimiento con regulaciones de privacidad y protección de datos.

9. **Experiencia del Candidato**:
   - Portales de candidatos para seguimiento de su aplicación.
   - Formularios y encuestas de satisfacción.

10. **Automatización de Procesos**:
    - Automatización de tareas repetitivas y administrativas.
    - Flujos de trabajo personalizados para diferentes tipos de procesos de selección.

## Diagrama Lean Canvas
```mermaid
graph TD
    A[Problemas] -->|1| B[Soluciones]
    A -->|2| C[Propuestas de Valor]
    A -->|3| D[Ventajas Competitivas]
    B -->|4| E[Segmentos de Clientes]
    C -->|5| F[Canales]
    D -->|6| G[Estructura de Costos]
    E -->|7| H[Flujos de Ingresos]
    F -->|8| I[Indicadores Clave]
    G -->|9| J[Recursos Clave]
    H -->|10| K[Actividades Clave]
    I -->|11| L[Socios Clave]
```

## Casos de Uso Principales

### Caso de Uso 1: Publicación de Ofertas de Trabajo
**Descripción**: El reclutador crea y publica una oferta de trabajo en múltiples plataformas y portales de empleo.

```mermaid
sequenceDiagram
    participant R as Reclutador
    participant ATS as Sistema ATS
    participant P as Plataformas de Empleo

    R->>ATS: Crear oferta de trabajo
    ATS-->>R: Confirmación de creación
    ATS->>P: Publicar oferta de trabajo
    P-->>ATS: Confirmación de publicación
    ATS-->>R: Notificación de publicación
```

### Caso de Uso 2: Filtrado y Clasificación de Candidatos
**Descripción**: El sistema filtra y clasifica automáticamente a los candidatos según criterios predefinidos.

```mermaid
sequenceDiagram
    participant C as Candidato
    participant ATS as Sistema ATS
    participant R as Reclutador

    C->>ATS: Enviar solicitud
    ATS-->>C: Confirmación de recepción
    ATS->>ATS: Filtrar y clasificar candidatos
    ATS-->>R: Notificación de candidatos clasificados
```

### Caso de Uso 3: Programación de Entrevistas
**Descripción**: El reclutador programa entrevistas con los candidatos seleccionados y envía recordatorios automáticos.

```mermaid
sequenceDiagram
    participant R as Reclutador
    participant ATS as Sistema ATS
    participant C as Candidato

    R->>ATS: Programar entrevista
    ATS-->>R: Confirmación de programación
    ATS->>C: Enviar invitación a entrevista
    C-->>ATS: Confirmación de asistencia
    ATS-->>R: Notificación de confirmación
    ATS->>C: Enviar recordatorio automático
```
