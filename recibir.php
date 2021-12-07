<?php 
$persona=$_GET['nom'];
$am=$_GET['am'];
$email=$_GET['email'];
$edad=$_GET['edad'];
$origen=$_GET['paiso'];
$destino=$_GET['paisd'];
$giros=$_GET['vuelo'];
$asist=$_GET['asientos'];
$hr=$_GET['hr'];
$clas=$_GET['class'];
$day=$_GET['fl'];
$capital=$_GET['depo'];
echo "<center>";
echo "Espero que tenga un buen dia   <br  />";
echo "Cliente: $persona $am  <br    />";
echo "Nacido el  $edad <br  />";
echo "Contacto  con el cliente : $email <br    />";
echo "Usted viene de $origen  con direccion a $destino     <br     />";
echo "Su viaje seria de $giros con $asist asientos comprados <br    />";
echo "Con clase $clas en el horario de $hr .<br   />";
echo "El dia de $day <br    />";
echo "Con el monto sera cargado en $capital  <br   />";
echo "Que tenga un buen viaje <br   />";
echo "<img src=logoat.png width='400px' height='250px'>";
echo "</center>";

?>