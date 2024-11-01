CREATE DATABASE formulario_contactos;
USE formulario_contactos;

CREATE TABLE Contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    telefeno VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    contenido TEXT NOT NULL
);
