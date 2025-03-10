<?php
// get_header();

// get_footer();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itechy</title>
   <!-- CSS only -->
   <?php 
   wp_head();
   ?>
<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . 'assets/img/Total IT 16 by 16.png'); ?>" type="image/png" sizes="16x16 32x32">
</head>

<body>
    <header>
        <nav class="navbar  fixed-top navbar-dark bg-transparent">
            <a class="navbar-brand" href="index.html"> <img class="img-responsive logo " src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/itechybg.png'); ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="navbar-collapse collapse " style="margin-right: 60px;" id="navbarSupportedContent">
              <ul class="navbaralign navbar-nav ml-auto navbar-expand float-right ">
                <!-- <li class="nav-item active">
                  <a class="nav-link" href="#">Home </a>
                </li> -->
                <li class="nav-item active dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services<span class="sr-only">(current)</span></a>
                  <ul class="dropdown-menu ">
                    <li><a class="nav-link" href="services.html"> Development</a></li>
                    <li><a class="nav-link" href="itsupport.html">Management</a></li>
                    <li><a class="nav-link" href="gadgets.html">Sales & Repair</a></li>
                    <li><a class="nav-link" href="computing.html">I.T Administration</a></li>
                    
                  </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html#aboutus">About us</a>
                  </li>
                  <!-- <li class="nav-item logo_middle" style="margin-left: 50px; margin-right: 80px;">
                    <a class="nav-link" href="#"><img class="img-responsive logo " src="assets/img/TOTAL_IT_12.png"></a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="index.html#project">Projects</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Testimonials</a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link " href="index.html#contact">Contact us</a>
                  </li>
              </ul>
              
            </div>
          </nav>

    </header>
    <section data-aos="fade-up" class="banner ">
        <!-- <img  src="assets/img/banner.jpg"> -->
        <!-- <div class="container bgimg">
            <div class="row">
              <div class="col-md-5">
       <div class="call">
<h2 class="cta">We are here to give your dreams a voice</h2>
<h5 class="cta">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h5>
<button class="btn btn-danger makebold mt-4">Get a free consultation</button>
</div>
</div>
</div>
 </div> -->
    
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <!-- Slide One - Set the background image for this slide in the line below -->
    <div class="carousel-item active" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/I\ 1.png'); ?>)">
      <div class="container bgimg">
        <div class="row">
          <div class="col-md-12">
   <div class="call">
<h1 class="text-light text-center">YOUR ONE STOP I.T AGENCY </h1>
<h3 class="text-light text-center">The complete solution place</h3>
<!-- <h5 class="cta">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h5> -->
<div class="text-center banneralign"><a href="index.html#contact"><button class="btn btn-outline-light text-danger rounded-pill  bg-white mt-4">Let's get started</button></a><div class="float-right"><img class="bg-white m-2 p-1 rounded " src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/instagram.png'); ?>"><br>
<img class="bg-white m-2 px-2 " src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/fb.png'); ?>"></div></div>
</div>
</div>
</div>
</div> 
      <div class="carousel-caption d-none d-md-block">
        
        <!-- <h3 class="display-4">First Slide</h3>
        <p class="lead">This is a description for the first slide.</p> -->
      </div>
    </div>
    <!-- Slide Two - Set the background image for this slide in the line below -->
    <div class="carousel-item" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/Networking.jpg'); ?>">
      <div class="container bgimg">
        <div class="row">
          <div class="col-md-12">
            <div class="call">
         <h1 class="text-light text-center">YOUR ONE STOP I.T AGENCY </h1>
         <h3 class="text-light text-center">The complete solution place</h3>
         
<!-- <h5 class="cta">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h5> -->
<div class="text-center banneralign"><a href="index.html#contact"><button class="btn btn-outline-light text-danger rounded-pill  bg-white mt-4">Let's get started</button></a><div class="float-right"><img class="bg-white m-2 p-1 rounded " src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/instagram.png'); ?>"><br>
<img class="bg-white m-2 px-2 " src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/fb.png'); ?>"></div></div>
</div>
</div>
</div>

