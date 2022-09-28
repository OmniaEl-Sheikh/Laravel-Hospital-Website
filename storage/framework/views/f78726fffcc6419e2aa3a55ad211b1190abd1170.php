<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<script src="https://kit.fontawesome.com/f5887f9b2d.js" crossorigin="anonymous"></script>
  
	<link rel="stylesheet" href="/css/ThankSignup.css">
    <title>complete signup</title>
</head>
<body>
<?php if(session('loggedIn')): ?>    
    <div class="contain">
        <div class="congrats">
        <div class="one">
			<a href="/logout" class="button">Log out</a>
		</div>
            <h1>Congrat<span class="hide">ulation</span>s !</h1>
            <div class="main-content">
                <i class="fa fa-check main-content__checkmark" id="checkmark"></i>

            </div>
            <div class="text">
                <p>You have successfully booked an appointment with us.

                </p>
                    <div class="detail"> 
                            <br>Here are your details<br>
                            ID: <?php echo e(session('user')->id); ?><br>
                            Name: <?php echo e(session('user')->name); ?><br>
                            Email: <?php echo e(session('user')->email); ?><br>
                            Service: <?php echo e(session('user1')->service); ?><br>
                            Genger: <?php echo e(session('user1')->gender); ?><br>
                            Date:<?php echo e(session('user1')->date); ?><br>
                            Time: <?php echo e(session('user1')->time); ?><br>
                        
                    </div>
                    <p>Eagerly awaiting your visit</p>
            </div>
        </div>
    </div>    
</div>
<?php endif; ?>
</head>
<body><?php /**PATH C:\Users\CompuMisr\final\resources\views/ThankAppointment.blade.php ENDPATH**/ ?>