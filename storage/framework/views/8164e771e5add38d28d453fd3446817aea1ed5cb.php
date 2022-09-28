<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ThankMessage.css">
    <title>Send Message</title>
</head>


<body>
<?php if(session('loggedIn')): ?>

    <div id="master-wrap">
    <div id="logo-box">

        <div class="animated fast fadeInUp">
        <div class="icon"></div>
        <h1>Thank you</h1>
        </div>

        <div class="notice animated fadeInUp">
        <p class="lead">Your message has been successfully sent. We will contact you very soon!</p>
        <a class="btn animation" href="/logout" >&larr;Back</a>
        </div>

        <div class="footer animated slow fadeInUp">

        <p class="copyright">&copy; 2022</p>
        </div>

    </div>
    <!-- /#logo-box -->
    </div>
    <!-- /#master-wrap -->

<?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\CompuMisr\Desktop\first\resources\views/ThankMessage.blade.php ENDPATH**/ ?>