<html dir="LTR" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Online Art Gallery</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script language="javascript" >
function check()
{
var gn=document.create_account.gender.value;
var fn=document.create_account.firstname.value;
var ln=document.create_account.lastname.value;
var dob=document.create_account.dob.value;
var ea=document.create_account.email_address.value;
var sa=document.create_account.street_address.value;
var pc=document.create_account.postcode.value;
var ct=document.create_account.city.value;
var st=document.create_account.state.value;
var tele=document.create_account.telephone.value;
var pass=document.create_account.password.value;
var passc=document.create_account.confirmation.value;
if(gn=="" || fn=="" || ln=="" || dob=="" || ea=="" || sa=="" || pc==""  || ct=="" || st=="" || tele=="" || pass=="" || passc=="")
{
alert("NO FIELDS CAN BE LEFT BLANK");

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
        <li><nobr><a href="login.php" class="headerNavigation">My Account</a></nobr></li>
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
<td align="left"><a href="http://www.icloudcenter.net/demos/icart/" class="headerNavigation">Top</a> &raquo; <a href="index.php" class="headerNavigation">Catalog</a>&raquo; <a href="create_account.html" class="headerNavigation">Create Account</a> » <a href="create_account.php" class="headerNavigation">Create Customer Account</a></td>
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
<!-- shopping_cart_eof //--><!-- reviews //-->

        
<!-- reviews_eof //--></div>
      <!-- left_navigation_eof //-->

      </div>

    </td>




<td class="central_column" width="100%" valign="top">
      <form name="create_account" action="create_account1.php" method="post" enctype="multipart/form-data"><input type="hidden" name="action" value="process">
        <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tr>

            <td class="pageHeading">My Account Information</td>

          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
      </tr>
      <tr>

        <td class="smallText"><br><font color="#FF0000"><small><b>NOTE:</b></font></small> If you already have an account with us, please login at the <a href="login.php"><u>login page</u></a>.</td>
      </tr>
      <tr>
        <td><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
      </tr>
      <tr>

        <td><table border="0" width="100%" cellspacing="0" cellpadding="2">
          <tr>
            <td class="main"><b>Your Personal Details</b></td>
           <td class="inputRequirement" align="right">* Required information</td>
          </tr>
        </table></td>
      </tr>
      <tr>

        <td><table border="0" width="100%" cellspacing="1" cellpadding="2" class="infoBox">
          <tr class="infoBoxContents">
            <td><table border="0" cellspacing="2" cellpadding="2">
              <tr>
                <td class="main">Gender:</td>
                <td class="main"><input type="radio" name="gender" value="Male">&nbsp;&nbsp;Male&nbsp;&nbsp;<input type="radio" name="gender" value="Female">&nbsp;&nbsp;Female&nbsp;<span class="inputRequirement">*</span></td>
              </tr>

              <tr>
                <td class="main">First Name:</td>
                <td class="main"><input type="text" name="firstname">&nbsp;<span class="inputRequirement">*</span></td>
              </tr>
              <tr>
                <td class="main">Last Name:</td>
                <td class="main"><input type="text" name="lastname">&nbsp;<span class="inputRequirement">*</span></td>

              </tr>
              <tr>
                <td class="main">Date of Birth:</td>
                <td class="main"><input type="text" name="dob">&nbsp;<span class="inputRequirement">* (eg. 05/21/1970)</span></td>
              </tr>
              <tr>
                <td class="main">E-Mail Address:</td>

                <td class="main"><input type="text" name="email_address">&nbsp;<span class="inputRequirement">*</span></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>

      <tr>
        <td><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>

      </tr>
      <tr>
        <td class="main"><b>Your Address</b></td>
      </tr>
      <tr>
        <td><table border="0" width="100%" cellspacing="1" cellpadding="2" class="infoBox">
          <tr class="infoBoxContents">
            <td><table border="0" cellspacing="2" cellpadding="2">

              <tr>
                <td class="main">Street Address:</td>
                <td class="main"><input type="text" name="street_address">&nbsp;<span class="inputRequirement">*</span></td>
              </tr>
              
              <tr>
                <td class="main">Post Code:</td>
                <td class="main"><input type="text" name="postcode">&nbsp;<span class="inputRequirement">*</span></td>
              </tr>
              <tr>
                <td class="main">City:</td>

                <td class="main"><input type="text" name="city">&nbsp;<span class="inputRequirement">*</span></td>
              </tr>
              <tr>
                <td class="main">State/Province:</td>
                <td class="main"><select name="state"><option value="" selected="selected">Please Select</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu & Kashmir">Jammu & Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="kerala">kerala</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option>
<option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tripura">Tripura</option>
<option value="Uttarakhand">Uttarakhand</option><option value="Utter Pradesh">Utter Pradesh</option><option value="West Bengal">West Bengal</option></select>&nbsp;<span class="inputRequirement">*                </td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
      </tr>
      <tr>

        <td class="main"><b>Your Contact Information</b></td>
      </tr>
      <tr>
        <td><table border="0" width="100%" cellspacing="1" cellpadding="2" class="infoBox">
          <tr class="infoBoxContents">
            <td><table border="0" cellspacing="2" cellpadding="2">
              <tr>
                <td class="main">Telephone Number:</td>

                <td class="main"><input type="text" name="telephone">&nbsp;<span class="inputRequirement">*</span></td>
              </tr>
              
            </table></td>
          </tr>

        </table></td>
      </tr>
      <tr>
        <td><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
      </tr>
            <tr>
        <td><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
      </tr>
      <tr>
        <td class="main"><b>Your Password</b></td>

      </tr>
      <tr>
        <td><table border="0" width="100%" cellspacing="1" cellpadding="2" class="infoBox">
          <tr class="infoBoxContents">
            <td><table border="0" cellspacing="2" cellpadding="2">
              <tr>
                <td class="main">Password:</td>
                <td class="main"><input type="password" name="password" maxlength="40">&nbsp;<span class="inputRequirement">*</span></td>

              </tr>
              <tr>
                <td class="main">Password Confirmation:</td>
                <td class="main"><input type="password" name="confirmation" maxlength="40">&nbsp;<span class="inputRequirement">*</span></td>
              </tr>
            </table></td>
          </tr>
        </table></td>

      </tr>
      <tr>
        <td><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
      </tr>
      <tr>
        <td><table border="0" width="100%" cellspacing="1" cellpadding="2" class="infoBox">
          <tr class="infoBoxContents">
            <td><table border="0" width="100%" cellspacing="0" cellpadding="2">
              <tr>

                <td width="10"><img src="image/pixel_trans.gif" border="0" alt="" width="10" height="1"></td>
                <td><input type="image" src="image/button_continue.gif" border="0" alt="Continue" name="Continue" onclick=check()></td>
                <td width="10"><img src="image/pixel_trans.gif" border="0" alt="" width="10" height="1"></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></form></td>

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

                    <a href="login.php" class="headerNavigation">My Account</a> |
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