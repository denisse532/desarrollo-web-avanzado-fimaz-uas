<!--Denisse Carolina Navarro Garcia-->
<?php
    require_once ("../../controllers/torneosController.php");
    
    $nombreTorneo = $_POST['txtNombreTorneo'];
    $organizador = $_POST['txtOrganizador'];
    $patrocinadores = $_POST['txtPatrocinadores'];
    $sede = $_POST['txtSede'];
    $categoria = $_POST['txtCategoria'];
    $premio1 = $_POST['txtPremio1'];
    $premio2 = $_POST['txtPremio2'];
    $premio3 = $_POST['txtPremio3'];
    $otroPremio = $_POST['txtOtroPremio'];
    $txtUsuario = $_POST['txtUsuario'];
    $contrasena = $_POST['txtContrasena'];

    $objController = new torneosController();
    $objController->saveTorneo($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria,
    $premio1, $premio2, $premio3, $otroPremio, $txtUsuario, $contrasena);
?>