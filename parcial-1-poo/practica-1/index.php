<?php
require_once 'Usuario.php';
$usuario = new Usuario(" denisse"," denisse@gmail.com");

echo "Nombre:" . $usuario->getNombre(). "<br>";
echo "Correo:" . $usuario->getCorreo();
