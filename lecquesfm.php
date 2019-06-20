<?php
session_start();
include 'include/head.php';

?>

<?php

include("header.php");
include("database.php");



extract($_POST);
extract($_GET);
//$Tid3=$_SESSION['total'];
/*if (isset($submit)){
$query="insert into question(question,ans1,ans2,ans3,ans4,trueans) values('$Q','$O1','$O2','$O3','$O4','$CA')";
$rs=mysql_query($query)or die("Could Not Perform the Query1");
  exit;}
elseif(isset($submit1)){

echo "<h1 class='style8' align=center>Welcome to Online Exam $_SESSION[login]</h1> ";
    echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="lecquestionheader.php" class="style4">set questions </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Get results </a></td>
  </tr>
</table>';
   
    exit;

}*/
//extract($_SESSION);

//$totalqn=$tt;
//if(isset($_session['total']))
//{
//$total=$_session['total'];
//header("location:quiz.php");
//}
/*if(isset(submit))
{
  if($submit=='Next Question'){
$query="insert into question(question,ans1,ans2,ans3,ans4,trueans) values('$Q','$O1','$O2','$O3','$O4','$CA')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
exit;
    }
}*/

?>
<!--<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
 
<body>
<?php
//include("header.php");
?>
 <table width="100%" border="0">
   <tr>
     <td width="132" rowspan="2" valign="top"><span class="style8"><img src="images/connected_multiple_big.jpg" width="131" height="155"></span></td>
     <td width="468" height="57"><h1 align="center"><span class="style8">QUESTIONS</span></h1></td>
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
       </table>
     </form></td>
   </tr>
 </table>
 <p>&nbsp; </p>
</body>
</html>




























































<!--<?php
/*include("header.php");

extract($_POST);
include("database.php");



extract($_POST);
extract($_GET);
extract($_SESSION);

$totalqn=$Tid3;

if(isset(submit))
{
  if($submit=='Next Question'){
$query="insert into question(question,ans1,ans2,ans3,ans4,trueans) values('$Q','$O1','$O2','$O3','$O4','$CA')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
exit;
    }
}
*/
?>
-->



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{
 
 if(document.form1.Q.value=="")
  {
    alert("Plese Enter Your Question");
	document.form1.Q.focus();
	return false;
  }
 
 if(document.form1.O1.value=="")
  {
    alert("Plese Enter Optional answer");
	document.form1.O1 .focus();
	return false;
  } 
  if(document.form1.O2.value=="")
  {
    alert("Plese Enter Optional answer");
	document.form1.O2.focus();
	return false;
  }
  if(document.form1.O3.value=="")
  {
    alert("Plese Enter Optional answer");
  document.form1.O3.focus();
  return false;
  }
  if(document.form1.O4.value=="")
  {
    alert("Plese Enter Optional answer");
  document.form1.O4.focus();
  return false;
  }
  if(document.form1.CA.value=="")
  {
    alert("Plese Enter Correct answer");
  document.form1.CA.focus();
  return false;
  }
}
  
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>




 <body>
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
          <h1 class='page-header'><b>SET QUESTIONS AND THEIR CORRECT ANSWERS|<i> $lid </i></b></h1>
<br/><br/>";

<div class="jumbotron">
  <h1 style="color:green;">QUESTION </h1><br/>
<?php  
//for($qn=0; $qn <= $total; $qn++)
       // {
echo "<table width=100% border=0>";
  echo "<tr>
  <td width=132 rowspan=2 valign=top><span class=style8></span></td>
     <td width=468 height=57><h4 align=center><span class=style8><i>Provide optional answers in the option Area</i></span></h4></td>
   </tr>";
echo "<tr>
     <td>
     <form name=form1 method=post action=lecquestionfm2.php onSubmit=return check();>
       <table width=301 border=0 align=left>
        <tr>
           <td class=style7>Test Name</td>
           <td><input name=Tid type=text id=Tid></td>
         </tr>
         <tr>
           <td class=style7>Test ID</td>
           <td><input name=Tid2 type=text id=Tid2></td>
         </tr>
        <tr>
           <td valign=top class=style7>QUESTION</td>
           <td><textarea name=Q id=Q></textarea></td>$Tid3
         </tr>

        <tr>
           <td valign=top class=style7>Option A</td>
           <td><textarea name=O1 id=O1></textarea></td>
        </tr>
         
        <tr>
           <td valign=top class=style7>Option B</td>
           <td><textarea name=O2 id=O2></textarea></td>
         </tr>
         
         <tr>
           <td valign=top class=style7>Option C</td>
           <td><textarea name=O3 id=O3></textarea></td>
         </tr>
         
         <tr>
           <td valign=top class=style7>Option D</td>
           <td><textarea name=O4 id=O4></textarea></td>
         </tr>
         
         <tr>
           <td valign=top class=style7>Correct answer</td>
           <td><textarea name=CA id=CA></textarea></td>
         </tr>";
        // $qn=$qn +1; 
        // if($qn < $totalqn)
        echo "<tr>
           <td colspan=2 align=center class=errors>
      <input name=submit type=submit id=submit value='Next question'>
           </td>
           <td colspan=2 align=center class=errors>
      <input name=submit1 type=submit id=submit1 value='Done'>
           </td>
         </tr>";
         //else
    //echo "<tr><td><input type=submit name=submit value='Get Result'></td></tr>";
        echo"</form>";
  echo"</table>";
//}
/*if(isset(submit))
{
  //if($submit=='Next Question'){
$query="insert into question(question,ans1,ans2,ans3,ans4,trueans) values('$Q','$O1','$O2','$O3','$O4','$CA')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
exit;
 //   }
}*/
?></div>
 <p>&nbsp; </p>
</body>
</html>
