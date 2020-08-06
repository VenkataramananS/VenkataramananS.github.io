<?php

$myname = "LTI";
$mypass = "123";

if(isset($_POST['login'])){
    $name = $_POST['name'];
    $pass = $_POST['password'];
    
    if($name == $myname and $pass == $mypass){
        $rem =$_POST['remember'];
        if(isset($_POST['remember'])){
            setcookie('name',$name,time()+60*60*24);
            setcookie('pass',$pass,time()+60*60*24);
        }
        session_start();
        $_SESSION['name']=$name;
        header("location : welcome.php");
             
    }
    else{
        echo "Invalid Username or Password <br> Click here to login again <a href = 'newlogin.php'>Try Again</a>";
    }}
    else{
        header("location : newlogin.php");
    }
?>