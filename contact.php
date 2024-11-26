<!doctype html>
<html lang="en">

<head>
  <title>Vista Shipping Line (VSL) - Container Shipping Tracking & Logistics Solutions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Track your shipments with Vista Shipping Line (VSL). We provide reliable container shipping, logistics solutions, and exceptional service worldwide.">
  <meta name="keywords" content="Vista Shipping Line, VSL, container shipping, shipment tracking, logistics, shipping services, global shipping, cargo services, transport solutions">
  <meta name="author" content="Vista Line Shipping">
  <meta name="robots" content="index, follow">

  <!-- Social Media Meta Tags -->
  <meta property="og:title" content="Vista Shipping Line (VSL) - Reliable Container Shipping & Tracking">
  <meta property="og:description" content="Explore global container shipping and shipment tracking services with Vista Shipping Line (VSL). Reliable, efficient, and trusted logistics solutions.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.vistashippingline.com">
  <meta property="og:image" content="https://www.vistashippingline.com/images/slider.jpg">

  <meta name="twitter:card" content="images/slider.jpg">
  <meta name="twitter:title" content="Vista Shipping Line (VSL) - Reliable Container Shipping & Tracking">
  <meta name="twitter:description" content="Track your shipments and explore reliable logistics solutions with Vista Shipping Line (VSL).">
  <meta name="twitter:image" content="https://www.vistashippingline.com/images/twitter-card.jpg">

  <!-- Favicon -->
  <link rel="icon" href="images/logo.png" type="image/x-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/style.css">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



  <div class="site-wrap" id="home-section">

    <?php include "header.php"; ?>

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/depot_hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-6">
              <h1>Contact Us</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dolorem eius eligendi esse quod?</p>
            </div>
          </div>
        </div>
      </div>

    </div>



    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 mb-5" data-aos="fade-up" data-aos-delay="100">
            <form id="feedbackForm" action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" id="fname" placeholder="First name" name="fname">
                  <span id="fnameError" class="text-danger"></span>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="lname" placeholder="Last name" name="lname">
                  <span id="lnameError" class="text-danger"></span>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" id="email" placeholder="Email address" name="email">
                  <span id="emailError" class="text-danger"></span>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="message" id="message" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                  <span id="messageError" class="text-danger"></span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <button type="button" id="submitFeedback" class="btn btn-block btn-primary text-white py-3 px-5">Send Message</button>
                </div>
              </div>
            </form>

            <div id="feedbackResponse" class="mt-3"></div>

          </div>

        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#submitFeedback').on('click', function() {
          // Clear previous error messages
          $('.text-danger').text('');

          // Fetch field values
          const fname = $('#fname').val().trim();
          const lname = $('#lname').val().trim();
          const email = $('#email').val().trim();
          const message = $('#message').val().trim();

          // Regex Patterns
          const nameRegex = /^[A-Za-z]{2,50}$/; // Only letters, 2-50 characters
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email validation
          const messageRegex = /^.{10,500}$/; // Message 10-500 characters

          // Validation Flags
          let isValid = true;

          // First Name Validation
          if (!nameRegex.test(fname)) {
            $('#fnameError').text('First name must be 2-50 characters and contain only letters.');
            isValid = false;
          }

          // Last Name Validation
          if (!nameRegex.test(lname)) {
            $('#lnameError').text('Last name must be 2-50 characters and contain only letters.');
            isValid = false;
          }

          // Email Validation
          if (!emailRegex.test(email)) {
            $('#emailError').text('Enter a valid email address.');
            isValid = false;
          }

          // Message Validation
          if (!messageRegex.test(message)) {
            $('#messageError').text('Message must be 10-500 characters long.');
            isValid = false;
          }

          // If valid, send AJAX request
          if (isValid) {
            const feedbackData = {
              contact_us: true,
              fname: fname,
              lname: lname,
              email: email,
              message: message,
            };

            $.ajax({
              url: 'admin/v3.21.0/code.php',
              type: 'POST',
              data: feedbackData,
              success: function(response) {
                $('#feedbackResponse').html(response); // Show server response
                $('#feedbackForm')[0].reset(); // Clear the form
              },
              error: function() {
                $('#feedbackResponse').html('<div class="alert alert-danger">An error occurred. Please try again.</div>');
              }
            });
          }
        });
      });
    </script>



    <?php include "footer.php"; ?>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>


</body>

</html>