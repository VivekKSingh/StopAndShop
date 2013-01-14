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
<script>
function form_validate()

{
	
	var email=document.forms["forgotpass_form"]["email"].value;
	var lastname=document.forms["forgotpass_form"]["lastname"].value;

if (email==null || email=="")
  {
  document.getElementById('usrname_error').innerHTML='Enter your email address';
 // myForm.errorloc.value = 'error maga';
  //alert("First name must be filled out");
  return false;
  }
	
	 if(lastname==null || lastname=="")
	{
	
	document.getElementById('lname_error').innerHTML='Enter your lastname';
	return false;
		}
		
	return true;
	}


</script>
</head>

<body>
    <div id="main_container">
      <div class="top_barlc"></div>
      
      <div id="header">

        <div id="logo"><a href="index.php"><img src="images/logo.png" alt="" title="" border="0"  /></a></div>
        
        <div class="oferte_contentlc">
          <div class="top_dividerlc"><img src="images/header_divider.png" alt="" title="" width="1" height="164" /></div>
          <div class="ofertalc">
            <div class="oferta_content">
              <img src="images/hp.jpg" width="94" height="92" border="0" class="oferta_img" />
              <div class="oferta_detailslc">
                <div class="oferta_titlelc">HP Pavilion ENVY 17</div>
                <div class="oferta_textlc">This series includes advanced graphics with ultra-fast GDDR5 video memory plus 2nd generation high-end Intel processors, all housed in a stunning, laser-etched aluminum body. And this is our only consumer laptop that supports up to three external displays.</div>
               
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
    
 
   <form id='forgotpassword' name= "forgotpass_form" action='mailpassword.php'  onsubmit="return form_validate()" method='post' accept-charset='UTF-8'>
   <div class="center_contentlc">
    	<div class="prod_box_biglc">
        	<div class="top_prod_box_biglc"></div>
            <div class="center_prod_box_biglc">            
                
              	<div class="contact_formlc">
                    
                    <div class="form_rowlc"><strong>Please enter the details, we will mail you your password</strong></div>					
                    <div class="form_rowlc">
                    <label class="contactlc"><strong>*Please enter  your E-mail Address</strong></label>
                    <input type='text' name='email' id='email'  maxlength="50" >
                <!--<input type="text" class="contact_inputlc" /> -->
	               </div> 
                   <div><label id="usrname_error" style="color:#FF0000"></label>
                   </div>

				   <div class="form_rowlc">
                     <p>
                       <label class="contactlc"><strong>*Enter your last name</strong></label>
                       <!--  <input type="text" class="contact_inputlc" /> -->
                       
                       <input type='text' name='lastname' id='lastname'  maxlength="50" />
                     </div> 
                   <div><label id="lname_error" style="color:#FF0000"></label>
                   </div>
                     
                     
				   </div>
                  
                   

				   
                   
                   
				   <div class="form_rowlc">
                    
	<!--				<a href="index.html" class="loginlc"></a> -->
<!--                  <input type="image"  name='Submit' src="/images/login.png"> -->
                <!--  <input type="submit"  name='Submit' class="loginlc"> -->
                     <input type="submit"  name='Submit' value="submit">


	               </div>
				
                </div> 
				
				
                
                                     
            </div>
                                            
        </div>
       
        	
   </div><!-- end of center content -->
   </form>

   <div class="footerlc">
	
	<div class="left_footerlc">
	  <table>
	    <tr><td align="center"><span class="blue-buttomlc">About Us</span></td></tr>
	    <tr><td align="center" ><a href="infor.php">Our Goals</a></td></tr>
	    <tr><td align="center"><a  href="infor.php">The members</a></td></tr>
	    <tr><td align="center"><a href="infor.php">Our Moto</a></td></tr>
	    <tr><td align="center"><a href="infor.php">Our Links</a></td></tr>
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
	  </table>
	</div>
      </div>                 
      
      <div class="buttom-logolc">
	<table>
	  <tr><td align="center"><img src="images/logo1.png" alt="" title="" width="163" height="55"/></td></tr>
	  <tr><td align="center">All Rights Reserved 2011</td></tr>
	  <tr><td align="center">Group3 Indiana University</td></tr>
	</table>
      </div>

</div>
<!-- end of main_container -->
</body>
</html>