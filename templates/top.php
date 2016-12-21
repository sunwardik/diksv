<?php
	require_once('config/config.php');
?>
<!Doctype html>
<html>
<head>
<meta charset='utf-8'>
<title> Название сайта </title>
<meta name='description' content='1-2-3 предложения'>
<meta name='keywords' content='выражения через запятую'>
<link href='media/bootstrap/css/bootstrap.min.css' rel='stylesheet'/>
<link type='text/css' rel='stylesheet' href='media/css/style.css'/>

<body>
<header class='shapka'>
<h1> Название сайта</h1>
<img src='media/img/logo.png'/>
</header>
<nav class='topmenu'>
<a href='index.php?url=index'>Главная</a>
<a href='index.php?url=about'>О компании</a>
<a href='#'>Новость</a>
<a href='#'>Товары</a>
<a href='index.php?url=contact'>Контакты</a>

</nav>
<div class='mainblock'>
<div class='container1'>
<div class='col-md-2'>
<?php
$obj_menu=mysqli_query($dbcon, "SELECT * FROM maintexts WHERE leftmenu='1'");
while($menu=mysqli_fetch_array($obj_menu)){
echo "<a href='index.php?url=".$menu['url']."'>";
	echo $menu['name'];
	echo "</a>";
}
?>
</div>
<h3>Перечень</h3>

<div class='col-md-8'>

