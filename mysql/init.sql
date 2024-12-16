-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS users_docker_db;

-- Usar la base de datos
USE users_docker_db;

-- Crear la tabla de usuarios si no existe
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);
