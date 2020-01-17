<?php 
include('connection.php');
session_start();
$Name=$_POST['name'];
$Phone=$_POST['phoneno'];
$Email=$_POST['email'];
$Qualification=$_POST['qual'];
$Batch_in_charge=$_POST['batch'];
$Username=$_POST['username'];
$Password=$_POST['password'];
if(isset($_POST['submit']))
{
$sql="insert into add_faculty(name,phoneno,email,qualification,batch,username,password) values ('".$Name."','".$Phone."','".$Email."','".$Qualification."','".$Batch_in_charge."','".$Username."','".$Password."')";
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