Prompt 1

¡Claro! Estoy listo para ayudarte con el diseño de un sistema ATS. ¿Qué preguntas tienes en mente?

Prompt 2

Un sistema ATS (Applicant Tracking System) tiene varias funcionalidades clave que facilitan la gestión del proceso de reclutamiento y selección de personal. Aquí tienes una lista de las principales funcionalidades:

    Publicación de Vacantes:
        Creación y publicación de ofertas de trabajo en múltiples plataformas (sitio web de la empresa, portales de empleo, redes sociales).

    Gestión de Solicitudes:
        Recepción y almacenamiento de solicitudes de empleo.
        Clasificación automática de solicitudes por relevancia.

    Búsqueda y Filtrado de Candidatos:
        Búsqueda avanzada de candidatos por palabras clave, habilidades, experiencia y otros criterios.
        Filtros para afinar los resultados de búsqueda.

    Seguimiento de Candidatos:
        Registro y seguimiento del estado de cada candidato en el proceso de selección (aplicado, entrevistado, rechazado, contratado).
        Notificaciones y alertas sobre el progreso de los candidatos.

    Comunicación con Candidatos:
        Plantillas de correo electrónico para comunicaciones con candidatos.
        Herramientas de programación de entrevistas y recordatorios.

    Gestión de Entrevistas:
        Programación y gestión de entrevistas.
        Integración con calendarios (Google Calendar, Outlook) para la coordinación de entrevistas.

    Evaluación de Candidatos:
        Herramientas para la evaluación de candidatos (formularios de evaluación, pruebas técnicas, entrevistas grabadas).
        Recopilación y almacenamiento de feedback de entrevistas.

    Gestión de Base de Datos de Candidatos:
        Almacenamiento y organización de perfiles de candidatos.
        Búsqueda en la base de datos interna de candidatos anteriores.

    Informes y Análisis:
        Generación de informes sobre el proceso de reclutamiento (tiempo de contratación, tasa de conversión, fuentes de candidatos).
        Análisis de datos para identificar áreas de mejora.

    Integraciones con Otros Sistemas:
        Integración con sistemas de gestión de recursos humanos (HRIS).
        Integración con plataformas de evaluación de habilidades y pruebas.

    Cumplimiento Legal y Seguridad de Datos:
        Gestión de la conformidad con regulaciones de privacidad y protección de datos (como GDPR).
        Seguridad de datos para proteger la información sensible de los candidatos.

    Portal de Empleados:
        Acceso para empleados a un portal donde pueden referir candidatos, ver el estado de sus referencias y participar en el proceso de reclutamiento.

    Automatización de Procesos:
        Automatización de tareas repetitivas (envío de correos electrónicos, actualización de estados).
        Flujos de trabajo personalizables para diferentes tipos de vacantes o procesos de selección.

Estas funcionalidades permiten a las empresas gestionar de manera eficiente y efectiva todo el ciclo de reclutamiento, desde la publicación de vacantes hasta la contratación final de los candidatos.

Prompt 3

