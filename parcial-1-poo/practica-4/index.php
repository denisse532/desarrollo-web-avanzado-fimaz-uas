<?php
require_once "clases/Admin.php";
require_once "clases/Alumno.php";
require_once "clases/Invitado.php";
$usuarios=[];
try{

$usuarios[]= new Admin("denisse","denisse@gmail.com");

$usuarios[]= new Alumno("Sofia","sofia@gmail.com","23170042");
$usuarios[]= new Invitado("Alan", "alan@gmail.com", "invitado");
$usuarios[]= new Admin("Maria", "correo_invalido");

} catch(Exception $e){
    echo "<p style='color:red;'>Error controlado: " . $e->getMessage() . "</p>";
}
?>

<h2>Lista de Usuarios</h2>
<table border="1" cellpadding="8">
<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Rol</th>
<th>Matricula</th>
<th>Empresa</th>
</tr>
<?php foreach($usuarios as $u): ?>
    <tr>
        <td><?php echo $u->getNombre(); ?></td>
        <td><?php echo $u->getCorreo(); ?></td>
        <td><?php echo $u->getRol(); ?></td>
     <td>
        <?php
        if(method_exists($u,'getMatricula')){
            echo $u->getMatricula();
        } else{
            echo "-";
        }  
        ?>
        </td>
        <td>
            <?php
            if(method_exists($u,'getEmpresa')){
                echo $u->getEmpresa();
            }else{
                echo "-";
            }
            ?>
            </td>
</tr>
<?php endforeach; ?>
</table>
    
                
