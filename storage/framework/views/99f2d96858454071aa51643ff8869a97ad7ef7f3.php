<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We care hospital |Appointment</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/appointment.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
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
                    <h1> Appointment </h1>
                    <a href="/">Home ></a>
                    <span>Appointment ></span>
                </div>
            </div>
        </div>
    </div>
  <!-- End second-section -->


  <!-- Start third-section -->
  <div class="third-section">
    <div class="container2">
        <form method="POST" action="/appointment">
          <?php echo csrf_field(); ?>
              
            <div class="row">
              <div class="col-half">
                <h4>Select Your Services</h4>
                <div class="input-group">
                  <div class="col-third">
                    <select  id="o" class="form-control" name="service" required>
                      <option value="Neurology">Neurology</option>
                      <option value="Cardiology">Cardiology</option>
                      <option value="Dental">Dental</option>
                      <option value="Ophthalmology">Ophthalmology</option>
                      <option value="Other Services">Other Services</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-half">
                <h4>Gender</h4>
                <div class="input-group">
                  <input id="gender-male" type="radio" name="gender" value="male" >
                  <label for="gender-male">Male</label>
                  <input id="gender-female" type="radio" name="gender" value="female" >
                  <label for="gender-female">Female</label>
                </div>
              </div>
            </div>
            




            <div class="row">
                <div class="col-half">
                  <h4>Date</h4>
                  <div class="input-group">
                    <input type="date"  id="" name="date"  required>
                  </div>
                </div>
                <div class="col-half">
                  <h4>Time</h4>
                  <div class="input-group">
                    <input type="time"  placeholder="Time" name="time" required>
                  </div>
                </div>
            </div>







            <div class="row">
              <h4>Payment Details</h4>
              <div class="input-group">
                <input id="payment-method-card" type="radio" name="payment" value="card" checked="true">
                <label for="payment-method-card">
                    <span>
                        <i class="fa fa-cc-visa"></i>
                        Credit Card</span>
                </label>
                <input id="payment-method-paypal" type="radio" name="payment" value="paypal">
                <label for="payment-method-paypal"> 
                    <span>
                        <i class="fa fa-cc-paypal"></i>
                        Paypal</span>
                </label>
              </div>
              <div class="input-group input-group-icon">
                <input type="password" placeholder="cardNumber" name="cardNumber" required>
                <div class="input-icon">
                    <i class="fa fa-credit-card"></i></div>
                </div>
            </div>
            <div class="row">
              <h4>Terms and Conditions</h4>
              <div class="input-group">
                <input id="terms" type="checkbox" required>
                <label for="terms">I accept the terms and conditions for this service, and hereby confirm I have read the privacy policy.</label>
              </div>
            </div>
            <input type="submit" value="Appointment" class="btn">
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
      <p class="copyright">&copy; 2021 <span>We care hospital</span> All Right Reserved</p>
    </div>
  </div>
  <!-- End Footer -->
    
</body>
</html><?php /**PATH C:\Users\CompuMisr\final\resources\views/appointment.blade.php ENDPATH**/ ?>