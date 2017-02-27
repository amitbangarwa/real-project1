<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">

<html dir="LTR" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Online Art Gallery</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="lytebox/css/lytebox.css" type="text/css" media="screen" />

<script type="text/javascript" language="javascript" src="lytebox/js/lytebox.js"></script>


</head>
<body marginwidth="0" marginheight="0" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">

<!-- header //-->

<center>

<!--

<table align="center" border="1" width="100%" cellspacing="0" cellpadding="0">
<tr>
    
<td valign="middle" align="center">
         </td>
  </tr>
</table>
-->
<div id="page_wrapper">
  <div id="menu_bar">
    <div id="navcontainer">

      <ul id="navlist" style="">
          <li><nobr><a href="index.php">Home</a></nobr></li>
        <li><nobr><a href="about_us.php" class="headerNavigation">About Us</a></nobr></li>
        <li><nobr><a href="contact_us.php" class="headerNavigation">Contact Us</a></nobr></li>
           <?php
session_start();
if(isset($_SESSION['usrnm']))
echo "<li><nobr><a href='accountcustomer.php' class='headerNavigation'>My Account</a></nobr></li>";
else
echo "<li><nobr><a href='login.php' class='headerNavigation'>My Account</a></nobr></li>";
?>
        <li><nobr><a href="shopping_cart.php" class="headerNavigation">Cart Contents</a></nobr></li>

           <?php
if(isset($_SESSION['usrnm']))
echo"<li><nobr><a href='checkout_shipping.php' class='headerNavigation'>Checkout</a></nobr></li>";
 ?>     
                 <?php
if(isset($_SESSION['usrnm']))
echo"<li><nobr><a href='logoff.php' class='headerNavigation'>Log off</a></nobr>";
else
echo "<li><nobr><a href='login.php' class='headerNavigation'>Log In</a></nobr>";
?>
</li>

</ul>
    </div>
  </div>
 <div id="page_header">
    <div id="page_header_inner"><img src="image/header1.jpg"> </div>
  </div>
  <div id="page_breadcrumb">

    <table width="100%" border=0>
   
    <tr valign="middle">        
<td align="left"><a href="index.php" class="headerNavigation">Top</a> &raquo; <a href="index.php" class="headerNavigation">Catalog</a></td>
        <td align="right">
          
        <form name="quick_find" action="quick_search.php" method="post" style="padding:0px; margin:0px; border:0px;">
          <table class="boxText" align="right" border=0>
          <tr valign="middle">

            <td valign="top">
              <b>Quick Search:</b> <input type="text" name="keywords" size="10" maxlength="30" style="width: 130px">&nbsp;
            </td>
            <td style="padding-top:3px;">
              <input type="image" src="image/button_quick_find.gif" border="0" alt="Quick Search" title=" Quick Search ">
              <!--Use keywords to find the product you are looking for.<br>-->
              
            </td>
          </tr>

          </table>
        </form>      
          
        </td>
    </tr>
    </table>
    </div>
  </div>
 </div>

<!-- FOR LEFT BOXES -->
<link href="pr-tools.css" type="text/css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="jquery-1.js"></script>

<script src="pr-tools.js" type="text/javascript"></script>



</center>

<!-- header_eof //-->    



<div id="content_wrapper">

<!-- body //-->

<table class="main_table" width="909px" align="center" border="0" cellpadding="0" cellspacing="5">

<!--

<tr>

    <td class="top_column" colspan="3" width="160" valign="top">

    </td>

</tr>-->

<tbody><tr>

    <td class="left_column" width="160" valign="top">

      <div id="left_side">          

      <!-- left_navigation //-->

      <div id="textfilters" style="border: 0px none ; width: 220px;"><!-- categories //-->
