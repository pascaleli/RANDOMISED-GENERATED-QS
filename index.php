<?php 

session_start();

   include 'include/head.php';

     //registering our users
     // for getting data  -- $_POST[] , $_GET[] , $_REQUEST
   //we are now going to check if the form has been filled  isset(), or !empty

    ?>
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
  $rs=mysql_query("select * from user where Username='$loginid' and password='$pass'");
  if(mysql_num_rows($rs)<1)
  {
    $found="N";
  }
  else
  {
    $_SESSION[login]=$loginid;
  }
}

// -----------------This is for lecturer login when the submit1 is clicked 

if(isset($submit1))
{
  $rs=mysql_query("select * from lecturer where Username='$loginid' and password='$pass'");
  if(mysql_num_rows($rs)<1)
  {
    $found="N";
  }
  else
  {
    $_SESSION[login]=$loginid;
  }
}

//---------------------------end

if (isset($_SESSION[login] , $submit1))
{
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
          <ul class='nav nav-sidebar' style='position:fixed;''>
           <li style=' color: red'><b>You Signed As A LECTURER <span class='glyphicon glyphicon-hand-right'></span></b></li>
            <li class='active'><a href='overview.php'>Overview <span class='glyphicon glyphicon-user'></span></a></li>

            <li><a href='contactus.php'>Contact Us <span class='glyphicon glyphicon-list-alt'></span></a></li>
            <li><a href='about.php'>About <span class='glyphicon glyphicon-list'></span></a></li>
            <li><a href='signout.php'>Sign Out <span class='glyphicon glyphicon-log-out'></span></a></li>
            <li><a href='index.php'>Home <span class='glyphicon glyphicon-home'></span></a></li>

            <li><a href='#'>FaQ <span class='glyphicon glyphicon-comment'></span></a></li>
          </ul>
        </div><!--Sidebar-->

         <div class='col-md-10'>
          <h1 class='page-header'><b>Welcome To our Online System |<i> $_SESSION[login] </i></b></h1>
<br/><br/>";

    echo '<div style="background-color:lightgrey; height: 250px; width:900px; ">
    <br/>
    <table  width="70%"   border="0" align="center" >
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="img/i1.png" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="lecquestionheader.php" class="style4"><b>set questions </b></a></td>
  </tr>
  <br/><br/>
  <tr>
    <td height="58" valign="bottom"><img src="img/i2.png" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="Lresult.php" class="style4"><b>Get results</b></a></td>
        <td valign="bottom"> <a href="delete.php" class="style4"><span class="glyphicon glyphicon-trash"><b>Delete Subject/Test</b></span></a></td>

  </tr>
</table></div>';
   
   
   

   echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><div class="container-fluid">
   <div class="row">
   <footer class="text-center" style="background-color:black;height:40px">
   
    <h3><small><B>&copyWebsite Developed By PASCAL FRANCIS OCRAN<B></small></h3>
     </footer>
   </div>
   </div>';
    exit;
    

}elseif(isset($_SESSION[login], $submit))
{

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
           <li style=' color: red'><b>You Signed As A STUDENT <span class='glyphicon glyphicon-hand-right'></span></b></li>
            <li class='active'><a href='overview.php'>Overview <span class='glyphicon glyphicon-user'></span></a></li>

            <li><a href='contactus.php'>Contact Us <span class='glyphicon glyphicon-list-alt'></span></a></li>
            <li><a href='about.php'>About <span class='glyphicon glyphicon-list'></span></a></li>
            <li><a href='signout.php'>Sign Out <span class='glyphicon glyphicon-log-out'></span></a></li>
            <li><a href='index.php'>Home <span class='glyphicon glyphicon-home'></span></a></li>

            <li><a href='about.html'>About Us  <span class='glyphicon glyphicon-user'></span></a></li>
            <li><a href='#'>FaQ <span class='glyphicon glyphicon-comment'></span></a></li>
          </ul>
        </div><!--Sidebar-->

         <div class='col-md-10'>
          <h1 class='page-header'><b>Welcome To our Online Sytem |<i> $_SESSION[login] </i></b></h1>
<br/><br/>";

    echo '<div style="background-color:lightgrey; height: 250px; width:900px; ">
    <br/>
    <table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="img/i1.png" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4"><b>Subject for Quiz </b></a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="img/i2.png" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4"><b>Result </b></a></td>
  </tr>
</table>';
   
   
   
     echo ' <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><div class="container-fluid">
   <div class="row">
   <footer class="text-center" style="background-color:black;height:40px">
   
    <h3><small><B>&copyWebsite Developed By PASCAL FRANCIS OCRAN<B></small></h3>
     </footer>
   </div>
   </div>'; 
   exit;

} 