En un sistema ATS (Applicant Tracking System), las principales entidades de datos representarían a los diversos elementos involucrados en el proceso de reclutamiento y selección. Aquí tienes una lista de las principales entidades, junto con sus propiedades:

    Candidato:
        ID: Identificador único del candidato.
        Nombre: Nombre completo del candidato.
        Correo Electrónico: Dirección de correo electrónico.
        Teléfono: Número de teléfono.
        Dirección: Dirección física.
        Fecha de Nacimiento: Fecha de nacimiento del candidato.
        Currículum: Archivo del currículum vitae.
        Carta de Presentación: Archivo de la carta de presentación (opcional).
        Fecha de Aplicación: Fecha en que el candidato aplicó a una vacante.
        Estado de Aplicación: Estado actual del proceso de selección (aplicado, entrevistado, en espera, rechazado, contratado).
        Historial de Entrevistas: Lista de entrevistas y sus resultados.
        Notas: Notas adicionales sobre el candidato.
        Referencias: Lista de referencias proporcionadas por el candidato.

    Vacante:
        ID: Identificador único de la vacante.
        Título del Puesto: Título del puesto de trabajo.
        Descripción del Puesto: Descripción detallada de las responsabilidades y requisitos del puesto.
        Ubicación: Ubicación del puesto (ciudad, país, remoto).
        Fecha de Publicación: Fecha en que la vacante fue publicada.
        Fecha de Cierre: Fecha límite para aplicar a la vacante.
        Estado: Estado actual de la vacante (abierta, cerrada, en pausa).
        Departamento: Departamento o área de la empresa que ofrece la vacante.
        Salario: Rango salarial ofrecido.
        Tipo de Contrato: Tipo de contrato (tiempo completo, medio tiempo, temporal, freelance).

    Entrevista:
        ID: Identificador único de la entrevista.
        Candidato ID: Referencia al candidato entrevistado.
        Vacante ID: Referencia a la vacante para la cual se realiza la entrevista.
        Fecha y Hora: Fecha y hora de la entrevista.
        Entrevistador: Nombre(s) del entrevistador o entrevistadores.
        Formato: Formato de la entrevista (presencial, telefónica, videollamada).
        Comentarios: Comentarios y notas del entrevistador.
        Resultado: Resultado de la entrevista (aprobado, rechazado, en espera).

    Evaluación:
        ID: Identificador único de la evaluación.
        Candidato ID: Referencia al candidato evaluado.
        Vacante ID: Referencia a la vacante relacionada con la evaluación.
        Fecha: Fecha en que se realizó la evaluación.
        Tipo: Tipo de evaluación (prueba técnica, evaluación de habilidades, prueba psicométrica).
        Puntuación: Puntuación obtenida por el candidato.
        Comentarios: Comentarios adicionales sobre la evaluación.

    Usuario:
        ID: Identificador único del usuario (reclutador, gerente de contratación).
        Nombre: Nombre completo del usuario.
        Correo Electrónico: Dirección de correo electrónico.
        Rol: Rol del usuario en el sistema (administrador, reclutador, entrevistador).
        Fecha de Creación: Fecha en que el usuario fue creado en el sistema.
        Último Acceso: Fecha y hora del último acceso al sistema.

    Fuente de Candidatos:
        ID: Identificador único de la fuente.
        Nombre: Nombre de la fuente (LinkedIn, Indeed, página web de la empresa).
        Descripción: Descripción de la fuente.
        URL: URL de la fuente.
        Candidatos: Lista de candidatos provenientes de esta fuente.

    Tarea:
        ID: Identificador único de la tarea.
        Título: Título de la tarea.
        Descripción: Descripción detallada de la tarea.
        Fecha de Creación: Fecha en que se creó la tarea.
        Fecha Límite: Fecha límite para completar la tarea.
        Asignado a: Usuario al que se le ha asignado la tarea.
        Estado: Estado actual de la tarea (pendiente, en progreso, completada).

Estas entidades y sus propiedades forman la base de datos de un sistema ATS y permiten gestionar de manera eficiente la información relacionada con el proceso de reclutamiento y selección de personal.

Prompt 4

