<?php
$servername = "sql301.epizy.com";
$username = "epiz_24023342";
$password = "n0qwY4JPQ07";
$dbname = "epiz_24023342_admin";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = mysqli_query($conn,"SELECT SUM(monto) as total FROM egresos");
$row = mysqli_fetch_array($sql);
$sum = $row['total'];
echo "Total gastos: ";
echo $sum;
echo "<br>";
$sql = mysqli_query($conn,"SELECT SUM(monto) as total FROM clientes");
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
<a href="http://caminante16.epizy.com/menupepe22on.php">regresar al Inicio de Sistema</a><br />



