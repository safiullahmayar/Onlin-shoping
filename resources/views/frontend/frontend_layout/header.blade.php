 <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
     <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
         <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
         <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
     </div>
 </section>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center header-transparent">
     <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

         <div class="logo me-auto">
             <h1><a href="index.html">Delicious</a></h1>
             <!-- Uncomment below if you prefer to use an image logo -->
             <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
         </div>

         <nav id="navbar" class="navbar order-last order-lg-0">
             <ul>
                 <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                 <li><a class="nav-link scrollto" href="#about">About</a></li>
                 <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
                 <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
                 <li><a class="nav-link scrollto" href="#events">Events</a></li>
                 <li><a class="nav-link scrollto" href="">Chefs</a></li>

                 {{-- <li><a class="nav-link scrollto" href="{{ route('') }}">Register</a></li> --}}

                 <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li><a href="#">Drop Down 1</a></li>
                         <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                     class="bi bi-chevron-right"></i></a>
                             <ul>
                                 <li><a href="#">Deep Drop Down 1</a></li>
                                 <li><a href="#">Deep Drop Down 2</a></li>
                                 <li><a href="#">Deep Drop Down 3</a></li>
                                 <li><a href="#">Deep Drop Down 4</a></li>
                                 <li><a href="#">Deep Drop Down 5</a></li>
                             </ul>
                         </li>
                         <li><a href="#">Drop Down 2</a></li>
                         <li><a href="#">Drop Down 3</a></li>
                         <li><a href="#">Drop Down 4</a></li>
                     </ul>
                 </li>
                 <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->


         <li>
         <li> <a href="{{ route('logined') }}" class="book-a-table-btn scrollto"> login</a> </li>
         </li>

 </header><!-- End Header -->

 <!-- ======= Hero Section ======= -->
 <section id="hero">
     <div class="hero-container">
         <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

             <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

             <div class="carousel-inner" role="listbox">

                 <!-- Slide 1 -->
                 <div class="carousel-item active"
                     style="background-image: url({{ asset('frontend/assets/img/slide/slide-1.jpg') }});">
                     <div class="carousel-container">
                         <div class="carousel-content">
                             <h2 class="animate__animated animate__fadeInDown"><span>Delicious</span> Restaurant</h2>
                             <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                 aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                 mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                 vel. Minus et tempore modi architecto.</p>
                             <div>
                                 <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our
                                     Menu</a>
                                 <a href="#book-a-table"
                                     class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Slide 2 -->
                 <div class="carousel-item"
                     style="background-image: url({{ asset('frontend/assets/img/slide/slide-2.jpg') }});">
                     <div class="carousel-container">
                         <div class="carousel-content">
                             <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                             <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                 aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                 mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                 vel. Minus et tempore modi architecto.</p>
                             <div>
                                 <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our
                                     Menu</a>
                                 <a href="#book-a-table"
                                     class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Slide 3 -->
                 <div class="carousel-item"
                     style="background-image: url({{ asset('frontend/assets/img/slide/slide-3.jpg') }});">
                     <div class="carousel-container">
                         <div class="carousel-content">
                             <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                             <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                 aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                 mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                 vel. Minus et tempore modi architecto.</p>
                             <div>
                                 <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our
                                     Menu</a>
                                 <a href="#book-a-table"
                                     class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>

             <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                 <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
             </a>

             <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                 <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
             </a>

         </div>
     </div>
 </section><!-- End Hero -->
