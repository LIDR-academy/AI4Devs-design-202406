-- Crear la tabla job_posts si no existe
CREATE TABLE IF NOT EXISTS job_posts (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    description TEXT NOT NULL,
    requirements TEXT NOT NULL,
    salary_range TEXT NOT NULL,
    work_schedule TEXT NOT NULL,
    location TEXT NOT NULL,
    company TEXT NOT NULL,
    created_by INTEGER NOT NULL,
    created_at TEXT DEFAULT CURRENT_TIMESTAMP,
    updated_at TEXT DEFAULT CURRENT_TIMESTAMP
);

-- Insertar datos ficticios en la tabla job_posts
INSERT INTO job_posts (title, description, requirements, salary_range, work_schedule, location, company, created_by, created_at, updated_at) VALUES
('Desarrollador Backend', 'Responsable del desarrollo y mantenimiento de aplicaciones backend.', 'Experiencia en PHP, MySQL, y frameworks como Laravel o CodeIgniter.', '30000-40000', 'Tiempo completo', 'Ciudad de México', 'Tech Solutions', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Desarrollador Frontend', 'Encargado del desarrollo de interfaces de usuario.', 'Experiencia en HTML, CSS, JavaScript, y frameworks como React o Angular.', '25000-35000', 'Tiempo completo', 'Guadalajara', 'Innovative Web', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Ingeniero DevOps', 'Responsable de la integración y entrega continua.', 'Experiencia en herramientas CI/CD, Docker, y Kubernetes.', '35000-45000', 'Tiempo completo', 'Monterrey', 'Cloud Services', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Analista de Datos', 'Encargado del análisis y visualización de datos.', 'Experiencia en SQL, Python, y herramientas de visualización como Tableau.', '28000-38000', 'Tiempo completo', 'Ciudad de México', 'Data Insights', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Administrador de Sistemas', 'Responsable de la administración y mantenimiento de sistemas.', 'Experiencia en administración de servidores Linux y Windows.', '30000-40000', 'Tiempo completo', 'Guadalajara', 'IT Solutions', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Desarrollador Full Stack', 'Encargado del desarrollo tanto del frontend como del backend.', 'Experiencia en desarrollo web completo, incluyendo PHP, JavaScript, y bases de datos.', '32000-42000', 'Tiempo completo', 'Monterrey', 'Web Innovators', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Especialista en Seguridad Informática', 'Responsable de la seguridad de la información y sistemas.', 'Experiencia en seguridad de redes, análisis de vulnerabilidades, y herramientas de seguridad.', '35000-45000', 'Tiempo completo', 'Ciudad de México', 'SecureTech', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Ingeniero de Soporte Técnico', 'Encargado de brindar soporte técnico a usuarios y clientes.', 'Experiencia en soporte técnico, resolución de problemas, y atención al cliente.', '20000-30000', 'Tiempo completo', 'Guadalajara', 'Support Services', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Desarrollador de Aplicaciones Móviles', 'Responsable del desarrollo de aplicaciones móviles.', 'Experiencia en desarrollo de aplicaciones móviles para iOS y Android.', '30000-40000', 'Tiempo completo', 'Monterrey', 'Mobile Innovators', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Arquitecto de Software', 'Encargado del diseño y arquitectura de software.', 'Experiencia en diseño de software, patrones de arquitectura, y liderazgo técnico.', '40000-50000', 'Tiempo completo', 'Ciudad de México', 'Tech Architects', 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);