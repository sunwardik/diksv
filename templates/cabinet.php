<?php
	require_once('templates/top.php');
if($_SESSION['id']){
?>

  <form>
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
    <p class="help-block">Example block-level help text here.</p>
  </div>
   <div class="form-group">
    <label for="avatar">Аватар</label> 
	<input type="picture" id="avatar" name="avatar">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php
} else{
	echo 'Ошибка входа';
}

	require_once('templates/bottom.php');
?>