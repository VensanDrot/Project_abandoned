<?
session_start();
$a = "hello";
$_SESSION["a"] = $a;
echo $_SESSION["a"];
?>