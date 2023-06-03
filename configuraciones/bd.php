<?php


$server = "localhost";
$user = "root";
$pass = "";
$db = "aplicacion";


$conexion = new mysqli($server, $user, $pass, $db);

if($conexion->connect_errno){
    die("Conexion Fallida" . $conexion->connect_errno);
} else {
    //echo "conectado";
}   



/* 
class BD{

    public static $instancia=null;
    public static function crearInstancia(){

        if( !isset(self::$instancia) ){

            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO("mysql:host=localhost;dbname=aplicacion", "root", '', $opciones);
            echo "conectado...";
        }
        return self::$instancia;
    }
}   */
 

?>