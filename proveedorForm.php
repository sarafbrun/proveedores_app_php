<?php include('templates/cabecera.php'); 

include('configuraciones/bd.php');

if($_POST){

  
  //Recepciono valores formulario
  $nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
  $email=(isset($_POST['email']))?$_POST['email']:"";
  $telefono=(isset($_POST['telefono']))?$_POST['telefono']:"";
  $tipo=(isset($_POST['tipo']))?$_POST['tipo']:"";
  $estado=(isset($_POST['estado']))?$_POST['estado']:"";

  /* $sentencia=$conexion->prepare("INSERT INTO `proveedores` (`id`, `nombre`, `email`, `telefono`, `tipo`, `estado`) VALUES (NULL, :nombre, :email, :telefono, :tipo, :estado);"); */
 

  $con=mysqli_connect('localhost','root','','aplicacion') or die('Error conexion servidor');
  $sql= "INSERT INTO proveedores 
  VALUES (null, '".$_POST["nombre"]."', '".$_POST["email"]."', '".$_POST["telefono"]."', '".$_POST["tipo"]."', '".$_POST["estado"]."')";
  $resultado=mysqli_query($con,$sql) or die ('Error en el query database');
  mysqli_close($con); 
/* 
  $sentencia->bindParam(":nombre",$nombre);
  $sentencia->bindParam(":email",$email);
  $sentencia->bindParam(":telefono",$telefono);
  $sentencia->bindParam(":tipo",$tipo);
  $sentencia->bindParam(":estado",$estado);

  $sentencia->execute();
   */
}

?>


<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
          <div class="card" style="background-color:#f2e9e4">

            <div class="card-header">
              Crear proveedor
            </div>

            <div class="card-body">
              
              <form action="" enctype="multipart/form-data" method="POST">

                <div class="mb-3" >
                  <label class="form-label">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                  <label class="form-label">Correo electrónico</label>
                  <input type="text"
                    class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                  <label class="form-label">Teléfono</label>
                  <input type="text"
                    class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="">
                </div>

                <div class="mb-3">
                  <label class="form-label">Tipo</label>
                    <input type="radio" name="tipo" value="hotel">Hotel</option>
                    <input type="radio"  name="tipo" value="pista">Pista</option>
                    <input type="radio" name="tipo" value="complemento">Complemento</option>
                </div>

                <div class="mb-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="estado">
                        <label class="form-check-label">
                          Activo
                        </label>
                      </div>
                    </div>

                <button type="submit" class="btn" style="background-color: #4a4e69; color: white">Agregar</button>
                <a class="btn" style="border-color: #4a4e69; color: #4a4e69" href="index.php">Cancelar</a>

              </form>






            </div>

            <div class="card-footer text-muted"></div>
          </div>
        </div>
    </div>
</div>




<?php include('templates/pie.php'); ?>


  