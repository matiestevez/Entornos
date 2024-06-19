--Este código SQL es lo que se ejecuta en la base de datos para crear la tabla y la base de datos directamente en la misma base de datos

CREATE DATABASE prueba;

USE prueba;

CREATE TABLE buscador (
    id INT AUTO_INCREMENT PRIMARY KEY,
    canciones VARCHAR(255)
);
