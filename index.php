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
      <div class="ftco-cover-1 overlay" style="background-image: url('images/slider2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-6">
              <h1>Vista Shipping Line</h1>
              <p class="mb-5">Reliable Container Shipping and Tracking Solutions – Connecting the World, One Shipment at a Time!</p>
              <!-- Updated form -->
              <form id="trackingForm" onsubmit="redirectToTracking(event)">
                <div class="form-group d-flex">
                  <input type="text" id="trackingNumber" class="form-control" placeholder="Your tracking number" required>
                  <input type="submit" class="btn btn-primary text-white px-4" value="Track Now">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- END .ftco-cover-1 -->
      <div class="site-section ftco-service-image-1 pb-5">
        <div class="container">
          <div class="owl-carousel owl-all">
            <div class="service text-center">
              <a href="#"><img src="images/depot_img_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="px-md-3">
                <h3><a href="#">Reliable Shipping</a></h3>
                <p>We provide secure and efficient container shipping worldwide, ensuring your goods reach their destination safely and on time. Our services include hassle-free customs clearance and cargo insurance to protect your valuable shipments.</p>
              </div>
            </div>
            <div class="service text-center">
              <a href="#"><img src="images/depot_img_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="px-md-3">
                <h3><a href="#">Smart Logistics</a></h3>
                <p>Track your shipments in real time with our advanced tracking system, ensuring full transparency and peace of mind. Benefit from our global logistics network and secure warehousing facilities for all your storage and transport needs.</p>
              </div>
            </div>
            <div class="service text-center">
              <a href="#"><img src="images/depot_img_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="px-md-3">
                <h3><a href="#">Dedicated Support</a></h3>
                <p>Our 24/7 customer support team is here to assist you every step of the way, offering tailored solutions at competitive rates to make your shipping experience smooth and stress-free.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      // Redirect to tracking.php with the entered tracking number
      function redirectToTracking(event) {
        event.preventDefault(); // Prevent form submission
        const trackingNumber = document.getElementById('trackingNumber').value; // Get the tracking number
        if (trackingNumber) {
          // Redirect to the desired URL
          window.location.href = `tracking.php?id=${encodeURIComponent(trackingNumber)}`;
        }
      }
    </script>

    <div class="site-section" id="about-section">

      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>About Us</h2>
              <p><b>Vista Shipping Line (VSL)</b>: Your Global Partner in Shipping and Logistics

                Welcome to <b>Vista Shipping Line (VSL)</b>, the leading name in global shipping solutions and logistics services. As your trusted partner, we specialize in providing <b>efficient, reliable, and transparent shipping services</b>, seamlessly connecting businesses and individuals worldwide.

                At VSL, we understand that <b>shipping</b> is more than just moving goods—it’s about <b>trust, timely deliveries</b>, and <b>peace of mind</b>. Leveraging state-of-the-art technology, an <b>extensive global logistics network, and a customer-first approach</b>, we are committed to redefining excellence in the shipping and logistics industry.

                Choose <b>VSL</b> for international shipping, freight forwarding, and customized logistics solutions that empower your business to thrive globally.</p>
            </div>
          </div>
        </div>

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>Who We Are?</h2>
              <p>
                <b>Vista Shipping Line (VSL)</b>: Trusted Global Shipping and Logistics Partner

                Welcome to <b>Vista Shipping Line (VSL)</b>, your go-to solution for global shipping and logistics services. We are committed to offering efficient, reliable, and transparent shipping solutions, connecting businesses and individuals across every corner of the globe.

                At VSL, we know that shipping is more than transporting goods. It’s about building trust, meeting tight deadlines, and delivering unmatched peace of mind. With our advanced logistics technology, robust international shipping network, and a customer-first mindset, we aim to set new standards of excellence in the global shipping industry.

                Choose Vista Shipping Line for innovative, dependable, and tailor-made logistics solutions that keep your world connected.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>




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