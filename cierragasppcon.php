<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: block;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}
html {
    font-family: "Lucida Sans", sans-serif;
}
.header {
    background-color: #9933cc;
    color: #ffffff;
    padding: 15px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color: #33b5e5;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #0099cc;
}
.aside {
    background-color: #33b5e5;
    padding: 15px;
    color: #ffffff;
    text-align: center;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.footer {
    background-color: #0099cc;
    color: #ffffff;
    text-align: center;
    font-size: 12px;
    padding: 15px;
}
/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;
    }
}
body {
    background-color: lightgreen;
}

@media only screen and (max-width: 500px) {
    body {
        background-color: lightblue;
    }
}
</style>
</head>

<body>



<?php 

//mysql_connect("localhost", "admin", "kimi1601") or die(mysql_error());
//mysql_select_db("nutserv") or die(mysql_error());

$servername = "sql301.epizy.com";
$username = "epiz_24023342";
$password = "n0qwY4JPQ07";
$dbname = "epiz_24023342_admin";

//$servername = "fdb12.biz.nf";
//$username = "1958783_cuenta";
//$password = "Carpediem#4321";
//$dbname = "1958783_cuenta";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$today = date('Y-m-d');
$today1 = date('m');
$today2 = date('d');

if ($today2>=17)
$dames=$today1+1;


//$sql = "DROP TABLE compras5";
//$result = $conn->query($sql);



$sql = "update egresos set flag=0 ";
$result = $conn->query($sql);

   echo "Gracias! Hemos cerrado tus datos.\n"; 
$data_p = mysqli_query($conn, "SELECT * FROM egresos where flag=1 order by id desc limit 10" ) or die(mysql_error()); 
echo '<table border=\'1\'>';
echo '<tr> <th>codigo</th> <th>Nombre</th><th>fecha</th>
<th>habitacion</th><th>monto</th><th>local</th><th>No</th></tr>';
while($info = mysqli_fetch_array( $data_p )) 
{ 
echo "<tr><td>"; 
Print $info['codigo']; 
echo "</td><td>"; 
Print $info['articulo']; 
echo "</td><td>"; 
Print $info['fecha']; 
echo "</td><td><p align='right'>"; 
Print $info['habitacion']; 
echo "</td><td><p align='right'>"; 
Print $info['monto']; 
echo "</td><td><p align='right'>"; 
Print $info['local']; 
echo "</td><td>"; 
Print $info['id'];

echo "</td></tr>"; 
//echo "<br>";
} 
echo "<p>";
echo "</table>";

?>




</body>
</html>


 