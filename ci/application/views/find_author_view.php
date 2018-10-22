<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Find Author details</title>
</head>
<body>
<h2>Enter Author ID<h2>
<form action="http://localhost/ci/index.php/find_author_controller/GetAuthor" method="POST">
Author ID : <input type="text" name="username">
<input type="submit">
</form>
</body>
</html>