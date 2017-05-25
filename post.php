<?php
include("connect.php");
$postid = (int)trim($_GET['post']);
$sql = "SELECT posts.ID as `id`,
posts.title as `title`,
posts.content as `content`,
posts.category as `category`

FROM posts 

INNER JOIN users 

ON users.ID = posts.username

WHERE posts.ID = $postid
ORDER BY date DESC";
$result = mysql_query($sql);
$postdata = array();
while($row=mysql_fetch_array($result)){
	$postdata = $row;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php echo htmlentities($postdata['title']); ?>
</body>
</html>