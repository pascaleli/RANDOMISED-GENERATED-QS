
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
 
<body>
<?php
session_start();
include("header.php");
extract($_POST);
include("database.php");
$_SESSION[total]=$Tid3;

$rs=mysql_query("select * from test where test_id =='$Tid2'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Test ID Already Exists</div>";
	exit;
}
$query="insert into subject(subid,sub_name) values('$Sid2','$Sid')";

$query2="insert into test(test_id,subid,test_name,total_question) values('$Tid2','$Sid2','$Tid','$Tid3')";
$rs=mysql_query($query)or die("Could Not Perform the Query N1");
$rs2=mysql_query($query2)or die("Could Not Perform the Query N2");




/*$rs2=mysql_query("select * from test where test_id =='$Tid2'");

if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Test ID Already Exists</div>";
	exit;
}
$query="insert into user(subid,sub_name) values('$Sid2','$Sid')";
$rs=mysql_query($query)or die("Could Not Perform the Query N1");
*/

echo "<br><br><br><div class=head1>Your Subject and test details  Created Sucessfully</div>";
echo "<br><div class=head1>Please start setting your questions for this subject</div>";
echo "<br><div class=head1><a href=lecquesfm.php?tt=$Tid3>Set Questions</a></div>";
 
?>
</body>
</html>


