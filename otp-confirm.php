<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
	<meta name="theme-color" content="#2196f3">
	<meta name="author" content="DexignZone" /> 
    <meta name="keywords" content="" /> 
    <meta name="robots" content="" /> 
	<meta property="og:image" content="social-image.png"/>
	<meta name="format-detection" content="telephone=no">
    
    <!-- Favicons Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
    
    <!-- Title -->
	<title>ABBANS | OTP</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Racing+Sans+One&amp;display=swap" rel="stylesheet">

</head>   
<body>
<div class="page-wraper">

    <!-- Preloader -->
	<div id="preloader">
		<div class="spinner"></div>
	</div>
    <!-- Preloader end-->

    <!-- Page Content -->
    <div class="page-content">
        
        <!-- Banner -->
        <div class="banner-wrapper shape-1">
            <div class="container inner-wrapper">
                <h2 class="dz-title">OTP Verify</h2>
                <p class="mb-0">Please enter your OTP</p>
            </div>
        </div>
        <!-- Banner End --> 
        <div class="container">
			<div class="account-area">
				<form action="#">
                    <div method="get" id="otp" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                        <input class="form-control" type="text" id="digit-1" name="digit-1" placeholder="-" data-next="digit-2" />
                        <input class="form-control" type="text" id="digit-2" name="digit-2" placeholder="-" data-next="digit-3" data-previous="digit-1" />
                        <input class="form-control" type="text" id="digit-3" name="digit-3" placeholder="-" data-next="digit-4" data-previous="digit-2" />
                        <input class="form-control" type="text" id="digit-4" name="digit-4" placeholder="-" data-next="digit-5" data-previous="digit-3" />
                        <input class="form-control" type="text" id="digit-5" name="digit-5" placeholder="-" data-next="digit-6" data-previous="digit-4" />
                        <input class="form-control" type="text" id="digit-6" name="digit-6" placeholder="-" data-previous="digit-5" />
                    </div>                
					<div class="input-group">
						<a href="index.php" class="btn mt-3 sdf514 w-100 btn-rounded">Verify & Proceed</a>
					</div>
				</form>
			</div>
        </div>
    </div>
    <!-- Page Content End -->
    
    <!-- Footer -->
    <footer class="footer fixed">
        <div class="container">
            <a href="register.php" class="btn sdf514 light btn-rounded text-primary d-block">Create account</a>
        </div>
    </footer>
    <!-- Footer End -->
    
</div>
<!--**********************************
    Scripts
***********************************-->
<script src="assets/js/jquery.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/custom.js"></script>
</body>

</html>