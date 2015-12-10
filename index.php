<?php 

// IMPORTANT: GET LIB 

	include (__DIR__ . "/lib/b0lib.php");

// GET FILE: UPDATECARD

include ($st0rage->basePath . "/content/updatecard.php");


?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>st0rage</title>

	<meta name="description" content="st0rage - save your information in a single file." >
	<meta name="author" content="b0nzai">
	<meta name="viewport" content="width=device-width">
	
	<link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
	
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="initial-scale=1.0, width=device-width, height=device-height">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<!-- Bootstrap  -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- b0nzai -->
	<link href="assets/css/b0nzai.css" rel="stylesheet">
	<link href="assets/css/extras.css" rel="stylesheet"> 

	<!-- Include modernizr-2.8.3.min.js -->
	<script src="assets/js/modernizr-2.8.3.min.js"></script> 
	
	<!-- PLUGIN MODAL -->
	<script src="assets/js/jquery-1.11.1.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="plugins/modal/css/sm.css" media="screen" />
	<script type="text/javascript" src="plugins/modal/js/jquery.slick-modals.min.js"></script>
	
	
	<script type="text/javascript">
	function recp(id) {
		$('.window').load('content/modal.php?id=' + id);
	}
	</script>
		
</head>
<body>
	<div class="pricing-tables clearfix">
		<div class="container-fluid">
			<div class="row"> 
				<div class="section-top text-center">
					<h2 class="section-title">st0rage</h2>
					<p class="section-description">save your information in a single file and access to them in easy way.</p>
					<div class="title-bottom">
						<span class="tb-inner"><i></i></span> 
					</div>
				</div>
				<!-- All Users --> 
				<div class="planning-area">
					<div class="npt-format-2">
			
						<?php include($st0rage->basePath. "/content/users.php"); ?>
						
						<?php if(isset($msg)){ ?>
		
							<div class="col-sm-12 success-message">
								
								<span><?php echo $msg; ?></span>
				
							</div>
										
						<?php } ?>
	
					</div>
				</div>
				<!-- Users --> 
				
				<div id="footer">
					<img src="assets/img/logost0.png" alt="b0nzai">
					<p> All project and c0de by b0nzai © 2015 </p>
				</div>
			</div>
		</div>
	</div>

</div>

<div id="popup-1" class="slickModal">
	<div class="window"></div>
</div>

</body>

</html>

