<?php
require_once ('config.inc');
if ('isset($_POST['signin']))
require_once ('../mysql_connect.php');
if (empty($_POST['username']))
{
$u = FALSE;
echo '<p><font color="red" size="+1">You forget to Enter your Email Address!</font></p>;
}
else
{
$u = escape_data($_POST['username']);
}

if (empty($_POST['password']))
{
$p = FALSE;
echo '<p><font color="red" size="+1">You forget to Enter your Password!</font></p>;
}
else
{
$p = escape_data($_POST['password']);
}

if ($u && $p)
{
$query = "SELECT * FROM login WHERE username='$u' AND password=PASSWORD('$p')";
$result = @mysql_query ($query);
$row = mysql_fetch_array ($result, MYSQL_NUM);

if ($row)
{
$_SESSION['username'] = $row[0];

ob_end_clean();

header ("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/index.php");
exit();
}
else
{
echo '<p><font color="red" size="+1">The Email Address and Password entered do not match those on file.</font></p>;
}
mysql_close();
}
else
{
echo '<p><font color="red" size="+1">Please try again!</font></p>;
}
}
?>