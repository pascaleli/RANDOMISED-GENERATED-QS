

<?php
session_start();
   include 'include/head.php';

?>
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
session_start();
include("header.php");
extract($_POST);
include("database.php");
//$_SESSION[total]=$Tid3;

 if (isset($submit)){
 $query="insert into question(test_id,test_name,question,ans1,ans2,ans3,ans4,trueans) values('$Tid2','$Tid','$Q','$O1','$O2','$O3','$O4','$CA')";

   //$query1="insert into useranswer(test_id,question,ans1,ans2,ans3,ans4,trueans) values('$Tid2','$Q','$O1','$O2','$O3','$O4','$CA')";


$rs=mysql_query($query)or die("Could Not Perform the Query1");
//$rs=mysql_query($query1)or die("Could Not Perform the Query2");

header("location:lecquesfm.php");

  exit;}

elseif(isset($submit1)){
  $query="insert into question(test_id,test_name,question,ans1,ans2,ans3,ans4,trueans) values('$Tid2','$Tid','$Q','$O1','$O2','$O3','$O4','$CA')";

    // $query1="insert into useranswer(test_id,question,ans1,ans2,ans3,ans4,trueans) values('$Tid2','$Q','$O1','$O2','$O3','$O4','$CA')";

$rs=mysql_query($query)or die("Could Not Perform the Query1");
//$rs=mysql_query($query1)or die("Could Not Perform the Query2");

  echo "<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href='#' style ='strong'><i> Online Examination System</i></a>
        </div>
        
      </div>
    </div><br>

<div class='container-fluid'>
  <div class='row'>
        <div class='col-md-2' style='background-color:lightgrey'><!--Sidebar-->
          <ul class='nav nav-sidebar' style='position:fixed;''>
           <li style=' color: red'><b>You Signed As A LECTURER <span class='glyphicon glyphicon-hand-right'></span></b></li>
            <li class='active'><a href='#'>Overview <span class='glyphicon glyphicon-user'></span></a></li>

            <li><a href='about.php'>About <span class='glyphicon glyphicon-list'></span></a></li>
            <li><a href='signout.php'>Sign Out <span class='glyphicon glyphicon-log-out'></span></a></li>
            <li><a href='index.php'>Home <span class='glyphicon glyphicon-home'></span></a></li>

            <li><a href='#'>About Us  <span class='glyphicon glyphicon-user'></span></a></li>
            <li><a href='#'>FaQ <span class='glyphicon glyphicon-comment'></span></a></li>
          </ul>
        </div><!--Sidebar-->

         <div class='col-md-10'>
          <h1 class='page-header' style='color:green;'><b>THANK YOU FOR SETTING YOUR QUESTIONS |<i> $_SESSION[login] </i></b></h1>
<br/><br/>";


echo "<h1 class='style8' align=center>Welcome to Online Exam $_SESSION[login]</h1> ";
    echo '
        <div class="jumbotron">

    <table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="lecquestionheader.php" class="style4">set questions </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Get results </a></td>
  </tr>
</table></div>';
   
    exit;

}
?>
</body>
</html>


