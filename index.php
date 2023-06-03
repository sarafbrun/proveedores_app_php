<?php include('templates/cabecera.php'); 
include('configuraciones/bd.php');

if(isset($_GET['txtID'])){
// borrar registro con el id correspondiente
//echo $_GET['txtID'];

$txtID=(isset($_GET['txtID']) )?$_GET['txtID']: "";


$sql="DELETE FROM proveedores WHERE id= '$txtID'";
$resultado=mysqli_query($conexion,$sql);

}


?>

<?php



include_once 'configuraciones/bd.php';
?>





    <div class="container">
    <div class="row">
        <div class="col-12 mt-3">

        
<div class="card">
    <div class="card-header column">
        <a name="" id="" class="btn" style="background-color: #c9ada7; color: white" href="proveedorForm.php">Añadir proveedor</a>
        
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th style="color: #22223b" scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $sql="SELECT * FROM proveedores";
                $result=mysqli_query($conexion,$sql);
                
                while($mostrar=mysqli_fetch_array($result)){
                ?>                

                    <tr class="">
                        <td scope="row" style="color: #4a4e69"><?php echo $mostrar['nombre'] ?></td>
                        <td style="color: #4a4e69"><?php echo $mostrar['email'] ?></td>
                        <td style="color: #4a4e69"><?php echo $mostrar['telefono'] ?></td>
                        <td style="color: #4a4e69;"><?php echo $mostrar['tipo'] ?></td>
                        <td style="color: #4a4e69"><?php echo $mostrar['estado'] ?></td>
                        <td>
                            <a name="" id="" class="btn" style="background-color: #c9ada7; color:white;" href="editar.php?txtID=<?php echo $mostrar['id']?>" role="button">Editar</a>
                            <a name="" id="" class="btn" style="background-color: #4a4e69; color: white" href="index.php?txtID=<?php echo $mostrar['id']?>" role="button">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
        
    </div>
</div>


    </div>
    </div>
<?php include('templates/pie.php'); ?>