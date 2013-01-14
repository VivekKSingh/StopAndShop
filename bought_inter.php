<?php
ob_start();
session_start();
include "dbconnect.php";

if(isset($_SESSION["custID"]))
{
	$customerID = $_SESSION["custID"];
}
else
{
	echo '<SCRIPT language=javascript> alert("Please Login first!");</SCRIPT>';
	$_SESSION["link"] = "bought";
	Header('Refresh: 0;url=logIn.php');
}
$ship_address1 = trim($_POST["ship_1"]);
$ship_address2 = trim($_POST["ship_2"]);
$city = trim($_POST["city"]);;
$state = trim($_POST["state"]);
$zip = trim($_POST["zip"]);
$ship_address = trim($ship_address1.",".$ship_address2.",".$city.",".$state.",".$zip);
//echo $ship_address;
$order_query = "select MAX(orderID) AS max from orders";
$orderid_query = mysql_query ($order_query);
while($row = mysql_fetch_array($orderid_query)){
	$max_order = $row['max'];
	$orderid = $max_order+1;
}
$query_select = "select * from  shoppingcart where customerID  = ".$customerID;
$result = mysql_query ($query_select);
$num = mysql_numrows ($result);
for ($i = 0; $i < $num; $i++){
	$price = mysql_result ($result, $i, "price");
	$quantity =mysql_result ($result, $i, "quantity");
	$productID = mysql_result ($result, $i, "productID");

	$qzero=  "select quantity from product where productID = ".$productID;
	$result = mysql_query ($qzero);
	$num = mysql_numrows ($result);
	for ($i = 0; $i < $num; $i++){
		$quantityzero = mysql_result ($result, $i, "quantity");
	}
if($quantityzero != 0)
{	
mysql_query("INSERT INTO orders(customerID,productID,price,quantity,orderID,timestamp,shipaddress) VALUES ('$customerID','$productID','$price','$quantity','$orderid',NOW(),'$ship_address')");
$orderid = $orderid +1;
$query_delete = "Delete from shoppingcart where customerID =".$customerID;
mysql_query ($query_delete);
$query_reduce = "Update product set quantity=quantity-".$quantity. " where productID = ".$productID;
mysql_query ($query_reduce);
//update product set quantity = quantity -2 where productID = 18
}
}

header("location:bought.php");
//mysql_query("DELETE FROM shoppingcart");
?>