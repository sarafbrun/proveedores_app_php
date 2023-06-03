<?php include('templates/cabecera.php'); 

include('configuraciones/bd.php');

if($_POST){
    $_POST;
}


?>


<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
          <div class="card" style="background-color:#f2e9e4">

            <div class="card-header">
              Editar proveedor
            </div>

            <div class="card-body">
              
              <form action="" enctype="multipart/form-data" method="POST">

              <?php
                $txtID=(isset($_GET['txtID']) )?$_GET['txtID']: "";
                $sql="SELECT * FROM proveedores WHERE id = '$txtID'";
                $result=mysqli_query($conexion,$sql);
                
                while($mostrar=mysqli_fetch_array($result)){
                ?>   

                <div class="mb-3" >
                  <label class="form-label">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="<?php echo $mostrar['nombre'] ?>">
                </div>

                <div class="mb-3">
                  <label class="form-label">Correo electrónico</label>
                  <input type="text"
                    class="form-control" name="email" id="" aria-describedby="helpId" value="<?php echo $mostrar['email'] ?>">
                </div>

                <div class="mb-3">
                  <label class="form-label">Teléfono</label>
                  <input type="text"
                    class="form-control" name="telefono" id="" value="<?php echo $mostrar['telefono'] ?>">
                </div>

                <div class="mb-3">
                  <label class="form-label">Tipo</label>
                    <input type="radio" name="tipo" value="hotel">Hotel</option>
                    <input type="radio"  name="tipo" value="pista">Pista</option>
                    <input type="radio" name="tipo" value="complemento">Complemento</option>
                </div>

                <div class="mb-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="estado" value="">
                        <label class="form-check-label">
                          Activo
                        </label>
                      </div>
                </div>

                <?php
                }
                ?>

                <button type="submit" class="btn" style="background-color: #4a4e69; color: white" href="">Actualizar</button>
                <a class="btn" style="border-color: #4a4e69; color: #4a4e69" href="index.php">Cancelar</a>

              </form>
            





            </div>

            <div class="card-footer text-muted"></div>
          </div>
        </div>
    </div>
</div>




<?php include('templates/pie.php'); ?>


  