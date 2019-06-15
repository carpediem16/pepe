<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Total gasto por codigo</title>
<meta name="description" content="example-aggregate-functions-and-grouping-sum-with-group-by- php mysql examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Total gastos agrupado por codigo y Local :</h2>
<table class='table table-bordered'>
<tr>
<th>Codigo</th><th>Articulo</th><th>Suma de total costos de compras</th><th>local</th>
</tr>
<?php
$servername = "sql301.epizy.com";
$username = "epiz_24023342";
$password = "n0qwY4JPQ07";
$dbname = "epiz_24023342_admin";
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
foreach($dbh->query('SELECT codigo,articulo,SUM(monto) ,local
FROM egresos
GROUP BY codigo,local') as $row) {
echo "<tr>"; 
echo "<td>" . $row['codigo'] . "</td>";
echo "<td>" . $row['articulo'] . "</td>";
echo "<td>" . $row['SUM(monto)'] . "</td>";
echo "<td>" . $row['local'] . "</td>";
echo "</tr>"; 
}
?>
</tbody></table>
<br></div>
<a href="http://caminante16.epizy.com/menupepe22on.php">regresar al Inicio de Sistema</a><br />
</div>
</div>
</body>
</html>