Agregar funcionalidades extraordinarias a un sistema ATS puede diferenciarlo y mejorar significativamente la experiencia tanto de los reclutadores como de los candidatos. Aquí tienes algunas ideas innovadoras:

    IA para Matching Avanzado:
        Utilizar inteligencia artificial para hacer un matching avanzado entre las habilidades de los candidatos y los requisitos de las vacantes, no solo basado en palabras clave, sino también en habilidades transferibles y potencial de desarrollo.

    Entrevistas Automatizadas con IA:
        Integrar un módulo de entrevistas automatizadas con IA, donde los candidatos pueden responder preguntas pregrabadas y la IA analiza sus respuestas, lenguaje corporal y tono de voz para evaluar competencias y habilidades.

    Simulaciones y Evaluaciones Gamificadas:
        Implementar simulaciones y evaluaciones gamificadas para evaluar habilidades prácticas de los candidatos en un entorno virtual, proporcionando una experiencia más interactiva y atractiva.

    Análisis Predictivo de Desempeño:
        Desarrollar modelos predictivos para estimar el desempeño futuro de los candidatos en el puesto, basándose en datos históricos de empleados y métricas de desempeño.

    Seguimiento de Bienestar y Satisfacción:
        Una vez contratado, permitir el seguimiento del bienestar y la satisfacción del nuevo empleado durante los primeros meses, proporcionando datos que ayuden a mejorar la experiencia de integración.

    Redes de Referencia de Candidatos:
        Crear una red interna donde los candidatos pueden referirse mutuamente y recibir recompensas por referidos exitosos, incentivando así la atracción de talento.

    Panel de Control de Diversidad e Inclusión:
        Incluir un panel de control para monitorear y promover la diversidad e inclusión en el proceso de contratación, con métricas y análisis detallados para identificar áreas de mejora.

    Chatbots de Asistencia en Tiempo Real:
        Integrar chatbots que asistan a los candidatos en tiempo real durante el proceso de solicitud, respondiendo preguntas frecuentes y proporcionando orientación personalizada.

    Realidad Virtual para Tours de la Empresa:
        Utilizar realidad virtual para ofrecer tours virtuales de la empresa y su cultura, permitiendo a los candidatos tener una visión inmersiva de su posible lugar de trabajo.

    Evaluaciones de Cultura y Ajuste:
        Desarrollar evaluaciones para medir el ajuste cultural de los candidatos con la empresa, ayudando a asegurar una buena integración y satisfacción a largo plazo.

    Análisis de Sentimiento de Feedback de Entrevistas:
        Implementar análisis de sentimiento en el feedback de entrevistas para identificar patrones y mejorar la experiencia de los candidatos y entrevistadores.

    Biblioteca de Recursos de Desarrollo Profesional:
        Ofrecer a los candidatos acceso a una biblioteca de recursos de desarrollo profesional (cursos, webinars, artículos) que puedan ayudarlos a mejorar sus habilidades, incluso si no son seleccionados para el puesto.

Estas funcionalidades extraordinarias no solo mejorarían la eficiencia del proceso de selección, sino que también podrían proporcionar una experiencia más atractiva y enriquecedora tanto para los reclutadores como para los candidatos.

Prompt 5

Para integrar estas funcionalidades extraordinarias en el sistema ATS, se deben crear nuevas entidades de datos que complementen y se conecten con las entidades existentes. A continuación, se presentan las nuevas entidades de datos junto con sus propiedades y las relaciones con las entidades anteriores:

    Evaluación Automatizada con IA:
        ID: Identificador único de la evaluación automatizada.
        Candidato ID: Referencia al candidato evaluado.
        Vacante ID: Referencia a la vacante relacionada con la evaluación.
        Fecha: Fecha en que se realizó la evaluación.
        Pregunta: Pregunta realizada durante la entrevista automatizada.
        Respuesta: Respuesta del candidato.
        Análisis IA: Resultados del análisis de IA (competencias, habilidades, lenguaje corporal, tono de voz).
        Puntuación: Puntuación asignada por la IA.

    Simulación y Evaluación Gamificada:
        ID: Identificador único de la simulación.
        Candidato ID: Referencia al candidato evaluado.
        Vacante ID: Referencia a la vacante relacionada con la simulación.
        Fecha: Fecha en que se realizó la simulación.
        Descripción: Descripción de la simulación.
        Resultado: Resultado obtenido por el candidato.
        Comentarios: Comentarios adicionales sobre la simulación.

    Modelo Predictivo de Desempeño:
        ID: Identificador único del modelo predictivo.
        Candidato ID: Referencia al candidato evaluado.
        Vacante ID: Referencia a la vacante relacionada con la evaluación.
        Fecha: Fecha en que se generó la predicción.
        Desempeño Predicho: Valor de desempeño predicho.
        Factores Considerados: Lista de factores considerados en la predicción.
        Comentarios: Comentarios adicionales sobre la predicción.

    Seguimiento de Bienestar y Satisfacción:
        ID: Identificador único del seguimiento.
        Empleado ID: Referencia al empleado (nuevo contratado).
        Fecha: Fecha de seguimiento.
        Satisfacción Laboral: Valor de satisfacción laboral.
        Comentarios: Comentarios adicionales sobre el bienestar.
        Acciones Recomendadas: Acciones recomendadas para mejorar el bienestar.

    Red de Referencia de Candidatos:
        ID: Identificador único de la referencia.
        Candidato ID: Referencia al candidato que refiere.
        Referido ID: Referencia al candidato referido.
        Fecha: Fecha de la referencia.
        Estado: Estado del proceso de referencia.
        Recompensa: Recompensa asignada por la referencia exitosa.

    Panel de Control de Diversidad e Inclusión:
        ID: Identificador único del registro.
        Vacante ID: Referencia a la vacante.
        Fecha: Fecha del registro.
        Métrica: Métrica específica de diversidad o inclusión (género, etnia, etc.).
        Valor: Valor de la métrica.
        Comentarios: Comentarios adicionales.

    Chatbot de Asistencia en Tiempo Real:
        ID: Identificador único de la interacción.
        Candidato ID: Referencia al candidato.
        Fecha y Hora: Fecha y hora de la interacción.
        Pregunta: Pregunta realizada por el candidato.
        Respuesta: Respuesta proporcionada por el chatbot.
        Satisfacción: Valor de satisfacción del candidato con la respuesta.

    Tour Virtual de la Empresa:
        ID: Identificador único del tour.
        Candidato ID: Referencia al candidato.
        Fecha: Fecha del tour.
        Descripción: Descripción del tour virtual.
        Comentarios: Comentarios adicionales sobre la experiencia del tour.

    Evaluación de Cultura y Ajuste:
        ID: Identificador único de la evaluación.
        Candidato ID: Referencia al candidato evaluado.
        Vacante ID: Referencia a la vacante relacionada con la evaluación.
        Fecha: Fecha de la evaluación.
        Resultado: Resultado de la evaluación de ajuste cultural.
        Comentarios: Comentarios adicionales.

    Análisis de Sentimiento de Feedback de Entrevistas:
        ID: Identificador único del análisis.
        Entrevista ID: Referencia a la entrevista.
        Fecha: Fecha del análisis.
        Sentimiento: Resultado del análisis de sentimiento (positivo, negativo, neutral).
        Comentarios: Comentarios adicionales.

    Biblioteca de Recursos de Desarrollo Profesional:
        ID: Identificador único del recurso.
        Título: Título del recurso.
        Descripción: Descripción del recurso.
        URL: Enlace al recurso.
        Tipo: Tipo de recurso (curso, webinar, artículo).
        Candidatos Accedidos: Lista de candidatos que han accedido al recurso.

