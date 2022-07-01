<?
require_once ('./database/database.php');
session_start();
if (!isset($_SESSION["user"])) {
	header("Location: authorization.php");
}
else {
	$login = $_SESSION["user"];
	$q =mysqli_query ($connect," SELECT `status` FROM `users` WHERE `login` = '$login' ");
	$row = mysqli_fetch_assoc($q);
	if ($row["status"] != "administrator") {
		header ("Location: /");
	}
	else {
		if (isset($_POST["file"])) {
			$title = trim(htmlspecialchars(strip_tags($_POST["title"])));
			$disc =trim(htmlspecialchars(strip_tags($_POST["disc"])));
			$im = $_POST["image"];
			if (!empty($im)){
			$fim = $_POST["image"]["type"];
}
			if (!empty($title)){
				$ftitel=$title;
			}
			else {
				$error1 = "Заполните поле title";
			}
			if (!empty($disc)) {
				$fdisc= $disc;
			}
			else {
				$error2= "Заполните поле Описание";
			}
			if ($fim == "image/png" || $fim == "image/jpeg") {
				$tmp = $_FILES["image"]["tmp_name"];
				move_uploaded_file($, destination)
				$ffim= $
			}
		}
		if (isset($fdisc) && isset($ftitel)) {
			$insert = mysqli_query($connect, "INSERT INTO `news`(`title`, `discription`, `image`) VALUES ('$ftitel','$fdisc','$')");
	header("Location: ?");
		}
	}
}

?>
<form 	method="POST" enctype="multipart/form-data">
	<input type="text" name="title"><br>
	<textarea name="disc"></textarea><br>
	<input type="file" name="image"> <br>
	<input type="submit" name="file">
</form>