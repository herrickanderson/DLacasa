<?php



$servername = "localhost";
$database = "bd_restaurant";
$username = "root";
$password = "Adhara2018";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
$nombre= $_POST ['nombres'];
$apellidos= $_POST ['apellidos'];
$correo= $_POST ['email'];
$fechanac= $_POST ['fechanacimiento'];
$sql = "insert into usuario (apellidos,clave,direccion,dni,f_nac,id_tipo,id_usuario,nombres,telefono,usuario) values('$apellidos','0000','malvinas','70083941','$fechanac','T001','U000000001','$nombre','958897726','0000')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header("Location: index.html");
die();
die();
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>