<!-- categories_eof //--><!-- View By Gallery //-->
<div class="curtainBox minimized" id="filter2" style="width: 200px;">
	<div class="header switch" style="height: 30px;" onclick="saveFilterBlockState(2)">
		<!--<h3>View By Gallery</h3>--><img src="image/view_by_gallery.png">
	</div>              
	<div class="toggleBox curtain filterValues" id="filter2PopularFilterValues">
		<div id="linkcontainer">
        	<ul id="linklist">
				<li><a href="view_all_galleries.php">- View All Galleries -</a></li>

			</ul>
		</div>
	</div>
</div>
<!-- manufacturers_eof //-->



<div class="curtainBox minimized" id="filter3" style="width: 200px;">

	<div class="header switch" style="height: 30px;" onclick="saveFilterBlockState(3)">

		<!--<h3 class="left_menu_title">View By Artists</h3>--><img src="image/view_by_artists.png">

	</div>              

	<div class="toggleBox curtain filterValues" id="filter3PopularFilterValues">

		<div id="linkcontainer"><br>

<select id="select_artist" class="select_artist" onchange="document.location.href = this.value;">

        	<!-- <ul id='linklist'>  -->      

<?php
$cn=mysql_connect("localhost","root","") or die("Error in connecting database");
$db=mysql_select_db("art_gallery",$cn);
$sql="select * from gallery";
$rs=mysql_query($sql,$cn);
echo"<option value='index.php' selected='selected'>None</option>";
while($rsitem=mysql_fetch_object($rs))
{
echo"<option value='artistproduct.php?aid=$rsitem->artist_id'>$rsitem->artistname</option>";
}
?>	


			</select>
			<!-- </ul> -->

		</div><br>

	</div>

</div><div class="curtainBox minimized" id="filter4" style="width: 200px;">
	<div class="header switch" style="height: 30px;" onclick="saveFilterBlockState(4)">
		<!--<h3>View By Subjects</h3>--><img src="image/view_by_subjects.png">

	</div>
	<div class="toggleBox curtain filterValues" id="filter4PopularFilterValues">
		<div id="linkcontainer">
			<ul id="linklist">      
<li><a href="abstract.php">Abstract</a>&nbsp;<br><a href="folk.php">Folk</a>&nbsp;<br><a href="dance.php">Dance & Music</a>&nbsp;<br><a href="religious.php">Religious</a><br><a href="architecture.php">Architecture</a></li><li><a href="animal.php">Animals</a></li><li><a href="floral.php">Floral</a></li><li><a href="nature.php">Nature</a></li><li><a href="people.php">People</a></li><li><a href="other.php">Other</a></li>			</ul>
		</div>

	</div>
</div><!-- information //-->
<div class="curtainBox minimized" id="filter6" style="width: 200px;">
	<div class="header switch" style="height: 30px;" onclick="saveFilterBlockState(6);">
		<!--<h3>Information</h3>--><img src="image/information.png">
	</div>
	<div class="toggleBox curtain filterValues" id="filter6PopularFilterValues">
		<p style="margin-bottom: 3px;" id="boxInformation">
<table class="infoBox" width="100%" border="0" cellpadding="1" cellspacing="0">
  <tbody><tr>

    <td><table class="infoBoxContents" width="100%" border="0" cellpadding="3" cellspacing="0">
  <tbody><tr>
    <td><img src="image/pixel_trans.gif" alt="" width="100%" border="0" height="1"></td>
  </tr>
  <tr>
    <td class="boxText"><a href="shipping.php">Shipping &amp; Returns</a><br><a href="conditions.php">Conditions of Use</a><br><a href="privacy_notice.php">Privacy Notice</a><br><a href="contact_us.php">Contact Us</a><br><a href="about_us.php">About Us</a></td>

  </tr>
  <tr>
    <td><img src="image/pixel_trans.gif" alt="" width="100%" border="0" height="1"></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>
		</p>
	</div>

