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
    <td class="menuBoxContent"><a href="administrators.php" class="menuBoxContentLink">Administrators</a><br><a href="orders.php" class="menuBoxContentLink">Customers Orders</a><br><a href="query.php" class="menuBoxContentLink">Mailing</a></td>

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
<td class="pageHeading">Registerd Users</td></tr>
            <tr><td width="50%" valign="top">

<table width="100%" border="0" cellpadding="4" cellspacing="0">
  <tbody><tr class="dataTableHeadingRow">
    <td class="dataTableHeadingContent">Customers</td>
    <td class="dataTableHeadingContent">Date</td>
  </tr>
<?php
$cn=mysql_connect("localhost","root","") or die("Error in connecting database");
$db=mysql_select_db("art_gallery",$cn);
$sql="select * from customerinfo";
$rs=mysql_query($sql,$cn);
while($rsitem=mysql_fetch_object($rs))
{
 echo"<tr class='dataTableRow' onmouseover='rowOverEffect(this);' onmouseout='rowOutEffect(this);'>    
<td class='dataTableContent'><a href='customers.php?cID=47&amp;action=edit'><b>$rsitem->email_address</b></a></td>    <td class='dataTableContent'>$rsitem->date</td>  </tr> ";
}
?>
  <tr class="dataTableHeadingRow">
    <td class="dataTableHeadingContent">Artists</td>
    <td class="dataTableHeadingContent">Date</td>
  </tr>
<?php
$cn=mysql_connect("localhost","root","") or die("Error in connecting database");
$db=mysql_select_db("art_gallery",$cn);
$sql="select * from sellerinfo";
$rs=mysql_query($sql,$cn);
while($rsitem=mysql_fetch_object($rs))
{
echo"<tr class='dataTableRow' onmouseover='rowOverEffect(this);' onmouseout='rowOutEffect(this);'>    <td class='dataTableContent'><a href=''><b>$rsitem->em_add</b></a></td>    <td class='dataTableContent'>$rsitem->date</td>  </tr>";
}
?>  
</tbody></table> 

            </td>
            <td width="100%" valign="top">

<table width="100%" border="0" cellpadding="4" cellspacing="0">
  <tbody><tr class="dataTableHeadingRow">
    <td class="dataTableHeadingContent">Orders</td>
    <td class="dataTableHeadingContent">Total</td>
    <td class="dataTableHeadingContent">Date</td>

    <td class="dataTableHeadingContent">Status</td>
  </tr>
</tbody></table>
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