<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ghadwa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="about/img/Logograduation.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/514abd949c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="about/lib/animate/animate.min.css" rel="stylesheet">
    <link href="about/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="about/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="about/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="about/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--css file link-->
  <link rel="stylesheet" href="about/css/stylesheet.css" type="text/css"/>
  <link href="about/css/reset.css" rel="stylesheet"/>
  <!--Font Acdn link and new icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://kit.fontawesome.com/514abd949c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- Responsive-->
  <link rel="stylesheet" href="about/css/responsive.css">
  <!-- fevicon for icons -->
  <link rel="icon" href="about/images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="about/css/jquery.mCustomScrollbar.min.css">
  <!-- Font Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="about/css/about.css">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border" style="width: 3rem; height: 3rem; color: #FEA116;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark  px-4 px-lg-5 py-3 py-lg-0" style="background-color: white;">
                <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                    <img src="about/img/Logograduation.png" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="color: #FEA116;">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ url('about-us') }}" class="nav-item nav-link active">About Us</a>
                        <a href="{{ url('Menu') }}" class="nav-item nav-link">Menu</a>
                        <a href="{{ url('gallery') }}" class="nav-item nav-link">Gallery</a>
                        <a href="{{ url('contact-us') }}" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <div id="navwords" class="text-end" >
                        @if (auth()->check())
                        <a href="{{ url('signout') }}" class="nav-item nav-link">Sign Out</a>
                        @else
                        <a class="btn " href="{{ url('signin') }}">
                            <small class="fa fa-user " style="color: #F49611; height: 5px; width: 5px;"></small>
                        </a>                        @endif

                        <a class="btn " href="{{ url('cart') }}" style="text-decoration: none;">
                            <small class="fa fa-shopping-cart " style="color: #F49611;  height: 5px; width: 5px;" ></small>
                        </a>
                    </div>
                </div>
            </nav>
            </div>
            </div>
<!--end nav-->

<!-- Page Header Start -->
<div>
    <video  autoplay muted loop width="100%" >
    <source src="about/img/pexels-nicole-michalou-6138827-3840x2160-25fps.mp4" type="video/mp4">
    </video>
        <div class="overlaytext">
       <h1 class="display-3 mb-3 animated slideInDown" style="text-align: center; margin-top: 200px; color: #FEA116;">About Us</h1>
            <br>
            <br>
            <div class="container">
                <h4 style="text-align: center; text-justify: auto; color: white;">In this page you are going to find everything you need to know about Ghadwa and know how much we love and care about you becasue you are our lovely family.</h4><br>
                <div  style="text-align: center; ">
                    <a class="btn btn-lg rounded-pill " href="#contact" style="text-align: center; background-color:#FEA116; color: white; " >Social Media</a>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Page Header End-->
 <!-- About Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="about/img/Kebab.jpg" style="margin-top: 50px;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="about/img/Seafood.jpg" style="margin-top: 50%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="about/img/Basmati Rice.jpg" style="margin-top: -180px;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="about/img/Fresh Juices.jpg" style="margin-right: 80px;">
                    </div>

                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="about/img/Salad.jpg" style="margin-top: -120px;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils  me-2" style="color: #F49611;"></i>Ghadwa</h1>
                <p class="mb-4">Ghadwa is a home made food delivery business that works to fully prepare your dining table, including all kinds of homemade food that you love. It works to save effort and fatigue in preparing any meal, and to save the effort of preparing lunch every day at home because its clean and guaranteed food for your household.</p>
                <p class="mb-4">We aspire to become the first food concept by serving our customers, delicious, clean home-inspired food wherever they are.</p>
                <br>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div style="border-color: #FEA116;" class="d-flex align-items-center border-start border-5 px-3" >
                            <h1 class="flex-shrink-0 display-5  mb-0" data-toggle="counter-up" style="color: #FEA116;">30</h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Home Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <a class="btn  py-3 px-5 mt-2" style="background-color: #FEA116; font-weight: bold; color: white;" href="../Menu.html">Go To Menu</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="about/img/multiple dishes.jpg" style="border-radius: 10px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-5 mb-4 whatghadwa">What is Ghadwa and who are we</h1>
                <p class="mb-4 whatghadwa1">Ghadwa is a website the provides a homemade food delivery to your doorstep, and because we love and care about you as well as your health, we are specialized in the homemade food which is made in a home and clean environment with love and delivered to you.<br>Ghadwa Provides different types of dishes such as the main dishes, soups, salads and desserts and all of these can be found in our menu page.<br>Some of of the ingredients in our dishes can be even found in Fatafeat's TV channel. If you like to have more information you may use this button.</p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="https://www.fatafeat.com/">Visit now</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Menu Visit Start -->
<div class="container-fluid bg-icon mt-5 py-6 menvisitback">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-5 text-black mb-3 visit">Visit Ghadwa's Menu</h1>
                <p class="text-black mb-0 visit1">Visit Ghadwa's menu page to checkout all the food that you like that is also made in a clean environment specially for you. And for the people who suffers from specific allergies, don't worry becasue you can know from our menu what are the allergies in the dish that you want. You also can make a special request for your dish if you don't like a specific ingredient or want to add a specific ingredient to have the taste that you always wanted.</p>
            </div>
            <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s" >
                <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="../Menu.html">Visit Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Menu Visit End -->


