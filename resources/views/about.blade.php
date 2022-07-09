@extends('layout.index')

@section('content')
<body class="page-about">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">Limit Solutions</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/about') }}" class="active">About</a></li>
          <li><a href="{{ url('/services') }}">Services</a></li>
          <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
          <li><a href="{{ url('/team') }}">Team</a></li>
          <li><a href="{{ url('/blog') }}">Blog</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>About</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3>Give your business a global digital presence today!</h3>
              <p>
                Focus on developing the best products or provisioning excellent services
                to your customers. Let us help you reach out, make the best digital impression and help you retain them.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>Global market reach.</li>
                <li><i class="bi bi-check-circle-fill"></i>Impactful brand awareness campaigns.</li>
                <li><i class="bi bi-check-circle-fill"></i>An edge over your competitiors with digital transformation.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Why Choose Us</h2>
          </div>

          <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
            <div
              class="col-xl-5 img-bg"
              style="background-image: url('assets/img/why-us-bg.jpg')"
            ></div>
            <div class="col-xl-7 slides position-relative">
              <div class="slides-1 swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="item">
                      <h3 class="mb-3">Let's grow your business together</h3>
                      <h4 class="mb-3">
                        Your success is our pride & we are here to help you grow.
                      </h4>
                      <p>
                        We strive to help your business register impact. We have well streamlined research and development processes
                        which take into account your company, its target market, competitors and customer psycographics.
                      </p>
                    </div>
                  </div>
                  <!-- End slide item -->

                  <div class="swiper-slide">
                    <div class="item">
                      <h3 class="mb-3">
                        We are a team of experts.
                      </h3>
                      <h4 class="mb-3">
                        We are talented designers, marketers, communication specialist & computer programmers.
                      </h4>
                      <p>
                        Our team consists of diverse talents and expertise which make us a valuable asset to your business growth.
                        We exhibit exceptional professionalism through out our service delivery process to make sure you get the best.
                      </p>
                    </div>
                  </div>
                  <!-- End slide item -->

                  <div class="swiper-slide">
                    <div class="item">
                      <h3 class="mb-3">Meeting Delivarables Deadlines</h3>
                      <h4 class="mb-3">
                        We know and understand the anxiety and pressure, we get work done!
                      </h4>
                      <p>
                        We have worked with multiple businesses since our inception. Their rule - if we miss a deadline, we're out. Period.
                        Thhey have some of the tightest workarounds in their business - and we've never missed a single one.
                      </p>
                    </div>
                  </div>
                  <!-- End slide item -->

                  <div class="swiper-slide">
                    <div class="item">
                      <h3 class="mb-3">
                        Competitive Pricing
                      </h3>
                      <h4 class="mb-3">
                        We are here to serve micro, small, medium and large business all at fair prices.
                      </h4>
                      <p>
                        The rates for the services we provide are fair and competitive. There are no suprise bills. Any unexpected or additional 
                        expenses must be pre-approved by you.That is how we would like to be treated and that is how we treat you as our client.
                      </p>
                    </div>
                  </div>
                  <!-- End slide item -->
                </div>
                <div class="swiper-pagination"></div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Why Choose Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h3>Let's Help You Reach a Global Audience</h3>
              <p>
                Inform us of the value you want to deliver to your
                customers and let us help you craft the technology behind it
              </p>
              <a class="cta-btn" href="{{ url('/request-quote') }}">Request Quote</a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Call To Action Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/edwin.jfif" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://twitter.com/_wawiny" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/edwin" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/wawiny_edwin" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://linkedin.com/wawiny-edwin" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Edwin Odhiambo</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  @endsection