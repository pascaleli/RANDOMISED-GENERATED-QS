<?php
session_start();
   include 'include/head.php';
include("header.php");
include("database.php");
extract($_POST);

?>

<html>
<head>
<title>Welcome to Online Exam | </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php

echo "
<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
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
           <li style=' color: red'><b>Sign in with us As A STUDENT <span class='glyphicon glyphicon-hand-right'></span></b></li>

            <li><a href='#'>Contact Us <span class='glyphicon glyphicon-list-alt'></span></a></li>
            <li><a href='about.php'>About <span class='glyphicon glyphicon-list'></span></a></li>

            <li><a href='signout.php'>Sign Out <span class='glyphicon glyphicon-log-out'></span></a></li>
            <li><a href='index.php'>Home <span class='glyphicon glyphicon-home'></span></a></li>

            <li><a href='#'>FaQ <span class='glyphicon glyphicon-comment'></span></a></li>
          </ul>
        </div><!--Sidebar-->

         <div class='col-md-10'>
          <h1 class='page-header'><b>Welcome To our Oline Examination Sytem |<i> $_SESSION[login] </i></b></h1>
<br/><br/>";

  ?> 
   
<div class="jumbotron">
  <h1>Overview</h1>
  <p>
<h3 style="color: green"> Performance of student</h3>


  </p>
</div>
   <h2 style="color: green">Graph of performance</h2>
     <p><a class="btn btn-primary btn-lg" href="index.php" role="button">Get started with us</a></p>

   
  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><div class="container-fluid">
   <div class="row">
   <footer class="text-center" style="background-color:black;height:40px">
   
    <h3><small><B>&copyWebsite Developed By PASCAL FRANCIS OCRAN<B></small></h3>
     </footer>
   </div>
   </div>
   
</body>
</html>