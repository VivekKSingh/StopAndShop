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
    Navigation: <span class="currentlc">Home</span> >
	            <label ><a href="index.php">  Laptop Home</a></label> >
				<label ><a href="home.php">  Home Users</a></label>
    
    </div>        
    
      <div class="left_contentlc">
     <form  method="post" action="results.php">
    <div class="title_boxlc">Laptop</div>
        
        <ul class="left_menulc">
        <li class="odd"><a>Brand</a></li>
        <li class="even"><a><input type="checkbox" name="laptop[]" value="Dell"id="check" />
        <label for="check">Dell</label></a></li>
		<li class="even"><a><input type="checkbox"  name="laptop[]" value ="Toshiba"id="check" />
        <label for="check">Toshiba</label></a></li>
		<li class="even"><a><input type="checkbox" name="laptop[]"value ="Apple" id="check" />
        <label for="check">Apple</label></a></li>
		<li class="even"><a><input type="checkbox" name="laptop[]" value ="Sony"id="check" />
        <label for="check">Sony</label></a></li>
		<li class="even"><a><input type="checkbox" name="laptop[]"value ="Lenovo" id="check" />
        <label for="check">Lenovo</label></a></li>
		
		<li class="odd"><a>Price</a></li>
		<li class="even"><a><input type="checkbox" name="price[]" value="500 AND 600"id="check" />
        <label for="check" >500-600</label></a></li>
		<li class="even"><a><input type="checkbox" name="price[]"  value="600 AND 700"id="check" />
        <label for="check">600-700</label></a></li>
		<li class="even"><a><input type="checkbox" name="price[]" value="700 AND 800"id="check" />
        <label for="check">700-800</label></a></li>
		<li class="even"><a><input type="checkbox" name="price[]" value="800 AND 900"id="check" />
        <label for="check">800-900</label></a></li>
		<li class="even"><a><input type="checkbox" name="price[]" value="900 AND 2400"id="check" />
        <label for="check">Above 900</label></a></li>
		
		<li class="odd"><a>CPU</a></li>
        <li class="even"><a><input type="checkbox" name="cpu[]" id="check" value="i3" />
        <label for="check" >Intel i3</label></a></li>
		<li class="even"><a><input type="checkbox" name="cpu[]" id="check" value="i5"/>
        <label for="check">Intel i5</label></a></li>
		<li class="even"><a><input type="checkbox" name="cpu[]" id="check" value="i7"/>
        <label for="check">Intel i7</label></a></li>
		<li class="even"><a><input type="checkbox" name="cpu[]" id="check"/>
        <label for="check">more</label></a></li>
		
		<li class="odd"><a>Hard Disk</a></li>
        <li class="even"><a><input type="checkbox" name="HDD[]" value="160" id="check" />
        <label for="check" >160G</label></a></li>
		<li class="even"><a><input type="checkbox" name="HDD[]"value="320" id="check" />
        <label for="check">320G</label></a></li>
		<li class="even"><a><input type="checkbox" name="HDD[]" value="500"id="check" />
        <label for="check">500G</label></a></li>
		
		<li class="odd"><a>Size</a></li>
        <li class="even"><a><input type="checkbox" name="size[]" value= "9"id="check" />
        <label for="check" >9''</label></a></li>
		<li class="even"><a><input type="checkbox" name="size[]" value= "13"id="check" />
        <label for="check">13''</label></a></li>
		<li class="even"><a><input type="checkbox" name="size[]" value= "15"id="check" />
        <label for="check" >15''</label></a></li>
		<li class="even"><a><input type="checkbox" name="size[]" value= "17"id="check" />
        <label for="check" >17''</label></a></li>
		
		<li class="odd"><a>Weight</a></li>
       <li class="even"><a><input type="checkbox" name="weight[]" value= "below"id="check" />
        <label for="check" >below 5</label></a></li>
		<li class="even"><a><input type="checkbox" name="weight[]" value= "5"id="check" />
        <label for="check">5 pounds</label></a></li>
		<li class="even"><a><input type="checkbox" name="weight[]"value= "6" id="check" />
        <label for="check" >6 pounds</label></a></li>
		<li class="even"><a><input type="checkbox" name="weight[]"value= "7" id="check" />
        <label for="check" >7 pounds</label></a></li>
		
		<li class="odd"><a>Color</a></li>
        <li class="even"><a><input type="checkbox" name="color[]" id="check" value="white" />
        <label for="check" >White</label></a></li>
		<li class="even"><a><input type="checkbox" name="color[]" id="check" value="black"/>
        <label for="check">Black</label></a></li>
		<li class="even"><a><input type="checkbox" name="color[]" id="check"value="Marble Blue" />
        <label for="check" >Marble Blue</label></a></li>
		<li class="even"><a><input type="checkbox" name="color[]" id="check"value="Silver" />
        <label for="check" >Silver</label></a></li>
		
		<li>          
            <!--  input type="submit" name="submit" class="submitlc"-->
			<!--<a href="results.php"  class="prod_details2"></a>-->
			<input type ="submit" name ="submit"class="prod_details2" value=""/>
			<a href="" onclick="clearForms()" class="prod_details3"></a>
			<!--  we can use onclick="form.submit()" to implement this form -->  
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
   
   
   <div class="center_contentlc">