</div>
<!-- information_eof //--><!-- shopping_cart //-->
<div class="curtainBox minimized" id="filter7" style="width: 200px;">
	<div class="header switch" style="height: 30px;" onclick="saveFilterBlockState(7)">
      <a href="shopping_cart.php"><img src="image/shopping_cart.png" border="0"></a>
	</div>              
	<div class="toggleBox curtain filterValues" id="filter7PopularFilterValues">
      <p style="margin-bottom: 3px;" id="boxCategories">
<table class="infoBox" width="100%" border="0" cellpadding="1" cellspacing="0">
  <tbody><tr>
    <td><table class="infoBoxContents" width="100%" border="0" cellpadding="3" cellspacing="0">

  <tbody><tr>
    <td><img src="image/pixel_trans.gif" alt="" width="100%" border="0" height="1"></td>
  </tr>
  <tr>
<?php
$cn=mysql_connect("localhost","root","") or die("Error in connecting database");
$db=mysql_select_db("art_gallery",$cn);
$sql="select * from cart";
$rs=mysql_query($sql,$cn);
$rsitem=mysql_fetch_object($rs);
if($rsitem)
{
echo"<tr><td class='main'><a href='view.php?pid=$rsitem->pid'><font size='2'>$rsitem->printnm</font></a></td></tr>";

echo"<tr>";
  echo'  <td class="boxText"><img src="shopping_cart.php_files/pixel_black.gif" alt="" border="0" width="100%" height="1"></td>';

echo"  </tr>";
echo"<tr><td class='main' align='right'><font size='2'>$ $rsitem->price</font></td></tr>";
}
else
{
 echo" <td class='boxText'>0 items</td>";
}
?> 
 </tr>
  <tr>
    <td><img src="image/pixel_trans.gif" alt="" width="100%" border="0" height="1"></td>

  </tr>
</table>
</td>
  </tr>
</table>
		</p>
	</div>
</div>
<!-- shopping_cart_eof //--><!-- reviews //-->
    <?php
if(isset($_SESSION['usrnm']))     
echo "<a href='reviews.php'><img src='image/reviews.png' border='0'></a>";
?>        
<!-- reviews_eof //--></div>
      <!-- left_navigation_eof //-->

      </div>

    </td>

<!-- body_text //-->


<td class="central_column" width="100%" valign="top"><table border="0" width="100%" cellspacing="0" cellpadding="0">
<table class="infoBoxContents" width="100%" border="0" cellpadding="3" cellspacing="0">

  <tbody><tr>
<td class="main">
<i><b>Shipping::</b></i>
<br><br>
<i><b>Delivery Times:</b></i>
<br><br>
On average, orders arrive to the destination address in 2-3 weeks. The delivery time will depend primarily on two factors: item availability and shipping service.
<br><br>
<i><b>>>Item Availability:</b></i>
<br><br>
Unless otherwise noted, all items available for purchase on the website are in stock. Items that are backordered contain a note indicating this fact as well
 as the expected delivery timeframe.
<br><br>
<i><b>>>Shipping Service:</b></i>
<br><br>

During checkout, we will show you a list of available shipping services and their corresponding prices and timeframes. You may also view shipping charges
 and timeframes through the "Calculate Shipping" link in the shopping cart. Note some items carry a special delivery timeframe that may differ from that 
of other items from the same region -- these items are clearly labeled with the special timeframe on the product detail page (as well as in checkout).
If we determine that we will not be able to deliver an order within the promised timeframe, we will immediately contact you via email.

<br>

<br>
<i><b>Shipping Methods:</b></i>
<br>
<br>
Most items at ARTGALLERY will ship direct to you from one of our international fulfillment centers. Shipping times do vary between different ARTGALLERY
 regions, so be sure to carefully review the shipping options available for your country when selecting your shipping service. Where multiple shipping
 options are available, we will indicate the corresponding price and estimated timeframe for each service.

<br>

<br>


