# CRUD de Productos en PHP

Este proyecto es un CRUD básico hecho en PHP usando POO y PDO para conectar a una base de datos MySQL.

Sirve para agregar, mostrar, editar, eliminar y buscar productos.

---

## Qué hace

* Agregar productos
* Ver lista de productos
* Editar productos
* Eliminar productos
* Buscar productos por nombre o descripción

---

## Tecnologías

* PHP
* MySQL
* PDO
* Bootstrap

---

## Estructura

/config → conexión a la base de datos
/controllers → lógica del sistema
/models → clase Producto
index.php → interfaz principal

---

## Configuración

En el archivo `Database.php` cambia los datos si es necesario:

```php
private $host = "localhost";
private $dbname = "nueva";
private $username = "root";
private $password = "";
```

---

## Base de datos

Crear la tabla con este código:

```sql
CREATE TABLE productos (
    idProducto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion VARCHAR(255),
    existencia INT,
    precio DECIMAL(10,2)
);
```

---

## Cómo usarlo

1. Poner la carpeta en `htdocs` (XAMPP)
2. Iniciar Apache y MySQL
3. Abrir en el navegador:
   http://localhost/nombre-del-proyecto

---

## Detalles

* Usa PDO para evitar inyección SQL
* Tiene búsqueda incluida
* Usa Bootstrap para el diseño

---

## Nota

Es un proyecto sencillo para practicar CRUD con PHP.


