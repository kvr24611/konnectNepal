
@include ('layouts.header')

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">

          <div class="col-3">
            <div class="site-logo">
              <a href="index.html" class="font-weight-bold">Monarchy</a>
            </div>
          </div>

          <div class="col-9  text-right">


            <span class="d-inline-block d-lg-none"><a href="#" class="text-primary site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-primary"></span></a></span>



            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li class="active"><a href="/" class="nav-link">Home</a></li>
                <li><a href="portfolio" class="nav-link">Portfolio</a></li>
                <li><a href="about" class="nav-link">About</a></li>
                <li><a href="services" class="nav-link">Services</a></li>
                <li><a href="blog" class="nav-link">Blog</a></li>
                <li><a href="contact" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


        </div>
      </div>

    </header>
    @yield('content')
    <div class="footer site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="site-logo-footer">
              <a href="index.html">Monarchy</a>
            </div> 
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nostrum culpa commodi similique qui, eaque necessitatibus, saepe hic repellat suscipit.</p>
          </div>
          <div class="col-md-8 ml-auto">
            <div class="row">
              <div class="col-md-4 ml-auto">
                <ul class="list-unstyled links">
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">hello@mydomain.com</a></li>
                  <li><a href="#">+1 829 2293 382</a></li>
                  <li><a href="#">Support</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled links">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">About Us</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled links">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">About Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pt-0 copyright">
      <div class="container">
        <div class="row mb-4 text-center">
          <div class="col">
            <a href="#"><span class="m-2 icon-facebook"></span></a>
            <a href="#"><span class="m-2 icon-twitter"></span></a>
            <a href="#"><span class="m-2 icon-linkedin"></span></a>
            <a href="#"><span class="m-2 icon-instagram"></span></a>
            <a href="#"><span class="m-2 icon-skype"></span></a>
          </div>
        </div>
        <div class="row mt-5 justify-content-center">
          <div class="col-md-7 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

 @include ('layouts.footer')

</body>

</html>




