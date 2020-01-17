<?php 
include('connection.php');
session_start();
$Name=$_POST['name'];
$Dob=$_POST['dob'];
$Gender=$_POST['gender'];
$Mobile=$_POST['phoneno'];
$Email=$_POST['email'];
$Batch=$_POST['batch'];
$Qual=$_POST['qualification'];
$Username=$_POST['username'];
$Password=$_POST['password'];
if(isset($_POST['submit']))
{
$sql="insert into add_student(name,dob,gender,phoneno,email,batch,qualification,username,password) values ('".$Name."','".$Dob."','".$Gender."','".$Mobile."','".$Email."','".$Batch."','".$Qual."','".$Username."','".$Password."')";
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