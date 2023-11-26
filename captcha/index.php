<?php
//campletely automated public turing test to tell computer and humman apart.
session_start();
$_SESSION['secure']=rand(1111,9999);
?>
<img src="generate.php"/><br/>
<form action="c1code.php" method="post">
Type the value what u see<br/>
<input type="text" name="captcha"/>
<input type="submit">
</form>