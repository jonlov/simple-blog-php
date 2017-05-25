<?php
$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("blog", $conexion);

$queEmp = "SELECT * FROM post ORDER BY 'id' ASC";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
?>