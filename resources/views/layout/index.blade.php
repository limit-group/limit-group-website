<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- seo -->
    <meta name="robots" content="index, follow" />

    <title>Limit Solutions</title>
    <meta content="Limit Solutions enables businesses reach a global audience through digital presence." name="description" />
    <meta content="Limit Solutions" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favico.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>

  @yield('content')

      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">
      <div class="footer-content">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
              <a href="index.html" class="logo d-flex align-items-center">
                <span>Limit Solutions</span>
              </a>
              <p>
              Do what matters to you by providing the best products or service
                to your customer, let us give your business the global digital
                presence it deserves.
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram" target="_blank"
                  ><i class="bi bi-instagram"></i
                ></a>
                <a href="#" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bi bi-dash"></i> <a href="{{ url('/') }}">Home</a></li>
                <li><i class="bi bi-dash"></i> <a href="{{ url('/about') }}">About us</a></li>
                <li><i class="bi bi-dash"></i> <a href="{{ url('/services') }}">Services</a></li>
                <li>
                  <i class="bi bi-dash"></i> <a href="">Terms of service</a>
                </li>
                <li>
                  <i class="bi bi-dash"></i> <a href="#">Privacy policy</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bi bi-dash"></i> <a href="{{ url('/services') }}">Web Design</a></li>
                <li>
                  <i class="bi bi-dash"></i> <a href="{{ url('/services') }}">Web Development</a>
                </li>
                <li>
                  <i class="bi bi-dash"></i> <a href="{{ url('/services') }}">Product Management</a>
                </li>
                <li><i class="bi bi-dash"></i> <a href="{{ url('/services') }}">Content Marketing</a></li>
                <li>
                  <i class="bi bi-dash"></i> <a href="{{ url('/services') }}">Social Media Branding</a>
                </li>
              </ul>
            </div>

            <div
              class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
            >
              <h4>Contact Us</h4>
              <p>
                A123 Tom Mboya Street <br />
                Nairobi, 000100<br />
                Kenya<br /><br />
                <strong>Phone:</strong> +254 759 701 314<br />
                <strong>Email:</strong> limitsolutions4@gmail.com<br />
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-legal">
        <div class="container">
          <div class="copyright">
            &copy; <strong><span>Limit Solutions</span></strong
            > 2022
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>