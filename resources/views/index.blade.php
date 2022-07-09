@extends('layout.index')

@section('content')

  <body class="page-index">
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="{{ url('/')}}" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="d-flex align-items-center">Limit Solutions</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        <nav id="navbar" class="navbar">
          <ul>
          <li><a href="{{ url('/') }}" class="active">Home</a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
          <li><a href="{{ url('/services') }}">Services</a></li>
          <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
          <li><a href="{{ url('/team') }}">Team</a></li>
          <li><a href="{{ url('/blog') }}">Blog</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-4">
            <h2 data-aos="fade-up">Focus On Your Business</h2>
            <blockquote data-aos="fade-up" data-aos-delay="100">
              <p>
                Do what matters to you by providing the best products or service
                to your customer, let us give your business the global digital
                presence it deserves.
              </p>
            </blockquote>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="{{ url('/request-quote')}}" class="btn-get-started">Get Started</a>
              <a
                href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                class="glightbox btn-watch-video d-flex align-items-center"
                ><i class="bi bi-play-circle"></i><span>Watch Video</span></a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
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

      <!-- ======= Our Services Section ======= -->
      <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Our Services</h2>
          </div>

          <div class="row gy-5">
            <div
              class="col-lg-4 col-md-6 service-item d-flex"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="icon flex-shrink-0">
                <i class="bi bi-globe" style="color: #f57813"></i>
              </div>
              <div>
                <h4 class="title">
                  <a href="#" class="stretched-link">Web Design</a>
                </h4>
                <p class="description">
                  Looking to have a website for your business? We are here to
                  help you with the user experience aspects of what it should
                  look like.
                </p>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-lg-4 col-md-6 service-item d-flex"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="icon flex-shrink-0">
                <i class="bi bi-code" style="color: #15a04a"></i>
              </div>
              <div>
                <h4 class="title">
                  <a href="#" class="stretched-link">Web Development</a>
                </h4>
                <p class="description">
                  For you to have an online front for your business, we create
                  websites and deploy for you so that everyone can know what you
                  do as a business.
                </p>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-lg-4 col-md-6 service-item d-flex"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="icon flex-shrink-0">
                <i class="bi bi-bar-chart" style="color: #d90769"></i>
              </div>
              <div>
                <h4 class="title">
                  <a href="#" class="stretched-link">Product Management</a>
                </h4>
                <p class="description">
                  We help you to manage your existing product in the market by
                  offering technical support and expertise to make sure you
                  deliver value.
                </p>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-lg-4 col-md-6 service-item d-flex"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="icon flex-shrink-0">
                <i class="bi bi-bookmark" style="color: #15bfbc"></i>
              </div>
              <div>
                <h4 class="title">
                  <a href="#" class="stretched-link">Graphic Design</a>
                </h4>
                <p class="description">
                  For your business and brand, we create visual compositions to
                  communicate your ideas through typography and imagery
                </p>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-lg-4 col-md-6 service-item d-flex"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <div class="icon flex-shrink-0">
                <i class="bi bi-app" style="color: #f5cf13"></i>
              </div>
              <div>
                <h4 class="title">
                  <a href="#" class="stretched-link">Social Media Branding</a>
                </h4>
                <p class="description">
                  We help you reach and engage with your target audience on all
                  social media platfroms to drive brand awareness and boost
                  brand visibility.
                </p>
              </div>
            </div>
            <!-- End Service Item -->

            <div
              class="col-lg-4 col-md-6 service-item d-flex"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <div class="icon flex-shrink-0">
                <i class="bi bi-pen" style="color: #1335f5"></i>
              </div>
              <div>
                <h4 class="title">
                  <a href="#" class="stretched-link">Content Marketing</a>
                </h4>
                <p class="description">
                  We help you attract, engage, and retain your brand's audience
                  by creating and sharing relevant content to keep your business
                  top of users mind.
                </p>
              </div>
            </div>
            <!-- End Service Item -->
          </div>
        </div>
      </section>
      <!-- End Our Services Section -->

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

      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-posts" class="recent-posts">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Recent Blog Posts</h2>
          </div>

          <div class="row gy-5">
            <div
              class="col-xl-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="post-box">
                <div class="post-img">
                  <img
                    src="assets/img/blog/blog-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="meta">
                  <span class="post-date">Tue, December 12</span>
                  <span class="post-author"> / Julia Parker</span>
                </div>
                <h3 class="post-title">
                  Benefits of getting your business online.
                </h3>
                <p>
                  Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel
                  omnis laudantium. Asperiores eum ipsa est officiis. Modi qui
                  magni est...
                </p>
                <a href="{{ url('/blog-details') }}" class="readmore stretched-link"
                  ><span>Read More</span><i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>

            <div
              class="col-xl-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="post-box">
                <div class="post-img">
                  <img
                    src="assets/img/blog/blog-2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="meta">
                  <span class="post-date">Fri, September 05</span>
                  <span class="post-author"> / Mario Douglas</span>
                </div>
                <h3 class="post-title">
                  Impacts of digital transformation on SMEs
                </h3>
                <p>
                  Voluptatem nesciunt omnis libero autem tempora enim ut ipsam
                  id. Odit quia ab eum assumenda. Quisquam omnis doloribus...
                </p>
                <a href="{{ url('/blog-details') }}" class="readmore stretched-link"
                  ><span>Read More</span><i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>

            <div
              class="col-xl-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="post-box">
                <div class="post-img">
                  <img
                    src="assets/img/blog/blog-3.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="meta">
                  <span class="post-date">Tue, July 27</span>
                  <span class="post-author"> / Lisa Hunter</span>
                </div>
                <h3 class="post-title">Brand growth through social media.</h3>
                <p>
                  Quia nam eaque omnis explicabo similique eum quaerat similique
                  laboriosam. Quis omnis repellat sed quae consectetur magnam...
                </p>
                <a href="{{ url('/blog-details') }}" class="readmore stretched-link"
                  ><span>Read More</span><i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>

            <div
              class="col-xl-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="post-box">
                <div class="post-img">
                  <img
                    src="assets/img/blog/blog-4.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="meta">
                  <span class="post-date">Tue, Sep 16</span>
                  <span class="post-author"> / Mario Douglas</span>
                </div>
                <h3 class="post-title">
                  Steps to help you make the digital paradigm shift.
                </h3>
                <p>
                  Et consequatur eveniet nam voluptas commodi cumque ea est ex.
                  Aut quis omnis sint ipsum earum quia eligendi...
                </p>
                <a href="{{ url('/blog-details') }}" class="readmore stretched-link"
                  ><span>Read More</span><i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Recent Blog Posts Section -->
    </main>
    <!-- End #main -->

@endsection
