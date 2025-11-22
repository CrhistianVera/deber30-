CREATE DATABASE IF NOT EXISTS portafolio
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

-- 2. Usar esa base de datos
USE portafolio;

-- 3. Crear tabla para los mensajes del formulario de contacto
CREATE TABLE IF NOT EXISTS contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);