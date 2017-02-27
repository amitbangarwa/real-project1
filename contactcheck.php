<html>
<?php
$nm=$_POST['name'];
$email=$_POST['email'];
$enq=$_POST['enquiry'];
$cn=mysql_connect("localhost","root","") or die("Error in connecting database");
$db=mysql_select_db("art_gallery",$cn);
if($nm=="" || $email=="" || $enq=="")
header("location:contact_us.php");
else
{
$sql="INSERT INTO contactus(name,em_add,enquiry) VALUES ('$nm','$email','$enq')";
$rs=mysql_query($sql,$cn);
if($rs=='true')
{
header("location:contact_us1.php");
}
else
echo "<br><center><b>ERROR OCCURED</b></center>";
echo "<br><a href='index.php'><center><b></h3>BACK TO HOME</h3></b></center></a>";
}
?>
</html>