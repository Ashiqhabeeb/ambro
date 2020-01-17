<?php 
include('connection.php');
session_start();
$batch=$_POST['batch'];
$date=$_POST['date'];
$name=$_POST['name'];
$hour1=$_POST['hour1'];
$hour2=$_POST['hour2'];
$hour3=$_POST['hour3'];
$hour4=$_POST['hour4'];
if(isset($_POST['submit']))
{
$sql="insert into attendance(batch,date,name,hour1,hour2,hour3,hour4) values ('".$batch."','".$date."','".$name."','".$hour1."','".$hour2."','".$hour3."','".$hour4."')";
if(!$result=$conn->query($sql))
{
	die("there was an error in running the query ['.$conn->error.']");
}
else
{
	require_once "attendence_1.php";
}
mysqli_close($conn);
}
?>