<?php 
include("base1.php");
?>
<form action="insertstudent.php" name="login" method="post" class="m-auto py-3 p-3 form-style rounded">

		Name<input type="text" class="form-control inputcomponent mt-md-3 space" name='name' required="required">
			
		Dob<input type="text" class="form-control inputcomponent mt-md-3 space" name='dob' required="required">

		Gender<input type="text" class="form-control inputcomponent mt-md-3 space" name='gender' required="required">

		Mobile<input type="text" class="form-control inputcomponent mt-md-3 space" name='phoneno' required="required">
		
		Email<input type="text" class="form-control inputcomponent mt-md-3 space" name='email' required="required">
		

		Batch<input type="text" class="form-control inputcomponent mt-md-3 space" name='batch' required="required">
		Qualification<input type="text" class="form-control inputcomponent mt-md-3 space" name='qualification' required="required">

		Username<input type="text" class="form-control inputcomponent mt-md-3 space" name='username' required="required">
							
		Password<input type="password" class="form-control inputcomponent mt-md-3 space" name='password' required="required">
							
							<button type="submit" name="submit"class="btn-primary mt-md-3 px-5 rounded shadow">Submit</button>
								
								<button type="button" class="btn btn-default loginbutton m-t-5">
								<span class="google-button__icon">	
								</span>
						
								</button>

						</form>