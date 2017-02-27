<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">

<html dir="LTR" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Online Art Gallery</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="lytebox/css/lytebox.css" type="text/css" media="screen" />

<script type="text/javascript" language="javascript" src="lytebox/js/lytebox.js"></script>


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
           <li><nobr><a href='selleraccount.php' class='headerNavigation'>My Account</a></nobr></li>
<li><nobr><a href='../logoff.php' class='headerNavigation'>Log Off</a></nobr></li>

</li>

</ul>
    </div>
  </div>
 <div id="page_header">
    <div id="page_header_inner"><img src="image/header1.jpg"> </div>
  </div>
  <div id="page_breadcrumb">

    <table width="100%" border=0>
   
    <tr valign="middle">        
<td align="left"><a href="index.php" class="headerNavigation">Top</a> &raquo; <a href="index.php" class="headerNavigation">Catalog</a></td>
        <td align="right">
          
        <form name="quick_find" action="quick_search.php" method="post" style="padding:0px; margin:0px; border:0px;">
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
<!-- information_eof //--></div>
      <!-- left_navigation_eof //-->

      </div>

    </td>

<!-- body_text //-->


<td class="central_column" width="100%" valign="top">
<?php
if (is_numeric ($_GET['pid']))
{
$pic=$_GET['pid'];
$cn=mysql_connect("localhost","root","") or die("Error in connecting database");
$db=mysql_select_db("art_gallery",$cn);
$sql="select * from gallery where picid=$pic";
$rs=mysql_query($sql,$cn);
$rsitem=mysql_fetch_object($rs);
echo"<table width='100%'>";
echo"<tr>";
echo"<td class='pageHeading' align='center' width='450px;' valign='top'>";
echo"<font size='5'  face='Times New Roman'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rsitem->picname</font>";
echo"</td>";
echo"<td class='pageHeading' valign='top'>";

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ $rsitem->price <br>";

echo"</td>";
echo"</tr>";

echo"<tr>";
echo "<td class='main'>";
echo"<font size='3' face='Times New Roman'><b>Artist</b></font> :  <a href='artistproduct.php?aid=$rsitem->artist_id'><font size='4' face='Times New Roman'><i>$rsitem->artistname</i></font></a><br>
<br><font size='3' face='Times New Roman'><b>Catogry</b> : </font><font size='3' face='Times New Roman'><i>$rsitem->cat</i></font><br><br>
<font size='3' face='Times New Roman'><b>Date Of Posted</b> :</font> <font size='3'><i>$rsitem->date</i></font><br>
<font size='3' face='Times New Roman'><br><b>Art Description</b></font><br><font size='3' face='Times New Roman'>$rsitem->des</font>";

echo "</td>";
echo "<td class='main' face='Times New Roman'>";
echo"<img style='border: 1px solid rgb(4, 3, 1); margin: 5px; width: 156px;' src='art/$rsitem->img_name' width='100' border='0' height='130' ><br><a href='art/$rsitem->img_name' rel='lytebox[vacation]' title='$rsitem->picname' ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click to enlarge</b></a>";
echo "</td>";
echo "</tr>";
echo"</table>";
}
?>
<table width='80%'>
<tr>
<td class="main">
<font size='3' face='Times New Roman'><i><b>Condition of painting :</b></i></font>
<br><br>
 <font size='3' face='Times New Roman'>The ARTGALLERY website and all of its content are copyrighted materials, protected by India and international copyright laws. The compilation of
 content on our website is the exclusive property of ARTGALLERY United, Inc. and may not be used for any purpose other than browsing, shopping, and using
 the information provided for your own private use and entertainment. Additionally, the ARTGALLERY name and logos are trademarks of ARTGALLERY United, Inc.
 Note that any product, process or technology described in the website may be the subject of other intellectual property rights reserved by ARTGALLERY
 United, Inc., and are not licensed herein.
<br><br>
You agree not to copy, reproduce, or modify any part of ARTGALLERY.com. This restriction includes copying, reproducing, or modifying any names, trademarks
 and logos which ARTGALLERY owns or has the right to use.
<br><br>
Site material, including pictures, product descriptions, site features, and artist biographies, may be downloaded onto one computer or printed out for
 personal, non-commercial use only, provided copyright, trademark, or other proprietary notices are not changed or deleted and, in the case of printing,
 that reproduction is not done in large quantities (defined as ten or more copies of a particular image, description, or biography). Any modification of
 the materials on our website or use of them for any other purpose will violate our intellectual property rights.
<br><br>
Everything you download--the images, and data--remains our property. We retain full and complete title to the all associated intellectual property rights.
 Site material may not be redistributed or sold, nor may it be reverse-engineered, disassembled, or otherwise converted to any other form.</font>
<br><br>
</td>
</tr>
</table>

</td>


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
  <a href="contact_us.php" class="headerNavigation">Contact Us</a> |

<a href='selleraccount.php' class='headerNavigation'>My Account</a> |
<a href='../logoff.php' class='headerNavigation'>Log Off</a>
        
        
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