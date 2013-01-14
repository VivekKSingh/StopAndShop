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
	$_SESSION["link"] = "orders";
	Header('Refresh: 0;url=logIn.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Electronix Store</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>

<div id="main_container">
	<div class="top_barlc">
    	
         
    </div>
	<div id="header">
        
        <div id="logo">
            <a href="index.php"><img src="images/logo.png" alt="" title="" border="0"  /></a>
	    </div>
        
        <div class="oferte_contentlc">
        	<div class="top_dividerlc"><img src="images/header_divider.png" alt="" title="" width="1" height="164" /></div>
        	<div class="ofertalc">
            
           		<div class="oferta_content">
                	<img src="images/hp.jpg" width="94" height="92" border="0" class="oferta_img" />
                	
                    <div class="oferta_detailslc">
                            <div class="oferta_titlelc">HP Pavilion ENVY 17</div>
                            <div class="oferta_textlc">
                            This series includes advanced graphics with ultra-fast GDDR5 video memory plus 2nd generation high-end Intel processors, all housed in a stunning, laser-etched aluminum body. And this is our only consumer laptop that supports up to three external displays.
                            </div>
                            
                    </div>
                </div>
                       

            </div>
            <div class="top_dividerlc"><img src="images/header_divider.png" alt="" title="" width="1" height="164" /></div>
        	
        </div> <!-- end of oferte_content-->
        

    </div>
    
   <div id="main_content"> 
   
            <div id="menu_tab">
            <div class="left_menu_cornerlc"></div>
                     <ul class="menulc">
                         <li><a href="main.php" class="nav1">  Home </a></li>
                         <li class="divider"></li>
                         <li><a href="index.php" class="nav2">Laptops</a></li>
                         <li class="divider"></li>

                         <li><a href="acc_mouse.php?acc_type=Earphone" class="nav3">Accessories</a></li>

                         <?php 
                            if(!isset($_SESSION["custID"]))
                            {
                         ?>
                         <li><a href="cre_account.php" class="nav4">New User?</a></li>
                         <li><a href="logIn.php" class="nav5">Sign In</a></li>
                         <?php }
                         else {
                         ?>
                        <li><a href='logout.php' class="nav5"> Logout </a></li>
                         <li><a href='#' class="nav4"> Welcome : <?php echo strtoupper($_SESSION["username"]);?> </a> <li>  
						 
                         <?php }?>                 
                         <li><a href="orders.php" class="nav6">My Orders</a></li>
                      </ul>

             <div class="right_menu_cornerlc"></div>
            </div><!-- end of menu tab -->
            
    <div class="crumb_navigationlc">
     <label><a href="index.php">Home</a></label> >
	  
	  <span class="currentlc">Orders</span> 
    
    </div> 
   
   
   <div class="center_contentlc">
   	
    
    <?php
//conect to Database
include "dbconnect.php";

//Set how many records per page
$numPerPage = 6;
//$totalResult = 0;
$totalPages = 0;
//Get the current pageIndex
$currentPage = 1;
$numRecord = 0;
//Build the SQL
$query = "";
if(isset($_POST["prev"]))
{
	//echo "ppppppppppppppppppppppppppppppppppppppppppppppppppppppppp";
	$currentPage = (int)($_POST["current"]);
	$totalPages = (int)($_POST["total"]);
	//Update page information
	if($currentPage==1)
	{
		$currentPage =1;
	}
	else 
	{
		$currentPage = $currentPage-1;
	}
	//Build DQL
	$query ="select orderID,o.price,o.quantity,timestamp,o.productID,name from orders o , product p where o.productID = p.productID and customerID='$customerID' ORDER BY timestamp DESC
	 LIMIT ".(($currentPage-1)*$numPerPage).",$numPerPage";
}
else
{
	if(isset($_POST["next"]))
	{
		//echo "nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn";
		$currentPage = (int)($_POST["current"]);
		$totalPages = (int)($_POST["total"]);
		//Updata page information
		if($currentPage==$totalPages)
		{
			$currentPage = $currentPage;
		}
		else 
		{
			$currentPage = $currentPage +1;
		}
		//Build DQL
		$query ="select orderID,o.price,o.quantity,timestamp,o.productID,name from orders o , product p where o.productID = p.productID and customerID='$customerID' ORDER BY timestamp DESC
		 LIMIT ".(($currentPage-1)*$numPerPage).",$numPerPage ";
	}
	else
	{
		
		$query ="select orderID,o.price,o.quantity,timestamp,o.productID,name from orders o , product p where o.productID = p.productID and customerID='$customerID' ORDER BY timestamp DESC";
		//Get the result
		$result = mysql_query($query);
		//Get the total number of records in the result
		$num = mysql_numrows($result);
		$numRecord = $num;
		if($num<$numPerPage)
		{
			$totalPages  =1;
		}
		if(($num%$numPerPage) != 0)
		{
			$totalPages = (int)($num/$numPerPage) +1;
		}
		else
		{
			$totalPages = (int)($num/$numPerPage);
		}
		$currentPage = 1;
		$query ="select orderID,o.price,o.quantity,timestamp,o.productID,name from orders o , product p where o.productID = p.productID and customerID='$customerID' ORDER BY timestamp DESC LIMIT 0,$numPerPage";
	}
}


//Get the result
$result = mysql_query ($query);
//Get the total number of records in the result
$num = mysql_numrows ($result);
if(isset($_POST["next"]))
{
	$numRecord = (int)($_POST["totalRecord"]);
}
if(isset($_POST["prev"]))
{
	$numRecord = (int)($_POST["totalRecord"]);
}
	//Display all laptops in a for loop
	?>
		<b style="font-size:20px;">Your Orders <?php echo $numRecord;?> items</b>
		
		<div class="prod_box_cartlc">
        	<div class="top_prod_box_cartlc"></div>
		<?php
			for ($i = 0; $i < $num; $i++) {
			  $orderid = mysql_result ($result, $i, "orderID");
			  $price = mysql_result ($result, $i, "price");
			  $quantity =mysql_result ($result, $i, "quantity");
			  $time = mysql_result ($result, $i, "timestamp");
			  $productID = mysql_result ($result, $i, "productID");
			  $name = mysql_result ($result, $i, "name");
			  $imagepath = mysql_result ($result, $i, "imagepath");
		?>
            <div class="center_prod_box_cartlc">
                 <div class="product_img_biglc">
                 <a href="detailliucan.php"><img src=<?php echo $imagepath;?> alt="" title="" border="0" /></a>
                 </div>
                     <div class="details_big_orderlc">

                         <div class="product_title_biglc"><?php echo $name;?></div>

						<table>
                        <tr>
   
                        <td align="left"> <span class="bluelc">Order Number</span></td>
                        <td align="left"><?php echo $orderid ?></td>
                        </tr>
                        <tr>
                        <td align="left">	<span class="bluelc">Order placed</span></td>
						<td align="left"><?php echo $time ?></td>
						</tr>
						
						<tr>	
						<td align="left"><span class="bluelc">Item Price:</span></td>
						<td align="left"><?php echo $price?></td>
						</tr>
						<!--   
						<tr>	
						<td align="left"><span class="bluelc">Product Id</span></td>
						<td align="left"><?php echo $productID?></td>
						</tr>
						-->
						<tr>	
						<td align="left"><span class="bluelc">Quantity</span>	</td>
						<td align="left"><?php echo $quantity?></td>
						</tr>
						
						</table>
                     </div> 
					 
					 <div class="details_big_right">
					 <table>
					 <tr><td>

					 <a href="order_detail.php?orderid=<?php echo $orderid;?>" class="order_detaillc"></a>	

					 </td></tr>
					 <tr><td>
					 <a href="review.php?prodid=<?php echo $productID;?>" class="reviewlc"></a>	
					 </td></tr>
					 </table>
                 </div>
					 <?php }?>
            <div class="bottom_prod_box_cartlc"></div> 
        </div>
		
<!--		<div class="prod_box_cartlc">
        	<div class="top_prod_box_cartlc"></div>
            <div class="center_prod_box_cartlc">
                 <div class="product_img_biglc">
                 <a href="details.php"><img src="images/laptop.png" alt="" title="" border="0" /></a>
                 </div>
                     <div class="details_big_orderlc">
                         <div class="product_title_biglc">Sony Active Style Headphones (MDRAS50G)</div>
						<table>
                        <tr>
   
                        <td align="left"> <span class="bluelc">Order Number</span></td>
                        <td align="left"> 105-2498535-5467637</td>
                        </tr>
                        <tr>
                        <td align="left">	<span class="bluelc">Order Placed:</span></td>
						<td align="left"> October 26,2011</td>
						</tr>
						<tr>	
						<td align="left"><span class="bluelc">Recipient:</span>	</td>
						<td align="left">Can Liu</td>
						</tr>
						<tr>	
						<td align="left"><span class="bluelc">Order Total:</span>	</td>
						<td align="left">$29.99</td>
						</tr>
						
						</table>
                     </div> 
					 
					 <div class="details_big_right">
					 <table>
					 <tr><td>
					 <a href="checkout.php" class="order_detaillc"></a>	
					 </td></tr>
					 <tr><td>
					 <a href="checkout.php" class="track_packagelc"></a>	
					 </td></tr>
					 <tr><td>
					 <a href="checkout.php" class="reviewlc"></a>	
					 </td></tr>
					 </table>
                 </div>
            <div class="bottom_prod_box_cartlc"></div> 
        </div>
    <!-- A row for paginations -->
      <?php 
      if($numRecord==0){}
      else{  ?>
      <div class="pagi_rowlc">
		<form name="myform" method="post" action="<?php $_SERVER['PHP_SELF']?>"  >
		
		
		<input name="next" class="pagi_nextlc" type="submit" value="" />
		<input name="prev" class="pagi_prevlc" type="submit"  value="" />
	    <input name="total"  type="hidden" value=<?php echo $totalPages;?> />
	    <input name="current" type="hidden" value=<?php echo $currentPage;?> />
	    <input name="totalRecord" type="hidden" value=<?php echo $numRecord;?> />
		<label class="pagilc"> Viewing <?php echo $currentPage;?> of <?php echo $totalPages;?> Page(s) </label>
		</form>
      </div>  <?php }?>
    <!-- And of row for paginations -->
   </div><!-- end of center content -->
  
   
   <div class="footerlc">
   

        <div class="left_footerlc">
		<table>
		<tr><td align="center"><span class="blue-buttomlc">About Us</span></td></tr>
		<tr><td align="center" ><a href="infor.php">Our Goals</a></td></tr>
		<tr><td align="center"><a  href="infor.php">The members</a></td></tr>
		<tr><td align="center"><a href="infor.php">Our Moto</a></td></tr>
		<tr><td align="center"><a href="infor.php">Our Links</a></td></tr>
		<tr><td></td></tr>
		</table>
        </div>
        
        <div class="center_footerlc">
		<table>
		<tr><td align="center"><span class="blue-buttomlc">Help Information</span></td></tr>
		<tr><td align="center"><a  href="infor.php">Payment Options</a></td></tr>
		<tr><td align="center"><a href="infor.php">Returning an item</a></td></tr>
		<tr><td align="center"><a href="infor.php">Polocies </a></td></tr>
		<tr><td align="center"><a href="infor.php">Q&As </a></td></tr>
		</table>
        </div>
        
        <div class="right_footerlc">
        <table>
		<tr><td align="center"><span class="blue-buttomlc">Customers</span></td></tr>
		<tr><td align="center"><a href="shopping_cart.php">Shopping Cart</a></td></tr>
		<tr><td align="center"><a href="orders.php">Orders</a></td></tr>
		<tr><td align="center"><a href="feedback.php">Feedback</a></td></tr>
		<tr><td align="center"><a href="changepsw.php">Change password</a><td></tr>
		<tr><td></td></tr>
		</table>
        </div>   
   
   </div>                 

   <div class="buttom-logolc">
   <table>
   <tr><td align="center"><img src="images/logo1.png" alt="" title="" width="170" height="49"/></td></tr>
   <tr><td align="center">All Rights Reserved 2011</td></tr>
   <tr><td align="center">Group3 Indiana University</td></tr>
   </table>
   </div>

</div>
<!-- end of main_container -->
</body>
</html>