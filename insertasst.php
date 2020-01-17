<?php 
include('connection.php');
session_start();
$asstname=$_POST['asst_name'];
$date=$_POST['date'];
$subject=$_POST['subject'];
$faculty=$_POST['faculty'];
if(isset($_POST['submit']))
{
$sql="insert into  assessment(asst_name,date,subject,faculty) values ('".$asstname."','".$date."','".$subject."','".$faculty."')";
if(!$result=$conn->query($sql))
{
	die("there was an error in running the query ['.$conn->error.']");
}
else
{
	echo "thank you";
}
mysqli_close($conn);
}
?>