<!-- Feature Start -->
<div id="contact"></div>
<div class="container-fluid bg-light bg-icon py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3 contact">Contact Us</h1>
            <p class="feel">Feel free to share your experience with us. Or if you have an opinion or suggestion you can visit Ghadwa's contact us page or directly find us on social media</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center h-100 p-4 p-xl-5" style="border-radius: 10px;">
                    <img class="img-fluid mb-4" src="about/img/facebook.png" alt="facebook of ghadwa" width="100px" height="100px">
                    <h4 class="mb-3 fit">Facebook Page</h4><br><br>
                    <p class="mb-4 visit">Visit Ghadwa's Facebook page to find our new posts as well as to contact us if you prefer socail media contact method</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="https://www.facebook.com/Ghadwaa">Visit Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white text-center h-100 p-4 p-xl-5" style="border-radius: 10px;">
                    <img class="img-fluid mb-4" src="about/img/instagram.png" alt="instagram of ghadwa" width="100px" height="100px">
                    <h4 class="mb-3 fit">Instagram Page</h4><br><br>
                    <p class="mb-4 visit">Checkout Ghadwa's Instagram page to find out and know all of our newest dishes and, also you can find our home chefs names</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="https://www.instagram.com/8adwa/">Visit Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white text-center h-100 p-4 p-xl-5" style="border-radius: 10px;">
                    <img class="img-fluid mb-4" src="about/img/telegram.png" alt="telegram of ghadwa" width="100px" height="100px">
                    <h4 class="mb-3 fit">Telegram Channel</h4><br><br>
                    <p class="mb-4 visit">Join now Ghadwa's telegram channel  and communicate with other users to share your experience about Ghadwa</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="https://t.me/+ayBfykx6k-djYjA0">Visit Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


            <!--Footer-->
    <footer class="new_footer_area bg_color">
        <div class="new_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <div class="footerup">
                            <h2 class="fw-bold mb-4" style="color: white;">Ghadwa</h2>
                    <p style="font-size: medium;">is an online platform connecting talented homebased cooks with hungry professionals to give access to wholesome fresh home food, from the HomeChef’s kitchen.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href="https://www.instagram.com/8adwa/"><i class="fab fa-instagram" id="instagram"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href="https://www.facebook.com/Ghadwaa"><i class="fab fa-facebook-f"  id="instagram"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href="https://t.me/+ayBfykx6k-djYjA0"><i class="fab fa-telegram"  id="instagram"></i></a>
                    </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <h2 class=" fw-bold mb-4" style="color: white;">Address</h2>
                            <p style="color: white;"><i class="fa fa-map-marker-alt me-3" style="color: white;"></i>El-horrya road next to Yehya Mosque, Loran, Alexandria-Egypt.</p>
                            <p  style="color: white;"><i class="fa fa-phone-alt me-3" style="color: white;"></i>+20 123 456 7890</p>
                            <p style="color: white;"><i class="fa fa-envelope me-3" style="color: white;"></i>8adwaa@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h2 class="text-light mb-4" style="font-weight: bold;" >Quick Links</h2>
                            <a class="btn btn-link" href="../About Us 2nd Design/About Us.html">About Us</a>
                            <a class="btn btn-link" href="../Menu.html">Menu</a>
                            <a class="btn btn-link" href="../gallery.html">Gallery</a>
                            <a class="btn btn-link" href="../Privacy Policy Final Design/Contact Us.html">Privacy & Policy</a>
                            <a class="btn btn-link" href="../Contact Us 2nd design/Contact Us.html">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h2 class=" fw-bold mb-4" style="color: white;" >Newsletter</h2>
                            <p style="color: white;">Browse home made food for delivery by entering your email address blow.</p>
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3 " >
                                        <input type="text" class="form-control" placeholder='Email Address' >
                                        <div class="input-group-append" style="background-color:gainsboro">
                                            <button class="btn" type="button"><i class="fas fa-paper-plane" style="color: darkorange;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>
        <div class="container-fluid px-0 py-2" style="background-color:gainsboro;">
           <div class="container">
           <div>
           <div class="col-md-12" >
           <p class="mb-0" style="color: rgb(255, 255, 255);">
           Copyright ©2023 All rights reserved | <i>Ghadwa</i>.
           </p>
           </div>
           </div>
           </div>
           </div>
    </footer>
<!--End Footer-->

            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="about/lib/wow/wow.min.js"></script>
            <script src="about/lib/easing/easing.min.js"></script>
            <script src="about/lib/waypoints/waypoints.min.js"></script>
            <script src="about/lib/counterup/counterup.min.js"></script>
            <script src="about/lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="about/lib/tempusdominus/js/moment.min.js"></script>
            <script src="about/lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="about/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


            <script src="about/js/main.js"></script>
        </body>

        </html>

