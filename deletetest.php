<?php
session_start();
   include 'include/head.php';
include("header.php");
include("database.php");

echo "<h2 class=head1> Select Test to delete</h2> <i style='color:red;'> Refresh page to see effects</i>";
echo "<form style= margin-left:20px name=myfm method=post action=deletetest.php >";

$rs=mysql_query("select * from question");
echo "<table style='margin-left:30%'>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td class=style8><font size=4><input type=radio name=ans value='$row[1]'>$row[1] { $row[2] $row[3] $row[4] $row[5] $row[6]}</font>";
echo "<br/><br/>";
}
echo "</table>";

echo "<br/><br/><tr><td><input type=submit  name=submit value=delete >";
if (isset($_POST['ans'])) {
	$ans=$_POST['ans'];
	$ans2=$row[0];
	/*}elseif (isset($_POST['ans4'])) {
			$ans=$row[4];
		}elseif (isset($_POST['ans5'])) {
			$ans=$row[5];
		}else {
			$ans=$row[6];*/
		}

if ($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['submit'])) {
	# code...
	echo "You just deleted Test <b><i>'$ans'</b></i> AND ITS DETAILS";
	//mysql_query("delete * from subject where sub_name='$ans'");
	mysql_query("delete from `question`where `question`.`test_name` = '$ans';")or die(mysql_error("could not perform querry"));
		mysql_query("delete from `test`where `test`.`subid` = '$ans2';")or die(mysql_error("could not perform querry"));

}

?>