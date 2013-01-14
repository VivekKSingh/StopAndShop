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
<script>
PositionX = 100;
PositionY = 100;


defaultWidth  = 500;
defaultHeight = 500;
var AutoClose = true;

if (parseInt(navigator.appVersion.charAt(0))>=4){
var isNN=(navigator.appName=="Netscape")?1:0;
var isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}
var optNN='scrollbars=no,width='+defaultWidth+',height='+defaultHeight+',left='+PositionX+',top='+PositionY;
var optIE='scrollbars=no,width=150,height=100,left='+PositionX+',top='+PositionY;
function popImage(imageURL,imageTitle){
if (isNN){imgWin=window.open('about:blank','',optNN);}
if (isIE){imgWin=window.open('about:blank','',optIE);}
with (imgWin.document){
writeln('<html><head><title>Loading...</title><style>body{margin:0px;}</style>');writeln('<sc'+'ript>');
writeln('var isNN,isIE;');writeln('if (parseInt(navigator.appVersion.charAt(0))>=4){');
writeln('isNN=(navigator.appName=="Netscape")?1:0;');writeln('isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}');
writeln('function reSizeToImage(){');writeln('if (isIE){');writeln('window.resizeTo(300,300);');
writeln('width=300-(document.body.clientWidth-document.images[0].width);');
writeln('height=300-(document.body.clientHeight-document.images[0].height);');
writeln('window.resizeTo(width,height);}');writeln('if (isNN){');
writeln('window.innerWidth=document.images["George"].width;');writeln('window.innerHeight=document.images["George"].height;}}');
writeln('function doTitle(){document.title="'+imageTitle+'";}');writeln('</sc'+'ript>');
if (!AutoClose) writeln('</head><body bgcolor=ffffff scroll="no" onload="reSizeToImage();doTitle();self.focus()">')
else writeln('</head><body bgcolor=ffffff scroll="no" onload="reSizeToImage();doTitle();self.focus()" onblur="self.close()">');
writeln('<img name="George" src='+imageURL+' style="display:block"></body></html>');
close();
}}

</script>
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
  <div id="main_container">
    <div class="top_barlc">    </div>
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

                         <li><a href="acc_mouse.php" class="nav3">Accessories</a></li>
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
    Navigation: <label href="#">Home</label>
	            ><span class="currentlc"> Laptop</span>
    </div>
      
  	<div class="left_contentlc">
	  <div class="title_boxlc">Categories</div>
	  <ul class="left_menulc">
	    <li class="odd"><a>Accessorie</a></li> 
		<li class="even"><a href="acc_mouse.php">Earphones</a></li>
		<li class="even"><a href="acc_power.php">Battery/Power</a></li>
		<li class="even"><a href="acc_cable.php">Cable/Connector</a></li>
		<li class="even"><a href="acc_case.php">Carrying Cases</a></li>
		<li class="even"><a href="acc_mouse.php">Keyboard/Mouse</a></li>
		<li class="even"><a href="acc_mem.php">Memory/Storage</a></li>
	  </ul>
	</div> 
	<!-- end of left content -->
<?php
   include "dbconnect.php";
   if(isset($_GET['prodid']))
   {
   	$id = $_GET['prodid'];
   }
   else
   {
   	$id = $_SESSION["productID"];
   }
