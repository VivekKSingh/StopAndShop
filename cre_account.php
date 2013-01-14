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
<script type ="text/javascript" src="js/regform_validation.js"></script>
</head>
<body>
<?php
//conect to Database
include "dbconnect.php";
$email = "zero";
if(isset($_POST["email1"]))
{
	$email = $_POST["email1"];
}
$qr = "select * from customer where email='$email' ";
$result=mysql_query($qr);
$count=mysql_num_rows($result);
if($count==1)
{
	echo '<SCRIPT language=javascript> alert("Your account has been created,you cannot submit twice!")</SCRIPT>';
	Header('Refresh: 0;url=logIn.php');
}
else{
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
    <label><a href="index.php">Home</a></label> >
	  
	  <span class="currentlc">New User</span> 
    
    </div>       
    
    <div class="center_contentlc">
    	<div class="prod_box_biglc">
        	<div class="top_prod_box_biglc"></div>
            <div class="center_prod_box_biglc">            
                 
                <form name="form_register" method="post" action="reg.php?submit=1&email1=<?php $_GET['email1']?>" onSubmit="return validate_regform()"> 
              	<div class="contact_formlc">
                    
                    <div class="form_rowlc">
                    <label class="registration"><strong>Registration</strong></label>
                    </div>
					<div class="form_rowlc">
                    <label class="registration"><strong>New To Stop&Shop? Register Below</strong></label>
                    </div>	
					
					<table>
					<tr><td align="right"><label class="before"><strong>*My First name:</strong></label></td><td><input type="text"  name="fname" class="contact_inputlc" onKeyUp="  document.getElementById('fname_error').innerHTML='';"></td>
                    <td><label id = "fname_error" style="color:#FF0000"></label></td>

                    </tr>
					<tr><td align="right"><label class="before"><strong>*My Last name:</strong></label></td><td><input name="lname" type="text" class="contact_inputlc" onKeyUp="  document.getElementById('lname_error').innerHTML=''";/></td></tr>
					<td><label id = "lname_error" style="color:#FF0000"></label></td>
                    
					<tr><td align="right"><label class="before"><strong>*My E-mail Address is:</strong></label></td><td><input name="email1" type="text" class="contact_inputlc"  onKeyUp="  document.getElementById('email1_error').innerHTML=''"></td></tr>
                    <td><label id = "email1_error" style="color:#FF0000"></label></td>
                    
					
                    
                    <tr><td align="right"><label class="before"><strong>*Type it again:</strong></label></td><td><input name="email2" type="text" class="contact_inputlc" onKeyUp="  document.getElementById('email1_error').innerHTML=''"></td></tr>
                    <td><label id = "email2_error" style="color:#FF0000"></label></td>
                    </tr>
                    
                    
                    
					<tr><td align="right"><label class="before"><strong>Create a username:</strong></label></td><td><input name="username" type="text" class="contact_inputlc"/></td></tr>
					
                    
                    
                    <tr><td align="right"><label class="before"><strong>State:</strong></label></td><td><input type="text" name="state" class="contact_inputlc" onKeyUp="  document.getElementById('state_error').innerHTML='';"></td>
                    <td><label id = "state_error" style="color:#FF0000"></label></td>
                    
                    
                    </tr>
                    <tr><td align="right"><label class="before"><strong>City:</strong></label></td><td><input type="text" name="city" class="contact_inputlc"onKeyUp="  document.getElementById('city_error').innerHTML='';"></td>
                    <td><label id = "city_error" style="color:#FF0000"></label></td></tr>
                    
                    
                    
                    <tr><td align="right"><label class="before"><strong>Street (Line One):</strong></label></td><td><input name="str1" type="text" class="contact_inputlc"onKeyUp="  document.getElementById('str1_error').innerHTML='';"></td>
                    <td><label id = "str1_error" style="color:#FF0000"></label></td></tr>
                    
                    
                    <tr><td align="right"><label class="before"><strong>Street (Line Two):</strong></label></td><td><input name="str2" type="text" class="contact_inputlc"onKeyUp="  document.getElementById('str2_error').innerHTML='';"></td>
                    <td><label id = "str2_error" style="color:#FF0000"></label></td></tr>
                    
                    
                    <tr><td align="right"><label class="before"><strong>Zip Code:</strong></label></td><td><input type="text" name="zip" class="contact_inputlc"onKeyUp="  document.getElementById('zip_error').innerHTML='';"></td>
                    <td><label id = "zip_error" style="color:#FF0000"></label></td></tr>
                    
                    
                    
					<tr><td align="right"><label class="before"><strong>*Gender:</strong></label></td><td><input type="text" name="gender" class="contact_inputlc"/></td></tr>
					
					</table>
				   
				   
				   <div class="form_rowlc">
                    <label class="registration"><strong>Protect your information with a password</strong></label>
					<label class="gray">This will be your only Stop&Shop password</label>
                   </div>
				   <table>
					<tr><td align="right"><label class="before"><strong>*Enter your password:</strong></label></td><td><input name="password1" type="password" class="contact_inputlc"onKeyUp="  document.getElementById('pwd1_error').innerHTML='';"></td>
                    <td><label id = "pwd1_error" style="color:#FF0000"></label></td></tr>
                    
                    
					<tr><td align="right"><label class="before"><strong>*Type it again:</strong></label></td><td><input name="password2" type="password" class="contact_inputlc"onKeyUp="  document.getElementById('pwd2_error').innerHTML='';"></td>
                    <td><label id = "pwd2_error" style="color:#FF0000"></label></td></tr>
				   </table>
				    <div class="form_row_registerlc">
					<!-- <a href="index.php" class="registerlc"></a>  -->
					<input name="submit" class="register_formlc" type= "submit" value= "" /> 
	               </div>
                </div>   <!-- End of contact_formlc -->
				</form>
				
                
                                      
            </div>
            <div class="bottom_prod_box_biglc"></div>                                
        </div>
   
   </div><!-- end of center content -->
    
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