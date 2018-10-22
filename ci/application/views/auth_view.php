<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <title> ECWM604</title>
</head>
<body>
<h3>Register or Login</h3>

<form action="http://localhost:3030/ci/index.php/auth/login" method="POST">
    <input type="submit" value='Login'>
</form>

<form action="http://localhost:3030/ci/index.php/auth/register" method="POST">
    <input type="submit" value='Register'>
</form>

</body>
</html>