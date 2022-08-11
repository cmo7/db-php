DROP TABLE IF EXISTS tareas;

CREATE TABLE tareas (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(255),
    fecha_limite DATE,
    descripcion VARCHAR(255),
    id_usuario INTEGER NOT NULL,
    CONSTRAINT usuario_tarea_fk 
        FOREIGN KEY (id_usuario) 
        REFERENCES usuarios(id)
);

-- @block Usuarios
CREATE TABLE usuarios (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL UNIQUE,
    pass VARCHAR(255) NOT NULL
)