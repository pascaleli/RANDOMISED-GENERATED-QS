<?php
session_start();
   include 'include/head.php';
include("header.php");
include("database.php");

echo "<h2 class=head1> Select Subject to delete</h2> <i style='color:red;'> Refresh page to see effects</i>";
echo "<a  href=deletetest.php><h2 class=head1><i>Click here to delete test </i></h2><a>";
echo "<form style= margin-left:20px name=myfm method=post action=delete.php >";
$rs=mysql_query("select * from subject");
echo "<table style='margin-left:30%'>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td class=style8><font size=4><input type=radio name=ans value='$row[1]'>$row[1]</font>";
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
	echo "You just deleted SUBJECT <b><i>'$ans'</b></i> AND ITS DETAILS";
	//mysql_query("delete * from subject where sub_name='$ans'");
	mysql_query("delete from `subject`where `subject`.`sub_name` = '$ans';")or die(mysql_error("could not perform querry"));
		mysql_query("delete from `test`where `test`.`subid` = '$ans2';")or die(mysql_error("could not perform querry"));

}

?>