<?php
session_start();
$text=$_SESSION['secure'];
$c=$_POST['captcha'];
if($text==$c)
{
	echo "vailid captcha";
}
else
{
	echo "invailid captcha";
}
?>