</div> 
      <div class="carousel-caption d-none d-md-block">
        
        <!-- <h3 class="display-4">Second Slide</h3>
        <p class="lead">This is a description for the second slide.</p> -->
      </div>
    </div>
    <!-- Slide Three - Set the background image for this slide in the line below -->
    <div class="carousel-item" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/About Us.jpg'); ?>">
      <div class="container bgimg">
        <div class="row">
          <div class="col-md-12">
            <div class="call">
         <h1 class="text-light text-center">YOUR ONE STOP I.T AGENCY </h1>
         <h3 class="text-light text-center">The complete solution place</h3>
<!-- <h5 class="cta">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h5> -->
<div class="text-center banneralign"><a href="index.html#contact"><button class="btn btn-outline-light text-danger rounded-pill  bg-white mt-4">Let's get started</button></a><div class="float-right"><img class="bg-white m-2 p-1 rounded " src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/instagram.png'); ?>"><br>
  <img class="bg-white m-2 px-2 " src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/fb.png'); ?>"></div></div>

</div>

</div>

</div>

</div> 
      <div class="carousel-caption d-none d-md-block">
        <!-- <h3 class="display-4">Third Slide</h3>
        <p class="lead">This is a description for the third slide.</p> -->
        
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      
</div>

</section >
<a id="button"></a>
    <section data-aos="fade-up" id="whatwedo" class="sectionspace">
      
      <div class="container">
        <h4 class="text-center card-title mb-3 brownhead">Services</h4>
        <div class="row">
          <!-- <div class="col-sm-1"></div> -->
          <div class="col- col-lg-2  col-md-6   ">
            
            <div class="card shadow rounded">
              <div class="card-body">
                 <img class=" serviceimg ml-3  mt-4 mb-4" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/app-development.svg'); ?>" >
                 <h5 class="card-title text-center" >Mobile App Development</h5>
                <!-- <p class="card-text text-center">Mobile App Dev <br>Web/Apps Dev <br> Software Dev</p> -->
                <!-- <a href="services.html">Learn more</a> -->
          </div>
        </div>
      </div>
      <div class="col- col-lg-2  col-md-6   ">
            
        <div class="card shadow rounded">
          <div class="card-body">
             <img class="  mt-4 mb-5 serviceimg ml-2" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/cyber-security.svg'); ?>" >
             <h5 class="card-title text-center" >Cyber Security</h5>
            <!-- <p class="card-text text-center">I.T Support <br>I.T Consultancy <br> I.T Training</p> -->
            <!-- <a href="itsupport.html">Learn more</a> -->
      </div>
    </div>
  </div>
  <div class="col- col-lg-2  col-md-6  ">
            
    <div class="card shadow rounded">
      <div class="card-body">
         <img class="  mt-5 mb-5 serviceimg ml-2" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/tech.svg'); ?>" >
         <h5 class="card-title text-center" > I.T Support</h5>
        <!-- <p class="card-text text-center">Cyber Security <br>Networking <br> Server Administration</p> -->
        <!-- <a href="computing.html" class="text-center">Learn more</a> -->
  </div>
</div>
</div>
<div class="col- col-lg-2  col-md-6  ">
            
  <div class="card shadow rounded">
    <div class="card-body">
       <img class=" mt-4 mb-5 serviceimg ml-2" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/sales.svg'); ?>" >
       <h5 class="card-title text-center" >Gadget Sales</h5>
      <!-- <p class="card-text text-center">Gadget Sales <br>Gadget Repairs <br> Data Recovery</p> -->
      <!-- <a href="gadgets.html">Learn more</a> -->
</div>
</div>
</div>

<div class="col- col-lg-2  col-md-6  ">
            
  <div class="card shadow rounded">
    <div class="card-body">
       <img class="  mt-4 mb-5 serviceimg ml-2" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/training.svg'); ?>" >
       <h5 class="card-title text-center" >I.T Trainings</h5>
      <!-- <p class="card-text text-center">Gadget Sales <br>Gadget Repairs <br> Data Recovery</p> -->
      <!-- <a href="gadgets.html">Learn more</a> -->
</div>
</div>
</div>

