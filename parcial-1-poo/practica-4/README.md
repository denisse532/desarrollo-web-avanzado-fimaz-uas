#Actividad 4.- INTEGRACIÓN POO + HERENCIA + VALIDACIONES + EXCEPCIONES (PHP 8+)

#Objetivo
Construir un mini sistema orientado a objetos en PHP que integre encapsulamiento, herencia, validación de datos y manejo de excepciones.

#Requisitos
- PHP 8+
- XAMPP
- Navegador web
- Git
- Editor de código

  #Ruta de ejecución en el navegador
Después de iniciar Apache en XAMPP, abrir en el navegador:
http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-4/index.php
## Evidencia esperada

Al ejecutar el archivo **index.php** se debe mostrar:

1. Una **tabla HTML** con los usuarios creados correctamente (Administrador, Alumno e Invitado).
2. Cada fila debe mostrar:
   - Nombre
   - Correo
   - Rol
   - Matrícula (solo para Alumno)
   - Empresa (solo para Invitado)

Cuando una columna no aplica para un tipo de usuario se muestra **—**.

Además, el sistema debe mostrar un **mensaje de error controlado** cuando se intenta crear un usuario con un correo inválido, utilizando manejo de excepciones con `try/catch`.
## Resultado esperado

- Tabla HTML con los usuarios válidos.
- Mensaje de error controlado cuando se intenta crear un usuario con correo inválido.
