<?php
$_POST['id'];
require_once('config/config.php');
require_once('libs/functions.php');
$id=(int)$_POST['id'];
$query="SELECT * FROM account WHERE id=".$id;
$row=selectone($query);
echo"<h2>".$row['phone']."</h2>";


?>