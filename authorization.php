<? require_once('./functions/functions.php'); ?>
	<?
if(isset($_POST["auth"])){
	$login = trim(htmlspecialchars(strip_tags($_POST["login"])));
	
	$password = trim(htmlspecialchars(strip_tags($_POST["password"])));
	 
	if(!empty($login)){
		$last_login = $login;
	}else{
		$error_login = "Заполните поле login";
	}
	
	if(!empty($password)){
		$last_password = md5($password);
	}else{
		$error_password = "Заполните поле password";
	}
	
	if(isset($last_login) && isset($last_password)){
		$q = mysqli_query($connect,"SELECT * FROM `users` WHERE `login` = '$last_login' AND `password` = '$last_password'");
		$row = mysqli_fetch_assoc($q);
		if(isset($row["login"])){
			$_SESSION["user"] = $row["login"];
			header("Location: /");
		}  
	}

}

?>
	<main>
	<div class="container bg-footer">

		<form method="POST" class="col-footer">
			<h6 class="h6">Authorization</h6>

		<?=(isset($error_login))?"<p style='color:red;'>$error_login</p>":""; ?>
		<input type="text" class="input" name="login" value="<?=$last_login?>" placeholder="login">

		<?=(isset($error_password))?"<p style='color:red;'>$error_password</p>":""; ?>
		<input type="password"  class="input" name="password" placeholder="password">
	<input type="submit" name="auth" value="submit" class='btn'>
	</form>

	</div>	
	</main>
<? require 'public/footer.php'; ?>