<?php 
ob_start();
session_start();
include "dbconnect.php";
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
if(isset($_SESSION['custID']))
{
  $customerID = $_SESSION['custID'];
}
else 
{

  $_SESSION["link"] = "shopping_cart";
  echo '<SCRIPT language=javascript> alert("Please Login first!");</SCRIPT>';
  Header('Refresh: 0;url=logIn.php');

}

//for insert

//end for insert
//$query = "select price,name from $_TABLE_NAME2 where productId= $_GET[prodid] ";
if(isset($_POST['delbutton']))
{
foreach ($_POST['delbutton'] as $key => $value)
{
		{
		   echo $key; 
		   //mysql_query ("DELETE FROM shoppingcart WHERE customerID=". $customerID ."and productID =".$prodID);
		   $query="DELETE FROM shoppingcart WHERE customerID = ".$customerID." and productID =".$key;
		   mysql_query ($query);
		}
}
}
if(isset($_POST['updatebutton']))
{
foreach ($_POST['updatebutton'] as $key => $value)
{
		{
		    
		   //mysql_query ("DELETE FROM shoppingcart WHERE customerID=". $customerID ."and productID =".$prodID);
		  $query="Update shoppingcart set quantity=". $_POST["quantity"]." WHERE customerID =". $customerID." and productID =".$key;
		   mysql_query ($query);
		}
}
		
}

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
	            <label href="#">Laptop</label>
    
    </div> 
   
   
   <div class="left_contentlc">
   
 
     <div class="title_boxlc">Today's Deal</div>  
     <div class="border_boxlc">
         <div class="product_titlelc"><a href="#">Motorola 156 MX-VL</a></div>
         <div class="product_imglc"><a href="#"><img src="images/laptop.png" alt="" title="" border="0" /></a></div>
         <div class="prod_pricelc"> <span class="pricelc">270$</span></div>
     </div>  
      
    
 <div class="banner_addslc">
     
     <a href="#"><img src="images/bann2.jpg" alt="" title="" border="0" /></a>
     </div> 
 <div class="banner_addslc">
     
     <a href="#"><img src="images/bann2.jpg" alt="" title="" border="0" /></a>
     </div> 	 
        
