<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We care hospital |sign up</title>
    <link rel="stylesheet" href="css/allmin.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/signup.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="/https://fonts.googleapis.com">
    <link rel="preconnect" href="/https://fonts.gstatic.com" crossorigin>
    <link href="/https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href='/https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<script src="https://kit.fontawesome.com/f5887f9b2d.js" crossorigin="anonymous"></script>

</head>
<body>

<!-- start header -->
    <header>
        <div class="container">
            <a href="#">
                <img src="/images/logo.png" alt="logo">
            </a>
            <nav>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i>
                        <p>
                            <span>Adress: </span>
                            198 West 21th Street,
                            <br>
                            Suite 721 New York NY 10016.
                        </p>
                    </li>
                    <li><i class="fas fa-phone-square-alt"></i>
                        <p>
                            <span>Phone: </span>
                            <a href="tel://1234567920">+ 1235 2355 98</a>
                        </p>
                    </li>
                    <li><i class="fas fa-home"></i>
                        <p>
                            <span>Website: </span>
                            <a href="#">yoursite.com</a>
                        </p>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
<!-- end header -->



<!-- Start second-section -->
    <div class="second-section">
        <div class="overlay">
            <div class="text">
                <div class="content">
                    <h1> Sign up </h1>
                    <a href="/">Home ></a>
                    <span>sign up></span>
                </div>
            </div>
        </div>
    </div>
<!-- End second-section -->


<!-- Start third-section -->
<div class="third-section">
    <div class="container2">
        <form method="POST" action="/signup">
            <?php echo csrf_field(); ?>
                <h3>Sign up</h3>
                <div class="col">
                    <div class="srv">
                        <i class="one fab fa-facebook-square" title="Log in with Face book"></i>
                    </div>
                    <div class="srv">
                        <i class="two fab fa-google" title="Log in with Google"></i>
                    </div>
                    <div class="srv">
                        <i class="three fab fa-twitter" title="Log in with Twitter"></i>
                    </div>
                </div>





                <div class="row">

                    <h4>Sign up information</h4>
                    <?php if(session('error')): ?> <p class="error"><?php echo e(session('error')); ?></p> <?php endif; ?>
                    <div class="input-group input-group-icon">
                    <input required type="text" name="name" id="name" placeholder="full name" value="<?php echo e(old('name')); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="input-icon">
                            <i  class="fa fa-user"></i>
                        </div>
                    </div>
                    <div class="input-group input-group-icon">
                    <input required type="email" name="email" id="email" placeholder="Email@" value="<?php echo e(old('email')); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="input-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <div class="input-group input-group-icon">
                    <input required type="password" name="password" placeholder="password" id="password">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="input-icon">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                    <div class="input-group input-group-icon">
                    <input required type="password" name="password_confirmation" placeholder="password_confirmation" id="password_confirmation">
                        <div class="input-icon">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>

                </div>




                <input type="submit" value="signup" class="btn">
                <p>Already have an account? <a href="/login">Login</a></p>
        </form>
    </div>
</div>
<!-- End third-section -->

<!-- Start Footer -->
<div class="footer">
    <div class="container">
      <img src="images/logo3.png" alt="Logo" />
      <p>We Are Social</p>
      <div class="social-icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fas fa-home"></i>
        <i class="fab fa-linkedin"></i>
      </div>
      <p class="copyright">&copy; 2022 <span>We care hospital</span> All Right Reserved</p>
    </div>
  </div>
  <!-- End Footer -->
</body>
</html>
<?php /**PATH C:\Users\CompuMisr\Desktop\first\resources\views/signup.blade.php ENDPATH**/ ?>