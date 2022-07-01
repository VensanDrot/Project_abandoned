<?
if(isset($_POST["send"])){
	$name = trim(htmlspecialchars(strip_tags($_POST["name"])));
	$email = trim(htmlspecialchars(strip_tags($_POST["email"])));

	$email = filter_var($email, FILTER_VALIDATE_EMAIL); 

	$subject = trim(htmlspecialchars(strip_tags($_POST["subject"])));
	$message = trim(htmlspecialchars(strip_tags($_POST["message"]))); 
	if(!empty($name)){
		$last_name = $name;
	}else{
		$error_name = "Заполните поле Name";
	}
	if(!empty($email)){
		$last_email = $email;
	}else{
		$error_email = "Некорректно введен email";
	}
	if(!empty($subject)){
		$last_subject = $subject;
	}else{
		$error_subject = "Заполните поле subject";
	}
	if(!empty($message)){
		$last_message = $message;
	}else{
		$error_message = "Заполните поле message";
	}
	if(isset($last_name) && isset($last_email) && isset($last_subject) && isset($last_message)){
	$insert = mysqli_query($connect, "INSERT INTO `messagies`(`name`, `email`, `subject`,`message`) VALUES ('$last_name','$last_email','$last_subject','$last_message')");
	header("Location: ?");
	}

}

?>
<footer>
					<div class="bg-footer">
						<div class="container">
							<div class="col-footer">
								
							<h6 class="h6">About us</h6>
							<img class="footer_img" src="public/img/fotter.png">
							<p class="under_img">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. In fringilla massa ut nisi ullamcorper pellentesque. Quisque non luctus sem. Nullam non magna vel nisi posuere bibendum vitae sed dui.</p>
							<a class="link bluearrow" href="#">read more</a>
							</div>
							<div class="col-footer">
									<h6 class="h6">quick links</h6>
									<ul class="link-list">
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Sit amet</a></li>
										<li><a href="#">Consectetur adipisicing elit</a></li>
										<li><a href="#">Sed do eiusmod</a></li> 
										<li><a href="#">Tempor incididunt ut</a></li>
										<li><a href="#">Onsectetur onsectetur</a></li>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Sit amet</a></li>
									</ul>
							</div>
							<div class="col-footer">
									<h6 class="h6">latest blog posts</h6>
									<div class="post">
									<div class="post-inf">
									<h6 class='post-title'>Post title</h6>
									<span class="italic">Admin, domainname.com
								<br>	Friday, 6th April 2000</span>
									</div>
									<p class="post-desc">Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet.</p>
									<a href="#" class="link bluearrow">read more</a>
									</div>
										<div class="post">
									<div class="post-inf">
									<h6 class='post-title'>Post title</h6>
									<span class="italic">Admin, domainname.com<br>
								Friday, 6th April 2000</span>
									</div>
									<p class="post-desc">Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet.</p>
									<a href="#" class="link bluearrow">read more</a>
									</div>
							</div>
							<form method="POST" class="col-footer">
									<h6 class="h6">contact us</h6>
<?=(isset($error_name))?"<p style='color:red;'>$error_name</p>":""; ?>
<input type="text" class="input" name="name" value="<?=$last_name?>" placeholder="Name">

<?=(isset($error_email))?"<p style='color:red;'>$error_email</p>":""; ?>
<input type="text"  class="input" name="email" value="<?=$last_email?>" placeholder="Email">

<?=(isset($error_subject))?"<p style='color:red;'>$error_subject</p>":""; ?>
<input type="text"  class="input" name="subject" value="<?=$last_subject?>" placeholder="Subject">

<?=(isset($error_message))?"<p style='color:red;'>$error_message</p>":""; ?>
							<textarea name="message" class="message input" placeholder="message"><?=(isset($last_message))?$last_message:'';?></textarea>
									
									<input type="submit" name="send" value="submit" class='btn'>
							</form>
						</div>
					</div>
					<div class="bg_copyright">
						<? include 'includes/copyright.php';?>
					</div>
				</footer>

<script src="public/js/jquery-3.2.1.js"></script>
<script src="public/js/slick/slick.js"></script>
<script src="public/js/script.js"></script>
</body>
</html>