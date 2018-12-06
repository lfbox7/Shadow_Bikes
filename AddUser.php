<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add User</title>
        <meta name="author" content="Leonard Box">
        <meta name="description" content="">
        <link href="css/main.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.typekit.net/hia7juf.css">
    </head>
    <body>
        <?php require('header.php'); ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-6 offset-4">
					<?php
						if ( isset ( $_POST [ 'Register' ] ))
						{
							if ($_POST [ 'Password' ] != $_POST[ 'ConfirmPassword' ]) 
							{
								echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Password does not match. Please try again!</h4></div></div></div>';
							} else {
								require_once ( 'inc_db_Shadow_Bikes.php' );
								$_SESSION [ 'Email' ] = $Email;
								$_SESSION [ 'PhoneNumber' ] = $PhoneNumber;
								$_SESSION [ 'ZipCode' ] = $ZipCode;
								$FirstName = $_POST [ 'FirstName' ];
								$LastName = $_POST [ 'LastName' ];
								$StreetAddress = $_POST [ 'StreetAddress' ];
								$City = $_POST [ 'City' ];
								$State = $_POST [ 'State' ];
								$FirstName = stripslashes ( $FirstName );
								$LastName = stripslashes ( $LastName );
								$StreetAddress = stripslashes ( $StreetAddress );
								$City = stripslashes ( $City );
								$State = stripslashes ( $State );
								$FirstName = mysqli_real_escape_string ( $DBConnect, $FirstName );
								$LastName = mysqli_real_escape_string ( $DBConnect, $LastName );
								$StreetAddress = mysqli_real_escape_string ( $DBConnect, $StreetAddress );
								$City = mysqli_real_escape_string ( $DBConnect, $City );
								$State = mysqli_real_escape_string ( $DBConnect, $State );
								
								$TableName = "User1_Information";
								$SQLString="INSERT INTO $TableName ( FirstName, LastName, StreetAddress, City, State, ZipCode, PhoneNumber ) VALUES ( '$FirstName', '$LastName', '$StreetAddress', '$City', '$State', '$ZipCode', '$PhoneNumber' )";
								if ( mysqli_query ( $DBConnect, $SQLString )) 
								{
									echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">New record created successfully.</h4></div></div></div>';
								} else {
									echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Error: ' . $SQLString . '<br>' . mysqli_error ( $DBConnect ) . '.</h4></div></div></div>';
								}
								$TableName = "User_Login";
								$SQLString="INSERT INTO $TableName ( Email, Password ) VALUES ( '$Email', '$EncryptedPassword' )";
								if ( mysqli_query ( $DBConnect, $SQLString )) 
								{
									echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">New record created successfully.</h4></div></div></div>';
									header ( "location: ShadowProfile.php" );
								} else {
									echo '<div class="container"><div class="row"><div class="col-12"><h4 style="color: #ff0000; font-size: 1.5em; font-weight: 400; text-align: center;">Error: ' . $SQLString . '<br>' . mysqli_error ( $DBConnect ) . '.</h4></div></div></div>';
								}
							}
							mysqli_close ( $DBConnect );
						}
					?>
					<form action="" class="float-label" method="post" name="AddUser">
						<div style="width: 365px;">
							<span>
								<img src="images/group_logo.png" alt="ShadowGroup"  style="width: 365px !important;">
							</span>
							<span class="custom-checkbox" style="border-bottom: none !important;">Wanna get paid to shop? Of course you do.</span>
							<a class="password-reset" href="#">LEARN MORE</a>
						</div>
						<legend for="JoinNow2">Join Now</legend>
						<div class="control">
							<input type="text" id="FirstName" name="FirstName"  value="" maxlength="2147483647" autocorrect="off" spellcheck="false" autocomplete="off" aria-required="true" placeholder="FIRST NAME">
							<label for="FirstName">
								<span style="margin-left: -1.25em !important;">First Name</span>
								<span class="required-indicator">*</span>
							</label>
						</div>
						<div class="control">
							<input type="text" id="LastName" name="LastName" placeholder="LAST NAME" value="" autocomplete="off" aria-required="true">
							<label for="LastName">
								<span style="margin-left: -1.25em !important;">Last Name</span>
								<span class="required-indicator">*</span>
							</label>
						</div>
						<div class="control">
							<input type="text" id="StreetAddress" name="StreetAddress" autocomplete="off" aria-required="true" placeholder="STREET ADDRESS">
							<label for="StreetAddress">
								<span style="margin-left: -1.25em !important;">Street Address</span>
								<span class="required-indicator">*</span>
							</label>
						</div>
						<div class="control">
							<input type="text" id="City" name="City" autocomplete="off" aria-required="true" placeholder="CITY">
							<label for="City">
								<span style="margin-left: -1.25em !important;">City</span>
								<span class="required-indicator">*</span>
							</label>
						</div>
						<div class="control">
							<fieldset>
								<select id="State" name="State" aria-required="true">
									<option value="">STATE</option>
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="DC">District of Columbia</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NV">Nevada</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY">Wyoming</option>
								</select>
							</fieldset>
						</div>
						<div class="control">
							<input type="text" id="Password" name="Password" autocomplete="off" aria-required="true" placeholder="PASSWORD">
							<label for="Password">
								<span style="margin-left: -1.25em !important;">Password</span>
								<span class="required-indicator">*</span>
							</label>
						</div>
						<div class="control">
							<input type="text" id="ConfirmPassword" name="ConfirmPassword" autocomplete="off" aria-required="true" placeholder="CONFIRM PASSWORD">
							<label for="ConfirmPassword">
								<span style="margin-left: -1.25em !important;">Confirm Password</span>
								<span class="required-indicator">*</span>
							</label>
						</div>						
						<button type="submit" class="btn btn-primary" name="Register">Create A New Account</button>
					</form>
				</div>
			</div>
		</div>
        <?php require('footer.php'); ?>
		<script src="js/custom-1.0.0.js" type="text/javascript"></script>
		<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/popper.min.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/bootstrap-4.0.0.js" type="text/javascript"></script>
    </body>
</html>