<div class="col- col-lg-2  col-md-6  ">
            
  <div class="card shadow rounded">
    <div class="card-body">
       <img class=" mb-3 mt-4 mb-5 serviceimg ml-4" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/control.svg'); ?>" >
       <h5 class="card-title text-center" >Gadget Repairs</h5>
      <!-- <p class="card-text text-center">Gadget Sales <br>Gadget Repairs <br> Data Recovery</p> -->
      <!-- <a href="gadgets.html">Learn more</a> -->
</div>
</div>
</div>
<!-- <div class="col-sm-1"></div> -->

        </div>
       
      </div>
      <!-- <div class="row"> <button onclick="location.href='services.html';" class="btn btn-outline-danger mx-auto px-5" style="margin-top: 68px; width: 400px; height: 60px;">See all services</button> </div> -->
    </section>
    
    <section data-aos="fade-up" id="aboutus" class="sectionspace">
      
          <div class="container">
            <!-- <h4 class="text-center mt-5">OUR EXPERTISE AND CERTIFICATIONS</h4 > -->
              <h3 class="text-center mb-3 brownhead" >Brands That Trust Us</h3>
            <!-- <div class="row"> -->
              <!-- <img class="img-fluid" src="assets/img/Group 21.png" > -->
              <div class="row brands">
                <!-- <div class="col-3"></div> -->
                <div class="mx-auto">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="wrapper w-container ">
                            <img src="<?php echo esc_url( get_template_directory_uri() . 'assets/img/Total IT 16 by 16.png'); ?>/assets/img/1.png" alt="" class="client-logo"/>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/2.png'); ?>" alt="" class="client-logo"/>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/3.png'); ?>" alt="" class="client-logo"/>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/4.png'); ?>" alt="" class="client-logo"/>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="wrapper w-container">
                          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/5.png'); ?>" alt="" class="client-logo"/>
                          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/6.png'); ?>" alt="" class="client-logo"/>
                          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/7.png'); ?>" alt="" class="client-logo"/>
                          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/8.png'); ?>" alt="" class="client-logo"/>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="wrapper w-container">
                          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/9.png'); ?>" alt="" class="client-logo"/>
                          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/bena.png'); ?>" alt="" class="client-logo"/>
                          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/mountain top.png'); ?>" alt="" class="client-logo"/>
                          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/Elyon.png'); ?>" alt="" class="client-logo"/>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
                        <div class="wrapper w-container">
                          <img src="https://via.placeholder.com/75" alt="" class="client-logo"/>
                          <img src="https://via.placeholder.com/75" alt="" class="client-logo"/>
                          <img src="https://via.placeholder.com/75" alt="" class="client-logo"/>
                          <img src="https://via.placeholder.com/75" alt="" class="client-logo"/>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="wrapper w-container">
                          <img src="https://via.placeholder.com/130" alt="" class="client-logo"/>
                          <img src="https://via.placeholder.com/130" alt="" class="client-logo"/>
                          <img src="https://via.placeholder.com/130" alt="" class="client-logo"/>
                          <img src="https://via.placeholder.com/130" alt="" class="client-logo"/>
                        </div>
                    </div> -->
                    
                </div>
                
            </div>
            
          </div>
          
          <div class="col-1"></div>
          
            </div> 
            <!-- row -->
            <!-- </div> -->
            <!-- <div class="row mt-4" >
             <button onclick="location.href='index.html#contact'" class="btn btn-danger makebold mx-auto px-5 py-1 my-4 float_object ext_btn rounded">Let's Work Together</button></div> -->

             

          </div>
          <div class=" digital">
            <h3 class="text-light text-center p-3">Do you need a digital transformation</h3>

