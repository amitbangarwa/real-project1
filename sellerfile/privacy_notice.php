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
           <li><nobr><a href='selleraccount.php' class='headerNavigation'>My Account</a></nobr></li>
<li><nobr><a href='../logoff.php' class='headerNavigation'>Log Off</a></nobr></li>

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
    <td class="boxText"><a href="shipping.php">Shipping &amp; Returns</a><br><a href="conditions.php">Conditions of Use</a><br><a href="=privacy_notice.php">Privacy Notice</a><br><a href="contact_us.php">Contact Us</a><br><a href="about_us.php">About Us</a></td>

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
<i><b>Privacy Policy:</b></i>
<br>
<br>
This privacy statement discloses the privacy practices for www.artgallery.com.
<br>
<br>
Because we want to demonstrate our commitment to your privacy, we will notify you of:
<br>
<br>
<b>1.</b>What personally identifiable information of yours or third party personally identification is collected from you through the web site.<br>
<b>2.</b>The organization collecting the information.<br>
<b>3.</b>How the information is used.<br>
<b>4.</b>With whom the information may be shared.<br>
<b>5.</b>What choices are available to you regarding collection, use and distribution of the information.<br>
<b>6.</b>The kind of security procedures that are in place to protect the loss, misuse or alteration of information under artgallery's control.<br>
<b>7.</b>How you can correct any inaccuracies in the information.<br>

<br>
<br>
If you have questions or concerns regarding this statement, you should contact our customer service department by email at service @ artgallery.com.
ARTGALLERY wholeheartedly respects your privacy. The sole owner of all personal information collected at this site is ARTGALLERY, and ARTGALLERY will
 NEVER rent or sell your personal information to any third party. The information collected and stored by ARTGALLERY includes your name, address,
 telephone number, and email address. While your credit card information is collected at the time of purchase, only the last four digits are stored on
 ARTGALLERY's server. Credit card information is sent directly to Verisign's secure server, and that is where it is safely held. Because ARTGALLERY
 collects personal information through a secure server that features the latest encryption technology, you can be assured that none of your information
 will be viewed by anyone outside of ARTGALLERY and Verisign. Furthermore, all shipping labels are pre-printed at ARTGALLERY's regional offices,
 so none of your personal information is held or stored by any of the shipping companies that are used to deliver ARTGALLERY's orders.
<br>
<br>
The information you provide to ARTGALLERY will only be used to process your order. Unless there is a problem with your order or you have opted to
 receive the ARTGALLERY Journal by email, you will not be contacted by ARTGALLERY. If you do opt to receive the ARTGALLERY Journal but later change
 your mind, you can request to be removed from our list by simply emailing us at remove @ artgallery.com. You may also update or change the personal
 information ARTGALLERY has collected by sending an email to service @ artgallery.com. Should there be any changes to ARTGALLERY's Privacy Guarantee,
 all affected users will immediately be notified by email and all relevant changes will be posted to this portion of the site.
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
<a href="contact_us.php" class="headerNavigation">Contact Us</a> |

<a href='selleraccount.php' class='headerNavigation'>My Account</a> |
<a href='../logoff.php' class='headerNavigation'>Log Off</a>
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