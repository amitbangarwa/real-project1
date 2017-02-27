<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">

<html dir="LTR" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Online Art Gallery</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="lytebox/css/lytebox.css" type="text/css" media="screen" />

<script type="text/javascript" language="javascript" src="lytebox/js/lytebox.js"></script>
<script language="JavaScript">
function check() 
{
var uid=document.quick_find.keywords.value;

if(uid=="")
{
	alert("Please enter the Keywords For Search !");
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
          <li><nobr>                          </nobr></li>
          <li><nobr><a href="index.php">Home</a></nobr></li>
        <li><nobr><a href="about_us.php" class="headerNavigation">About Us</a></nobr></li>
        <li><nobr><a href="contact_us.php" class="headerNavigation">Contact Us</a></nobr></li>
           <li><nobr><a href='selleraccount.php' class='headerNavigation'>My Account</a></nobr></li>
<li><nobr><a href='../logoff.php' class='headerNavigation'>Log Off</a></nobr></li>

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
     
        <form name="quick_find" action="advanced_search_result.php" method="get" style="padding:0px; margin:0px; border:0px;">
          <table class="boxText" align="right" border=0>
          <tr valign="middle">

            <td valign="top">
              <b>Quick Search:</b> <input type="text" name="keywords" size="10" maxlength="50" style="width: 130px">&nbsp;
            </td>
            <td style="padding-top:3px;">
              <input name="action" value="submit" type="hidden"><input type="image" src="image/button_quick_find.gif" border="0" alt="Quick Search" title=" Quick Search ">
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
<!-- information_eof //-->
</div>
      <!-- left_navigation_eof //-->

      </div>

    </td>

<!-- body_text //-->


<td class="central_column" width="100%" valign="top">
  

 <table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr>

            <td class="main">

            <!-- Main Text -->
<font size="4"  face="Times New Roman"><i><b>Paintings:</b></i></font>
<br><br>
<font size="3" face="Times New Roman">
Welcome to Art Gallery's Paintings Homepage! Discover many acrylic and oil paintings from talented artists worldwide.
Enjoy exploring fascinating regions of the world through the religious, architecture, and abstract paintings of exceptional world artists.
Favorite categories include folk art, dance & music paintings, and the other painting section.
			<br><br>
            <!-- ////////// -->
</font>
            </td>
</tr>
<tr>
<td align="center"><font size="4"  face="Times New Roman"><b><i>Paintings by Subjects<br><br></i></b></font></td></tr>
<tr><td class="main">
<?php
$cn=mysql_connect("localhost","root","") or die("Error in connecting database");
$db=mysql_select_db("art_gallery",$cn);

$sql="select * from gallery where cat='Abstract'";
$rs=mysql_query($sql,$cn);
$rsitem=mysql_fetch_object($rs);

$sql1="select * from gallery where cat='Folk'";
$rs1=mysql_query($sql1,$cn);
$rsitem1=mysql_fetch_object($rs1);

$sql2="select * from gallery where cat='Dance'";
$rs2=mysql_query($sql2,$cn);
$rsitem2=mysql_fetch_object($rs2);

$sql3="select * from gallery where cat='Religious'";
$rs3=mysql_query($sql3,$cn);
$rsitem3=mysql_fetch_object($rs3);

$sql4="select * from gallery where cat='Architecture'";
$rs4=mysql_query($sql4,$cn);
$rsitem4=mysql_fetch_object($rs4);

$sql5="select * from gallery where cat='Animals'";
$rs5=mysql_query($sql5,$cn);
$rsitem5=mysql_fetch_object($rs5);

$sql6="select * from gallery where cat='Floral'";
$rs6=mysql_query($sql6,$cn);
$rsitem6=mysql_fetch_object($rs6);

$sql7="select * from gallery where cat='Nature'";
$rs7=mysql_query($sql7,$cn);
$rsitem7=mysql_fetch_object($rs7);

$sql8="select * from gallery where cat='People'";
$rs8=mysql_query($sql8,$cn);
$rsitem8=mysql_fetch_object($rs8);

echo'<table border="0" width="100%" cellspacing="0" cellpadding="0">';
echo'<tr>';

echo'<td class="main">';
echo"<a href='abstract.php'><img style='border: 1px solid rgb(4, 3, 1); margin: 5px; width: 156px;' src='art/$rsitem->img_name' width='100' border='0' height='150' > </a>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Abstract Painting</b>";
echo'</td>';

echo'<td class="main">';
echo"<a href='folk.php'><img style='border: 1px solid rgb(4, 3, 1); margin: 5px; width: 156px;' src='art/$rsitem1->img_name'  width='100' border='0' height='150' ></a>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Folk Painting</b>";
echo'</td>';

echo'<td class="main">';
echo"<a href='dance.php'><img style='border: 1px solid rgb(4, 3, 1); margin: 5px; width: 156px;' src='art/$rsitem2->img_name'  width='100' border='0' height='150'></a>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Dance & Music <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Painting</b>";
echo'</td>';
echo'</tr>';
echo'</table>';

echo'<table border="0" width="100%" cellspacing="0" cellpadding="0">';
echo'<tr>';
echo'<td>';
echo'<br><br>';
echo'</td>';
echo'</tr>';
echo'</table>';

echo'<table border="0" width="100%" cellspacing="0" cellpadding="0">';
echo'<tr>';
echo'<td class="main">';
echo"<a href='religious.php'><img style='border: 1px solid rgb(4, 3, 1); margin: 5px; width: 156px;' src='art/$rsitem3->img_name' width='100' border='0' height='150'></a>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Religious Painting</b>";
echo'</td>';

echo'<td class="main">';
echo"<a href='architecture.php'><img style='border: 1px solid rgb(4, 3, 1); margin: 5px; width: 156px;' src='art/$rsitem4->img_name'  width='100' border='0' height='150'></a>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Architecture Painting</b>";
echo'</td>';

echo'<td class="main">';
echo"<a href='animal.php'><img style='border: 1px solid rgb(4, 3, 1); margin: 5px; width: 156px;' src='art/$rsitem5->img_name'  width='100' border='0' height='150'></a>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Animals Painting</b>";
echo'</td>';
echo'</tr>';
echo'</table>';

echo'<table border="0" width="100%" cellspacing="0" cellpadding="0">';
echo'<tr>';
echo'<td>';
echo'<br><br>';
echo'</td>';
echo'</tr>';
echo'</table>';

echo'<table border="0" width="100%" cellspacing="0" cellpadding="0">';
echo'<tr>';
echo'<td class="main">';
echo"<a href='floral.php'><img style='border: 1px solid rgb(4, 3, 1); margin: 5px; width: 156px;' src='art/$rsitem6->img_name'  width='100' border='0' height='150'></a>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Floral Painting</b>";
echo'</td>';

echo'<td class="main">';
echo"<a href='nature.php'><img style='border: 1px solid rgb(4, 3, 1); margin: 5px; width: 156px;' src='art/$rsitem7->img_name'  width='100' border='0' height='150'></a>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Nature Painting</b>";
echo'</td>';

echo'<td class="main">';
echo"<a href='people.php'><img style='border: 1px solid rgb(4, 3, 1); margin: 5px; width: 156px;' src='art/$rsitem8->img_name' width='100' border='0' height='150'></a>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>People Painting</b>";
echo'</td>';
echo'</tr>';
echo'</table>';


?>
</td>
          </tr>

<tr>
<td class="main">
<font size="4" face="Times New Roman"><i><b><br><br>Spotlight on Paintings:<br><br></i></b></font>

<font size="3" face="Times New Roman">Paintings are one of the oldest art forms -- throughout history artists have played an important role in documenting social movements,
spiritual beliefs and general life and culture.
Art Gallery's collection of original paintings is a celebration of artistic freedom that ranges from personal interpretations of tradition,
to exploring the depths of surrealism.
The online gallery features an international collection hosting the works of established masters as well as newcomers, and has helped forge
the careers of many around the world such as Sunil Jaiswal and Andrea.
<br>
We hope you enjoy our collection!          
</font>
</td>
</tr>
<tr>

            <td><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>

          </tr>

          <tr>
<td>

<font size="3" face="Times New Roman">Welcome back seller! Would you like to see the products which you have posted? <a href="products.php"><u>click here</u></a></font>

    </td>      </tr>

          <tr>

            <td><img src="image/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>

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
      <a href="about_us.php" class="headerNavigation">About Us</a> |
      <a href="contact_us.php" class="headerNavigation">Contact Us</a> |

<a href='selleraccount.php' class='headerNavigation'>My Account</a> |


<a href='../logoff.php' class='headerNavigation'>Log Off</a>";

        
        
      </span>
      <span class="right">Copyright &copy; 2011 <a href="index.php">Artgallery</a>&nbsp;&nbsp;</span>
      <br />
      
      <span class="left">
      &nbsp;&nbsp;This Site is Developed by Amit Bangarwa, Prodyut Kumar Mondal, Randhir Kumar and Other Team mamber.   </span>

      
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


