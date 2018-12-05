<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Final Project</title>
        <meta name="author" content="Leonard Box">
        <meta name="description" content="">
        <link href="css/main.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.typekit.net/hia7juf.css">
	</head>
	<body>
	<?php require('header.php'); ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
				  <nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item"><a href="#">Library</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Data</li>
				    </ol>
				  </nav>
                </div>
				<div class="col-2">
					<!-- php category echoed here -->
				</div>
			</div>
			<div class="row"></div>
		</div>
		<div class="container-fluid">
			<div class="row">
				
				<div class="card text-center col-md-4">
					<div class="card-header"> Header </div>
				    <div class="card-body">
						<h5 class="card-title">Card Title</h5>
						<p class="card-text">Card with header and footer.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					<div class="card-footer text-muted">Footer</div>
				</div>
			
			</div>
		</div>
        <?php require('footer.php'); ?>	
		<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/popper.min.js" type="text/javascript"></script>
    	<script src="vendor/bootstrap-4.1.3/js/bootstrap-4.0.0.js" type="text/javascript"></script>        
	</body>
</html>