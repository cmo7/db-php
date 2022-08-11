DROP TABLE IF EXISTS tareas;

CREATE TABLE tareas (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(255),
    fecha_limite DATE,
    descripcion VARCHAR(255)
)