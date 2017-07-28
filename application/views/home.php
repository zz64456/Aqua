<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to AQUAA!</h1>

	<div id="body">
		<form action="go_purchase" method="POST">
			<input type="submit" name="" value="查看進貨">
		</form>
		<form action="go_storage" method="POST">
			<input type="submit" name="" value="查看存貨">
		</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>