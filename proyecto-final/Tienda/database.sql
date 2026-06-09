CREATE DATABASE IF NOT EXISTS tienda_mvc;
USE tienda_mvc;

-- =========================
-- TABLA USUARIOS
-- =========================

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nombre_completo VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO usuarios (
    username,
    password,
    nombre_completo
) VALUES (
    'admin',
    '$2y$10$wH5mN3S8m6V4Q8m7r0z0euD5sN1Y8i1M2uVxM6k7A2N4F8jK2L9uG',
    'Administrador General'
);

-- =========================
-- TABLA PRODUCTOS
-- =========================

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sku VARCHAR(50) NOT NULL UNIQUE,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    precio_compra DECIMAL(10,2) NOT NULL,
    precio_venta DECIMAL(10,2) NOT NULL,
    existencia INT NOT NULL DEFAULT 0,
    imagen VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ON UPDATE CURRENT_TIMESTAMP
);

-- =========================
-- TABLA LOGS
-- =========================

CREATE TABLE logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(100) NOT NULL,
    accion VARCHAR(255) NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);