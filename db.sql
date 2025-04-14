CREATE DATABASE IF NOT EXISTS crud_php
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE crud_php;

CREATE TABLE IF NOT EXISTS persona (
  id_persona INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(20) NOT NULL,
  apellido VARCHAR(20) NOT NULL,
  dni INT(10) NOT NULL,
  fecha_nac DATE,
  correo VARCHAR(30) NOT NULL,
  PRIMARY KEY (id_persona)
);

INSERT INTO persona (nombre, apellido, dni, fecha_nac, correo)
VALUES
('Miguel', 'Gonzalez', 1000000, '2025-01-01', 'migonzv@gmail.com'),
('Angel', 'Valero', 2000000, '2025-02-02', 'migonzv2@gmail.com');