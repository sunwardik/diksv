<?php
	require_once('templates/top.php');
	require_once('libs/functions.php');
if($_SESSION['id']){
	if($_POST){
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$data_rod=$_POST['data_rod'];
	if($_FILES){
		$tmp_name=$_FILES['picture']['tmp_name'];
		$name=$_FILES['picture']['name'];
		$dir=$_SERVER['DOCUMENT_ROOT']."/media/photos/";
		if(!is_dir($dir)){
			@mkdir($dir,0777);
		}
		if(is_uploaded_file($tmp_name)){
			move_uploaded_file($tmp_name,$dir.$name);
		}else{
			echo"Ошибка загрузки";
		}
/* 		echo"<pre>";
		print_r($_FILES);
		echo"</pre>"; */
	}else{
		$name="";
	}
	$query="INSERT INTO account VALUES (null,".$_SESSION['id'].",
												'$phone',
												'$address',
												'$data_rod',
												NOW(),
												NOW(),
												'$name')";
	insert($query, 'cabinet.php');
  
}
?>


 
  <form enctype='multipart/form-data' method='post' action='cabinet.php'>
  <div class="form-group">
    <label for="phone">Телефон</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
  </div>
  <div class="form-group">
    <label for="address">Адресс</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="address">
  </div>
  <div class="form-group">
    <label for="data_rod">Дата рождения</label>
    <input type="date" id="data_rod" name="data_rod">
  </div>
   <div class="form-group">
    <label for="picture">Аватар</label> 
	<input type="file" id="picture" name="picture">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php
} else{
	echo 'Ошибка входа';
}

	require_once('templates/bottom.php');
?>