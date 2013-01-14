<?php
ob_start();
session_start();
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
<?php
  if(isset($_SESSION["custID"]))
  {
     $customerID = $_SESSION["custID"];
  }
  else 
  {
     header('Location: logIn.php');
  }
  $_SESSION["ratecmt"] = 1;
  $prodID=$_GET['prodid'];
  include "dbconnect.php";
  $query2 = "select * from rate where productID = '$prodID' and customerID = '$customerID' ";
  //'$prodID','$customerID','$rate','Good Product')";
  $result=mysql_query($query2);
  $count=mysql_num_rows($result);
if($count==0)
{
?>
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
    Navigation: <span class="currentlc">Home</span>
	            <label href="#">>Laptop</label>
    
    </div> 
   
    <div class="center_contentlc">
   	<div class="center_title_barlc">Please Rate This Product</div>
    
    	<div class="prod_box_biglc">
        	<div class="top_prod_box_biglc"></div>
            <div class="center_prod_box_biglc">            
                 
                 <div class="product_img_biglc">
                 
                 <?php 
                 $query ="SELECT * FROM $_TABLE_ORDER INNER JOIN $_TABLE_NAME2 ON $_TABLE_ORDER.productId = $_TABLE_NAME2.productId and $_TABLE_ORDER.productId=$prodID";
                 $result = mysql_query ($query);
                 $num = mysql_numrows ($result);
                 for ($i = 0; $i < $num; $i++) {
                 	
                 	$name= mysql_result ($result, $i, "name");
                 	$detail = mysql_result ($result, $i, "description");
                 	$orderNumber= mysql_result ($result, $i, "orderID");
                 	$address= mysql_result ($result, $i, "shipaddress");
                 	$price= mysql_result ($result, $i, "price");
                 	$imagepath = mysql_result ($result, $i, "imagepath");
                 }
                 ?>
                 <a href="javascript:popImage('<?php echo $imagepath;?>','Some Title')" title="header=[Zoom] body=[&nbsp;] fade=[on]"><img src=<?php echo $imagepath;?> alt="" title="" border="0" /></a>
                 </div>
                     <div class="details_big_boxlc">
                         <div class="product_title_biglc"><?php echo $detail;?></div>
							<ul class="star-rating">  
							<li><a href="review_cfm.php?rate=1&prodID=<?php echo $prodID;?>" title="Rate this 1 star out of 5" class="one-star">1</a></li>   
							<li><a href="review_cfm.php?rate=2&prodID=<?php echo $prodID;?>" title="Rate this 2 stars out of 5" class="two-stars">2</a></li>  
							<li><a  href="review_cfm.php?rate=3&prodID=<?php echo $prodID;?>" title="Rate this 3 stars out of 5" class="three-stars">3</a></li>  
							<li><a  href="review_cfm.php?rate=4&prodID=<?php echo $prodID;?>&<?php echo $_SESSION["ratecmt"];?>" title="Rate this 4 stars out of 5" class="four-stars">4</a></li> 
							<li><a  href="review_cfm.php?rate=5&prodID=<?php echo $prodID;?>"title="Rate this 5 stars out of 5" class="five-stars">5</a></li>
							</ul>	
                     </div>  
				 
				</div>
            <div class="bottom_prod_box_biglc"></div>                                
        </div>
     <div class="specificationslc">
                          
                         
   <center> <span class="bluelc">Your Purchase Detail</span>
   <table>
<tr>
  <td align="left"> <span class="bluelc">Product Name:</span></td>
<td align="left"><?php echo $name;?></td>
</tr>
<tr>
  <td align="left"> <span class="bluelc">Order Number:</span></td>
<td align="left"><?php echo $orderNumber;?></td>
</tr>
<tr>
  <td align="left"> <span class="bluelc">Shipping Address:</span></td>
<td align="left"><?php echo $address;?></td>
</tr>
<tr>
  <td align="left"> <span class="bluelc">Item Subtotal:</span></td>
<td align="left"><?php echo $price;?></td>
</tr>


 </table>
<center>
 </div>
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

<?php }
else 
{ ?>
	
	<div class="product_title_big"><center><br><br><br><br><br>You have already rated this product!<br>Link to orders page in few seconds...</center></div>
<?php 

	Header('Refresh: 3;url=orders.php');
}?>