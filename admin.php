<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr" lang="en"><head>
<script language="JavaScript">
function check() 
{
var uid=document.login.username.value;
var pwd=document.login.password.value;
if(uid=="" || pwd=="")
{
	alert("Please enter the Username or Password ");
}
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="robots" content="noindex,nofollow">
<title>Artgallery Admin Panel</title>
<link rel="stylesheet" type="text/css" href="image/stylesheet.css">
<script language="javascript" src="image/general.js"></script>
</head><body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" onload="SetFocus();" bgcolor="#ffffff" marginheight="0" marginwidth="0">
<!-- header //-->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td colspan="2"><a href='admin.php'><font class="headertitle">Artgallery</font>Admin Panel</a></td>

  </tr>
  <tr class="headerBar">
    <td class="headerBarContent">&nbsp;&nbsp;<a href="admin.php" class="headerLink">Administration</a> &nbsp;|&nbsp; <a href="index.php" class="headerLink">Online Catalog</a></td>

    <td class="headerBarContent" align="right">&nbsp;&nbsp;</td>
  </tr>

</tbody></table><!-- header_eof //-->

<!-- body //-->
<table width="100%" border="0" cellpadding="2" cellspacing="2">
  <tbody><tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0" height="40">
      <tbody><tr>
        <td class="pageHeading">Administrator Login</td>
        
      </tr>

    </tbody></table></td>
  </tr>
  <tr>
    <td>

<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tbody><tr class="infoBoxHeading">
    <td class="infoBoxHeading"><b>Administrator Login</b></td>
  </tr>

</tbody></table>
<form name="login" action="" method="post">
<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tbody><tr>
    <td class="infoBoxContent">Username:<br><input name="username" type="text"></td>
  </tr>
  <tr>
    <td class="infoBoxContent"><br>Password:<br><input name="password" maxlength="40" type="password"></td>
  </tr>

  <tr>
    <td class="infoBoxContent" align="center"><br><input name="submit" value="Login" type="submit" onclick=check()></td>
  </tr>
</tbody></table>
</form>

    </td>
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
    <td><img src="image/pixel_trans.gif" alt="" width="1" border="0" height="5"></td>
  </tr>
  <tr>
<td class="smallText" align="center">
<?php
if (isset($_POST['submit']))
	{
 $cn=mysql_connect("localhost","root","") or die("Error in connecting database");
   $db=mysql_select_db("art_gallery",$cn);

   $usrname=$_POST['username'];
   $passwrd=$_POST['password'];
if($usrname=="" ||  $passwrd=="")
header("location:admin.php");
else
{ 
$sql="select * from adminlogin where username='$usrname' and password='$passwrd'";
$rs=mysql_query($sql,$cn);
$rsitem=mysql_fetch_object($rs);
if($rsitem==true)
{
session_start();
$_SESSION['usrnm']=$usrname;
header("location:adminhome.php");
}
else
echo "<I><font color='red' size=4>Error: No match for Username and/or Password Please try again!!</font></I><br><br>";
}
}
?>

</td>

  </tr>
</tbody></table>
<!-- footer_eof //-->
<br>
</body></html>