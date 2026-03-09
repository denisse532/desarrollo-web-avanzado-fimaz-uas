#Actividad 2.- HERENCIA Y REUTILIZACIÓN DE CÓDIGO EN PHP

#Objetivo
En esta practica aplicaremos lo que aprendimos de la herencia y la reutilizacion de codigo en php.

#Descripcion de la clase creada
Se utilizó una clase base llamada Usuario, que contiene los atributos privados nombre y correo, junto con sus métodos getters y setters.
Luego se creo la clase Admin, que se extiende la clase Usuario utilizando la palabra extends.
Gracias a la herencia, la clase Admin se puede reutilizar los atributos y metodos de Usuario, agregando uticamente el metodo getRol, que devuelve el rol del usuario.

#Diferencias entre Usuario y Admin
Las diferencias entre usuario y admin es que el usuario es la clase base que define los atributos nombre y correo, el admin es la clase que se heredo de usuario y solo se agrego el metodo getRol.

#Evidencia de ejecucion 
Al ejecutar el archivo index.php que se pone en el navegador aparece lo siguiente:
Nombre: Denisse
Correo: denisse@gmail.com
Rol: Administrador

