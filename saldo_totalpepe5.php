<?php
$hostname="localhost";
$username="root";
$password="";
$db = "admin";
$conn=new mysqli($hostname,$username,$password,$db);

$sql = mysqli_query($conn,"SELECT SUM(monto) as total FROM egresos where flag=1");
$row = mysqli_fetch_array($sql);
$sum = $row['total'];
echo "Total gastos: ";
echo $sum;
echo "<br>";
$sql = mysqli_query($conn,"SELECT SUM(monto) as total FROM clientes  where flag=1");
$row = mysqli_fetch_array($sql);
$sum1 = $row['total'];
echo "Total ingresos: ";
echo $sum1;
echo "<br>";
$saldo=$sum1-$sum;
echo "saldo: ";
echo $saldo;
echo "<br>";
echo "<br>";?>
<a href="http://localhost/clinica/menupepe22.php">regresar al Inicio de Sistema</a><br />



