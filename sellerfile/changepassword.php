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
<script language="JavaScript">
function check()
{
var t1=document.account_password.password_current.value;
var t2=document.account_password.password_new.value;
var t3=document.account_password.password_confirmation.value;
if(t1=="" || t2=="" || t3=="")
{
alert("Please enter Your Password");
}
}
</script>
   

   

   

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
        <li><nobr><a href="selleraccount.php" class="headerNavigation">My Account</a></nobr></li>
        <li><nobr><a href="shopping_cart.php" class="headerNavigation">Cart Contents</a></nobr></li>
                        <li><nobr><a href="../logoff.php" class="headerNavigation">Log Off</a></nobr></li>
              </ul>
    </div>
  </div>
 <div id="page_header">
    <div id="page_header_inner"><img src="image/header1.jpg"> </div>
  </div>
  <div id="page_breadcrumb">

    <table width="100%" border=0>
   
    <tr valign="middle">        
<td align="left"><a href="http://www.icloudcenter.net/demos/icart/" class="headerNavigation">Top</a> &raquo; <a href="selleraccount.php" class="headerNavigation">My Account</a> &raquo; <a href="changepassword.php" class="headerNavigation">Change Password</a></td>
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

        
<div class="curtainBox minimized" id="filter6" style="width: 200px;">
				<div class="header switch" style="height: 30px;" onclick="saveFilterBlockState(6);">

					<a href="reviews.php"><img src="image/reviews.png" border="0"></a>
				</div>              
				<div class="toggleBox curtain filterValues" id="filter6PopularFilterValues">
			          <p style="margin-bottom: 3px;" id="boxReviews"><table class="infoBox" border="0" cellpadding="1" cellspacing="0" width="100%">
  <tbody><tr>
    <td><table class="infoBoxContents" border="0" cellpadding="3" cellspacing="0" width="100%">
  <tbody><tr>
    <td><img src="image/pixel_trans.gif" alt="" border="0" width="100%" height="1"></td>
  </tr>

  <tr>
    <td class="boxText">There are currently no product reviews</td>
  </tr>
  <tr>
    <td><img src="image/pixel_trans.gif" alt="" border="0" width="100%" height="1"></td>
  </tr>
</tbody></table>
</td>
  </tr>

</tbody></table>
</p></div></div><!-- reviews_eof //--></div>      <!-- left_navigation_eof //-->
      </div>
    </td>


<!-- body_text //-->
<td class="central_column" width="100%" valign="top">
    <form name="account_password" action="selleraccount.php" method="post"><input name="action" value="process" type="hidden"><table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tbody><tr>
        <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody><tr>

            <td class="pageHeading">My Password</td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td><img src="image/pixel_trans.gif" alt="" border="0" width="100%" height="10"></td>
      </tr>
      <tr>

        <td><table border="0" cellpadding="2" cellspacing="0" width="100%">
          <tbody>
          <tr>
            <td><table class="infoBox" border="0" cellpadding="2" cellspacing="1" width="100%">
              <tbody><tr class="infoBoxContents">
                <td><table border="0" cellpadding="2" cellspacing="2">
                  <tbody><tr>
                    <td class="main">Current Password:</td>
                    <td class="main"><input name="password_current" maxlength="40" type="password">&nbsp;<span class="inputRequirement">*</span></td>

                  </tr>
                  <tr>
                    <td colspan="2"><img src="image/pixel_trans.gif" alt="" border="0" width="100%" height="10"></td>
                  </tr>
                  <tr>
                    <td class="main">New Password:</td>
                    <td class="main"><input name="password_new" maxlength="40" type="password">&nbsp;<span class="inputRequirement">*</span></td>
                  </tr>

                  <tr>
                    <td class="main">Password Confirmation:</td>
                    <td class="main"><input name="password_confirmation" maxlength="40" type="password">&nbsp;<span class="inputRequirement">*</span></td>
                  </tr>
                </tbody></table></td>
              </tr>
            </tbody></table></td>
          </tr>

        </tbody></table></td>
      </tr>
      <tr>
        <td><img src="image/pixel_trans.gif" alt="" border="0" width="100%" height="10"></td>
      </tr>
      <tr>
        <td><table class="infoBox" border="0" cellpadding="2" cellspacing="1" width="100%">
          <tbody><tr class="infoBoxContents">
            <td><table border="0" cellpadding="2" cellspacing="0" width="100%">

              <tbody><tr>
                <td width="10"><img src="image/pixel_trans.gif" alt="" border="0" width="10" height="1"></td>
                <td><a href="selleraccount.php"><img src="image/button_back.gif" alt="Back" title=" Back " border="0" width="100" height="22"></a></td>
                <td align="right"><input type="submit" value="CHANGE" name="submit" onclick=check()></td>
                <td width="10"><img src="image/pixel_trans.gif" alt="" border="0" width="10" height="1"></td>
              </tr>
            </tbody></table></td>
          </tr>
        </tbody></table></td>

      </tr>
    </tbody></table></form></td>
  </tr>
</tbody></table>
<!-- body_eof //-->
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

                    <a href="selleraccount.php" class="headerNavigation">My Account</a> |
            <a href="shopping_cart.php" class="headerNavigation">Cart Contents</a> |
             
            <a href="../logoff.php" class="headerNavigation">Log Off</a>

        

        
        
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






