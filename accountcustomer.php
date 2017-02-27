<html dir="LTR" lang="en"><head>


<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Artgallery</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script language="javascript"><!--
function rowOverEffect(object) {
  if (object.className == 'moduleRow') object.className = 'moduleRowOver';
}

function rowOutEffect(object) {
  if (object.className == 'moduleRowOver') object.className = 'moduleRow';
}
//--></script>

   

   

   

</head><body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" marginheight="0" marginwidth="0">
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
        <li><nobr><a href="accountcustomer.php" class="headerNavigation">My Account</a></nobr></li>
        <li><nobr><a href="shopping_cart.php" class="headerNavigation">Cart Contents</a></nobr></li>
	<li><nobr><a href="checkout_shipping.php" class="headerNavigation">Checkout</a></nobr></li>
                        <li><nobr><a href="logoff.php" class="headerNavigation">Log Off</a></nobr></li>
              </ul>
    </div>
  </div>
 <div id="page_header">
    <div id="page_header_inner"><img src="image/header1.jpg"> </div>
  </div>
  <div id="page_breadcrumb">

    <table width="100%" border=0>
   
    <tr valign="middle">        
<td align="left"><a href="http://www.icloudcenter.net/demos/icart/" class="headerNavigation">Top</a> &raquo; <a href="index.php" class="headerNavigation">Catalog</a>&raquo; <a href="accountcustomer.php" class="headerNavigation">My Account</a></td>
        <td align="right">
          
        <form name="quick_find" action="advanced_search_result.php" method="get" style="padding:0px; margin:0px; border:0px;">
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
<script>

