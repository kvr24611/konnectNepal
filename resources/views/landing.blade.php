
@extends('layouts.frontmaster')

@section('content')


    <!-- Image Carousel -->

    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="5000">

      <!-- Carousel Content -->
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="../landingAssets/img/carousel/1.jpg" alt="" class="w-100">
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-8 bg-custom d-none d-md-block py-3 px-0">
                  <h1>Bootstrap</h1>
                  <div class="border-top border-primary w-50 mx-auto my-3"></div>
                  <h3 class="pb-3">Complete Website Design</h3>
                  <a href="#" class="btn btn-danger btn-lg mr-2">View Demo</a>
                  <a href="#" class="btn btn-primary btn-lg ml-2">Start Now</a>
                </div>  
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../landingAssets/img/carousel/2.jpg" alt="" class="w-100">
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-end text-right">
                <div class="col-5 bg-custom d-none d-lg-block py-3 px-0 pr-3">
                  <p class="lead pb-3">A mobile friendly HTML CSS WEBSITE DESIGN</p>
                  <a href="#" class="btn btn-danger btn-lg">See Phone</a>

                </div>  
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../landingAssets/img/carousel/3.jpg" alt="" class="w-100">
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-start text-left">
                <div class="col-7 bg-custom d-none d-lg-block py-3 px-0  pl-3">
                  <h3 class="pb-3">Built for tablets</h3>
                  <p class="lead">The best website can be seen just as well on all devices.</p>
                  <a href="#" class="btn btn-primary btn-lg">See Tablet</a>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>  
      <!-- End Carousel Content -->


      <!-- Previous & Next Buttons -->
      <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="fas fa-chevron-left fa-2x"></span>
      </a>
      <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
        <span class="fas fa-chevron-right fa-2x"></span>
      </a>
      <!-- End Previous & Next Buttons -->

    </div>
    <!-- End Image Carousel -->


    <!-- Main Page Heading -->

    <div class="col-12 text-center mt-5">
      <h1 class="text-dark pt-4">Built with Ease</h1>
      <div class="border-top border-primary w-25 mx-auto my-3"></div>
      <p class="lead">For all of the champions.</p>
    </div>


    <!-- Three Column Section -->
    <div class="container">
      <div class="row my-5">

        <div class="col-md-4 my-4">
          <img src="../landingAssets/img/1.jpg" class="w-100">
          <h4 class="my-4">"Amazing. Incredible"</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <a href="#" class="btn btn-outline-dark btn-md">Our Story</a>
        </div>

        <div class="col-md-4 my-4">
          <img src="../landingAssets/img/2.jpg" class="w-100">
          <h4 class="my-4">"Amazing. Incredible"</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <a href="#" class="btn btn-outline-dark btn-md">Our Story</a>
        </div>

        <div class="col-md-4 my-4">
          <img src="../landingAssets/img/3.jpg" class="w-100">
          <h4 class="my-4">"Amazing. Incredible"</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <a href="#" class="btn btn-outline-dark btn-md">Our Story</a>
        </div>



      </div>
    </div>

    <!-- End Three Column Section -->


    <!-- Emoji Navbar First -->
    <a href ="#emoji" role="button" data-toggle="collapse" class="navbar bg-primary sticky-top emoji"></a>


    <!-- Start Fixed Background IMG -->
    <div class="fixed-background">

      <div class="row text-light py-5">
        <div class="col-12 text-center">
          <h1>Advance to the Next Level</h1>
          <h3 class="py-4">..See what's on the other side</h3>
          <button type="button" data-toggle="modal" data-target="#modal1" class="btn btn-danger btn-lg mr-2">View Demo</button>
          <button type="button" data-toggle="modal" data-target="#modal1" class="btn btn-primary btn-lg ml-2">Start Now</button>
        </div>
      </div>

      <div class="fixed-wrap">
        <div class="fixed">
          
        </div>
      </div>
    </div>

    <!-- End Fixed Background IMG -->
   
    
    <!-- Emoji Navbar Second -->
    <a href ="#emoji" role="button" data-toggle="collapse" class="navbar bg-primary sticky-top emoji">
      <i class="fas fa-plug"></i>
    </a>

    <div class="collapse" id="emoji">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3"><img src="img/emoji/panda.gif" class="w-100"></div>
          <div class="col-sm-6 col-md-3"><img src="img/emoji/poo.gif" class="w-100"></div>
          <div class="col-sm-6 col-md-3"><img src="img/emoji/unicorn.gif" class="w-100"></div>
          <div class="col-sm-6 col-md-3"><img src="img/emoji/chicken.gif" class="w-100"></div>
        </div>
      </div>
    </div>


    <!-- Modal Popup -->
    <div class="modal fade" id="modal1">
      <div class="modal-dialog">
        <img src="../landingAssets/img/emoji/poo.gif" class="w-100">
      </div>
    </div>

      
    <!-- Start Two Column Section -->
    <div class="container my-5">
      <div class="row py-4">
        
        <div class="col-lg-4 mb-4 my-lg-auto">
          <h1 class="text-dark font-weight-bold mb-3">We've been expecting you!!</h1>
          <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <a href="#" target="_blank" class="btn btn-outline-dark btn-lg">To the Website</a>
        </div>

        <div class="col-lg-8">
          <img src="../landingAssets/img/code.jpg" class="w-100">
        </div>

      </div>
    </div>

    <!-- End Two Column Section -->


    <!-- Start Jumbotron -->

    <div class="jumbotron py-5 mb-0">
      <div class="container">
        <div class="row">

          <div class="col-md-7 col-lg-8 col-xl-9 my-auto">
            <h4>Looking for quality web development and design services??</h4>
          </div>

          <div class="col-md-5 col-lg-4 col-xl-3 pt-4 pt-md-0">
            <a href="#" class="btn btn-primary btn-lg">Contact Us</a>
          </div>
          
        </div>
      </div>
    </div>  

    <!-- End Jumbotron -->



@endsection