<div class="text-center p-3"><a href="index.html#contact"><button class="btn btn-outline-light text-danger rounded-pill  bg-white mt-4">Just A Call</button></a></div>
          </div>
    </section>
    <!-- <section data-aos="fade-up" id="project" class="sectionspace">
      <div class="container projects customcolor">
        <h3 class="text-center py-5 ">Projects</h3>
        <div class="row">
          
          
          <div class="col-md-5">
            <div> <a class="btn btncarousel customcolor mr-lg-4" href="#carouselExampleControls" role="button" data-slide="prev"><svg class="bi bi-caret-left-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.86 8.753l5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
            </svg></a> 
              <a class="btn btncarousel customcolor" href="#carouselExampleControls" role="button" data-slide="next"><svg class="bi bi-caret-right-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
              </svg></a> 
            </div>
            <div class="d-none aldelia"><h3 class="makebold mt-4">Aldelia</h3>
            <p class="">Aldelia is a world leading human resource advisory firm, leader in professional
              recruitment services.. </p>
            <a target="_blank"class="link" href="https://aldelia.com/"><button class="btn btn-danger ">Check it out</button></a></div>

            <div class="d-none baker"><h3 class="makebold mt-4">Apprentice Baker</h3>
              <p class="">Apprentice Baker is a world leading human resource advisory firm, leader in professional
                recruitment services.. </p>
              <a target="_blank"class="link" href="https://www.theapprenticebaker.com/"><button class="btn btn-danger ">Check it out</button></a></div>


              <div class="d-none egfm"><h3 class="makebold mt-4">EGFM</h3>
                <p class="">EGFM is a non-denominational christian body.</p>
                <a target="_blank"class="link" href="https://egfm.org/"><button class="btn btn-danger ">Check it out</button></a></div>

                <div class="d-none diamond"><h3 class="makebold mt-4">Diamond School of Protocol and Etiquette</h3>
                  <p class="">Diamond school of protocol and etiquette is a school that fosters professionalim
                    and promotes etiquette. </p>
                  <a target="_blank"class="link" href="https://diamondschoolofprotocol.com/"><button class="btn btn-danger ">Check it out</button></a></div>


                <div class="d-none nimasa"><h3 class="makebold mt-4">Nimasa E-library</h3>
                  <p class="">Nimasa E-library is an electronic library for the Nigerian maritime and safety
                    agancy. </p>
                  <a target="_blank"class="link" href="http://www.nimasaelibrary.com/"><button class="btn btn-danger ">Check it out</button></a></div>

            <div class=" mobile"><h3 class="makebold mt-4 customcolor">BUS</h3>
              <p class=" customcolor">BUSINESS UMLIMITED SOLUTION. A cloud enterprise solution for SMEs that helps you manage your business from stock mapping to basic accounting, whether you are in sales and manufacturing. It gives you the oversight of your business and also accelerates your processes.</p>
              <a target="_blank"class="link  customcolor" href="https://busng.com"><button class="btn btn-danger ">Check it out</button></a></div>

          </div>
          <div class="col-md-1"></div>
          <div class="col">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div id="firstSlide" class="carousel-item active">
                  <img src="assets/img/BUS Mockup File.png" class="d-block w-100" alt="...">
                </div>
                <div id="secondSlide" class="carousel-item">
                  <img src="assets/img/pp1.png" class="d-block w-100" alt="...">
                </div>

                <div id="thirdSlide" class="carousel-item">
                  <img src="assets/img/TAB Mockup File.png" class="d-block w-100" alt="...">
                </div>

               
                <div id="fifthSlide" class="carousel-item">
                  <img src="assets/img/NIMASA Mockup File.png" class="d-block w-100" alt="...">
                </div>
                <div id="sixthSlide" class="carousel-item">
                  <img src="assets/img/DIA Mockup File.png" class="d-block w-100" alt="...">
                </div>
                
              </div>
              
                </div>
            </div>
        </div>
      </div>




    </section> -->
    <section id="testimonials" data-aos="fade-up" class="testimonials sectionspace">
      <div class="container ">
        <h4 class="text-center my-3 brownhead">What are Clients Are Saying</h4>
        <div class="row clientsbg">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container ">
                  <div class="row ">
     <div class="col"> <div class="mt-4"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="200" height="200"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M0,86c0,-47.49649 38.50351,-86 86,-86c47.49649,0 86,38.50351 86,86c0,47.49649 -38.50351,86 -86,86c-47.49649,0 -86,-38.50351 -86,-86zM86,168.56c45.59663,0 82.56,-36.96337 82.56,-82.56c0,-45.59663 -36.96337,-82.56 -82.56,-82.56c-45.59663,0 -82.56,36.96337 -82.56,82.56c0,45.59663 36.96337,82.56 82.56,82.56z" fill="#cccccc"></path><g fill="#000000"><path d="M126.13333,34.4h-80.26667c-6.33533,0 -11.46667,5.13133 -11.46667,11.46667v80.26667c0,6.33533 5.13133,11.46667 11.46667,11.46667h80.26667c6.33533,0 11.46667,-5.13133 11.46667,-11.46667v-80.26667c0,-6.33533 -5.13133,-11.46667 -11.46667,-11.46667zM86,51.6c9.74667,0 17.2,7.45333 17.2,17.2c0,9.74667 -7.45333,17.2 -17.2,17.2c-9.74667,0 -17.2,-7.45333 -17.2,-17.2c0,-9.74667 7.45333,-17.2 17.2,-17.2zM117.53333,120.4h-63.06667c-1.5824,0 -2.86667,-1.28427 -2.86667,-2.86667v-2.86667c0,-9.00707 15.60613,-17.2 34.4,-17.2c18.79387,0 34.4,8.19293 34.4,17.2v2.86667c0,1.5824 -1.28427,2.86667 -2.86667,2.86667z"></path></g><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path><path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path></g></svg>
      <div class="mt-3 ml-4"><h6 class="">Arnold Afuye </h6>
      <h6 class="">Micaheletech </h6>
      <h6 class="">Country Manager</h6></div>
    </div>
    </div>
     <div class="col"> <h1>"</h1>
       <h4 class="mb-5">I got in touch with Total I.T in 2017 through referral from a friend, I needed a smart solution and they delivered and have always been delivering. We’ve done several business together, no regrets.</h4> <i class="pb-5">Web Applications, Dev, Web Design, E-commerce, Graphics Design, Digital Marketing</i></div>
  
      </div>
    
