

<?php

include('conexion.php');

$con=mysqli_connect($servidor,$usuario,$password)or die("Problemas al conectar");
mysqli_select_db($con, $db)or die("Problemas al conectar la bd");

if (isset($_POST['nombre']) and !empty($_POST['nombre']) and
isset($_POST['email']) and !empty($_POST['email']) and
isset($_POST['celular']) and !empty($_POST['celular']) and
isset($_POST['mensaje']) and !empty($_POST['mensaje'])) {


mysqli_query($con, "INSERT INTO mensaje(nombre,email,celular,mensaje) VALUES ('$_POST[nombre]','$_POST[email]', '$_POST[celular]', '$_POST[mensaje]')");
echo "datos insertados";
}else {
  echo "Problemas al insertar datos";
}
 
?>