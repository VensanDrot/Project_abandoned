<? require 'functions/functions.php'; ?>
	<?
if(isset($_POST["reg"])){
	$login = trim(htmlspecialchars(strip_tags($_POST["login"])));
	$email = trim(htmlspecialchars(strip_tags($_POST["email"])));

	$email = filter_var($email, FILTER_VALIDATE_EMAIL); 

	$password = trim(htmlspecialchars(strip_tags($_POST["password"])));
	 
	if(!empty($login)){
		$last_login = $login;
	}else{
		$error_login = "Заполните поле login";
	}
	if(!empty($email)){
		$last_email = $email;
	}else{
		$erro_email = "Некорректно введен email";
	}
	if(!empty($password)){
		$last_password = md5($password);
	}else{
		$error_password = "Заполните поле password";
	}
	
	if(isset($last_login) && isset($last_email) && isset($last_password)){
	$insert = mysqli_query($connect, "INSERT INTO `users`(`login`, `password`, `email`,`status`) VALUES ('$last_login','$last_password','$last_email','user')");
	header("Location: ?");
	}

}

?>
	<main>
	<div class="container bg-footer">

		<form method="POST" class="col-footer">
			<h6 class="h6">Registration</h6>

		<?=(isset($error_login))?"<p style='color:red;'>$error_login</p>":""; ?>
		<input type="text" class="input" name="login" value="<?=$last_login?>" placeholder="login">

		<?=(isset($erro_email))?"<p style='color:red;'>$erro_email</p>":""; ?>
		<input type="text"  class="input" name="email" value="<?=$last_email?>" placeholder="Email">

		<?=(isset($error_password))?"<p style='color:red;'>$error_password</p>":""; ?>
		<input type="password"  class="input" name="password" placeholder="password">
	<input type="submit" name="reg" value="submit" class='btn'>
	</form>

	</div>	
	</main>
<? require 'public/footer.php'; ?>