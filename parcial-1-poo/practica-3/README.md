#Actividad 3.- SISTEMA DE USUARIOS CON VALIDACIONES Y EXCEPCIONES

#Objetivo 
En esta practica aplicamos lo que aprendimos del sistema de usuarios con validaciones y excepciones, este sistema incluye herencias entre clases, validacion de datos y manejo de exepciones para controlar errores.

#Explicación del flujo de clases
El sistema esta compuesto por tres clase principales, el Usuario es la clase que contine los atributos nombre y correo, el Admin hereda de usuario y representa el administrador con getRol, el Alumno hereda de usuario y agrega el atributo matricula.

#Evidencia del manejo de errores
En el archivo index.php se utilizan bloques try/catch para capturar excepciones generadas por correos invalidos, esto mostrara un mensaje de error sin detener el sistema.

#Evidencia de ejecucion 
Al ejecutar el archivo index.php se mostrara los usuarios invalidos creados correctamente, un mensaje de error cuando se intenta crear un usuario con correo invalido.
