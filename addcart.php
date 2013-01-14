<?php 
ob_start();
session_start();
include "dbconnect.php";
if(isset($_SESSION['custID']))
{
	$customerID = $_SESSION['custID'];
	
	if(isset($_GET['prodid']) || isset($_SESSION["productID"]))
	{
		if(isset($_GET['prodid']))
		{
			$prodID = $_GET['prodid'];
		}
		else
		{
			$_SESSION["productID"];
		}
		//$customerID = $_SESSION['custID'];
		$querycheck = "select * from shoppingcart where productId= $prodID and customerID = $customerID ";
		$result = mysql_query ($querycheck);
		$num = mysql_numrows ($result);
		echo $num;
		if($num != 0)
		{
			$queryupdate = "update shoppingcart set quantity= quantity+1 where customerID = $customerID and productID = $prodID";
			mysql_query($queryupdate);
	
		}
		else
		{
			$query = "select price,name from $_TABLE_NAME2 where productId= $_GET[prodid] ";
			$result = mysql_query ($query);
			$num = mysql_numrows ($result);
	
			for ($i = 0; $i < $num; $i++) {
				$price = mysql_result ($result, $i, "price");
				$name= mysql_result ($result, $i, "name");
	
			}
	
			mysql_query ("INSERT INTO shoppingcart (customerID,productID,price,quantity) VALUES ($customerID,'".$_GET['prodid']."',".$price.",1)");
		}
		header("location:shopping_cart.php");//?prodid=$prodID");
	}
	
}
else
{
	if(isset($_GET['prodid']))
	{
		$_SESSION["productID"] = $_GET["prodid"];
		$_SESSION["link"] = "detailliucan";
		echo "hei";
	}
	else
	{
		$_SESSION["link"] = "detailliucan";
	}
	echo '<SCRIPT language=javascript> alert("Please Login first!");</SCRIPT>';
	Header('Refresh: 0;url=logIn.php');
}




?>