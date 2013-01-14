<?php
ob_start();
include "dbconnect.php";
//Build the SQL
$query = "";
$email = "zero";
if(isset($_POST["email1"]))
{
	$email = $_POST["email1"];
	echo $email;
}
$qr = "select * from customer where email='$email' ";
$result=mysql_query($qr);
$count=mysql_num_rows($result);
if($count!=0)
{
	echo '<SCRIPT language=javascript> alert("Your account has been created!")</SCRIPT>';
	Header('Refresh: 0;url=logIn.php');
}
else{

if(isset($_POST["submit"]))
{
	//Get the values from the form
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$str1 = $_POST["str1"];
	$str2 = $_POST["str2"];
	$city = $_POST["city"];
	$state =  $_POST["state"];
	$zip = $_POST["zip"];
	$address = $str1.','.$str2.','.$city.','.$state.','.$zip;
	$gender = $_POST["gender"];
	$email = $_POST["email1"];  //Validation not done!!!!
	$username = $_POST["username"];  
	$password = $_POST["password1"];  //Validation not done!!!!
	//Do the input validation!!!!!
	//some cannot be  null and some must match twice
	$query2 = "INSERT INTO customer (fname,lname,address,gender,email,username,password) VALUES ('$fname','$lname','$address', '$gender','$email', '$username','$password' )";
	mysql_query($query2);
	header("location:logIn.php?create=1");
}}
?>
