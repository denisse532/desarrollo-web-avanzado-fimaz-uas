
<?php
require_once 'Usuario.php';
$objusuario = new Usuario(" denisse"," denisse@gmail.com");

echo "Nombre:" . $objusuario->getNombre(). "<br>";
echo "Correo:" . $objusuario->getCorreo();

