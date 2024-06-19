--Este código SQL es lo que se ejecuta en la base de datos para crear la tabla y la base de datos directamente en la misma base de datos

CREATE DATABASE Compras;

USE Compras;

CREATE TABLE catalogo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100),
    precio DECIMAL(9, 2)
);