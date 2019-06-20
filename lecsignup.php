<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width.initial-scale=1">
  <title>Forms</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  

  <title>New user signup </title>
<script language="javascript">
function check()
{
 
 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id or a Username");
  document.form1.lid.focus();
  return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
  document.form1.pass.focus();
  return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
  document.form1.cpass.focus();
  return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
  document.form1.cpass.focus();
  return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
  document.form1.name.focus();
  return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
  document.form1.address.focus();
  return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
  document.form1.city.focus();
  return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
  document.form1.phone.focus();
  return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
  document.form1.email.focus();
  return false;
  }
  e=document.form1.email.value;
    f1=e.indexOf('@');
    f2=e.indexOf('@',f1+1);
    e1=e.indexOf('.');
    e2=e.indexOf('.',e1+1);
    n=e.length;
 
    if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
    {
      alert("Please Enter valid Email");
      document.form1.email.focus();
      return false;
    }
  return true;
  }
  
</script>


</head>
<body style="background-color:#edf0f5";>


<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><b><i>Ramdomized Generated Questions</i></b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div><br><br><br>

     <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 sidebar jumbotro" style="background-color:lightgrey"><!--Sidebar-->
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="contactus.php">Contact Us</span></a></li>
            <li><a href="#">Location</a></li>
            <li><a href="index.php">Login</a></li>
            <li><a href="#">Help  <span class="glyphicon glyphicon-search"></span></a></li>
            <li><a href="about.php">About Us <span class="glyphicon glyphicon-user"></span></a></li>
            <li><a href="#">FaQ</a></li>
          </ul>
        </div><!--Sidebar-->

<div class="container-fluid">
<div class="row">
 
 <div class="col-md-4 col-md-offset-3">
 <form form name="form1" method="post" action="lecsignupuser.php" onSubmit="return check();">
   
   <div><h1 style="font-family:candara;text-decoration:underline"><b>Registration Form For Lecturer</b></h1></div>
   <h5 style="font-family:comic sans ms ;color:red;"><strong>Please Fill In The Form To Register Here</strong></h5>
  
  <label style="font-family:Lucida fax"><h4>Username</h4></label>
  <input type="text" class="form-control input-lg"  name="lid" placeholder="Username" required="">

  <label style="font-family:Lucida fax"><h4>Password</h4></label>
  <input type="text" class="form-control input-lg" name="pass" placeholder="password" required="">

   <label style="font-family:Lucida fax"><h4>Confirm Password</h4></label>
  <input type="password" class="form-control input-lg" name="cpass" id="cpass" placeholder="confirm password" required=""><br>

  <label style="font-family:Lucida fax"><h4>E-mail</h4></label>
  <input type="email" class="form-control input-lg" name="email" id="email" placeholder="username@gmail.com" required="">

  <label style="font-family:Lucida fax"><h4>Address</h4></label>
  <input type="ext" class="form-control input-lg" name="address" id="address" placeholder="Address" required="" >
  

   <label style="font-family:Lucida fax"><h4>City</h4></label>
  <input type="ext" class="form-control input-lg" name="city" id="city" placeholder="City" required="" >
  
  
 <label style="font-family:Lucida fax"><h4>Phone</h4></label>
  <input type="ext" class="form-control input-lg" name="phone" id="phone" placeholder="City" required="" ><br/><br/>
  

 

  <button type="submit" class="btn btn-danger btn-lg btn-block active" name="submit" ><h4>Submit</h4></button><br><br><br>
  </form>
   
</div>
</div>
</div><!--end container -->


  

<footer class="row">

<div class="col-md-4 col-md-offset-4">
    <kdb><h5 style="font-family:Lucida fax;">Founders</h5></kdb>
   <kdb><h5 style="font-family:Lucida fax;">&Website Developed By PASCAL FRANCIS OCRAN</h5><kdb>
 </div>


  
  </body>
</html>
