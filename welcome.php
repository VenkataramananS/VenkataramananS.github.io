<?php
session_start();
echo  "Welcome back , <br><br>" . $_SESSION['name'];
echo "<a href='newlogin.php'>Logout</a>";
?>