// check if it is a lecturer and if there's a 




?>
<html>
<head>
<title>Ramdomized Generated Questions | </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>



     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style ="strong"><i>Randomized Generated Questions</i></a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" name="form1" method="post" action="">
            <div class="form-group">
            <input type="text" name="loginid" id="loginid2" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="pass" id="pass2" placeholder="Password" class="form-control">
            </div>
            <?php
      if(isset($found))
      {
        echo "Invalid Username or Password";
      }
      ?>
            <button  name="submit" id="submit" type="submit" class="btn btn-success">Login as student</button>
            <button name="submit1" id="submit1" type="submit" class="btn btn-success">Login as Lecturer</button>

          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div><br>

 <div class="container-fluid">
  <div class="row">
        <div class="col-md-2" style="background-color:lightgrey"><!--Sidebar-->
          <ul class="nav nav-sidebar" style="position:fixed;">
            <li class="active"><a href="overview.php">Overview <span class="glyphicon glyphicon-user"></span></a></li>
            <li><a href="contactus.php">Contact Us <span class="glyphicon glyphicon-list-alt"></span></a></li>
            <li><a href="about.php">About <span class="glyphicon glyphicon-list"></span></a></li>

            <li><a href="signup.php">Signup As STUDENT <span class="glyphicon glyphicon-hand-right"></span></a></li>
            <li><a href="lecsignup.php">Signup As LECTURER<span class="glyphicon glyphicon-hand-right"></span></a></li>


            <li><a href="#">Sign Out <span class="glyphicon glyphicon-log-out"></span></a></li>
            <li><a href="#">Help <span class="glyphicon glyphicon-search"></span></a></li>
            <li><a href="#">FaQ <span class="glyphicon glyphicon-comment"></span></a></li>
          </ul>
        </div><!--Sidebar-->

        <div class="col-md-10">
          <h1 class="page-header"><b>Welcome To our Online Sytem |</b><i> Login if you are a student/Lecturer</i> ELSE <i>Register with us to become one </i></h1>
<br/><br/>
          <div class="row"><!--first row-->
            <div class="col-md-9">
              <img src="img/p1.jpg" class="img-responsive img-rounded" alt="Generic placeholder thumbnail">
              <h4>Why Consider Online Exam</h4>
              <span class="text-muted">The type of exam (paper or online) and the type of
questions used in exams usually do not play a significant part
in the performance of students but rather students'
preparations and amount of study were the major factors in
obtaining positive results in the experimental exams
conducted. It was evident that good students performed well
either in paper exams or in online exams while poor students
had difficulties in both types of exams </span>
            </div>
            <!--
            <div class="col-md-3">
              <img src="img/p2.jpg" class="img-responsive img-rounded" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. </span>
            </div>
            <div class="col-md-3">
              <img src="img/p3.jpg" class="img-responsive img-rounded" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. </span>
            </div>-->
           </div><br/><br/><!--first row-->
           <div class="row">
             <div class="col-md-3">
              <img src="img/p4.jpg" class="img-responsive img-rounded" alt="Generic placeholder thumbnail">
              <h4>features of
online exams</h4>
              <span class="text-muted">some features of
online exams such as automatic results and feedback are
preferred by students and maybe included in practice exams
to improve students understanding of the subject material.  </span>
            </div>
            <div class="col-md-3"> <!--second row-->
           <img src="img/p5.jpeg" class="img-responsive img-rounded" alt="Generic placeholder thumbnail">
              <h4>larger number
