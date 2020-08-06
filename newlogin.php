
<style type="text/css">
th{
    text-align: right;
}
</style>
<head>
<title>Login</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<h1>2020Sep@03065</h1> 
<table cellpadding ="5" cellspacing="10" align ="center">
    <form method="POST" action="validate.php">
        <tr><th>Username</th><td><input type="text" id="name" name="name"></td></tr>
        <tr><th>Password</th><td><input type="password" id="pass" name="password"></td></tr>
        <tr><td colspan="2" align ="center"><input type="checkbox" name="remember" value="1">Remember me</td></tr>
        <tr><td colspan="2" align ="center"><button type="submit" class="btn btn-success" name="login">Login</button></td></tr>
    </form>
</table>
</body>
<?php
if(isset($_COOKIE['name']) and isset($_COOKIE['pass'])){
$name = $_COOKIE['name'];
$_pass = $_COOKIE['pass'];
echo"<script>
document.getElementById('name').value = '$name';
document.getElementById('pass').value = '$pass';
</script>";
}
?>