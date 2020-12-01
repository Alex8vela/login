<?php

$dbhost ="sql309.epizy.com";
$dbbuser ="epiz_27359729";
$dbpass ="azpsRmojqglEM";
$dbname ="epiz_27359729_LOGIN";



$conn = mysqli_connect($db,$dbbuser,$dbpass, $dbname);
if (! $conn){
    die("No hay conexion:". mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."'and password ='".$pass."'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {

    //header("location: pagina.html)
    echo "BIENVENIDO" .$nombre;

}
else if ($nr == 0 ){
    echo " NO INGRESO ";
}













?>