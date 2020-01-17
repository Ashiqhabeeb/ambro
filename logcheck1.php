<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))	
{	
$name=$_POST['username'];
$password=$_POST['password'];
$sql="select * from add_faculty where username='".$name."' and password='".$password."' ";
$result=mysqli_query ($conn,$sql);
if(mysqli_num_rows($result)>0)
{	while($row=mysqli_fetch_assoc($result))
	{
      
        $_SESSION["id"]=$row["id"];
        echo $_SESSION['id'];
        header('location:faculty-login.php');
	}
}
	else
	{
		echo "email or password incorrect";
	}
}
mysqli_close($conn);
?>