Estas nuevas entidades de datos, conectadas con las entidades anteriores, permiten integrar y gestionar las funcionalidades extraordinarias en el sistema ATS, mejorando significativamente la eficiencia y la experiencia del usuario.

Prompt 6

Sistema ATS de LTI: Revolucionando el Reclutamiento con Innovación y Eficiencia

En LTI, hemos desarrollado un sistema ATS (Applicant Tracking System) de última generación que transforma la forma en que las empresas gestionan su proceso de reclutamiento y selección. Nuestro sistema no solo incluye todas las funcionalidades esenciales de un ATS tradicional, sino que también incorpora innovaciones extraordinarias que nos diferencian de la competencia y proporcionan ventajas competitivas únicas.

Principales Funcionalidades del Sistema ATS de LTI:

    Publicación de Vacantes: Fácil creación y publicación de ofertas de trabajo en múltiples plataformas.
    Gestión de Solicitudes: Recepción, almacenamiento y clasificación automática de solicitudes.
    Búsqueda y Filtrado Avanzado de Candidatos: Herramientas de búsqueda avanzada y filtros precisos.
    Seguimiento de Candidatos: Gestión eficiente del estado de cada candidato a lo largo del proceso de selección.
    Comunicación Integral con Candidatos: Plantillas de correos electrónicos y herramientas de programación de entrevistas.
    Evaluación Integral de Candidatos: Herramientas para la evaluación técnica y de habilidades.
    Gestión de Base de Datos de Candidatos: Organización y búsqueda en la base de datos interna.
    Informes y Análisis Detallados: Generación de informes y análisis de datos para mejorar el proceso de contratación.
    Cumplimiento Legal y Seguridad de Datos: Gestión de la conformidad con regulaciones y protección de datos.
    Automatización de Procesos: Flujos de trabajo personalizables y automatización de tareas repetitivas.

