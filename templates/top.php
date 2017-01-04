<?php
session_start();

	require_once('config/config.php');
	require_once('libs/functions.php');
	if($_SESSION['id']){
		$query="SELECT * FROM users WHERE id=".$_SESSION ['id'];
		$auth=mysqli_query($dbcon,$query);
		$auth_user=mysqli_fetch_array($auth);
	}
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
<script src='media/js/jquery-3.1.1.min.js'></script>
<script src='media/js/main.js'></script>
<body>
<header class='shapka'>
<?php
if($_SESSION['id']){
?>
	<a href='cabinet.php' class='btn btn-link my'>Кабинет 
<?=$auth_user['Login']?
	$auth_user['login']:'Пользователь';?>
	</a>
	<a href='logout.php' class='btn btn-link my'>Выход</a>
<?php
}else{
?>
<a href='reg.php'>Регистрация</a>
<a href='login.php'>Вход</a>
<?php
}
?>
<h1> Название сайта</h1>
<img src='media/img/logo.png'/>
<div class='empty'></div>
</header>
<nav class='topmenu'>
<a href='/' data-title='Главная'data-body='Описание' data-color='red'></a>
<a href='index.php?url=about' data-color='green'>О компании</a>
<a href='#'data-color='blue'>Новость</a>
<a href='#'data-color='tortoise'>Товары</a>
<a href='index.php?url=contact'>Контакты</a>

</nav>
<div class='mainblock'>
<div class='container1'>
<div class='col-md-2 menu'>
<?php
$obj_menu=mysqli_query($dbcon, "SELECT * FROM maintexts WHERE leftmenu='1'");
while($menu=mysqli_fetch_array($obj_menu)){
echo "<a href='index.php?url=".$menu['url']."' class='btn btn-default btn-block'>";
	echo $menu['name'];
	echo "</a>";
}
?>
</div>
 

<div class='col-md-8 maintext'>

