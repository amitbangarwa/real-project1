<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">

<html dir="LTR" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Online Art Gallery</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="lytebox/css/lytebox.css" type="text/css" media="screen" />

<script type="text/javascript" language="javascript" src="lytebox/js/lytebox.js"></script>
<script language="JavaScript">
function check() 
{
var uid=document.customer_login.username.value;
var pwd=document.customer_login.password.value;

if(uid=="" || pwd=="")
{
	alert("Please enter the Email_ Address or Password ");
}
}
</script>

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
        <li><nobr><a href="acount.php" class="headerNavigation">My Account</a></nobr></li>
        <li><nobr><a href="shopping_cart.php" class="headerNavigation">Cart Contents</a></nobr></li>

      
                    <li><nobr><a href="login.php" class="headerNavigation">Log In</a></nobr></li>
              </ul>
    </div>
  </div>
 <div id="page_header">
    <div id="page_header_inner"><img src="image/header1.jpg"> </div>
  </div>
  <div id="page_breadcrumb">

    <table width="100%" border=0>
   
    <tr valign="middle">        
<td align="left"><a href="http://www.icloudcenter.net/demos/icart/" class="headerNavigation">Top</a> &raquo; <a href="index.php" class="headerNavigation">Catalog</a> � <a href="login.php" class="headerNavigation">Login</a></td>
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
	<div class="header switch" style="height: 30px;" onclick="saveFilterBlockState(1)">
		<!--<h3>Schools</h3>--><img src="image/schools.png">
	</div>              
	<div class="toggleBox curtain filterValues" id="filter1PopularFilterValues">

		<p id="boxCategories">
<table class="infoBox" width="100%" border="0" cellpadding="1" cellspacing="0">
  <tbody><tr>
    <td><table class="infoBoxContents" width="100%" border="0" cellpadding="3" cellspacing="0">
  <tbody><tr>
    <td><img src="image/pixel_trans.gif" alt="" width="100%" border="0" height="1"></td>
  </tr>
  <tr>
    <td class="boxText"><a href="index.php?cPath=58">Abstract</a>&nbsp;(2)<br><a href="index.php?cPath=63">Folk</a>&nbsp;(3)<br><a href="index.php?cPath=61">Modern</a>&nbsp;(2)<br><a href="index.php?cPath=60">Traditional</a><br></td>

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

<option value="index.php" selected="selected">None</option><option value="artist_artists.php?artist_id=151">Raheel</option><option value="artist_artists.php?artist_id=152">Haroon</option>

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
<li><a href="subjects.php?subject_id=4">Architecture</a></li><li><a href="subjects.php?subject_id=3">Animals</a></li><li><a href="subjects.php?subject_id=6">Floral</a></li><li><a href="subjects.php?subject_id=7">Nature</a></li><li><a href="subjects.php?subject_id=8">People</a></li><li><a href="subjects.php?subject_id=10">Other</a></li>			</ul>
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
    <td class="boxText">0 items</td>
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

        
<!-- reviews_eof //--></div>
      <!-- left_navigation_eof //-->

      </div>

    </td>

<!-- body_text //-->

<td class="central_column" width="100%" valign="top"><form name="customer_login" action="" method="post">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td>
				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td class="pageHeading">Welcome, Please Sign In</td>
					</tr>

