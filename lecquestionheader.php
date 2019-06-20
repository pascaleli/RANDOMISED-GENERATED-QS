<?php
session_start();
include 'include/head.php';

error_reporting(1);
include("database.php");
//  include("index.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
?>
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{
 
 if(document.form1.Sid.value=="")
  {
    alert("Plese Enter the subject Name");
	document.form1.Sid.focus();
	return false;
  }
 
 if(document.form1.Sid2.value=="")
  {
    alert("Plese Enter subject ID");
	document.form1.Sid2.focus();
	return false;
  } 
  if(document.form1.Tid.value=="")
  {
    alert("Plese Enter Text Name");
	document.form1.Tid.focus();
	return false;
  }
  
  if(document.form1.Tid2.value=="")
  {
    alert("Plese Enter Text ID");
	document.form1.Tid2.focus();
	return false;
  }
  if(document.form1.Tid3.value=="")
  {
    alert("Plese Enter The total number of QUESTIONS for this Test");
	document.form1.Tid3.focus();
	return false;
  }
  
  return true;
  }
  
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
 
<body>


<?php
include("database.php");
include("header.php");
$_SESSION[total] =$Tid3;
?>

<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
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

<div class="container-fluid">
  <div class="row">
        <div class="col-md-2" style="background-color:lightgrey"><!--Sidebar-->
          <ul class="nav nav-sidebar" style="position:fixed;">
           <li style= "color: red"><b>You Signed Up As LECTURER<span class="glyphicon glyphicon-hand-right"></span></b></li>
            <li class="active"><a href="#">Overview <span class="glyphicon glyphicon-user"></span></a></li>

            <li><a href="contactus.php">Contact Us <span class="glyphicon glyphicon-list-alt"></span></a></li>
            <li><a href="about.php">About <span class="glyphicon glyphicon-list"></span></a></li>
            <li><a href="#">Location <span class="glyphicon glyphicon-user"></span></a></li>
            <li><a href="signout.php">Sign Out <span class="glyphicon-usericon glyphicon-log-out"></span></a></li>
            <li><a href="index.php">Home <span class="glyphicon glyphicon-home"></span></a></li>

            <li><a href='#'>Profile <span class='glyphicon glyphicon-user'></span></a></li>
            <li><a href='#'>About Us  <span class='glyphicon glyphicon-user'></span></a></li>
            <li><a href='#'>FaQ <span class='glyphicon glyphicon-comment'></span></a></li>
          </ul>
        </div><!--Sidebar-->

         <div class='col-md-10'>
<?php
        echo "  <h1 class='page-header'><b>SET DETAILS OF THE TEST|<i> $lid </i></b></h1>";
?>
<br/><br/>
<div class="jumbotron">
  <h1 style="color:green;">QUESTION DETAILS</h1><br/>
 <table width="100%" border="0">
   <tr>
     <td width="132" rowspan="2" valign="top"><span class="style8"></span></td>
   </tr>
   <tr>
     <td><form name="form1" method="post" action="lecquestionentry.php" onSubmit="return check();">
       <table width="301" border="0" align="left">
         <tr>
           <td><div align="left" class="style7">Subject Name </div></td>
           <td><input type="text" name="Sid"></td>
         </tr>
         <tr>
           <td><div align="left" class="style7">Subject ID </div></td>
           <td><input type="text" name="Sid2"></td>
         </tr>
         <tr>
           <td class="style7">Test Name</td>
           <td><input name="Tid" type="text" id="Tid"></td>
         </tr>
         <tr>
           <td class="style7">Test ID</td>
           <td><input name="Tid2" type="text" id="Tid2"></td>
         </tr>
         <tr>
           <td class="style7">Total Nunmber Of Questions</td>
           <td><input name="Tid3" type="text" id="Tid3"></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Submit ">
           </td>
         </tr>
       </table></div>
     </form></td>
   </tr>
 </table>
 <p>&nbsp; </p>
</body>
</html>
