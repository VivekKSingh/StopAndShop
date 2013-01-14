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
<form name="form_register" method="post" action="<?php $_SERVER['PHP_SELF']?>"  >
<?php
//Check whether user has logged in or not
if(isset($_SESSION["custID"]))
{
	$customerID = $_SESSION["custID"];
}
else
{  
	echo '<SCRIPT language=javascript> alert("Please Login first!");</SCRIPT>';
	$_SESSION["link"] = "feedback";
	Header('Refresh: 0;url=logIn.php');
}
//conect to Database
include "dbconnect.php";
//$formID = 0;
//$currentID = 0;
//if(isset($_POST["currentID"]))
//{
//	$currentID = $_POST["currentID"];
//}
$feedback = "";
if(isset($_POST["feedback"]))
{
	$feedback = $_POST["feedback"];
}
$query = "select * from userfeedback where customerID='$customerID'  and feedback='$feedback' ";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==1)
{
	echo '<SCRIPT language=javascript> alert("You have already written this feedback, thank you!")</SCRIPT>';
	Header('Refresh: 0;url=index.php');
}
else {
if(isset($_POST["submit"]))
{
	//Get the values from the form
	//$value = $_POST["submit"];
	//if (!isset($_POST["done"]))
	//{
		//if($formID == $currentID)
		//{
			$feedback = $_POST["feedback"];
			//$customerID = 1; //Get this from session!!!
			//some cannot be  null and some must match twice
			$query2 = "INSERT INTO userfeedback(`customerID`,`feedback`) VALUES ('$customerID','$feedback')";
			mysql_query($query2);
			echo '<SCRIPT language=javascript> document.location.href="fee_cfm.php";</SCRIPT>';
			//$currentID = $currentID +1;
			//echo "submit for the first time!!!";
			//header("location:index.php");
			
		//}
		//else
	  	//{
			//echo "already submitted!!!";
		//}
	//}
	//else
	//{
	//echo "already submitted!!!";
	//}
		
}}
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
    	<div class="prod_box_biglc">
        	<div class="top_prod_box_biglc"></div>
            <div class="center_prod_box_biglc">            
                 
              	<div class="contact_formlc">
                    
                    <div class="form_rowlc">
                    <label class="login-titlelc"><strong>We need to hear from you:</strong></label>
                    </div>					
                    <div class="form_rowlc">
                    <textarea name="feedback" class="contact_textarealc" ></textarea>
	               </div>
				   
				   <div class="form_rowlc">
					<input name="submit" type="submit" class="feelc" value=""></input>
	               </div>
                </div> 
                </form>
				
				
                
                                     
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