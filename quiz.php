

<?php
session_start();
error_reporting(1);
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
/*$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
?>
<html>
<head>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
 
<body>
<?php
include("header.php");
 
 
$query="select * from question";
 
$rs=mysql_query("select * from question where test_id='$tid'",$cn) or die(mysql_error());
if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	$rrd=0;
	mysql_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	$_SESSION[trueans]=0;
	
}
else
{	
		if($submit=='Next Question' && isset($ans))
		{

			/*if($ans=='1')
			{ $ans=$row[3];}
			elseif ($ans=='2') {$ans = $row[4];}
			elseif ($ans=='3') {$ans = $row[5];}
			elseif ($ans=='4') {$ans = $row[6];}
				echo $ans;*/

				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				echo $ans;
			echo $row[3];
			if($ans=='1')
			{ $ans=$row[3];}
			elseif ($ans=='2') {$ans = $row[4];}
			elseif ($ans=='3') {$ans = $row[5];}
			elseif ($ans=='4') {$ans = $row[6];}
				mysql_query("insert into useranswer(sess_id, test_id, question, ans1,ans2,ans3,ans4,trueans,yourans) values ('".session_id()."', '$tid','$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				if($ans=='1')
			{ $ans=$row[3];}
			elseif ($ans=='2') {$ans = $row[4];}
			elseif ($ans=='3') {$ans = $row[5];}
			elseif ($ans=='4') {$ans = $row[6];}
				mysql_query("insert into useranswer(sess_id, test_id, question, ans1,ans2,ans3,ans4,trueans,yourans) values ('".session_id()."', '$tid','$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				mysql_query("insert into result(username,test_id,test_date,score) values('$login','$tid','".date("d/m/Y")."',$_SESSION[trueans])") or die(mysql_error());
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$rs=mysql_query("select * from question where test_id='$tid'",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";
 
exit;
}

$rd= rand(0,mysql_num_rows($rs));
while($rd == $rrd){
$rd= rand(0,mysql_num_rows($rs));
}
$rrd=$rd;
$rdd=rand($rd,$_SESSION[qn]);


mysql_data_seek($rs,$rdd );
$row= mysql_fetch_row($rs);
echo "<form  style= margin-left:20px name=myfm method=post action=quiz.php><br/><br/><br/><br/><b/><br/><b/>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";



 
if($_SESSION[qn]<mysql_num_rows($rs)-1)
echo "<br/><br/><br/><tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
echo "</table></table>";
?>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

 <div class="container-fluid">
   <div class="row">
   <footer class="text-center" style="background-color:black;height:40px; color:white; text-align:center;">
   
    <h3><small><B>&copyWebsite Developed By PASCAL FRANCIS OCRAN<B></small></h3>
     </footer>
   </div>
   </div>

</body>
</html>
