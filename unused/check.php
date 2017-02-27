<html>
<body>
<?php
 require "mysql_connect.php";

   $usrname=$_POST['username'];
   $passwrd=$_POST['password'];
if($usrname=="" ||  $passwrd=="")
header("location:login.php");
else
{ 
$sql="select *from login where username='$usrname' and password='$passwrd'";
$rs=mysql_query($sql,$cn);
$rsitem=mysql_fetch_object($rs);
if($rsitem==true)
{
session_start();
$_SESSION['usrnm1']=$usrname;
header("location:index.php");
}
else
echo "<br><center><b><font color='red' size=4>CHECK USERNAME AND PASSWORD</font></b></center>";
}

?>
</body>
</html>