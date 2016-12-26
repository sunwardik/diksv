<?php require_once('templates/top.php');
if($_POST){
	$name=$_POST['login'];
	$pass=$_POST['pass'];
$query="SELECT*FROM users WHERE login='$name' AND pass='$pass'";
$cut=mysqli_query($dbcon,$query);
if (!$cut){
	exit('Ошибка запроса');
}
$user=mysqli_fetch_array($cut);
if($user['id']){
	$_SESSION['id']=$user['id'];
	$query="Update users SET lastvisit=NOW() WHERE id=".$SESSION ['id'];
?>
<script>
location.href='index.php';
</script>
<?php	
}

} else{
	echo"Нет такого пользователя";
}

?>
<form action="login.php" method="POST">	
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" id="login" placeholder="login" name='login'>
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" placeholder="Password" name='pass'>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php require_once('templates/bottom.php')
?>