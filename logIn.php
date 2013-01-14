<?php 
ob_start();
session_start();
if(isset($_SESSION['custID']))
{
	echo '<SCRIPT language=javascript> alert("You already logged in!");</SCRIPT>';
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
<script type="text/javascript" src="js/boxOver.js"></script>
<script>
function login_validate()

{
	
	var x=document.forms["login_form"]["username"].value;
	var pwd=document.forms["login_form"]["password"].value;

if (x==null || x=="")
  {
  document.getElementById('usrname_error').innerHTML='Enter your email address';
 // myForm.errorloc.value = 'error maga';
  //alert("First name must be filled out");
  return false;
  }
	
	 if(pwd==null || pwd=="")
	{
	
	document.getElementById('pwd_error').innerHTML='Enter your  password';
	return false;
		}
	
	}


</script>

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
                         <li><div href='#' class="nav7"> Welcome : <?php echo strtoupper($_SESSION["username"]);?></div> <li>  
						 
                         <?php }?>                 
                         <li><a href="orders.php" class="nav6">My Orders</a></li>
                      </ul>

             <div class="right_menu_cornerlc"></div>
            </div><!-- end of menu tab -->
            
    <div class="crumb_navigationlc">
    <label><a href="index.php">Home</a></label> >
	  
	  <span class="currentlc">Log In</span> 
    
    </div> 
   
   <div class="center_contentlc">
    	<div class="prod_box_biglc">
        	<div class="top_prod_box_biglc"></div>
            <div class="center_prod_box_biglc"> 
                         
                
                <form id='login' name= "login_form" action='authenticate.php'  onsubmit="return login_validate()" method='post' accept-charset='UTF-8'>
                
              	<div class="contact_formlc">
                    <?php
					if(isset($_GET['create']))
					{ ?>
					<div class="form_rowlc">
                    <label class="login-title-longlc"><strong>Account created successfully!</strong></label>
                    </div>
                    <?php }?>
                    <div class="form_rowlc">
                    <label class="login-titlelc"><strong>Sign In</strong></label>
                    </div>					
                    <div class="form_rowlc">
                    <label class="contactlc"><strong>What is your E-mail Address?</strong></label>
                    <input type='text' name='username' id='username'  />
	               </div> 
                   <div><label id="usrname_error" style="color:#FF0000"></label>
                   </div>
                   
				   <div class="form_rowlc">
                     <p>
                       <label class="contactlc"><strong>What is your password?</strong></label>
                       <!--  <input type="text" class="contact_inputlc" /> -->
                       <input type='password' name='password' id='password'  maxlength="50" />
                     </p>
                     
				   </div>
                   <div><label id = "pwd_error" style="color:#FF0000">
                   <?php
				   if(isset($_SESSION['error']))
				   echo "<div>Invalid Username or Password</div>";
				   ?>
                    </label>
                    </div>
				   
				   <div class="form_rowlc">
                    <label class="contact3" ><a href="cre_account.php"><strong>Don't have an account?</strong></a></label>
	               </div>
	               <div class="form_rowlc">
                    <input class="loginlc" name="submit" type="submit" value=""/>
	               </div> 
				   <!--  
				   <div class="form_rowlc">
					<a href="index.php" class="loginlc"></a>
	               </div>  -->
				   <div class="form_rowlc">
                    <a href="index.php" class="guestlc"></a>
	               </div>
	               <input type='hidden' name='submitted' id='submitted' value='1'/>
                </div> 
				</form>
				
                
                                     
            </div>
            <div class="bottom_prod_box_biglc"></div>                                
        </div>
       
        	<div class="prod_box_biglc">
        	<div class="top_prod_box_biglc"></div>
            <div class="center_prod_box_biglc">            
                 
              	
				
				<div class="contact_formlc">
                    
                    <div class="form_rowlc">
                    <label class="login-titlelc"><strong>Sign In Help</strong></label>
                    </div>					
                    <div class="form_rowlc">
                    <label class="contactlc"><a href="forgotpassword.php"><strong>Forgot your Password?</strong></a></label>
	                </div>
					<div class="form_rowlc">
                    <label class="contactlc"><a href="infor.php"><strong>What Are The Benifits Of Registered users?</strong></a></label>
	                </div>
                   
				   
                </div> 
                
                                     
            </div>
            <div class="bottom_prod_box_biglc"></div>                                
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