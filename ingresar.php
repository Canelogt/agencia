<?php
//conexion
$server = "localhost";
$user = "root";
$pass = "";
$db = "login";
$conn = mysqli_connect($server,$user,$pass,$db);
if (!$conn) {
    die("La conexion fallo: ". mysqli_connect_error());
}else {

    $nombre=$_POST['nombre'];
    $pas=$_POST['pass'];
    session_start();
    $_SESSION['usuario']=$nombre;

    $conexion=mysqli_connect("localhost","root","","login");
    $consulta= "SELECT * FROM usuarios WHERE nombre='$nombre' AND pass ='$pass'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_num_rows($resultado);

    if($filas){
        header('Location: error.php');
    }else{
        header('Location: prueba.php');
        //session_destroy();
       
    } }
?>





