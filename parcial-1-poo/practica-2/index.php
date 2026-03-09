<?php
require_once 'Admin.php';
$admin = new Admin(" denisse"," denisse@gmail.com");

echo "Nombre:" . $admin->getNombre(). "<br>";
echo "Correo:" . $admin->getCorreo(). "<br>";
echo "Rol:" . $admin->getRol();