<?php // paginations***************************************************Paginations
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
	$query ="select * from shoppingcart inner join product where product.productID = shoppingcart.productID 
			          and customerID = '$customerID'  LIMIT ".(($currentPage-1)*$numPerPage).",$numPerPage";
}
else
{
	if(isset($_POST["next"]))
	{
		
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
		$query ="select * from shoppingcart inner join product where product.productID = shoppingcart.productID 
			          and customerID = '$customerID'  LIMIT ".(($currentPage-1)*$numPerPage).",$numPerPage";
	}
	else
	{
		
		$query ="select * from shoppingcart inner join product where product.productID = shoppingcart.productID 
			          and customerID = '$customerID' ";
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
		$query ="select * from shoppingcart inner join product where product.productID = shoppingcart.productID 
			          and customerID = '$customerID'  LIMIT 0,$numPerPage";
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
}  ?>
   </div><!-- end of left content -->
   
   <div class="center_contentlc">
   	
    <b style="font-size:20px;">Shopping Cart</b>
    
		
		<?php
			$query = "select * from shoppingcart inner join product where product.productID = shoppingcart.productID 
			          and customerID = '$customerID' ";//do a join here to get product name
			for ($i = 0; $i < $num; $i++) {
			$prodID=mysql_result($result, $i,"productID");
			$price = mysql_result ($result, $i, "price");
			$quantity =mysql_result ($result, $i, "quantity");
			$name =mysql_result ($result, $i, "name");
			$imagepath = mysql_result ($result, $i, "imagepath");
        ?>
		<div class="prod_box_biglc">
        	<div class="top_prod_box_biglc"></div>
        	<div class="center_prod_box_biglc">            
                 
                 <div class="product_img_biglc">
                 <a href="detailliucan.php"><img src=<?php echo $imagepath;?> alt="" title="" border="0" /></a>
                 </div>
                     <div class="details_big_boxlc">
                         <div class="product_title_biglc"><?php echo $name;?></div>
                        
                         <div class="prod_price_biglc"> Price : <span class="pricelc"><?php echo "$".$price;?></span>
						 
						 </div>

						 <form method="post" action="shopping_cart.php">

						 <div > Quantity :  <input style= "width:40px;"type="text" name="quantity" value="<?php echo $quantity;?>"/>
						 
						 </div>
						

						<input name="delbutton[<?php echo $prodID; ?>]" type="submit" value="Delete" />
						<input name="updatebutton[<?php echo $prodID; ?>]" type="submit" value="Update" />
						</form>
						<!--  <a href="shopping_cart.php" class="detailslc">Delete</a> -->
											 
						 
                     </div> 
                 </div>
            <div class="bottom_prod_box_biglc"></div> 
        </div>
        <?php }?>
		<!--  
		<div class="prod_box_biglc">
        	<div class="top_prod_box_biglc"></div>
            <div class="center_prod_box_biglc">            
                 
                 <div class="product_img_biglc">
                 <a href="detailliucan.php"><img src="images/headp4.jpg" alt="" title="" border="0" /></a>
                 </div>
                     <div class="details_big_boxlc">
                         <div class="product_title_biglc">Sony Active Style Headphones (MDRAS50G)</div>
                        
                         <div class="prod_price_biglc"> Price : <span class="pricelc">$34.99</span>
						 
						 </div>
						 <div > Quantity :  <input style= "width:40px;"type="text" name="quantity" value="1"/>
						 
						 </div>
						
						<a href="edit.php" class="detailslc">Delete</a> 
											 
						 
                     </div> 
                 </div>
            <div class="bottom_prod_box_biglc"></div> 
        </div>-->
     
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
   <div class="right_contentlc">
   
   
   		 <!-- Begin of shopping cart -->
   		<div class="shopping_cartlonglc">
        	<div class="cart_titlelc">Shopping cart</div>
            
             <?php 
   				if(isset($_SESSION["custID"]))
   				{
   					$customerID = $_SESSION["custID"];
   					//The customer is retrieved from Kailash's session management.
   					$query = "select sum(quantity) as sumquantity,sum(price*quantity) as pricetotal,count(*) as numtotal from shoppingcart where customerID = '$customerID' ";
   					$result = mysql_query ($query);
   					$pricetotal = 0;
   					$numr = mysql_numrows ($result);
   					$numtotal = 0;
   					for ($i = 0; $i < $numr; $i++)
   					{
   						//$price = mysql_result ($result, $i, "price");
   						$quantity=mysql_result ($result, $i, "sumquantity");
   						$pricetotal =mysql_result ($result, $i, "pricetotal");
						$numtotal=mysql_result($result,$i,"numtotal");
   						
   					}
   					?>
   					 <div class="cart_detailslc">
            		<?php echo $quantity;?> items <br />
            		<span class="border_cartlc"></span>
            		Total: <span class="pricelc"><?php echo $pricetotal;?>$</span>
           			 </div>
  				<?php } //End if
   				else
   				{   ?>
   	                <div class="cart_detailslc">Login to View your
	                <br />shopping cart
	    			</div>
  				<?php }//End Else
   			?>
   			<?php 
   			  if($numtotal==0)
			  
   			  {} else{
   			?>
           <div class="cart_iconlc"><a href="checkout.php?purchase=0" title="header=[View cart] body=[&nbsp;] fade=[on]"><img src="images/check.png" alt="" title="" width="180" height="35" border="0" /></a>
            </div>  <?php }?>
        </div>
    <!-- end of shopping cart -->
   
   
     <div class="title_boxlc">Ads</div>  
	  <div class="border_boxlc">
	    <div class="product_titlelc"><a href="#">Motorola 156 MX-VL</a></div>
	    <div class="product_imglc"><a href="#"><img src="images/laptop.png" alt="" title="" border="0" /></a></div>
	    <div class="prod_pricelc"><span class="pricelc">270$</span></div>
	  </div>
     
     <div class="banner_addslc">
     
     <a href="#"><img src="images/bann1.jpg" alt="" title="" border="0" /></a>
     </div>        
     
   </div><!-- end of right content -->   
   
   
   
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
</div>
<!-- end of main_container -->
</body>
</html>