<?php 
ob_start();
session_start();
if(isset($_SESSION["custID"]))
{
   $customerID = $_SESSION["custID"];
}
else
{
	echo '<SCRIPT language=javascript> alert("Please Login first!");</SCRIPT>';
	$_SESSION["link"] = "checkout";
	Header('Refresh: 0;url=logIn.php');
}
/*
if(isset($_GET['purchase']))
{
	if($_GET['purchase'] == 0)
	{
	//$_SESSION["link"] = "shopping_cart";
	echo '<SCRIPT language=javascript> alert("This page has expired!");</SCRIPT>';
	Header('Refresh: 0;url=shopping_cart.php');
	}
	
}*/
include "dbconnect.php";
$query = "select * from shoppingcart where customerID = $customerID";
$result = mysql_query($query);
$num = mysql_numrows ($result);
if($num == 0)
{
	echo '<SCRIPT language=javascript> alert("This page has expired!");</SCRIPT>';
	//["link"] = "checkout";
	Header('Refresh: 0;url=index.php');
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
<script type ="text/javascript" src="js/checkout_validation.js"></script>


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
    Navigation: <span class="currentlc">Home</span>
	            <label href="#">>Laptop</label>
    
    </div> 
    
   
 
    <form name="form_checkout" method="post" action="bought_inter.php" onSubmit="return validate_checkout()"> 
   
   <input name="purchase" type="hidden" value=1>
   <div class="center_content">
   	<div class="center_title_bar">Please enter your credit card information</div>
    
    	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
              	<div class="contact_form">
                           
                    <div class="form_row">
                    <label class="contact"><strong>First Name:</strong></label>
                    <input type="text" name = "fname" class="contact_input" value="" onKeyUp="  document.getElementById('fname_error').innerHTML=''"/>
                    </div>
                    <div><label id = "fname_error" style="color:#FF0000"></label></div>  
                    
                    <div class="form_row">
                    <label class="contact"><strong>Last Name:</strong></label>
                    <input type="text" name = "lname" class="contact_input" value=""onKeyUp="  document.getElementById('lname_error').innerHTML=''"/>
                    </div>
				    <div><label id = "lname_error" style="color:#FF0000"></label></div>  
	

                    <div class="form_row">
                    <label class="contact"><strong>Credit Card Number</strong></label>
                    <input type="text" name="ccnumber" class="contact_input" value="" onKeyUp="  document.getElementById('email1_error').innerHTML=''"/>
                    </div>
                  <div><label id = "ccnumber_error" style="color:#FF0000"></label></div>  


                    <div class="form_row">
                    <label class="contact"><strong>Security code</strong></label>
                    <input type="text" name="securitynumber" class="contact_input" value="" onKeyUp="  document.getElementById('security_error').innerHTML=''"/>
					</div> 
					<div><label id = "securitycode_error" style="color:#FF0000"></label></div>  

                    
 			 <div class="form_row">
  			<label class="contact"><strong>Exp date</strong></label>
                    <input type="text" style= "width:40px;"type="text" name="month " value="" /> &nbsp&nbsp/
			&nbsp&nbsp<input type="text" style= "width:40px;"type="text" name="year" value="" />
			</div> 
 			<div class="form_row">
			<label class="contact"><strong>Shipping address street1</strong></label>
                     <input type="text" name = "ship_1" class="contact_input" value="" onKeyUp="  document.getElementById('ship_1_error').innerHTML=''"/>
			
			</div> 
        <div><label id = "ship_1_error" style="color:#FF0000"></label></div>  

		 <div class="form_row">
		<label class="contact"><strong>Shipping address street2</strong></label>
                     <input type="text" name = "ship_2" class="contact_input" value="" onKeyUp="  document.getElementById('ship_2_error').innerHTML=''"/>
			
			</div> 
         <div><label id = "ship_2_error" style="color:#FF0000"></label></div>  

            
		   <div class="form_row">
                    <label class="contact"><strong>City:</strong></label>
                    <input name = "city" type="text" class="contact_input" value=""onKeyUp="  document.getElementById('city_error').innerHTML=''"/>
                    </div>  
                                        <div><label id = "city_error" style="color:#FF0000"></label></div>  

                    <div class="form_row">
                    <label class="contact"><strong>State:</strong></label>
                    <input name = "state" type="text" class="contact_input" value=""onKeyUp="  document.getElementById('state_error').innerHTML=''"/>
                    </div>  
                                        <div><label id = "state_error" style="color:#FF0000"></label></div>  

                    
                    <div class="form_row">
                    <label class="contact"><strong>Zip:</strong></label>
                    <input name = "zip" type="text" class="contact_input" value="" onKeyUp="  document.getElementById('zip_error').innerHTML=''"/>
                    </div>
                      <div><label id = "zip_error" style="color:#FF0000"></label></div>  

                  <div class="form_row"> 
                    <!-- <a href="bought.php" class="contact">Enter</a> -->
                    <input type="submit" name="Submit" value="Submit" value=""/>
                    </div>     
                    
                </div> 
                
                                     
            </div>
            <div class="bottom_prod_box_big"></div>                                
        </div>
       
    
   
   </div><!-- end of center content -->
   </form>
   
   
   
            
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