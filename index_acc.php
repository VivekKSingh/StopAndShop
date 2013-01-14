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
    <div id="main_container">
      <div class="top_barlc"></div>

      <div id="header">
        <div id="logo"><a href="index.html"><img src="images/logohead.jpg" alt="" title="" border="0"  /></a></div>

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
      </div><!--end of header-->
      
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
                         <li><a href='logout.php' class="nav5">Welcome:<?php echo $_SESSION["username"];?>   .Log off</a><li>  
                         <?php }?>                 
                         <li><a href="orders.php" class="nav6">My Orders</a></li>
                      </ul>

             <div class="right_menu_cornerlc"></div>
            </div><!-- end of menu tab -->

	<div class="crumb_navigationlc">Navigation: 
	  <span class="currentlc">Home</span>
	  <label href="#">> Accessory</label>
	</div><!--end of navigation bar-->


 	<div class="left_contentlc">
	  <div class="title_boxlc">Categories</div>
	  <ul class="left_menulc">
	    <li class="odd"><a>Accessorie</a> 
		<li class="even"><a href="abc-av.html">Audio/Video</a></li>
		<li class="even"><a href="abc-bp.html">Battery/Power</a></li>
		<li class="even"><a href="abc-cc.html">Cable/Connector</a></li>
		<li class="even"><a href="abc-case.html">Carrying Cases</a></li>
		<li class="even"><a href="abc-km.html">Keyboard/Mouse</a></li>
		<li class="even"><a href="abc-ms.html">Memory/Storage</a></li>
	    </li>
	    <li class="odd"><a>Laptops</a></li>
		<li class="even"><a href="index.html">All</a></li>
	    </li>
	  </ul>
	</div> 	<!-- end of left content -->

	
	<div class="center_content">
   	  <div class="center_title_bar">Accessories</div>
	  <div class="prod_box">
            <div class="top_prod_box"></div>
            <div class="center_prod_box">            
              <div class="product_title"><a href="details.html">name1</a></div>
              <div class="product_img"><a href="details.html"><img src="images/earphones.jpg" alt="" width="113" height="125" border="0" title="" /></a></div>
              
            </div>
            <div class="bottom_prod_box"></div>      
          </div>
	  
     	  <div class="prod_box">
            <div class="top_prod_box"></div>
            <div class="center_prod_box">            
              <div class="product_title"><a href="details.html">name2</a></div>
              <div class="product_img"><a href="details.html"><img src="images/flashcard.jpg" alt="" width="125" height="125" border="0" title="" /></a></div>
            </div>
            <div class="bottom_prod_box"></div>             
          </div>
	  
     	  <div class="prod_box">
            <div class="top_prod_box"></div>
            <div class="center_prod_box">            
              <div class="product_title"><a href="details.html">name3</a></div>
              <div class="product_img"><a href="details.html"><img src="images/headp1.jpg" alt="" width="125" height="125" border="0" /></a></div>
            </div>
            <div class="bottom_prod_box"></div>
          </div>
   	  <div class="prod_box">
   	    <div class="top_prod_box"></div>
            <div class="center_prod_box">
              <div class="product_title"><a href="details.html">name4</a></div>
              <div class="product_img"><a href="details.html"><img src="images/M2Mcable.jpg" alt="" title="" border="0" /></a></div>
              
	    </div>
	    <div class="bottom_prod_box"></div>             
	  </div>
	  
	  <div class="prod_box">
    	    <div class="top_prod_box"></div>
            <div class="center_prod_box">
              <div class="product_title"><a href="details.html">name5</a></div>
              <div class="product_img"><a href="details.html"><img src="images/mice.jpg" alt="" title="" border="0" /></a></div>
             
	    </div>
	    <div class="bottom_prod_box"></div>             
	  </div> 
	  <div class="prod_box">
    	    <div class="top_prod_box"></div>
            <div class="center_prod_box">
              <div class="product_title"><a href="details.html">name6</a></div>
              <div class="product_img"><a href="details.html"><img src="images/pendriv.jpg" alt="" width="131" height="127" border="0" title="" /></a></div>
             
	    </div>
	    <div class="bottom_prod_box"></div>             
	  </div>
	</div><!-- end of center content -->
	
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
   
   
     <div class="title_boxlc">Ads</div>  
     <div class="border_boxlc">
         <div class="product_titlelc"><a href="detailliucan.html">Motorola 156 MX-VL</a></div>
         <div class="product_imglc"><a href="detailliucan.html"><img src="images/laptop.png" alt="" title="" border="0" /></a></div>
         <div class="prod_pricelc"><span class="pricelc">270$</span></div>
     </div>
     <div class="banner_addslc">
     
     <a href="#"><img src="images/bann1.jpg" alt="" title="" border="0" /></a>
     </div>        
     
   </div><!-- end of right content --> 
  
      </div><!-- end of main content -->
      
 <div class="footerlc">
   

        <div class="left_footerlc">
		<table>
		<tr><td align="center"><span class="blue-buttomlc">About Us</span></td></tr>
		<tr><td align="center" ><a href="infor.html">Our Goals</a></td></tr>
		<tr><td align="center"><a href="infor.html">The members</a></td></tr>
		<tr><td align="center"><a href="infor.html">Our Moto</a></td></tr>
		<tr><td align="center"><a href="infor.html">Our Links</a></td></tr>
		<tr><td></td></tr>
		</table>
        </div>
        
        <div class="center_footerlc">
		<table>
		<tr><td align="center"><span class="blue-buttomlc">Help Information</span></td></tr>
		<tr><td align="center"><a  href="infor.html">Payment Options</a></td></tr>
		<tr><td align="center"><a href="infor.html">Returning an item</a></td></tr>
		<tr><td align="center"><a href="infor.html">Polocies </a></td></tr>
		<tr><td align="center"><a href="infor.html">Q&As </a></td></tr>
		</table>
        </div>
        
        <div class="right_footerlc">
        <table>
		<tr><td align="center"><span class="blue-buttomlc">Customers</span></td></tr>
		<tr><td align="center"><a href="shopping_cart.html">Shopping Cart</a></td></tr>
		<tr><td align="center"><a href="orders.html">Orders</a></td></tr>
		<tr><td align="center"><a href="feedback.html">Feedback</a></td></tr>
		<tr><td align="center"><a href="changepsw.php">Change password</a><td></tr>
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