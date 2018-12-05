<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shadow Blog</title>
        <meta name="author" content="Leonard Box">
        <meta name="description" content="">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<header>
			<!-- header content -->
		</header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
						<?php
							require_once ( "inc_db_Shadow_Bikes.php" );
							if ( isset ( $_SESSION ))
        					{
								if  ( isset ( $_POST [ 'Submit' ] ))
           				 		{
									$BlogTitle = $_POST [ 'BlogTitle' ];
									$BlogImage = $_POST [ 'BlogImage' ];
									$BlogDescription= $_POST [ 'BlogDescription' ];
									$BlogContent = $_POST [ 'BlogContent' ];
									$BlogTitle = stripslashes ( $BlogTitle );
									$BlogImage = stripslashes ($BlogImage );
									$BlogDescription = stripslashes ( $BlogDescription);
									$BlogContent = stripslashes ( $BlogContent );
									$BlogTitle = mysqli_real_escape_string ( $DBConnect, $BlogTitle );
									$BlogImage = mysqli_real_escape_string ( $DBConnect, $BlogImage );
									$BlogDescription = mysqli_real_escape_string ( $DBConnect, $BlogDescription );
									$BlogContent = mysqli_real_escape_string ( $DBConnect, $BlogContent );
									
									$TableName = "Shadow_Blog";
									$SQLString="INSERT INTO $TableName ( 'Title', 'Image', 'Description', 'Content' ) VALUES ( '$BlogTitle', '$BlogImage', '$BlogDescription', '$$BlogContent' )";
								}
							}
						?>					
					<form action="" method="post" name="Blog_Input">
						<div class="form-group">
							<label for="BlogTitle">Blog Title</label>
							<input type="text" class="form-control" id="BlogTitle"maxlength="35" placeholder="Enter Blog Title" size="25" >
						</div>
						<div class="form-group">
							<label for="BlogImage">Blog Image</label>
							<input type="file" class="form-control" id="BlogImage">
						</div>
					  <div class="form-group">
							<label for="BlogDescription">Blog Decription</label>
							<input type="text" class="form-control" id="BlogDescription" maxlength="99" placeholder="Enter Blog Description" size="50">
						</div>
						<div class="form-group">
							<label for="BlogContent">Blog Content</label>
							<input type="text" class="form-control" id="BlogContent" maxlength="255" placeholder="Enter Blog Content"  size="255">
						</div>
						<button type="reset" class="btn btn-primary">Reset</button>
						<button type="submit" class="btn btn-primary" name="Submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<footer>
			<!-- footer content here -->
		</footer>
		<script src="js/custom-1.0.0.js" type="text/javascript"></script>
		<script src="js/poo.js" type="text/javascript"></script>
   	 	<script src="vendor/bootstrap-4.1.3/js/popper.min.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/bootstrap-4.0.0.js" type="text/javascript"></script>		
	</body>
</html>