</div></div>

<div class="carousel-item">
  <div class="container ">
    <div class="row ">
<div class="col"> <div class="mt-4"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="200" height="200"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M0,86c0,-47.49649 38.50351,-86 86,-86c47.49649,0 86,38.50351 86,86c0,47.49649 -38.50351,86 -86,86c-47.49649,0 -86,-38.50351 -86,-86zM86,168.56c45.59663,0 82.56,-36.96337 82.56,-82.56c0,-45.59663 -36.96337,-82.56 -82.56,-82.56c-45.59663,0 -82.56,36.96337 -82.56,82.56c0,45.59663 36.96337,82.56 82.56,82.56z" fill="#cccccc"></path><g fill="#000000"><path d="M126.13333,34.4h-80.26667c-6.33533,0 -11.46667,5.13133 -11.46667,11.46667v80.26667c0,6.33533 5.13133,11.46667 11.46667,11.46667h80.26667c6.33533,0 11.46667,-5.13133 11.46667,-11.46667v-80.26667c0,-6.33533 -5.13133,-11.46667 -11.46667,-11.46667zM86,51.6c9.74667,0 17.2,7.45333 17.2,17.2c0,9.74667 -7.45333,17.2 -17.2,17.2c-9.74667,0 -17.2,-7.45333 -17.2,-17.2c0,-9.74667 7.45333,-17.2 17.2,-17.2zM117.53333,120.4h-63.06667c-1.5824,0 -2.86667,-1.28427 -2.86667,-2.86667v-2.86667c0,-9.00707 15.60613,-17.2 34.4,-17.2c18.79387,0 34.4,8.19293 34.4,17.2v2.86667c0,1.5824 -1.28427,2.86667 -2.86667,2.86667z"></path></g><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path><path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path></g></svg>
<div class="mt-3 ml-4"><h6 class="">John Doe </h6>
<h6 class="">Blackrock </h6>
<h6 class=""></h6></div>
</div>
</div>
<div class="col"> <h1 class="">"</h1>
<h4 class="mb-5">Itechy is a 100% well rounded IT solution company. Just as her name implies they are IT Total meaning a one stop shop for genuine IT solutions with integrity. In this age and time when such virtues are fast losing out. Weldone Total IT</h4> <i class="pb-5">Web Applications, Dev, Web Design, E-commerce, Graphics Design, Digital Marketing</i></div>

