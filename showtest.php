
<?php
session_start();
 include 'include/head.php';
?>
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
extract($_GET);
echo "<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href='#' style ='strong'><i> Ramdomized Generated Questions</i></a>
        </div>
        
      </div>
    </div><br>

<div class='container-fluid'>
  <div class='row'>
        <div class='col-md-2' style='background-color:lightgrey'><!--Sidebar-->
          <ul class='nav nav-sidebar' style='position:fixed;'>
           <li style=' color: red'><b>You Signed Up As STUDENT<span class='glyphicon glyphicon-hand-right'></span></b></li>
            <li class='active'><a href='#'>Overview <span class='glyphicon glyphicon-user'></span></a></li>

            <li><a href='contact.php'>Contact Us <span class='glyphicon glyphicon-list-alt'></span></a></li>
            <li><a href='about.php'>About us <span class='glyphicon glyphicon-list'></span></a></li>
            <li><a href='signout.php'>Sign Out <span class='glyphicon glyphicon-log-out'></span></a></li>
            <li><a href='index.php'>Home <span class='glyphicon glyphicon-home'></span></a></li>

            <li><a href='#'>FaQ <span class='glyphicon glyphicon-comment'></span></a></li>
          </ul>
        </div><!--Sidebar-->

         <div class='col-md-10'>
          <h1 class='page-header'><b>Take a Test By Selecting a Quiz|<i> $lid </i></b></h1>
<br/><br/>";
?>
<div class="jumbotron">
  <h1 style="color:green;">QUIZES FOR THIS SUBJECT</h1>
  <?php
$rs1=mysql_query("select * from test where subid = '$subid'")or die("rs no");
$row1=mysql_fetch_array($rs1);
echo "<h1  style='padding-left:100pt'><font color=blue> $row1[1]</font></h1>";
$rs=mysql_query("select * from test where subid = '$subid'")or die("could not perform rs2");
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
	exit;
}
echo "<h2 class=head1 style='padding-left:100pt;'>Select Quiz Name to Take a Quiz </h2>";
echo "<table>";
 
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align = right><h4 style='padding-left:100pt';><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a></h4>";
}
echo "</table>";
?>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


   <div class="container-fluid">
   <div class="row">
   <footer class="text-center" style="background-color:black;height:40px;color:white;">
   
    <h3><small><B>&copyWebsite Developed By PASCAL FRANCIS OCRAN<B></small></h3>
     </footer>
   </div>
   </div>

</body>
</html>