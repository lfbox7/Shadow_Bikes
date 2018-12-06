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
		<title>Contact</title>
        <meta name="author" content="Leonard Box">        
        <meta name="description" content="">
        <link href="css/main.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.typekit.net/hia7juf.css">
    </head>
    <body>
        <?php require('header.php'); ?>
                        <?php
                        if ( isset ( $_POST ['Submit'] )) {
                            $_SESSION [ 'Email' ] = $Email;
                            $_SESSION [ 'Message' ] = $Message;
                            $Email = $_POST [ 'Email' ];
                            $Message = $_POST [ 'Message' ];
                            $Email = mysqli_real_escape_string ( $DBConnect, $Email );
                            $Message = mysqli_real_escape_string ( $DBConnect, $Message );
                            $Email = mysqli_real_escape_string ( $DBConnect, $Email );
                            $Message = mysqli_real_escape_string ( $DBConnect, $Message );
                            $TableName = "Contact_Table";
                            $SQLString="INSERT INTO $TableName ( Email, Message) VALUES ( '$Email', '$Message' )";
                            if ( mysqli_query ( $DBConnect, $SQLString )) 
				            {
                                echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">New record created successfully.</h4></div></div></div>';
				            } else {
                                echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Error: ' . $SQLString . '<br>' . mysqli_error ( $DBConnect ) . '.</h4></div></div></div>';
				            }
                        }
                        ?>
						<form action="index.php" class="float-label" method="post" name="Register" spellcheck="false">
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
										<button type="submit" class="btn btn-primary" id="Submit" name="Submit">Submit Message</button>	   
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