Funcionalidades Extraordinarias de LTI:

    IA para Matching Avanzado: Utilizamos inteligencia artificial para hacer un matching preciso entre las habilidades de los candidatos y los requisitos de las vacantes, mejorando la calidad de las contrataciones.

    Entrevistas Automatizadas con IA: Nuestro módulo de entrevistas automatizadas con IA analiza las respuestas, el lenguaje corporal y el tono de voz de los candidatos, proporcionando evaluaciones detalladas y objetivas.

    Simulaciones y Evaluaciones Gamificadas: Ofrecemos simulaciones interactivas y evaluaciones gamificadas para una evaluación práctica y atractiva de las habilidades de los candidatos.

    Análisis Predictivo de Desempeño: Desarrollamos modelos predictivos para estimar el desempeño futuro de los candidatos, ayudando a tomar decisiones de contratación más informadas.

    Seguimiento de Bienestar y Satisfacción: Implementamos un seguimiento del bienestar y la satisfacción de los nuevos empleados, asegurando una integración exitosa y satisfactoria.

    Redes de Referencia de Candidatos: Facilitamos una red interna de referencias con recompensas, incentivando la atracción de talento de alta calidad.

    Panel de Control de Diversidad e Inclusión: Proporcionamos herramientas para monitorear y promover la diversidad e inclusión, alineando las contrataciones con los valores de la empresa.

    Chatbots de Asistencia en Tiempo Real: Nuestros chatbots asisten a los candidatos durante el proceso de solicitud, mejorando su experiencia y resolviendo dudas en tiempo real.

    Realidad Virtual para Tours de la Empresa: Ofrecemos tours virtuales de la empresa para que los candidatos puedan experimentar la cultura y el entorno de trabajo de manera inmersiva.

    Evaluaciones de Cultura y Ajuste: Evaluamos el ajuste cultural de los candidatos, asegurando una integración armoniosa y una satisfacción a largo plazo.

    Análisis de Sentimiento de Feedback de Entrevistas: Implementamos análisis de sentimiento en el feedback de entrevistas para identificar patrones y mejorar la experiencia de todos los involucrados.

    Biblioteca de Recursos de Desarrollo Profesional: Proporcionamos acceso a una biblioteca de recursos de desarrollo profesional para que los candidatos puedan mejorar sus habilidades, incluso si no son seleccionados.

Ventajas Competitivas:

    Precisión y Eficiencia: Gracias al uso de IA y análisis predictivo, nuestro sistema asegura contrataciones más precisas y eficientes.
    Experiencia del Candidato Mejorada: Con entrevistas automatizadas, simulaciones gamificadas y chatbots de asistencia, los candidatos disfrutan de un proceso de selección fluido y atractivo.
    Diversidad e Inclusión: Nuestras herramientas para promover la diversidad e inclusión garantizan un proceso de contratación equitativo y alineado con los valores de la empresa.
    Innovación y Adaptabilidad: Las funcionalidades avanzadas como la realidad virtual y el análisis de sentimiento nos posicionan a la vanguardia de la tecnología en recursos humanos.

En LTI, estamos comprometidos con la excelencia y la innovación continua, asegurando que nuestro sistema ATS no solo cumpla, sino que supere las expectativas de nuestros clientes y candidatos. ¡Descubre cómo podemos transformar tu proceso de reclutamiento hoy mismo!

Prompt 7

Aquí tienes el Lean Canvas para el sistema ATS de LTI:
Lean Canvas - LTI ATS

    Problem
        Inefficient candidate matching
        Poor candidate experience
        Lack of diversity and inclusion metrics

    Customer Segments
        HR departments
        Recruitment agencies
        Large enterprises

    Unique Value Proposition
        Advanced AI matching
        Automated interviews with IA
        Diversity and inclusion dashboard

    Solution
        AI-driven candidate matching
        Gamified evaluations
        Virtual company tours

    Channels
        Direct sales
        Online marketing
        Partnerships with HR software providers

    Revenue Streams
        Subscription fees
        Pay-per-use for advanced features
        Custom solutions for enterprises

    Cost Structure
        Development costs
        Marketing and sales
        Customer support

    Key Metrics
        Time to hire
        Candidate satisfaction
        Diversity ratios

    Unfair Advantage
        Proprietary AI technology
        Integrated diversity metrics
        Unique candidate experience features

Este diagrama proporciona una visión clara y concisa de los elementos clave del sistema ATS de LTI, destacando las ventajas competitivas y las innovaciones que lo diferencian de la competencia.

