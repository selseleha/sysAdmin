<html>
<head>
    <title>Login</title>
</head>

<h3 style="display: <?php
$var_value = $_GET['show'];

if(2==$var_value)echo 'none';

?>">incorrect</h3>
<p> Add another Article</p>
<form action="login.php" method = "get">
    <label for="username">Username</label> <input type="username" id="usename" name="username"><br /><br />
    <label for="password">Password:</label> <input type="text" id="password" name="password"><br /><br />
    <button type = "submit">Login</button>
</form>
</html>