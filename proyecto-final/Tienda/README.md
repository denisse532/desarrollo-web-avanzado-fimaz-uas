# README - PROYECTO TIENDA MVC

## Descripción

TIENDA MVC es un sistema web desarrollado en PHP utilizando el patrón de arquitectura MVC (Modelo - Vista - Controlador).

El proyecto permite administrar productos desde un panel de administrador y mostrar un catálogo público de productos.

Además, incluye funcionalidades de seguridad, validaciones, paginación, subida de imágenes y bitácora de acciones.


# Tecnologías Utilizadas

* PHP 8
* MySQL / MariaDB
* Apache / XAMPP
* Bootstrap 5
* PDO
* MVC
* Namespaces
* Autoload
* Try/Catch
* Transacciones SQL


# Requisitos

* PHP 8 o superior
* Apache o XAMPP
* MySQL/MariaDB
* Navegador web
* phpMyAdmin


# Instalación

## 1. Copiar el proyecto

Copiar la carpeta:

Tienda


Dentro de:

htdocs

Ejemplo:

C:\xampp\htdocs\TIENDA


## 2. Iniciar servicios

Desde XAMPP iniciar:

* Apache
* MySQL


## 3. Crear base de datos

Abrir:

http://localhost/phpmyadmin


Crear una base de datos llamada:

tienda_mvc


## 4. Importar base de datos

Importar el archivo:

database.sql


## 5. Configurar conexión

Abrir:

config/Database.php

Verificar usuario y contraseña:

private string $host = "localhost";
private string $dbName = "tienda_mvc";
private string $username = "root";
private string $password = "";


## 6. Abrir el sistema

http://localhost/Tienda/index.php


# Acceso Administrador

Usuario:

admin

Contraseña:

admin123



# Funcionalidades

## Administración de Productos

* Crear productos
* Editar productos
* Eliminar productos
* Mostrar productos


## Catálogo Público

Los usuarios pueden:

* Ver productos
* Buscar productos
* Ver imágenes
* Consultar precios y existencia

Ruta:

http://localhost/Tienda/catalogo


# Validaciones Implementadas

## Productos

* SKU único
* precio_venta >= precio_compra
* existencia >= 0
* Campos obligatorios
* Validación numérica


# Paginación

El sistema implementa paginación:

* 5 productos por página


# Subida de Imágenes

Las imágenes de productos se almacenan en:

views/img/



# Protección CSRF

Todos los formularios utilizan token CSRF para mayor seguridad.


# Bitácora de Acciones

El sistema registra acciones del administrador:

* Crear producto
* Editar producto
* Eliminar producto

Tabla utilizada:

logs


# API REST

El proyecto incluye una API básica para consultar productos.

Controlador:

controllers/ApiController.php

Ruta ejemplo

http://localhost/Tienda/api/productos


# Estructura del Proyecto

Tienda
│
├── config/
│   ├── Autoload.php
│   └── Database.php
│
├── controllers/
│   ├── ApiController.php
│   ├── AuthController.php
│   ├── ProductoController.php
│   └── PublicController.php
│
├── models/
│   ├── LogModel.php
│   ├── ProductoModel.php
│   └── UsuarioModel.php
│
├── views/
│   ├── auth/
│   │   └── login.php
│   │
│   ├── img/
│   │
│   ├── layouts/
│   │   ├── footer.php
│   │   └── header.php
│   │
│   ├── productos/
│   │   ├── create.php
│   │   ├── edit.php
│   │   └── index.php
│   │
│   └── public/
│       └── catalogo.php
│
├── .htaccess
├── database.sql
└── index.php


# Seguridad

* PDO Prepared Statements
* Protección CSRF
* Validaciones backend
* Manejo de sesiones
* Sanitización de datos