Prompt 8

Los tres casos de uso principales en el sistema ATS de LTI podrían ser los siguientes:
Caso de Uso 1: Publicación y Gestión de Vacantes

Actores Involucrados:

    Reclutador
    Administrador del Sistema

Descripción:
El reclutador puede crear y publicar vacantes en múltiples plataformas y gestionar las solicitudes recibidas de manera centralizada.

Flujo Básico:

    El reclutador inicia sesión en el sistema ATS.
    El reclutador navega a la sección de "Publicación de Vacantes".
    El reclutador llena el formulario de creación de vacante con detalles como título, descripción, requisitos, y beneficios.
    El reclutador selecciona las plataformas donde se publicará la vacante (sitio web de la empresa, portales de empleo, redes sociales).
    El reclutador publica la vacante.
    El sistema ATS distribuye la vacante a las plataformas seleccionadas y comienza a recibir solicitudes de candidatos.
    El reclutador puede ver todas las solicitudes recibidas en el tablero de "Gestión de Solicitudes".
    El reclutador puede filtrar y clasificar las solicitudes, y avanzar a los candidatos en el proceso de selección.

Flujo Alternativo:

    El administrador del sistema puede configurar plantillas de vacantes y automatizar la publicación en ciertas plataformas.

Caso de Uso 2: Evaluación de Candidatos con IA y Gamificación

Actores Involucrados:

    Reclutador
    Candidato
    Sistema de IA

Descripción:
El sistema ATS utiliza IA para realizar entrevistas automatizadas y evaluaciones gamificadas, proporcionando resultados detallados de las competencias y habilidades de los candidatos.

Flujo Básico:

    El reclutador selecciona candidatos para la evaluación.
    El reclutador envía invitaciones a los candidatos para participar en entrevistas automatizadas y evaluaciones gamificadas.
    Los candidatos reciben las invitaciones y acceden a la plataforma de evaluación.
    Los candidatos responden preguntas pregrabadas y realizan actividades gamificadas diseñadas para evaluar sus habilidades.
    El sistema de IA analiza las respuestas y el desempeño de los candidatos en las actividades.
    El sistema ATS genera un informe detallado con los resultados de la evaluación, incluyendo análisis de competencias, habilidades, lenguaje corporal y tono de voz.
    El reclutador revisa los informes y avanza a los candidatos más adecuados en el proceso de selección.

Flujo Alternativo:

    El reclutador puede personalizar las preguntas y actividades gamificadas según los requisitos específicos de la vacante.

Caso de Uso 3: Seguimiento de Diversidad e Inclusión en el Proceso de Contratación

Actores Involucrados:

    Reclutador
    Administrador del Sistema
    Gerente de Diversidad e Inclusión

Descripción:
El sistema ATS proporciona herramientas para monitorear y promover la diversidad e inclusión en el proceso de contratación, con métricas detalladas y paneles de control.

Flujo Básico:

    El reclutador inicia sesión en el sistema ATS.
    El reclutador navega a la sección de "Diversidad e Inclusión".
    El reclutador configura las métricas de diversidad e inclusión que desea monitorear (género, etnia, edad, etc.).
    El sistema ATS recopila y analiza datos de los candidatos en base a las métricas configuradas.
    El sistema ATS genera informes y paneles de control que muestran el progreso y las áreas de mejora en términos de diversidad e inclusión.
    El gerente de diversidad e inclusión revisa los informes y utiliza los datos para implementar estrategias que mejoren la diversidad en el proceso de contratación.
    El reclutador ajusta sus estrategias de reclutamiento basándose en los datos y recomendaciones proporcionadas por el sistema.

Flujo Alternativo:

    El administrador del sistema puede configurar alertas automáticas para notificar a los reclutadores y gerentes cuando las métricas de diversidad caen por debajo de un umbral establecido.

Estos casos de uso ilustran cómo el sistema ATS de LTI puede optimizar el proceso de contratación, mejorar la experiencia del candidato y promover la diversidad e inclusión en la empresa.

Prompt 9


