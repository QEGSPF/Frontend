<?php
	if( isset( $_GET[ "page" ] ) && $_GET[ "page" ] != "" ){
		if( file_exists( "content/pages/" . $_GET[ "page" ] . ".php" ) ){
			$page = $_GET[ "page" ];
		}else{
		    $errorpage = $_GET[ "page" ];
			$page = "notfound";
		}
	}else{
		$page = "home";
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title><?php echo $PageTitle; ?></title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
		body {
		    padding-top: 70px;
		    /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		}
		</style>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php require_once( "content/menu.php" ); ?>

		<?php require_once( "content/pages/$page.php" ); ?>

		<script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