sample of students</h4>
              <span class="text-muted">In
order to substantiate the results of this study, a larger number
sample of students should be used including students with
various majors (science and arts) and from both genders.  </span>
            </div>
            <div class="col-md-3">
              <img src="img/t6.jpg" class="img-responsive img-rounded" alt="Generic placeholder thumbnail">
              <h4>Online</h4>
              <span class="text-muted">Examinations improve teaching by helping the teacher's
planning and consistent student preparation. Examinations
are not limited to measure educational or societal objectives
and needs but incorporate in a way of coping with the
educational system. </span>
            </div>
            <div class="col-md-3">
              <img src="img/p7.jpg" class="img-responsive img-rounded" alt="Generic placeholder thumbnail">
              <h4>Paper</h4>
              <span class="text-muted">The paper exam is the
traditional paper and pen exam that requires students to write
their answers. First, this research paper gives the statistical
results of conducting two online exams and similar two paper
exams for two groups of people.. </span>
            </div>
             </div>

<br/><br/><br/>
          <h2 class="sub-header">SURVEY RESULT ON (ONLINE EXAMS  VS  PAPER EXAMS)</h2><br/>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>SURVEY QUESTIONS</th>
                  <th>% ONLINE EXAM (male)</th>
                  <th>% PAPER EXAM (male)</th>
                  <th>% ONLINE EXAM (Female)</th>
                  <th>% PAPER EXAM (Female)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>I prefer online exams </td>
                  <td>40</td>
                  <td>0/td>
                  <td>45</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>I prefer paper based exams</td>
                  <td>0</td>
                  <td>60</td>
                  <td>0</td>
                  <td>55</td>
                </tr>
                <tr>
                  <td>Online exams are more readable</td>
                  <td>60</td>
                  <td>12</td>
                  <td>61</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>Paper exams are more readable</td>
                  <td>12</td>
                  <td>43</td>
                  <td>5</td>
                  <td>53</td>
                </tr>
                <tr>
                  <td>I prefer to type on the screen (Online exams)</td>
                  <td>74</td>
                  <td>5</td>
                  <td>44</td>
                  <td>20</td>
                </tr>
                <tr>
                  <td>I prefer to write on paper (Online exams)</td>
                  <td>10</td>
                  <td>52</td>
                  <td>11</td>
                  <td>49</td>
                </tr>
                <tr>
                  <td>Online exams are less tiring</td>
                  <td>59</td>
                  <td>20</td>
                  <td>60</td>
                  <td>21</td>
                </tr>
                <tr>
                  <td>Paper exams are less tiring</td>
                  <td>21</td>
                  <td>63</td>
                  <td>15</td>
                  <td>59</td>
                </tr>
                <tr>
                  <td>Online exams are more relaxing</td>
                  <td>65</td>
                  <td>19</td>
                  <td>59</td>
                  <td>24</td>
                </tr>
                <tr>
                  <td>Paper exams are more relaxing</td>
                  <td>10</td>
                  <td>53</td>
                  <td>30</td>
                  <td>40</td>
                </tr>
                <tr>
                  <td>I like to get results right after exam</td>
                  <td>74</td>
                  <td>30</td>
                  <td>75</td>
                  <td>29</td>
                </tr>
                <tr>
                  <td>I like to get results at later time</td>
                  <td>14</td>
                  <td>35</td>
                  <td>20</td>
                  <td>40</td>
                </tr>
                <tr>
                  <td>I like automatic feedback</td>
                  <td>60</td>
                  <td>11</td>
                  <td>80</td>
                  <td>15</td>
                </tr>
                
              </tbody>
            </table>
          </div>
          </div>
          </div>
          </div><br>



   <div class="container-fluid">
   <div class="row">
   <footer class="text-center" style="background-color:black;height:40px">
   
    <h3><small><B>&copyWebsite Developed By PASCAL FRANCIS OCRAN<B></small></h3>
     </footer>
   </div>
   </div>

  </body>
</html>
