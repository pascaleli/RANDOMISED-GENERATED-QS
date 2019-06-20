
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Signup success</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width.initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">

<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
 
<body>
<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysql_query("select * from lecturer where username =='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="insert into lecturer(name,username,password,city,address,phone_number,email) values('$name','$lid','$pass','$city','$address','$phone','$email')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo "<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href='#' style ='strong'><i>Ramdomized Generated Questions</i></a>
        </div>
        
      </div>
    </div><br>

<div class='container-fluid'>
  <div class='row'>
        <div class='col-md-2' style='background-color:lightgrey'><!--Sidebar-->
          <ul class='nav nav-sidebar' style='position:fixed;'>
           <li style=' color: red'><b>You Signed Up As LECTURER <span class='glyphicon glyphicon-hand-right'></span></b></li>
            <li class='active'><a href='#'>Overview <span class='glyphicon glyphicon-user'></span></a></li>

            <li><a href='contactus.php'>Contact Us <span class='glyphicon glyphicon-list-alt'></span></a></li>
            <li><a href='#'>Location <span class='glyphicon glyphicon-user'></span></a></li>
            <li><a href='signout.php'>Sign Out <span class='glyphicon glyphicon-log-out'></span></a></li>
            <li><a href='index.php'>Home <span class='glyphicon glyphicon-home'></span></a></li>

            <li><a href='#'>Profile <span class='glyphicon glyphicon-user'></span></a></li>
            <li><a href='about.php'>About Us  <span class='glyphicon glyphicon-user'></span></a></li>
          </ul>
        </div><!--Sidebar-->

         <div class='col-md-10'>
          <h1 class='page-header'><b>Welcome To our Oline Examination Sytem |<i> $lid </i></b></h1>
<br/><br/>";

echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";
 
 
?>
</body>
</html>

