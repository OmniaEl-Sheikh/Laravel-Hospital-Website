<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<script src="https://kit.fontawesome.com/f5887f9b2d.js" crossorigin="anonymous"></script>
  
	<link rel="stylesheet" href="/css/ThankSignup.css">
    <title>complete signup</title>
</head>
<body>
<?php if(session('loggedIn')): ?>	
<div class="contain">
		<div class="congrats">
		
			<header class="site-header" id="header">
				<div class="one">
				<a href="/logout" class="button">Log out</a>
				</div>
			
				 <h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU! <a href=""><?php echo e(session('user')->name); ?></a></h1> 
			</header>

			<div class="main-content">
				<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
				<p class="main-content__body" data-lead-id="main-content-body"> 
					We really appreciate you giving us a moment of your time today.</p>
			</div>
			<div>

			</div>
			<div>
				<a href="/appointment" class="button">Make An Appointment</a>
				
			</div> 

			<footer class="site-footer" id="footer">
				<p class="site-footer__fineprint" id="fineprint">Copyright ©2022 | All Rights Reserved</p>
			</footer>
		</div>
	</div>
<?php endif; ?>	
<?php /**PATH C:\Users\CompuMisr\Desktop\final\resources\views/ThankSignup.blade.php ENDPATH**/ ?>