<?php
//conect to Database
include "dbconnect.php";

//Set how many records per page
$numPerPage = 12;
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
	$query ="SELECT * FROM $_TABLE_NAME INNER JOIN $_TABLE_NAME2 ON $_TABLE_NAME.productId = $_TABLE_NAME2.productId and $_TABLE_NAME2.CATEGORY='LAPTOP' and
		$_TABLE_NAME.type='Home' LIMIT ".(($currentPage-1)*$numPerPage).",$numPerPage";
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
		$query ="SELECT * FROM $_TABLE_NAME INNER JOIN $_TABLE_NAME2 ON $_TABLE_NAME.productId = $_TABLE_NAME2.productId and $_TABLE_NAME2.CATEGORY='LAPTOP' and
		$_TABLE_NAME.type='Home' LIMIT ".(($currentPage-1)*$numPerPage).",$numPerPage";
	}
	else
	{
		
		$query ="SELECT * FROM $_TABLE_NAME INNER JOIN $_TABLE_NAME2 ON $_TABLE_NAME.productId = $_TABLE_NAME2.productId and $_TABLE_NAME2.CATEGORY='LAPTOP' and
		$_TABLE_NAME.type='Home'";
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
		$query ="SELECT * FROM $_TABLE_NAME INNER JOIN $_TABLE_NAME2 ON $_TABLE_NAME.productId = $_TABLE_NAME2.productId and $_TABLE_NAME2.CATEGORY='LAPTOP' and
		$_TABLE_NAME.type='Home' LIMIT 0,$numPerPage";
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
}
	//Display all laptops in a for loop
	?>
	<div class="center_title_barlc">"Home Computers" <?php echo $numRecord;?> results found.</div>
	<?php
	for ($i = 0; $i < $num; $i++) {
	$name= mysql_result ($result, $i, "name");
	$prodid=mysql_result ($result, $i, "productId");
	$price= mysql_result ($result, $i, "price");
	$imagepath = mysql_result ($result, $i, "imagepath");
	?>
    	<div class="prod_boxlc">
        	<div class="top_prod_boxlc"></div>
            <div class="center_prod_boxlc">            
                 <div class="product_titlelc"><a href="detailliucan.php?prodid=<?php echo $prodid;?>"><?php echo $name;?></a></div>
                 <div class="product_imglc"><a href="detailliucan.php?prodid=<?php echo $prodid;?>"><img src=<?php echo $imagepath;?> alt="" title="" border="0" /></a></div>
                 <div class="prod_pricelc"><span class="pricelc"><?php echo "$".$price;?></span></div>                        
            </div>
            <div class="bottom_prod_boxlc"></div>             
                               
        </div> 
	<?php }?>
    <!-- 
    	<div class="prod_boxlc">
        	<div class="top_prod_boxlc"></div>
            <div class="center_prod_boxlc">            
                 <div class="product_titlelc"><a href="detailliucan.php">Toshiba S220</a></div>
                 <div class="product_imglc"><a href="detailliucan.php"><img src="images/laptop.png" alt="" title="" border="0" /></a></div>
                 <div class="prod_pricelc"><span class="pricelc">270$</span></div>                        
            </div>
            <div class="bottom_prod_boxlc"></div>             
                               
        </div> -->
    
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
   		<div class="shopping_cartlc">
        	<div class="cart_titlelc">Shopping cart</div>
            
             <?php 
   				if(isset($_SESSION["custID"]))
   				{
   					$customerID = $_SESSION["custID"];
   					//The customer is retrieved from Kailash's session management.
   					$query = "select sum(quantity) as sumquantity,sum(price*quantity) as pricetotal, count(*) as numtotal from shoppingcart where customerID = '$customerID' ";
   					$result = mysql_query ($query);
   					$pricetotal = 0;
   					$numr = mysql_numrows ($result);
   					$numtotal = 0;
   					for ($i = 0; $i < $numr; $i++)
   					{
   						//$price = mysql_result ($result, $i, "price");
   						$pricetotal =mysql_result ($result, $i, "pricetotal");
   						$numtotal = mysql_result ($result, $i, "numtotal");
						$quantity=mysql_result ($result, $i, "sumquantity");
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
   	                <div class="cart_detailslc">Login to view your
	                <br />shopping cart
	    			</div>
  				<?php }//End Else
   			?>
            <div class="cart_iconlc"><a href="shopping_cart.php"  title="header=[View Cart] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" title="" width="48" height="48" border="0" /></a>
            </div>
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