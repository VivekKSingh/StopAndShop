<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>

<?php

include "dbconnect.php";


$email_to=$_POST['email'];
$tbl_name=customer;


$sql="select password from $tbl_name where email='$email_to'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){
//$rows=mysql_fetch_array($result);

$row = mysql_fetch_row($result);
$your_password=$row[0];



echo 'inside count ';

echo $email_to;


//$your_password=$rows['password'];

//$to="kailashnagarkoti@gmail.com";

$subject="Your Stop and Shop password";

$header= "stopandshop@noreply.com";

$messages= "Hi, your Stop and Shop password is: \r\n";
$messages.="$your_password \r\n";

$sentmail = mail($email_to,$subject,$messages,$header);

}

else {
echo "No such email address found!";
}

if($sentmail){
echo "Your password has been sent to your email address";
echo "\nPlease wait for few seconds...you will be automatically redirected to our Home Page";
header( "refresh:5;url=http://www.cs.indiana.edu/cgi-pub/knagarko/stopandshop/new/home.php");
echo "\n\nIf it takes longer, please click this link  ";
echo '<a href = "http://www.cs.indiana.edu/cgi-pub/knagarko/stopandshop/new/home.php">http://www.cs.indiana.edu/cgi-pub/knagarko/stopandshop/new/home.php</a>';
;
}
else {
echo "Could not send password to your email address";
}

?>


</head>

<body>
</body>
</html>