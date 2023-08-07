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
   
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
   

    $sql = "INSERT INTO usuarios ( nombre, apellido, correo, pass)
    VALUE ('". $nombre ."','". $apellido ."','". $correo ."','". $pass ."')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    }else {
        echo "Error: " . mysqli_error($conn);
    }  
}
?>