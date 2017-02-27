<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr" lang="en"><head>


<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="robots" content="noindex,nofollow">
<title>Artgallery Admin Panel</title>
<link rel="stylesheet" type="text/css" href="image/stylesheet.css">
<script language="javascript" src="image/general.js"></script>
</head><body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" onload="SetFocus();" bgcolor="#ffffff" marginheight="0" marginwidth="0">
<!-- header //-->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td colspan="2"><a href="adminhome.php"><font class="headertitle">Artgallery</font>Admin Panel</a></td>

  </tr>
  <tr class="headerBar">
    <td class="headerBarContent">&nbsp;&nbsp;<a href="adminhome.php" class="headerLink">Administration</a> &nbsp;|&nbsp; <a href="index.php" class="headerLink">Online Catalog</a></td>
    <!--  &nbsp;|&nbsp; <a href="http://www.oscommerce.com" class="headerLink">' . HEADER_TITLE_SUPPORT_SITE . '</a>' -->
<?php
  session_start();
if(isset($_SESSION['usrnm']))
echo' <td class="headerBarContent" align="right">Logged in as:<font color="black"> '. $_SESSION['usrnm'].' </font> (<a href="logoff.php" class="headerLink">Logoff</a>)&nbsp;&nbsp;</td>';
?>

  </tr>
</tbody></table><!-- header_eof //-->

<!-- body //-->

<table width="100%" border="0" cellpadding="2" cellspacing="2">
  <tbody><tr>
    <td width="125" valign="top"><table class="columnLeft" width="125" border="0" cellpadding="1" cellspacing="1">
<!-- left_navigation //-->

          <tbody><tr>
            <td>
<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tbody><tr>
    <td class="menuBoxContent"><a href="administrators.php" class="menuBoxContentLink">Administrators</a><br><a href="order.php" class="menuBoxContentLink">Orders</a><br><a href="query.php" class="menuBoxContentLink">Mailing</a></td>

  </tr>
</tbody></table>


            </td>
          </tr>
 </tbody></table></td>

<!-- body_text //-->
 <td width="100%" valign="top">
<table width="100%" border="0" cellpadding="2" cellspacing="0">
      <tbody><tr>
        <td><table width="100%" border="0" cellpadding="2" cellspacing="0" height="40">
          <tbody><tr>
            <td class="pageHeading">Artgallery</td>

            <td class="pageHeading" align="right"><form name="adminlanguage" action="adminhome.php" method="get"><select name="language" onchange="this.form.submit();"><option value="en" selected="selected">English</option></select></form></td>
          </tr>

        </tbody></table></td>
      </tr>
      <tr>
 <td><table width="100%" border="0" cellpadding="2" cellspacing="0">
          <tbody><tr>
<td width="50%" valign="top">
<?php
$cn=mysql_connect("localhost","root","") or die("Error in connecting database");
$db=mysql_select_db("art_gallery",$cn);
$sql="select * from contactus";
$rs=mysql_query($sql,$cn);
echo'<table width="60%" border="0" cellpadding="4" cellspacing="0">';
echo'  <tbody>';
echo'<tr>';

echo'<td class="main" align="left"><b><u>Name</u></b></td><td class="main"><b><u>Email Address</u></b></td><td class="main"><b><u>Enquery</u></b></td></tr>';

echo'</tr>';


while($rsitem=mysql_fetch_object($rs))
{
echo"<tr><td class='main' align='left'>$rsitem->name</td><td class='main'>$rsitem->em_add</td><td class='main' width='50%'>$rsitem->enquiry</td><tr>";
}

echo'</tr>';
echo'</tbody>';
echo'</table>';
?>




</td>
  </tr>
        </tbody></table></td>
      </tr>
    </tbody></table></td>
  </tr>

</tbody></table>
<!-- body_eof //-->



<!-- footer //-->
<br>
<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tbody><tr>
    <td class="smallText" align="center">
  
    </td>
  </tr>
  <tr>
    <td><img src="index.php_files/pixel_trans.gif" alt="" width="1" border="0" height="5"></td>

  </tr>
  <tr>
    <td class="smallText" align="center">Powered by Art gallery Center Copyright © 2011 Art GalleryCenter</td>
  </tr>
</tbody></table>
<!-- footer_eof //-->
<br>
</body></html>