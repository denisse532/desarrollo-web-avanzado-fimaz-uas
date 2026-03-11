<?php
require_once "Admin.php";
require_once "Alumno.php";
$usuarios=[];
try{

$usuarios[]= new Admin("denisse","denisse@gmail.com");

$usuarios[]= new Alumno("Sofia","sofia@gmail.com","23170042");
$usuarios[]= new Alumno("Maria", "correo_invalido","23170043");

} catch(Exception $e){
    echo "<p style='color:red;'>Error : " . $e->getMessage() . "</p>";
}
?>

<h2>Lista de Usuarios</h2>
<table border="2" cellpadding="8">
<tr>
<th>Nombre</th>

<th>Correo</th>

<th>Rol</th>

<th>Matricula</th>
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
          
</tr>
<?php endforeach; ?>
</table>
    
                