//= "select * from , where $_TABLE_NAME.productId=product.productId and $_TABLE_NAME.productId=3";
$query ="SELECT * FROM $_TABLE_ACC INNER JOIN $_TABLE_NAME2 ON $_TABLE_ACC.productId = $_TABLE_NAME2.productId and $_TABLE_ACC.productId= $id";
//echo $query;
$result = mysql_query ($query);
$num = mysql_numrows ($result);

	
	for ($i = 0; $i < $num; $i++) {
	$name= mysql_result ($result, $i, "name");
	
	
	$detail= mysql_result ($result, $i, "description");
	$brand=mysql_result ($result, $i, "brand");
	$instock= mysql_result ($result, $i, "quantity");
	$imagepath = mysql_result ($result, $i, "imagepath");
	$price= mysql_result ($result, $i, "price");
	$prodid=mysql_result ($result, $i, "productId");
	
	$query2 = "SELECT avg( rating ) as rating FROM rate WHERE productID = $id";
	$result = mysql_query ($query2);
	$num = mysql_numrows ($result);
	$rate = 0;
	for ($i = 0; $i < $num; $i++)
	{
		$rating= mysql_result ($result, $i, "rating");
		$rate = round($rating);
	}
	
?>
      
      <div class="center_content">

   	<div class="center_title_bar">Sony Active Style Headphones (MDRAS50G)</div>

    	<div class="prod_box_big">
          <div class="top_prod_box_big"></div>
	  <div class="center_prod_box_big">            
            <div class="product_img_biglc">
                 <a href="javascript:popImage('<?php echo $imagepath;?>','Some Title')" title="header=[Zoom] body=[&nbsp;] fade=[on]"><img src="src=<?php echo $imagepath;?>" alt="" title="" border="0" /></a>
              
                 </div>
                     <div class="details_big_boxlc">
                         <div class="product_title_biglc"><?php echo $detail;?></div>
                        
                         <div class="prod_price_biglc"><span class="pricelc"><?php echo "$".$price;?></span></div>
                        <!-- display the rating information here!!!! -->
                        
                        <!-- Rating End -->

						
                        <a href="addcart_acc.php?prodid=<?php echo $prodid;?>" class="addtocartlc">add to cart</a>

                         
                     </div>   
          </div><!--end of center_prod_box_big-->
          <div class="bottom_prod_box_big"></div>                                
        </div><!--end of prod_box_big-->

	<div class="specifications">
	  <center>
	    <span class="blue">Specifications</span>

	    <table>
	      <tr>
		 <td align="left"><span class="bluelc">Average Rating</span></td>
   <?php
      if($rate==5)
	  { 
   ?>
	    <td align="left"><div class="rating-fivelc"></td>
   <?php
      }
   ?>
   <?php
      if($rate==4)
	  { 
   ?>
	    <td align="left"><div class="rating-fourlc"></td>
   <?php
      }
   ?>
   <?php
      if($rate==3)
	  { 
   ?>
	    <td align="left"><div class="rating-threelc"></td>
   <?php
      }
   ?>
   <?php
      if($rate==2)
	  { 
   ?>
	    <td align="left"><div class="rating-twolc"></td>
   <?php
      }
   ?>
   <?php
      if($rate==1)
	  { 
   ?>
	    <td align="left"><div class="rating-onelc"></td>
   <?php
      }
   ?>
   <?php
      if($rate==0)
	  { 
   ?>
	    <td align="left"><div class="rating-zerolc"></td>
   <?php
      }
   ?>
	      </tr>

	      <tr>
		<td align="left"><span  class="blue">Description</span></td>
		<td align="left"><?php echo $detail;?></td>
	      </tr>

	      <tr>
		<td align="left"><span class="blue">Brand</span></td>
		<td align="left"><?php echo $brand;?></td>
	      </tr>

	      <tr>
		<td align="left"> <span class="blue">In Stock</span></td>
		<td align="left"><?php echo $instock;?></td>
	      </tr>

	     
	    </table>
	  </center>
	</div>
      </div><!-- end of center content -->
      <?php }?>
     <div class="right_contentlc">
     
     
   		 <!-- Begin of shopping cart -->
   		<div class="shopping_cartlc">
        	<div class="cart_titlelc">Shopping cart</div>
            
             <?php 
   				if(isset($_SESSION["custID"]))
   				{
   					$customerID = $_SESSION["custID"];
   					//The customer is retrieved from Kailash's session management.
   					$query = "select sum(price*quantity) as pricetotal, count(*) as numtotal from shoppingcart where customerID = '$customerID' ";
   					$result = mysql_query ($query);
   					$pricetotal = 0;
   					$numr = mysql_numrows ($result);
   					$numtotal = 0;
   					for ($i = 0; $i < $numr; $i++)
   					{
   						//$price = mysql_result ($result, $i, "price");
   						$pricetotal =mysql_result ($result, $i, "pricetotal");
   						$numtotal = mysql_result ($result, $i, "numtotal");
   					}
   					?>
   					 <div class="cart_detailslc">
            		<?php echo $numtotal;?> items <br />
            		<span class="border_cartlc"></span>
            		Total: <span class="pricelc"><?php echo $pricetotal;?>$</span>
           			 </div>
  				<?php } //End if
   				else
   				{   ?>
   	                <div class="cart_detailslc">Login to View 
	                <br />Shopping Cart
	    			</div>
  				<?php }//End Else
   			?>
            <div class="cart_iconlc"><a href="shopping_cart.php"  title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" title="" width="48" height="48" border="0" /></a>
            </div>

        </div>
    <!-- end of shopping cart -->
   
   
     <div class="title_boxlc">Adds</div>  
     <div class="border_boxlc">
         <div class="product_titlelc"><a href="details.php">Motorola 156 MX-VL</a></div>
         <div class="product_imglc"><a href="details.php"><img src="images/p2.gif" alt="" title="" border="0" /></a></div>
         <div class="prod_pricelc"><span class="pricelc">270$</span></div>
     </div>  
     
     <div class="banner_addslc">
     
     <a href="#"><img src="images/bann1.jpg" alt="" title="" border="0" /></a>
     </div>        
     
   </div>
      
    </div><!-- end of main content -->
    
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
   
   </div><!--end of footer-->
   
    <div class="buttom-logolc">
   <table>
   <tr><td align="center"><img src="images/logo1.png" alt="" title="" width="163" height="55"/></td></tr>
   <tr><td align="center">All Rights Reserved 2011</td></tr>
   <tr><td align="center">Group3 Indiana University</td></tr>
   </table>
   </div>
  </div> <!-- end of main_container -->
</body>
</html>