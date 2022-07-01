<? require_once('./database/database.php');
session_start();

if(isset($_SESSION["user"])):?>
	<? require 'public/user_header.php'; ?>
<? else: ?>
		<? require 'public/header.php'; ?>
<? endif;?>
