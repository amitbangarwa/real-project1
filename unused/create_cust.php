<?php
if (isset($_POST['Continue']))
	{
 $cn=mysql_connect("localhost","root","") or die("Error in connecting database");
   $db=mysql_select_db("art_gallery",$cn);

  $gender=$_POST['gender'];
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$dob=$_POST['dob'];
$em_add=$_POST['email_address'];
$st_add=$_POST['street_address'];
$pincode=$_POST['postcode'];
$city=$_POST['city'];
$state=$_POST['state'];
$teleph=$_POST['telephone'];
$password=$_POST['confirmation'];

if($form="")
header("location:create_account.php");
else
{
$sql="INSERT INTO customer(gender,firstname,lastname,dob,email_address,street_address,post_code,city,state,telephone_no,password) VALUES ('$gender','$fn','$ln','$dob','$em_add','$st_add','$pincode','$city','$state','$teleph','$password')";
$rs=mysql_query($sql,$cn);
if($rs=='true')
header("location:index.php");
else
echo "<br><center><b>ERROR OCCURED</b></center>";
}
}
?>	