<tr>
<td>
<?php
if (isset($_POST['Signin']))
	{
 $cn=mysql_connect("localhost","root","") or die("Error in connecting database");
   $db=mysql_select_db("art_gallery",$cn);

   $usrname=$_POST['username'];
   $passwrd=$_POST['password'];
if($usrname=="" ||  $passwrd=="")
header("location:customer_login.php");
else
{ 
$sql="select * from customer where email_address='$usrname' and password='$passwrd'";
$rs=mysql_query($sql,$cn);
$rsitem=mysql_fetch_object($rs);
if($rsitem==true)
{
session_start();
$_SESSION['usrnm']=$usrname;
header("location:accountcustomer.php");
}
else
echo "<br><I><font color='red' size=2>Error: No match for E-Mail Address and/or Password.</font></I>";
}
}
?>				
</td>
					</tr>
					</table>

				</td>
			</tr>
			<tr>
				<td><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
			</tr>
      <tr>

				<td>
				<table border="0" width="100%" cellspacing="0" cellpadding="2">
					<tr>

						<td colspan=2 class="main" width="50%" valign="top"><b>Returning Customer</b></td>
					</tr>
					<tr>

						<td colspan=2 width="50%" height="100%" valign="top">

						<table border="0" width="50%" height="100%" cellspacing="1" cellpadding="2" class="infoBoxLogin">
							<tr class="infoBoxContents">
								<td>
								<table border="0" width="100%" height="100%" cellspacing="0"
									cellpadding="2">
									<tr>
										<td colspan="2"><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
									</tr>
									<tr>
										<td class="main" colspan="2">I am a returning customer.</td>

									</tr>
									<tr>
										<td colspan="2"><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
									</tr>
									<tr>
										<td class="main"><b>E-Mail Address:</b></td>
										<td class="main"><input type="text" name="username"></td>
									</tr>

									<tr>
										<td class="main"><b>Password:</b></td>
										<td class="main"><input type="password" name="password" maxlength="40"></td>
									</tr>
									<tr>
										<td colspan="2"><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
									</tr>
									<tr>

										<td class="smallText" colspan="2"><a href="password_forgotten.php">Password forgotten? Click here.</a></td>
									</tr>
									<tr>
										<td colspan="2"><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
									</tr>
									<tr>
										<td colspan="2">
										<table border="0" width="100%" cellspacing="0" cellpadding="2">

											<tr>
												<td width="10"><img src="image/pixel_trans.gif" border="0" alt="" width="10" height="1"></td>
												<td align="right"><input type="submit" src="image/button_login.gif" border="0" alt="Sign In" name="Signin" onclick="check()"></td>
												<td width="10"><img src="image/pixel_trans.gif" border="0" alt="" width="10" height="1"></td>
											</tr>
										</table>
										</td>
									</tr>
								</table>

								</td>
							</tr>
						</table>
						</td>

					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>

						<td class="main" width="50%" valign="top"><b>New Customer</b></td>
					</tr>
					<tr>
						<td width="50%" height="100%" valign="top">
						<table width="100%" height="100%" cellspacing="1" cellpadding="2"
							class="infoBoxLogin">
							<tr class="infoBoxContents">
								<td>

								<table border="0" width="100%" height="100%" cellspacing="0"
									cellpadding="2">
									<tr>
										<td><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
									</tr>
									<tr>
										<td class="main" valign="top">I am a new customer.<br><br>By creating an account at Artgallery you will be able to shop faster, be up to date on an orders status, and keep track of the orders you have previously made.</td>
									</tr>
									<tr>

										<td><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
									</tr>
									<tr>
										<td>
										<table border="0" width="100%" cellspacing="0" cellpadding="2">
											<tr>
												<td width="10"><img src="image/pixel_trans.gif" border="0" alt="" width="10" height="1"></td>
												<td align="right"><a href="create_account.php"><img src="image/button_continue.gif" border="0" alt="Continue" title=" Continue " width="100" height="22"></a></td>
												<td width="10"><img src="image/pixel_trans.gif" border="0" alt="" width="10" height="1"></td>

											</tr>
										</table>
										</td>
									</tr>
								</table>
								</td>
							</tr>
						</table>
						</td>

					</tr>
				</table>
				</td>
			</tr>
		</table>

		</form>
		</td>
	</tr>
</table>
<!-- body_eof //--></div>



<!-- footer //-->

<center>

<div id="page_wrapper">
  <div id="page_footer">
    <p>
      <span class="left">&nbsp;&nbsp;<a href="index.php">Home</a> |
      <a href="about_us" class="headerNavigation">About Us</a> |
      <a href="contact_us.php" class="headerNavigation">Contact Us</a> |

                    <a href="account.php" class="headerNavigation">My Account</a> |
            <a href="shopping_cart.php" class="headerNavigation">Cart Contents</a> |
            <a href="login.php" class="headerNavigation">Log In</a>

        
        
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
