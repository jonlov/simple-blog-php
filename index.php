<?php
include("config.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My blog</title>
</head>

<body>
<h1>My blog</h1>
<hr />

<table width="754" border="1" align="center">
  <tr>
    <td width="170" height="26">Title:</td>
    <td width="289">Content:</td>
    <td width="273">Category:</td>
  </tr>
  </table>
  <?php 
if ($totEmp> 0) {
	while ($rowEmp = mysql_fetch_assoc($resEmp)) {
		?>
<table width="754" border="1" align="center">
  <tr>
    <td width="170" height="26"><a href="post.php?post=<?php 
		echo $rowEmp['id'];

?>"><?php 
		echo "<strong>".$rowEmp['title']."</strong><br>";

?>
    </a></td>
    <td width="289"><?php 
		echo $rowEmp['content']."<br>";
?></td>
    <td width="273"><?php 
		echo $rowEmp['category']."<br>";
?></td>
  </tr>
</table>
  <?php
	}
}
?>
<hr />
<h5><center>
  <h2>Created by Jonathan Lovera</h2>
</center></h5></body>
</html>