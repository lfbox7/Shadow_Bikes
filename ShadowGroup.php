<?php
$Host = "localhost"; 
$UserName = "ShadowBikes";
$Password = "Shadow#Bikes.";
$DBName = "Shadow_Bikes";
$DBConnect = mysqli_connect ( "$Host", "$UserName", "$Password", "$DBName" ) or die ( '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Connection error: ' . $DBConnect -> connect_error . '.<br>Please try again.</h4></div></div></div>' );

if ( mysqli_connect_errno ())
{
    echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Connection error: ' . $DBConnect -> connect_error . '.<br>Please try again.</h4></div></div></div>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Page</title>
        <meta name="author" content="Leonard Box">
        <meta name="description" content="">
        <link href="css/main.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.typekit.net/hia7juf.css">
    </head>
    <body>
        <?php require('header.php'); ?>
		<main>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
					  <form action="CheckLogin.php" class="float-label" method="post" name="Login" spellcheck="false">
						  <?php
						  	if ( isset ( $_SESSION [ 'LoginFail' ]))
							{
								if ( $_SESSION [ 'LoginFail' ] == "True" )
								{
									echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Login Failed.</h4></div></div></div>';
								}
							}
						  ?>
							<div class="row">
								<div class="col-8 offset-4">
									<div class="form-group">
										<legend for="ReturningCustomers">Returning Customers</legend>
										<div class="control">
											<input type="email" id="MyEmail" name="MyEmail" placeholder="EMAIL" value="" maxlength="2147483647" autocorrect="off" spellcheck="false" autocomplete="on" aria-required="true">
											<label for="MyEmail">
												<span style="margin-left: -1.25em !important;">Email</span>
												<span class="required-indicator">*</span>
											</label>
										</div>
										<div class="control">
											<input type="password" id="MyPassword" name="MyPassword" placeholder="PASSWORD" value="" autocomplete="off" aria-required="true">
											<label for="MyPassword">
												<span style="margin-left: -1.25em !important;">Password</span>
												<span class="required-indicator">*</span>
											</label>
										</div>
										<a class="password-reset" id="password-reset" href="#" title="Forgot Password?" data-dlg-action="{&quot;test&quot;:100}" data-dlg-options="{&quot;width&quot;:700,&quot;height&quot;:250}">Forgot Password?</a>
										<button type="submit" class="btn btn-primary" name="Register">Sign In</button>	
										<div class="custom-check-holder">
											<div class="form-row  label-inline td-signed-in checkbox-box     show-floating-label show-check">
												<div class="custom-checkbox">
													<label for="RememberMe">Keep me signed in</label>
													<input class="input-checkbox" checked="checked" name="RememberMe" id="RememberMe" value="true" type="checkbox">
													<span class="custom-chekmark"></span>
													<span class="custom-chekmark"></span>
												</div>
											</div>
										</div>
										<div class="login-information">
											<div class="html-slot-container">
											  <div style="font-family: montserrat, sans-serif; font-size: 13px; font-weight: 700; padding: 3em 0em .5em;">Did you signup in store?</div>
											  <div style="font-family: montserrat, sans-serif; font-size: 13px;">Use "Join Now" and we'll help you set up a password so you can start earning points online.</div>
											</div>
										</div>
								  </div>
								</div>
        	                </div>						
					  </form>
					</div>
					<div class="vertical-line"></div>
					<div class="col-md-6">
						<?php
							if ( isset ( $_POST [ 'Register' ] ))
							{
								$Email = $_POST [ 'Email' ];
								$PhoneNumber = $_POST [ 'PhoneNumber' ];
								$ZipCode = $_POST [ 'ZipCode' ];	
								$Email = stripslashes ( $Email );
								$PhoneNumber = stripslashes ( $PhoneNumber );
								$ZipCode = stripslashes ( $ZipCode );
								$Email = mysqli_real_escape_string ( $DBConnect, $Email );
								$PhoneNumber = mysqli_real_escape_string ( $DBConnect, $PhoneNumber );
								$$ZipCode = mysqli_real_escape_string ( $DBConnect, $ZipCode );
								$Email = $_SESSION [ 'Email' ];
								$PhoneNumber = $_SESSION [ 'PhoneNumber' ];
								$ZipCode = $_SESSION [ 'ZipCode' ];
							}
						?>
						<form action="AddUser.php" class="float-label" method="post" name="Register" spellcheck="false">
							<div class="row">
								<div class="col-8">
									<div class="form-group">
										<div style="width: 365px;">
											<span><img src="images/group_logo.png" alt="ShadowGroup"  style="width: 365px !important;"></span>
											<span class="custom-checkbox" style="border-bottom: none !important;">Wanna get paid to shop? Of course you do.</span>
										  <a class="password-reset" href="#">LEARN MORE</a>
										</div>
										<legend for="JoinNow">Join Now</legend>
										<div class="control">
											<input type="email" id="Email" name="Email"  value="" maxlength="2147483647" autocorrect="off" spellcheck="false" autocomplete="off" aria-required="true" placeholder="EMAIL">
											<label for="Email">
												<span style="margin-left: -1.25em !important;">Email</span>
												<span class="required-indicator">*</span>
											</label>
										</div>
										<div class="control">
											<input type="tel" id="PhoneNumber" name="PhoneNumber" placeholder="PHONE NUMBER" value="" autocomplete="off" aria-required="true">
											<label for="PhoneNumber">
												<span style="margin-left: -1.25em !important;">Phone Number</span>
												<span class="required-indicator">*</span>											
											</label>
										</div>
										<div class="control">
											<input type="text" pattern="^\s*?\d{5}(?:[-\s]\d{4})?\s*?$" id="ZipCode" name="ZipCode" autocomplete="off" aria-required="true" placeholder="ZIP/POSTAL CODE">
											<label for="ZipCode">
												<span style="margin-left: -1.25em !important;">Zip/Postal Code</span>
												<span class="required-indicator">*</span>										
											</label>
										</div>		
										<button type="submit" class="btn btn-primary" id="Register" name="Register">Create A New Account</button>	   
									</div>
							  </div>
						  </div>
						</form>
					</div>
				</div>
        	</div>
		</main>
        <?php require('footer.php'); ?>
		<script src="js/custom-1.0.0.js" type="text/javascript"></script>
		<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/popper.min.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/bootstrap-4.0.0.js" type="text/javascript"></script>
    </body>
</html>