<?php require_once('templates/top.php');
$query="SELECT*FROM account ORDER BY id DESC";
$result=mysqli_query($dbcon,$query);
if(!$result){
	exit('Ошибка');
}
while($row=mysqli_fetch_array($result)){
	//echo "<pre>";
	//print_r($row);
	//echo "</pre>";

?>
<div class='col-md-4 col-sm-4'>


<?php
if($row['avatar']){
	$pic='media/photos/'.$row['avatar'];
}else{
	$pic='media/no_photo.jpg';
}
?>
<img src='<?=$pic?>' class='pica' width="200px"/>
<div class='now'>
	<a href='#' data-id="<?=$row['id'];?>" class='link'>
		<?=$row['phone'];?>
		</a>
</div>
</div>
<?php
}
require_once('templates/bottom.php');