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
			
		<div class="center_inforlc">
		<center> <span class="bluelc">Information Here..Just an example</span>
		<table>
		<tr>
		<td align="left"> <span class="bluelc"></span></td>
		<td align="left">On a basic level, MT performs simple substitution of words in one natural language for words in another, but that alone usually cannot produce a good translation of a text, because recognition of whole phrases and their closest counterparts in the target language is needed. Solving this problem with corpus and statistical techniques is a rapidly growing field that is leading to better translations, handling differences in linguistic typology, translation of idioms, and the isolation of anomalies.[citation needed]
 
		Current machine translation software often allows for customisation by domain or profession (such as weather reports), improving output by limiting the scope of allowable substitutions. This technique is particularly effective in domains where formal or formulaic language is used. It follows that machine translation of government and legal documents more readily produces usable output than conversation or less standardised text.
 
		Improved output quality can also be achieved by human intervention: for example, some systems are able to translate more accurately if the user has unambiguously identified which words in the text are names. With the assistance of these techniques, MT has proven useful as a tool to assist human translators and, in a very limited number of cases, can even produce output that can be used as is (e.g., weather reports).
 
		The progress and potential of machine translation has been debated much through its history. Since the 1950s, a number of scholars have questioned the possibility of achieving fully automatic machine translation of high quality.[1] Some critics claim that there are in-principle obstacles to automatizing the translation process.[2]
		</td>
		</tr>
		</table>
		<center>
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