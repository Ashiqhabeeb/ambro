<?php 
include("base.php");
?>
<form action="insertfaculty.php" name="login" method="post" class="m-auto py-3 p-3 form-style rounded">

		Name<input type="text" class="form-control inputcomponent mt-md-3 space" name='name' required="required">
			
		Phone<input type="text" class="form-control inputcomponent mt-md-3 space" name='phoneno' required="required">

		Email<input type="text" class="form-control inputcomponent mt-md-3 space" name='email' required="required">

		Qualification<input type="text" class="form-control inputcomponent mt-md-3 space" name='qual' required="required">

		Batch_in_charge<input type="text" class="form-control inputcomponent mt-md-3 space" name='batch' required="required">

		Username<input type="text" class="form-control inputcomponent mt-md-3 space" name='username' required="required">

							
		Password<input type="password" class="form-control inputcomponent mt-md-3 space" name='password' required="required">
							
							<button type="submit" name="submit"class="btn-primary mt-md-3 px-5 rounded shadow">Submit</button>
								
								<button type="button" class="btn btn-default loginbutton m-t-5">
								<span class="google-button__icon">	
								</span>
						
								</button>



						</form>