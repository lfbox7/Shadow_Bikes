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
			
			<?php
			$TableName = "Shadow_Blog";
			$BlogTitle = "Title";
			$Column = "Title";
			$SQLString = "SELECT * FROM $TableName ORDER BY 'ID' ASC , 'Title' ASC";
			$QueryResult = mysqli_query ( $DBConnect, $SQLString );
			while ( $Row = mysqli_fetch_assoc ( $QueryResult ))
			{
				$BlogID = $Row [ 'ID' ];
				$BlogTitle = $Row [ 'Title' ];
				$BlogImage = $Row [ 'Image' ];
				$BlogDescription= $Row [ 'Description' ];
				$BlogContent = $Row[ 'Content' ];
				echo "<div class=\"row\"><div class=\"col-12\"><div class=\"jumbotron\"><h1 class=\"display-4\">$BlogTitle</h1><img src=\"$BlogImage\" class=\"img-fluid\" alt=\"$BlogTitle\">$ItemQty<p class=\"lead\">$BlogDescription</p><hr class=\"my-4\"><p class=\"jumbotron\">$ItemDescription</p><p class=\"lead\"><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a></p></div></div></div>";
			}
			?>
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