</div>

</div></div>

<div class="carousel-item">
  <div class="container ">
    <div class="row ">
<div class="col"> <div class="mt-4"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="200" height="200"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M0,86c0,-47.49649 38.50351,-86 86,-86c47.49649,0 86,38.50351 86,86c0,47.49649 -38.50351,86 -86,86c-47.49649,0 -86,-38.50351 -86,-86zM86,168.56c45.59663,0 82.56,-36.96337 82.56,-82.56c0,-45.59663 -36.96337,-82.56 -82.56,-82.56c-45.59663,0 -82.56,36.96337 -82.56,82.56c0,45.59663 36.96337,82.56 82.56,82.56z" fill="#cccccc"></path><g fill="#000000"><path d="M126.13333,34.4h-80.26667c-6.33533,0 -11.46667,5.13133 -11.46667,11.46667v80.26667c0,6.33533 5.13133,11.46667 11.46667,11.46667h80.26667c6.33533,0 11.46667,-5.13133 11.46667,-11.46667v-80.26667c0,-6.33533 -5.13133,-11.46667 -11.46667,-11.46667zM86,51.6c9.74667,0 17.2,7.45333 17.2,17.2c0,9.74667 -7.45333,17.2 -17.2,17.2c-9.74667,0 -17.2,-7.45333 -17.2,-17.2c0,-9.74667 7.45333,-17.2 17.2,-17.2zM117.53333,120.4h-63.06667c-1.5824,0 -2.86667,-1.28427 -2.86667,-2.86667v-2.86667c0,-9.00707 15.60613,-17.2 34.4,-17.2c18.79387,0 34.4,8.19293 34.4,17.2v2.86667c0,1.5824 -1.28427,2.86667 -2.86667,2.86667z"></path></g><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path><path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path></g></svg>
<div class="mt-3 ml-4"><h6 class="">Jane Stephens </h6>
<h6 class="">Abuja </h6>
<h6 class=""></h6></div>
</div>
</div>
<div class="col"> <h1>"</h1>
<h4 class="mb-5">Itechy made the purchase of my new Infinix Hot 6X easier, seeing i don't very much know my way around tech things or computer village. A big thank you for making purchase of quality laptops and phones and accessories easier and thank you for being customer friendly....... we would do more together ...... keep up the seamless service.</h4> <i class="pb-5">Web Applications, Dev, Web Design, E-commerce, Graphics Design, Digital Marketing</i></div>

</div>

</div></div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
        </div><!-- row -->
      </div>
    </section>
    <section id="team">
      <div class="row">
        <div class="col"></div>
      <div class="col-5"> <div class="ourteam "><h4 class="text-light text-center">We are a team focused on transforming our society and beyond by providing excellent and efficient solutions through our expertise.</h4></div></div>
      <div class="col"></div>
    </div>
    </section>
    
    <section>
      <footer class="section footer-classic context-dark bg-image" style="background: #020814; padding-bottom: 150px; padding-top: 70px;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/itechy2.png'); ?>" alt="" width="140" height="90" srcset="<?php echo esc_url( get_template_directory_uri() . '/assets/img/itechy2.png'); ?>"></a>
                <p>info@itechy.xyz</p>
                <!-- Rights-->
                
                  <p>+234-0705-517-8355 <br>
                    +234-0802-532-1238</p>
                    <p class="rights">First floor, No. 88 Iwaya Road,<br>
                      Onike, Yaba, Lagos.</p>
                    <i class="fa fa-instagram pr-4" aria-hidden="true"></i><i class="fa fa-facebook pl-2" aria-hidden="true"></i><i class="fa fa-twitter pl-4" aria-hidden="true"></i><i class="fa fa-linkedin pl-4" aria-hidden="true"></i>
              </div>
            </div>
            
            
          </div>
        </div>
        <!-- <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div> -->
      </footer>
    </section>
   <!-- JS, Popper.js, and jQuery -->
   <script
   src="https://code.jquery.com/jquery-3.5.1.min.js"
   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
   crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php do_action('wp_footer');?>
<script>AOS.init();</script>
</body>
</html>
