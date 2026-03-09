<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";

try{

    $admin = new Admin("Denisse", "denisse@gmail.com");
    echo "Nombre: " . $admin->getNombre() . "<br>";
    echo "Correo: " . $admin->getCorreo() . "<br>";
    echo "Rol: " . $admin->getRol() . "<br><br>";

    $alumno = new Alumno("Carlos", "carlos@gmail.com", "A12345");
    echo "Nombre: " . $alumno->getNombre() . "<br>";
    echo "Correo: " . $alumno->getCorreo() . "<br>";
    echo "Matrícula: " . $alumno->getMatricula() . "<br>";
    echo "Rol: " . $alumno->getRol() . "<br><br>";

    // usuario con correo inválido
    $usuarioError = new Admin("Pedro", "correo_invalido");

}catch(Exception $e){

    echo "Error: " . $e->getMessage();

}

?>