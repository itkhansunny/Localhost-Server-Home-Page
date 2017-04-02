<?php 
$name="Khan Sunny Localhost Server";
$phpmyadmin="http://localhost/phpmyadmin";
$link1="http://localhost/payment";
$link2="http://localhost/doctorms";
$link3="http://localhost/payment";
$link4="http://localhost/github";
$link5="http://localhost/radio";
$link6="http://localhost/radioplayer";
$link7="#";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Localhost</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/jumbotron-narrow.css" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="js/ie-emulation-modes-warning.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>
			function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			var y = today.getFullYear();
			var i = today.getMonth();
			var d = today.getDate();
			var mo= i+1;
			m = checkTime(m);
			s = checkTime(s);
			var ampm = h >= 12 ? 'PM' : 'AM';
			h = h % 12;
			h = h ? h : 12; // the hour '0' should be '12'
			document.getElementById('txt').innerHTML =
			h + ":" + m + ":" + s+" "+ampm+" "+d+" / "+mo+" / "+y;
			var t = setTimeout(startTime, 500);
			}
			function checkTime(i) {
			if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
			return i;
			}
		</script>
	</head>
<body onload="startTime()">
	<div class="container">
		<div class="header clearfix">
			<h3 class="text-center"><span id="txt" class="label label-danger"></span></h3>
		</div>
			<div class="jumbotron">
				<h1><span class="label label-success"><?php echo $name;?></span></h1><br />
				<p><a class="btn btn-lg btn-primary" href="<?php echo $phpmyadmin;?>" role="button">Php Myadmin</a>
				<a class="btn btn-lg btn-success" href="<?php echo $link1;?>" role="button">Payment</a>
				<a class="btn btn-lg btn-danger" href="<?php echo $link2;?>" role="button">DoctorMS</a>
				<a class="btn btn-lg btn-info" href="<?php echo $link3;?>" role="button">Payment</a>
				<a class="btn btn-lg btn-danger" href="<?php echo $link4;?>" role="button">Github</a>
				<a class="btn btn-lg btn-info" href="<?php echo $link5;?>" role="button">Radio</a>
				<a class="btn btn-lg btn-info" href="<?php echo $link6;?>" role="button">RadioPlayer</a>
				<a class="btn btn-lg btn-warning disabled" href="<?php echo $link7;?>" role="button">Demo</a></p>
			</div>
	<footer class="footer">
<p>&copy; Khan Sunny <?php echo date('Y') ?></p>
</footer>
</div> <!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>