CREATE DATABASE Sistemas;

USE Sistemas;

CREATE TABLE Sistema(
    nombre VARCHAR(25) NOT NULL,
    objetivo VARCHAR(200) NOT NULL,
    entrada VARCHAR(30) NOT NULL,
    salida VARCHAR(30) NOT NULL,
    subsistemas INT NOT NULL,
    
    CONSTRAINT PK_NOMBRE PRIMARY KEY (nombre)
);