erDiagram
    Candidato {
        idCandidato INT PK
        nombreCandidato VARCHAR
        edad INT
        experiencia VARCHAR
      
    }
    Vacante {
        idVacante INT PK
        tituloVacante VARCHAR
        descripcion VARCHAR
       
    }
    Entrevista {
        idEntrevista INT PK
        fechaEntrevista DATE
        resultado VARCHAR
       
    }
    Evaluacion {
        idEvaluacion INT PK
        puntaje INT
        observaciones TEXT
       
    }
    Reclutador {
        idReclutador INT PK
        nombreReclutador VARCHAR
        departamento VARCHAR
       
    }

    Candidato ||--o{ Vacante : aplica_a
    Candidato ||--|{ Entrevista : participa_en
    Entrevista }|--|| Evaluacion : evalua
    Reclutador }|--|| Entrevista : realiza


Prompt 10


@startuml

left to right direction
skinparam packageStyle rectangle

actor Reclutador as R
actor "Administrador del\nSistema" as A

rectangle "Sistema ATS" {
    R -- (Publicación de Vacantes): Inicia sesión
    (Publicación de Vacantes) -- (Llenado de formulario): Navega
    (Llenado de formulario) -- (Selección de plataformas): Llena formulario
    (Selección de plataformas) -- (Publicación): Selecciona plataformas
    (Publicación) -- (Distribución a plataformas): Publica
    (Distribución a plataformas) -- (Recepción de solicitudes): Distribuye
    (Recepción de solicitudes) -- (Gestión de Solicitudes): Recibe solicitudes
    (Gestión de Solicitudes) -- (Filtrado y Clasificación): Gestiona solicitudes
    (Filtrado y Clasificación) -- (Avance de candidatos): Filtra y clasifica
    A -- (Configuración de Plantillas): Configura plantillas
}

@enduml




@startuml

left to right direction
skinparam packageStyle rectangle

actor Reclutador as R
actor Candidato as C
actor "Sistema de IA" as S

rectangle "Sistema ATS" {
    R -- (Selección de Candidatos): Selecciona candidatos
    (Selección de Candidatos) -- (Envío de Invitaciones): Envía invitaciones
    (Envío de Invitaciones) -- (Acceso a Plataforma de Evaluación): Reciben invitaciones
    (Acceso a Plataforma de Evaluación) -- (Respuesta a Preguntas y Actividades): Acceden y responden
    (Respuesta a Preguntas y Actividades) -- (Análisis por IA): Responden y analizan
    (Análisis por IA) -- (Generación de Informe): Analiza y genera informe
    (Generación de Informe) -- (Revisión por Reclutador): Genera informe
    (Revisión por Reclutador) -- (Avance en Selección): Revisa y avanza
    C -- (Respuesta a Preguntas y Actividades): Responde preguntas
    S -- (Análisis por IA): Analiza respuestas
}

@enduml




@startuml

left to right direction
skinparam packageStyle rectangle

actor Reclutador as R
actor "Administrador del\nSistema" as A
actor "Gerente de\nDiversidad e Inclusión" as G

rectangle "Sistema ATS" {
    R -- (Inicio de Sesión): Inicia sesión
    (Inicio de Sesión) -- (Configuración de Diversidad): Navega
    (Configuración de Diversidad) -- (Configuración de Métricas): Configura métricas
    (Configuración de Métricas) -- (Recopilación y Análisis): Configura métricas
    (Recopilación y Análisis) -- (Generación de Informes): Recopila y analiza
    (Generación de Informes) -- (Revisión por Gerente): Genera informes
    (Revisión por Gerente) -- (Implementación de Estrategias): Revisa e implementa
    G -- (Revisión por Gerente): Revisa informes
    A -- (Configuración de Alertas): Configura alertas
}

@enduml


Prompt 11

@startuml

package "Sistema ATS" {
    [Publicación de Vacantes]
    [Gestión de Solicitudes]
    [Búsqueda y Filtrado de Candidatos]
    [Seguimiento de Candidatos]
    [Comunicación con Candidatos]
    [Gestión de Entrevistas]
    [Evaluación de Candidatos]
    [Gestión de Base de Datos de Candidatos]
    [Informes y Análisis]
    [Integraciones con Otros Sistemas]
    [Cumplimiento Legal y Seguridad de Datos]
    [Portal de Empleados]
    [Automatización de Procesos]
}

@enduml

