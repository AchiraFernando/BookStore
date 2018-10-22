<html>
<head>
    <title>Login for ECWM604</title>
</head>
<body>
<h3>Login for the ECWM604 Website</h3>
<form action="http://localhost:3030/ci/index.php/auth/authenticate" method="POST">
    Username : <input type="text" name='uname' length="10" size="10">  <br>
    Password: <input type="password" name='pword' length="15" size="30"> <br>
    <input type="submit" value='Login'>
</form>

<span style="color: red"><?php echo $errmsg ?></span> <br>

</body>
</html>