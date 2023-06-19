<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ghadwa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="contact/img/Logograduation.png" rel="icon">

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
    <link href="contact/lib/animate/animate.min.css" rel="stylesheet">
    <link href="contact/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="contact/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="contact/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="contact/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--css file link-->
  <link rel="stylesheet" href="contact/css/stylesheet.css" type="text/css"/>
  <link href="contact/css/reset.css" rel="stylesheet"/>
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
  <link rel="stylesheet" href="contact/css/responsive.css">
  <!-- fevicon for icons -->
  <link rel="icon" href="contact/images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="contact/css/jquery.mCustomScrollbar.min.css">
  <!-- Font Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contact/css/contact.css">
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
                    <img src="contact/img/Logograduation.png" alt="contact ghadwa home food">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="color: #FEA116;">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ url('about-us') }}" class="nav-item nav-link">About Us</a>
                        <a href="{{ url('Menu') }}" class="nav-item nav-link">Menu</a>
                        <a href="{{ url('gallery') }}" class="nav-item nav-link">Gallery</a>
                        <a href="{{ url('contact-us') }}" class="nav-item nav-link active">Contact Us</a>
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
    <source src="contact/img/pexels-ron-lach-10397452-4096x2160-25fps.mp4" type="video/mp4">
    </video>
        <div class="overlaytext">
       <h1  class="display-3 mb-3 animated slideInDown" style="text-align: center; margin-top: 200px; color: #FEA116;"  >Contact Us </h1>
            <br>
            <br>
            <div class="container">
                <h4 style="text-align: center; text-justify: auto; color: white;">Feel free to contact us if you have any issue with your order, or even if you have any recommendations to help Ghadwa customer service team be more efficient, effective and increase our customer service efficiency.</h4><br>
                <div  style="text-align: center; ">
                    <a class="btn btn-lg rounded-pill " href="#connect" style="text-align: center; background-color:#FEA116 ;color: white; " >Social Media</a><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
<!--Page Header End-->

<!--Form Start-->
<div class="container" style="margin-top: 100px;">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    </div>
                </div>
                <div class="container wow fadeIn" data-wow-delay="0.5s">
                    <video width="320" height="240" style="float: left; width: 45%; height: 335px; border-radius: 10px; margin-top: -210px; left: 3.5%; position: relative;" controls >
                        <source src="contact/img/Customer Service.mp4" type="video/mp4" alt="how to contact ghadwa home food">
                        Your browser does not support the video tag.
                      </video>
                    <form style="margin-top: -200px; float: right; position: relative; width: 50%;">
                        <div class="form-group">
                          <input type="text" class="form-control" id="fname" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="lname" placeholder="Last name">
                          </div>
                        <div class="form-group">
                          <input type="email" class="form-control" id="email" placeholder="E-Mail">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" id="message" rows="5" placeholder="How can we help you?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="font-family: sans-serif;">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div></div>
    <!--Form End-->

<!--Pizza Start-->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="contact/img/Pizza.jpg" style="border-radius: 10px; margin-top: -50px;" alt="contact ghadwa home food">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h3 class="feel" style="color: black; margin-top: -50px; font-family: sans-serif;">Some things of Ghadwa's dishes can be even found also in <a href="" class="cbc">CBC Sofra </a>and even <a href="" class="cbc">Fatafeat </a> which are considered as some of the top TV channels in the MENA region. Try looking yp for them to know more information.</h3>
            </div>
        </div>
    </div>
</div>
<!-- Pizza End -->



<!--Visit Start -->

                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h2 class=" fw-bold mb-4" style="color: black; left: 8%; position: relative;">Address</h2>
                        <p style="color: black; left: 8%; position: relative;"><i class="fa fa-map-marker-alt me-3" style="color: #F49611;"></i>El-horrya road next to Yehya Mosque, Loran, Alexandria-Egypt.</p>
                        <p  style="color: black;  left: 8%; position: relative;"><i class="fa fa-phone-alt me-3" style="color: #F49611;"></i>+012 345 67890</p>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13650.013802748526!2d29.9281019!3d31.2067785!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c380a7756b97%3A0x2195dcb5879036f1!2z2LfYsdmK2YIg2KfZhNit2LHZitip!5e0!3m2!1sar!2seg!4v1686158938260!5m2!1sar!2seg" width="100%" height="508" style="border:3px green solid; width: 84%; position: absolute; left: 8%;" allowfullscreen></iframe>

            </div>
            <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s" >

            </div>
        </div>
    </div>
</div>
<!--Visit End -->


<!-- Connect Start -->
<div class="container-fluid bg-light bg-icon py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h1 class="display-5 mb-3 contact" style="font-family: sans-serif;">Ghadwa Social Media</h1>
            <div id="connect"></div>
            <p class="feel" style="font-family: sans-serif; text-align: center;">Feel free to share your experience with us. Or if you have an opinion or suggestion you can visit Ghadwa's contact us page or directly find us on social media.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="contact/img/facebook.png" alt="facebook of ghadwa" width="100px" height="100px">
                    <h4 class="mb-3 fit" style="font-family: sans-serif;">Ghadwa's Facebook</h4><br><br>
                    <br><br><br><br> <p class="mb-4 visit" style="font-family: sans-serif;">Visit Ghadwa's Facebook page to find our new posts as well as to contact us if you prefer socail media contact method.</p>
                   <br> <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="https://www.facebook.com/Ghadwaa">Visit Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="contact/img/instagram.png" alt="instagram of ghadwa" width="100px" height="100px">
                    <h4 class="mb-3 fit" style="font-family: sans-serif;"> Ghadwa's Instagram</h4><br><br><br>
                    <br><br><br><br><p class="mb-4 visit" style="font-family: sans-serif;">Checkout Ghadwa's Instagram page to find out and know all of our newest dishes and, also you can find our home chefs names.</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="https://www.instagram.com/8adwa/" >Visit Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="contact/img/telegram.png" alt="telegram of ghadwa" width="100px" height="100px">
                    <h4 class="mb-3 fit" style="font-family: sans-serif;">Ghadwa's Telegram</h4><br><br>
                    <br><br><br><br> <p class="mb-4 visit" style="font-family: sans-serif;">Join now Ghadwa's telegram channel  and communicate with other users to share your experience about Ghadwa.</p>
                    <br><a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="https://t.me/+ayBfykx6k-djYjA0">Visit Now</a>
                </div>
            </div>
        </div>
    </div>
</div></div></div>
<!--Connect End -->


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
                                    <h2 class="text-light mb-4"  >Quick Links</h2>
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
                                                <div class="input-group-append">
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
            <script src="contact/lib/wow/wow.min.js"></script>
            <script src="contact/lib/easing/easing.min.js"></script>
            <script src="contact/lib/waypoints/waypoints.min.js"></script>
            <script src="contact/lib/counterup/counterup.min.js"></script>
            <script src="contact/lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="contact/lib/tempusdominus/js/moment.min.js"></script>
            <script src="contact/lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="contact/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


            <script src="contact/js/main.js"></script>
        </body>

        </html>

