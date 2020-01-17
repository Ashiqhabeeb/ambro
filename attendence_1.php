<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> dash board</title>
  <!-- Custom fonts for this template-->
  <link  rel="stylesheet" href="fontawesome/css/all.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>
			.btd{
			margin-top:-550px;
		}
		@media(min-width:360px) and (max-width:768px){
			.btd{
				margin-top:-500px;
			}
		}
		@media(min-width:750px) and (max-height:1050px){
			.btd{
				margin-top:-500px;
			}
		}
		
		
  
  </style>
</head>

<body id="page-top">


<!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
			<div>
		<img src="img/log.svg" class="img-fluid">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php" class="text-center">
          <i class="fas fa-user user-font px-4"></i></a></li>

          <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-bell"></i>
          <span>Add Student</span>
        </a>
      </li>

      <!-- Divider -->
	   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user-graduate"></i>
          <span>Student leave</span>
        </a>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Assessments</span>
        </a>

      </li>

      <!-- Attendance Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities" href="">
          <i class="fas fa-school"></i>
          <span>Attendance</span>
        </a>
      </li>
     

      <!-- Nav Item -ptrevious details-->
   
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
		<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="#">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="#"  >
                <i class="fas fa-user "><p> Myprofile</p></i>
              </a>
              
            </li>

			<li class="nav-item">
              <a class="nav-link " href="#" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
		</div>
</div> 






<div class="container border">
	<!---------------------------------------attendence marking------------------------------------------->
	<div class="row  btd">	
		<div class="col-md-12">
		   <h4 class="text-info">Attendence Record</h4>
		</div>
	</div>
	<!----------------------------------2nd row------------------------------------------------>
	<form action="insertattend.php" method="POST">
	<div class="row">
		<div class="col-md-1">
		
		
			<select name="batch">
			<option value="">Batch</option>
			<option value="">UI</option>
			<option value="">JSD1</option>
			<option value="">JSD2</option>
			<option value="">ED</option>
			</select>
		   
		</div>
		
		
		<div class="col-md-2">
		<input type="date" name="date">
		   
		</div>
		
		
		<div class="col-md-1">
			


			
			
		   
		</div>

	
	
		
		
	
	</div>
	
	
	<!
<!-----------------------------table------------------------------------------------------->
Name:<input type="text" style="margin:10px" name="name"><br>
			Hour1:<input type="text" style="margin:10px" name="hour1"><br>
			Hour2:<input type="text" style="margin:10px" name="hour2"><br>
			Hour3:<input type="text" style="margin:10px" name="hour3"><br>
			Hour4:<input type="text" style="margin:10px" name="hour4">
      <div class="text-center py-1">
					<button class="btn btn-info text-white px-5" id="submit" name="submit">Update</button>
					</div>

  </form>
	</div></div>
	
	
	</div>


	
	
	
	
	



 <!-- Footer -->
      <footer class="">
          <div class="copyright text-center bg-gradient-primary py-2 text-light">
            <span>Copyright &copy; Orisys Academy 2019-2020</span>
        </div>
      </footer>
      <!-- End of Footer -->
</div>
    </div>
    <!-- End of Content Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="js/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
	$("table").hide();
	$("#show").click(function(){
	$("table").show();
});
	
});
</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="css/proper.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>
</body>

</html>
