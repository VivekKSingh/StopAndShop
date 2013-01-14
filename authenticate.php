<?php
ob_start();
session_start();
include "dbconnect.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

  // username and password sent from form 
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


$sql= "SELECT * FROM customer WHERE email='$username' and password='$password'";
echo $sql;
$result=mysql_query($sql);

//$custID = "select customerID from customer where email = '$username'
	//	  and password = '$password'";

$cid = mysql_fetch_row($result);

$count=mysql_num_rows($result);


if($count==1)

{


$_SESSION['custID'] = $cid[0];
$username = mysql_result ($result, 0, "username");
$_SESSION['username'] = $username;
//session_register("username");

//if(isset($_SESSION['custID']))
//{	
//	header("location:Gamer.php");
//}
//else
//{
//	header("location:home.php");
//}
    
	if(isset($_SESSION["link"]))
	{
		$link = $_SESSION["link"];
		header("location:".$link.".php");
	}
	else 
	{
		header("location:index.php");
	}
}
else {
//echo "Wrong Username or Password";
$_SESSION['error']= "Invalid Password, Please Try Again!!";

header('Location: logIn.php');

//header("location:logIn.php");
//$Error="Invalid Username or Password";
//header("location:logIn.php?Error=" . $Error);

}
error_reporting(0);
?>

</head>

<body>
</body>
</html>