</script>


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
<div class="curtainBox minimized" id="filter1" style="width: 200px;">

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
<li><a href="abstract.php">Abstract</a>&nbsp;<br><a href="folk.php">Folk</a>&nbsp;<br><a href="dance.php">Dance & Music</a>&nbsp;<br><a href="religious.php">religious.php</a><br><a href="architecture.php">Architecture</a></li><li><a href="animal.php">Animals</a></li><li><a href="floral.php">Floral</a></li><li><a href="nature.php">Nature</a></li><li><a href="people.php">People</a></li><li><a href="other.php">Other</a></li>			</ul>
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
    <td class="boxText"><a href="pages.php?page=shipping">Shipping &amp; Returns</a><br><a href="pages.php?page=conditions">Conditions of Use</a><br><a href="pages.php?page=privacy_notice">Privacy Notice</a><br><a href="contact_us.php">Contact Us</a><br><a href="about_us">About Us</a></td>

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
while($rsitem=mysql_fetch_object($rs))
{
echo"<tr><td class='main'><a href='view.php?pid=$rsitem->pid'><font size='2'>$rsitem->printnm</font></a></td></tr>";

echo"<tr>";
  echo'  <td class="boxText"><img src="image/pixel_black.gif" alt="" border="0" width="100%" height="1"></td>';

echo"  </tr>";
echo"<tr><td class='main' align='right'><font size='2'>$ $rsitem->price</font></td></tr>";
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
<!-- shopping_cart_eof //--></div>      <!-- left_navigation_eof //-->
      </div>
    </td>
<!-- body_text //-->


    <td class="central_column" width="100%" valign="top">
      <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tbody><tr>
        <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody><tr>
	<td>
<?php
session_start();
if(!isset($_SESSION['usrnm']))
header("location:UANT.html");
else
echo "<p align='center'><font face='Algerian' size='4'>WELCOME&nbsp:".$_SESSION['usrnm']." </font></p>";
?>
</td>
</tr>
<tr>
            <td class="pageHeading">My Account Information</td>
          </tr>
<tr>
<td>
<?php
if (isset($_POST['submit']))
	{
 $cn=mysql_connect("localhost","root","") or die("Error in connecting database");
   $db=mysql_select_db("art_gallery",$cn);
   $pass1=$_POST['password_current'];
   $pass2=$_POST['password_new'];
   $pass3=$_POST['password_confirmation'];
if($pass1=="" || $pass2=="" || $pass3=="")
{header("location:changepassword.php");}
else
{

$usrname=$_SESSION['usrnm'];
$sql="select *from customerinfo where email_address='$usrname'and password='$pass1'";
$rs=mysql_query($sql,$cn);
$rsitem=mysql_fetch_object($rs);
if($rsitem==true)
{
	if($pass2 == $pass3)
	{
		$rs1=mysql_query("UPDATE customerinfo SET password='$pass3' WHERE email_address='$usrname'");
		if($rs1)
		echo"<table>";
	echo"<tr class='messageStackError'>";
	echo "<br><td class='messageStackError'><center><font color='green' size='2'><i>&nbsp;Your Password hase been Changed Successfully.</i></font></center></td>";
	echo"</tr>";
	echo"</table>";
		
	}
	else
	{
	echo"<table>";
	echo"<tr class='messageStackError'>";
	echo "<br><td class='messageStackError'><center><font color='red' size='2'><i><img src='image/error.gif' alt='Error' title=' Error ' border='0' width='10' height='10'>&nbsp;Error : Password did not match!</i></font></center></td>";
	echo"</tr>";
	echo"</table>";
	}
}
else
{
echo"<table>";
	echo"<tr class='messageStackError'>";
	echo "<br><td class='messageStackError'><b><font color='red' size='2'><i><img src='image/error.gif' alt='Error' title=' Error ' border='0' width='10' height='10'>Error : Please Check the current password!!</i></font></b></td>";
echo"</tr>";
	echo"</table>";
}
}
}
?>
<?php
if (isset($_POST['countinue']))
	{
$gender=$_POST['gender'];
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$dob=$_POST['dob'];
$em_add=$_POST['email_address'];
$teleph=$_POST['telephone'];
if($gender=="" || $fn=="" || $ln=="" || $dob=="" || $em_add=="" || $teleph=="")
header("location:customer_account_edit.php");
else
{
$cn=mysql_connect("localhost","root","") or die("Error in connecting database");
$db=mysql_select_db("art_gallery",$cn);

$usernm=$_SESSION['usrnm'];
$rs=mysql_query("UPDATE customerinfo SET gender='$gender',firstname='$fn',lastname='$ln',dob='$dob',email_address='$em_add',telephone_no='$teleph' WHERE email_address='$usernm'");
if($rs)
{
echo"<br><font color='green' size=2><i><b>Your Detail Are Successfully Changed.</b></i></font>";
}
else
echo"<br><font color='red' size='2'><b><i>Error! Your Detail Are not Change Please Try Again.</i></b></font>";
}
}
?>
<?php
if (isset($_POST['Submit']))
	{
$gender=$_POST['gender'];
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$stadd=$_POST['streetaddress'];
$pin=$_POST['postcode'];
$city=$_POST['city'];
$state=$_POST['state'];
if($gender=="" || $fn=="" || $ln=="" || $stadd=="" || $pin=="" || $city==""  || $state=="" )
header("location:address_book.php");
else
{
$cn=mysql_connect("localhost","root","") or die("Error in connecting database");
$db=mysql_select_db("art_gallery",$cn);

$usernm=$_SESSION['usrnm'];
$rs=mysql_query("UPDATE customerinfo SET gender='$gender',firstname='$fn',lastname='$ln',street_address='$stadd',post_code='$pin',city='$city',state='$state' WHERE email_address='$usernm'");
if($rs)
{
echo"<br><font color='green' size=2><i><b>Your Detail Are Successfully Changed.</b></i></font>";
}
else
echo"<br><font color='red' size='2'><b><i>Error! Your Detail Are not Change Please Try Again.</i></b></font>";
}
}
?>
</td>
</tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td><img src="image/pixel_trans.gif" alt="" border="0" width="100%" height="10"></td>
      </tr>
      <tr>

        <td><table border="0" cellpadding="2" cellspacing="0" width="100%">
          <tbody><tr>
            <td class="main"><b>My Account</b></td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td><table class="infoBox" border="0" cellpadding="2" cellspacing="1" width="100%">

          <tbody><tr class="infoBoxContents">
            <td><table border="0" cellpadding="2" cellspacing="0" width="100%">
              <tbody><tr>
                <td width="10"><img src="image/pixel_trans.gif" alt="" border="0" width="10" height="1"></td>
                <td width="60"><img src="image/account_personal.gif" alt="" border="0" width="60" height="60"></td>
                <td width="10"><img src="image/pixel_trans.gif" alt="" border="0" width="10" height="1"></td>
                <td><table border="0" cellpadding="2" cellspacing="0" width="100%">
                  <tbody><tr>
                    <td class="main"><img src="image/arrow_green.gif" alt="" border="0" width="8" height="8"> <a href="customer_account_edit.php">View or change my account information.</a></td>

                  </tr>
                  <tr>
                    <td class="main"><img src="image/arrow_green.gif" alt="" border="0" width="8" height="8"> <a href="address_book.php">View or change entries in my address book.</a></td>
                  </tr>
                  <tr>
                    <td class="main"><img src="image/arrow_green.gif" alt="" border="0" width="8" height="8"> <a href="changepassword.php">Change my account password.</a></td>
                  </tr>

                </tbody></table></td>
                <td align="right" width="10"><img src="image/pixel_trans.gif" alt="" border="0" width="10" height="1"></td>
              </tr>
            </tbody></table></td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td><img src="image/pixel_trans.gif" alt="" border="0" width="100%" height="10"></td>

      </tr>
       <tr>
         <td><table border="0" cellpadding="2" cellspacing="0" width="100%">
           <tbody><tr>
             <td class="main"><b>My Orders</b></td>
           </tr>
         </tbody></table></td>
       </tr>

       <tr>
         <td><table class="infoBox" border="0" cellpadding="2" cellspacing="1" width="100%">
           <tbody><tr class="infoBoxContents">
             <td><table border="0" cellpadding="2" cellspacing="0" width="100%">
               <tbody><tr>
                 <td width="10"><img src="image/pixel_trans.gif" alt="" border="0" width="10" height="1"></td>
                 <td width="60"><img src="image/account_orders.gif" alt="" border="0" width="60" height="60"></td>
                 <td width="10"><img src="image/pixel_trans.gif" alt="" border="0" width="10" height="1"></td>
                 <td><table border="0" cellpadding="2" cellspacing="0" width="100%">

                   <tbody><tr>
                     <td class="main"><img src="image/arrow_green.gif" alt="" border="0" width="8" height="8"> <a href="account_history.php">View the orders I have made.</a></td>
                   </tr>
                 </tbody></table></td>

                 <td align="right" width="10"><img src="image/pixel_trans.gif" alt="" border="0" width="10" height="1"></td>
               </tr>
             </tbody></table></td>
           </tr>
         </tbody></table></td>
       </tr>
            <tr>
        <td><img src="image/pixel_trans.gif" alt="" border="0" width="100%" height="10"></td>
      </tr>
    </tbody></table></td>
    
   
  </tr>
</tbody></table>

</div>
<!-- body_eof //-->
<!-- footer //-->

<center>

<div id="page_wrapper">
  <div id="page_footer">
    <p>
      <span class="left">&nbsp;&nbsp;<a href="index.php">Home</a> |
      <a href="about_us" class="headerNavigation">About Us</a> |
      <a href="contact_us.php" class="headerNavigation">Contact Us</a> |

                    <a href="accountcustomer.php" class="headerNavigation">My Account</a> |
            <a href="shopping_cart.php" class="headerNavigation">Cart Contents</a> |
             <a href="checkout_shipping.php" class="headerNavigation">Checkout</a> |
             
            <a href="logoff.php" class="headerNavigation">Log Off</a>

        

        
        
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



