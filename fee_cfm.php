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




<div class="left_contentlc">
<form id="filter" name="filter" method="post" action="">
<div class="title_boxlc">Laptop</div>

<ul class="left_menulc">
<li class="odd"><a>Brand</a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >Dell</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">Toshiba</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">Apple</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">Sony</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">Lenovo</label></a></li>

<li class="odd"><a>Price</a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >500-600</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">600-700</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">700-800</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">800-900</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">Above 900</label></a></li>

<li class="odd"><a>CPU</a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >Intel i3</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">Intel i5</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">Intel i7</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">more</label></a></li>

<li class="odd"><a>Hard Disk</a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >160G</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">320G</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">500G</label></a></li>

<li class="odd"><a>Size</a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >9''</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">11''</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >14''</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >15''</label></a></li>

<li class="odd"><a>Weight</a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >Below 5p</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">5-6p</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >6-7p</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >7-8p</label></a></li>

<li class="odd"><a>Color</a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >White</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check">Black</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >Marble Blue</label></a></li>
<li class="even"><a><input type="checkbox" name="check" id="check" />
<label for="check" >Silver</label></a></li>

<li>
<!input type="submit" name="submit" class="submitlc"-->
<a href="results.php" class="prod_details2"></a>
<a href="#.php" class="prod_details3"></a>

</li>
</ul>




</form>
<div class="title_boxlc">Today's Deal</div>  
     <div class="border_boxlc">
         <div class="product_titlelc"><a href="#">Motorola 156 MX-VL</a></div>
         <div class="product_imglc"><a href="#"><img src="images/laptop.png" alt="" title="" border="0" /></a></div>
         <div class="prod_pricelc"> <span class="pricelc">270$</span></div>
     </div>  


<div class="banner_addslc">

<a href="#"><img src="images/bann2.jpg" alt="" title="" border="0" /></a>
</div>


</div><!-- end of left content -->




<div class="center_content">
<div class="center_title_bar">Dear Customer:</div>
<div class="product_title_big"><center>THANKS FOR YOUR FEEDBACK!</center></div>














</div><!-- end of center content -->



<div class="right_contentlc">

<div class="title_boxlc">Adds</div>
<div class="border_boxlc">
<div class="product_titlelc"><a href="detailliucan.php">Motorola 156 MX-VL</a></div>
<div class="product_imglc"><a href="detailliucan.php"><img src="images/laptop.png" alt="" title="" border="0" /></a></div>
<div class="prod_pricelc"> <span class="pricelc">270$</span></div>
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