<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact</title>
        <meta name="author" content="Leonard Box">        
        <meta name="description" content="">
        <link href="css/main.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.typekit.net/hia7juf.css">
    </head>
    <body>
        <?php require('header.php'); ?>
						<form action="AddUser.php" class="float-label" method="post" name="Register" spellcheck="false">
							<div class="row">
								<div class="col-8 offset-2">
									<div class="form-group">
										<div style="width: 365px;">
											<span><img src="images/straight_line_logo.png" alt="ShadowBikes"  style="width: 365px !important;"></span>
											<span class="custom-checkbox" style="border-bottom: none !important;">Wanna get paid to shop? Of course you do.</span>
										  <a class="password-reset" href="#">LEARN MORE</a>
										</div>
										<legend for="JoinNow">LEAVE YOUR MESSAGE</legend>
										<div class="control">
											<input type="email" id="Email" name="Email"  value="" maxlength="2147483647" autocorrect="off" spellcheck="false" autocomplete="off" aria-required="true" placeholder="EMAIL">
											<label for="Email">
												<span style="margin-left: -1.25em !important;">Email</span>
												<span class="required-indicator">*</span>
											</label>
										</div>
										<div class="control">
											<textarea type="text" id="Message" name="Message" placeholder="Message" value="" autocomplete="off" aria-required="true">
											</textarea><label for="Message">
												<span style="margin-left: -1.25em !important;">Message</span>
												<span class="required-indicator">*</span>											
											
										</div>		
										<button type="submit" class="btn btn-primary" id="Register" name="Register">Submit Message</button>	   
									</div>
							  </div>
						  </div>
						</form>
        <?php require('footer.php'); ?>
		<script src="js/custom-1.0.0.js" type="text/javascript"></script>
		<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/popper.min.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/bootstrap-4.0.0.js" type="text/javascript"></script>
    </body>
</html>