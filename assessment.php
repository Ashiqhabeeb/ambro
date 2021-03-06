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
        <!-- Divider -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="addstudent.php">
          <i class="fas fa-bell"></i>
          <span>Add Student</span>
        </a>
      </li>

	   <li class="nav-item">
        <a class="nav-link collapsed" href="student-leave.php" >
          <i class="fas fa-user-graduate"></i>
          <span>Student leave</span>
        </a>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="assessment.php" >
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Assessments</span>
        </a>

      </li>

      <!-- Attendance Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="attendence_1.php" >
          <i class="fas fa-school"></i>
          <span>Attendance</span>
        </a>
      </li>
     

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
              <a class="nav-link " href="faculty-login.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="faculty-profile.php"  >
                <i class="fas fa-user "><p> Myprofile</p></i>
              </a>
              
            </li>
			
			<li class="nav-item">
              <a class="nav-link " href="index.php" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
		</div>
</div> 
<!------------------------------content start------------------------------->
<!------------------------------------------section start----------------------------------------------->
<section>
	<div class="container">
		
			<h1 class="text-center">ASSESSMENT</h1>
			<div class="card mt-5">
				<div class="card-title m-4">
					<h2>Create assessment</h2>
				</div>
				<div class="card-body">
				<form method="post" action="insertasst.php">
					<div class="form-row">
						
						<div class="form-group col-md-6">
							<input type="text" placeholder="Assessment Name" name="asst_name" class="form-control" required>
						</div>
						<div class="form-group col-md-6">
							<input type="date"  name="date" class="form-control" required>
						</div>
					</div>
					<div class="form-row">
						
						
						<div class="form-group col-md-6">
							
							<select id="subject" class="form-control" name="subject" required>
								<option>Subject</option>
								<option>Python</option>
								<option>Java</option>
								<option>HTML</option>
							</select>
						</div>
						
						
						<div class="form-group col-md-6">
							
							
							<select id="faculty" class="form-control" name="faculty" required>
								<option>Faculty</option>
								<option>Ananthu</option>
								<option>Vijith</option>
								<option>John</option>
								<option>Gana</option>
								<option>Reshma</option>
								<option>Amitha</option>
							</select>
						
						</div>
					</div>
					<div class="text-center py-3">
					<button class="btn btn-info text-white px-5" id="create" name="submit">Create</button>
					</div>
				</form>
				</div>
			</div>
<!-------------------------------Student details------------------------------------------->
			
			
<!-------------------------------Student details------------------------------------------->
				
			
	</div>
</section>

<!------------------------------------------section end------------------------------------------------->
<!------------------------------content end------------------------------->
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
  <script src="js/bootstrap.min.js"></script>
  <script src="css/proper.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>
</body>

</html>