<i><b>Returns & Customer Service::</b></i>
<br>
<br>
Important Notes and Restrictions:
<br><br>
Refunds will not be available if the returned products have been damaged or altered in any way before arriving at the Returns Center.
<br><br>
ARTGALLERY is not responsible for loss or any costs incurred (including freight, duties and taxes, or import fees) for items returned without an RMA
 number or to any address other than a ARTGALLERY Returns Center.
<br><br>
No refunds or returns on custom orders.
<br><br>
Make certain to use the original packaging when returning an item to ensure that it arrives in the same condition in which it was received.
<br><br>
As a safeguard against potential abuse, ARTGALLERY reserves the right to deny a refund to anyone who has made what we determine to be excessive returns.
<br><br>
Please note that shipping charges are not refundable.
<br>
<br>


<i><b>Step-by-Step Return Instructions::</b></i>
<br><br>

1. Request a Returned Merchandise Authorization (RMA) number:-
For fastest service, please log in to your myArtgallary account, visit the Orders & Returns section, and locate the order that contains the item(s)
 you would like to return. If you prefer, you may also submit your RMA request via email.
<br><br>
2. RMA Number and detailed return instructions are provided by ARTGALLERY:-
If the return is the result of an error by ARTGALLERY and the merchandise is being returned from an address in the continental India, we will provide
 you with a prepaid return label. If the return is the result of an error by ARTGALLERY but the merchandise is being returned from an address outside
 the continental India, we will provide you with special instructions. In all other cases, the address for the nearest Returns Center will be provided.
<br><br>
3. Returning the item(s) to ARTGALLERY:-
Be certain to include your RMA number inside each package being returned, as well as a copy of the original ARTGALLERY packing list (if available).
 You may also include any additional feedback related to the order that may not have been included in your original RMA request. If you are responsible
 for return shipping costs, please use a trackable shipping service to ensure that all items are received at Returns Center in good order.
<br><br>
4. Issuance of credit by ARTGALLERY:-
Within 7 business days of receipt of the returned merchandise at the Returns Center, a credit will be issued for the applicable amount using the same
 form of payment originally used for the order. If you would like to order another item in place of the returned product, please submit a completely new
 order.
</td>  </tr>
</tbody></table>
</td>


  </tr>

</table>

<!-- body_eof //-->

</div>


<!-- footer //-->

<center>

<div id="page_wrapper">
  <div id="page_footer">
    <p>
      <span class="left">&nbsp;&nbsp;<a href="index.php">Home</a> |
      <a href="about_us" class="headerNavigation">About Us</a> |
      <a href="contact_us.php" class="headerNavigation">Contact Us</a> |
  <?php
if(isset($_SESSION['usrnm']))
echo"<a href='accountcustomer.php' class='headerNavigation'>My Account</a> |";
else
echo"<a href='login.php' class='headerNavigation'>My Account</a> |";
?>
            <a href="shopping_cart.php" class="headerNavigation">Cart Contents</a> |
<?php
if(isset($_SESSION['usrnm']))
echo"<a href='checkout_shipping.php' class='headerNavigation'>Checkout</a> |";
?>
<?php
if(isset($_SESSION['usrnm']))
echo"<a href='logoff.php' class='headerNavigation'>Log Off</a>";
else
echo"<a href='login.php' class='headerNavigation'>Log In</a>";
?>
        
        
      </span>
      <span class="right">Copyright &copy; 2011 <a href="index.php">Artgallery</a>&nbsp;&nbsp;</span>
      <br />
      
      <span class="left">
      &nbsp;&nbsp;This Site is Developed by Amit Bangarwa & Prodyut Kumar Mondal.   </span>

      
    </p>
  </div>
</div>



<table border="0" width="100%" cellspacing="0" cellpadding="1">
  <tr class="footer">
    <td class="footer"></td>
    <td align="right" class="footer">&nbsp;&nbsp;</td>
  </tr>

</table>
<br>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" class="smallText"></td>
  </tr>
</table>


</center>

<!-- footer_eof //-->

<br>



</body>

</html>