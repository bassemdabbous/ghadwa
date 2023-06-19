<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ghadwa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/Logograduation.png" rel="icon">

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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--css file link-->
  <link rel="stylesheet" href="css/stylesheet.css" type="text/css"/>
  <link href="/css/reset.css" rel="stylesheet"/>
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
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon for icons -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Font Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border" style="width: 3rem; height: 3rem; color: #FEA116;" role="status">
                <span class="sr-only" style="color: #f49616;">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark  px-4 px-lg-5 py-3 py-lg-0" style="background-color: white;">
                <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                    <img src="img/Logograduation.png" alt="ideas about home food dishes">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="color: #FEA116;">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ url('about-us') }}" class="nav-item nav-link">About Us</a>
                        <a href="{{ url('Menu') }}" class="nav-item nav-link">Menu</a>
                        <a href="{{ url('gallery') }}" class="nav-item nav-link active">Gallery</a>
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

            <div>
                <video  autoplay muted loop width="100%" >
                <source src="img/pexels-shvets-production-7525333-1920x1080-25fps (1).mp4" type="video/mp4" alt="ideas about home food dishes">
                </video>
                    <div class="overlaytext">
                   <h1 id="welcome" class="display-3 mb-3 animated slideInDown">Ghadwa's Gallery </h1>
                        <br>
                        <br>
                        <div class="container">

                            <h4 style="text-align: center; text-justify: auto; color:ghostwhite;" id="vedio4">You can get an idea about Ghadwa's home food dishes from the beginning of the opening until now, or you can visit the menu page to view the dishes available now.</h4>
                    <br>
                    <div  style="text-align: center; ">
                        <a href="Menu.html" class="btn-hero py-sm-3 px-sm-5 me-3 animated slideInLeft " style="background-color: #FEA116; color: white;  border-radius: 60px; font-weight: bold; text-decoration: none; font-size: larger;"  >Visit Menu</a>
                    </div>

                        </div>
                    </div>
                </div>
        </div>
        <br>

        <!-- Navbar & Hero End -->
        <div class="p-5 wow fadeInUp" data-wow-delay="0.2s"  style="text-align: center;">
            <h3 class="section-title text-center fw-normal" style="color: #f49616;">Ideas About Ghadwa's Dishes</h3>
            <p style="font-size: larger;">
                Our food gallery showcases our delicious and visually stunning dishes, featuring high-quality images that will leave your taste buds watering and your stomach growling.</p>
            </div>
            <br>
        <div class="grow">
<div style="box-sizing: border-box ;">
    <div style="float:left; width: 33.33%; padding: 5px;  " >
        <img src="img/Meat_products_Mushrooms_Tomatoes_527520_1280x853.jpg" style="width:100%" alt="meat ideas about home food dishes">
        <div class="d-flex justify-content-between tm-text" style="background-color: rgb(207, 236, 201);">
            <span class="tm-text" style="color: #F49611; font-weight: bold;">Meat with Mushrooms Tomatoes</span>
            <img src="img/stat.png" width="30%" height="25%" style="margin-top: 5px;">
        </div>
    </div>

</div>
<div style="box-sizing: border-box ;">
    <div style="float:left; width: 33.33%; padding: 5px;  " >
        <img src="img/Meat_products_Shashlik_Plate_Two_527410_1280x853.jpg" style="width:100%" alt="meat ideas about home food dishes">
        <div class="d-flex justify-content-between tm-text-gray" style="background-color: rgb(207, 236, 201);">
            <span class="tm-text" style="color: #F49611; font-weight: bold;">Meat with Shashlik Plate</span>
            <img src="img/ss2.png" width="30%" height="25%"  style="margin-top: 5px;">
        </div>
    </div>
</div>
<div style="box-sizing: border-box ;">
    <div style="float:left; width: 33.33%; padding: 5px;  " >
        <img src="img/Roast_Chicken_Berry_Lemons_Plate_583337_1280x853.jpg" style="width:100%" alt="chicken ideas about home food dishes">
        <div class="d-flex justify-content-between tm-text-gray"  style="background-color: rgb(207, 236, 201);">
            <span class="tm-text" style="color: #F49611; font-weight: bold;">Roast Chicken wiPlate</span>
            <img src="img/stat.png" width="30%" height="25%" style="margin-top: 5px;">
        </div>
    </div>
</div>
<br>
<div style="box-sizing: border-box ;">
    <div style="float:left; width: 33.33%; padding: 5px;  " >
        <img src="img/Roast_Chicken_French_fries_Vegetables_Plate_518389_1280x882.jpg" style="width:100%" alt="chicken ideas about home food dishes">
        <div class="d-flex justify-content-between tm-text-gray"  style="background-color: rgb(207, 236, 201);">
            <span class="tm-text"  style="color: #F49611; font-weight: bold;">Roast Chicken French Fries Plate</span>
            <img src="img/stat.png" width="30%" height="25%" style="margin-top: 5px;">
        </div>
    </div>
</div>
<div style="box-sizing: border-box ;">
    <div style="float:left; width: 33.33%; padding: 5px;  " >
        <img src="img/Roast_Chicken_Spices_Ketchup_Plate_565725_1280x856.jpg" style="width:100%" alt="chicken ideas about home food dishes">
        <div class="d-flex justify-content-between tm-text-gray "  style="background-color: rgb(207, 236, 201);">
            <span class="tm-text"  style="color: #F49611; font-weight: bold;">Roast Chicken Spices Plate</span>
            <img src="img/stat.png" width="30%" height="25%" style="margin-top: 5px;">
        </div>
    </div>
</div>
<div style="box-sizing: border-box ;">
    <div style="float:left; width: 33.33%; padding: 5px;  " >
        <img src="img/Frikadeller_Salads_Potato_Three_3_583631_1280x853.jpg" style="width:100%" alt="salad ideas about home food dishes">
        <div class="d-flex justify-content-between tm-text-gray"  style="background-color: rgb(207, 236, 201);">
            <span class="tm-text"  style="color: #F49611; font-weight: bold;">Frikadeller Salads</span>
            <img src="img/ssssss32.png" width="30%" height="25%" style="margin-top: 5px;">
        </div>
    </div>
</div>


</div>

<div class="grow">
    <div style="box-sizing: border-box ;">
        <div style="float:left; width: 33.33%; padding: 5px;" >
            <img src="img/Soups_Mushrooms_567677_1280x852.jpg" style="width:100%">
            <div class="d-flex justify-content-between tm-text-gray" style="background-color: rgb(207, 236, 201);" alt="soup ideas about home food dishes">
                <span class="tm-text" style="color: #F49611; font-weight: bold;">Mushroom Soup</span>
                <img src="img/stat.png" width="30%" height="25%"  style="margin-top: 5px;">
            </div>
        </div>
    </div>
    <div style="box-sizing: border-box ;">
        <div style="float:left; width: 33.33%; padding: 5px;  " >
            <img src="img/Salads_Tomatoes_Cucumbers_Dill_Plate_Spoon_590475_1280x853.jpg" style="width:100%" alt="salad ideas about home food dishes">
            <div class="d-flex justify-content-between tm-text-gray" style="background-color: rgb(207, 236, 201);">
                <span class="tm-text" style="color: #F49611; font-weight: bold;">Salad Tomatoes Cucumbers</span>
                <img src="img/ss2.png" width="30%" height="25%"  style="margin-top: 5px;">
            </div>
        </div>
    </div>
    <div style="box-sizing: border-box ;">
        <div style="float:left; width: 33.33%; padding: 5px;  " >
            <img src="img/Fish_Food_Cucumbers_Lemons_Piece_607609_1280x853.jpg" style="width:100%" alt="fish ideas about home food dishes">
            <div class="d-flex justify-content-between tm-text-gray" style="background-color: rgb(207, 236, 201);">
                <span class="tm-text" style="color: #F49611; font-weight: bold;">Fish with Lemons Piece</span>
                <img src="img/ss2.png" width="30%" height="25%"  style="margin-top: 5px;">
            </div>
        </div>
    </div>
    <br>
    <div style="box-sizing: border-box ;">
        <div style="float:left; width: 33.33%; padding: 5px;  " >
            <img src="img/Sweets_baklava_605604_1280x850.jpg" style="width:100%" alt="dessert ideas about home food dishes">
            <div class="d-flex justify-content-between tm-text-gray" style="background-color: rgb(207, 236, 201);">
                <span class="tm-text" style="color: #F49611; font-weight: bold;">Baklava</span>
                <img src="img/stat.png" width="30%" height="25%" style="margin-top: 5px;" >
            </div>
        </div>
    </div>
    <div style="box-sizing: border-box ;">
        <div style="float:left; width: 33.33%; padding: 5px;  " >
            <img src="img/Pancake_Strawberry_Bananas_Sour_cream_Plate_565768_1280x853.jpg" style="width:100%" alt="dessert ideas about home food dishes">
            <div class="d-flex justify-content-between tm-text-gray" style="background-color: rgb(207, 236, 201);">
                <span class="tm-text" style="color: #F49611; font-weight: bold;">Pancake with Sour cream</span>
                <img src="img/ss2.png" width="30%" height="25%" style="margin-top: 5px;">
            </div>
        </div>
    </div>
    <div style="box-sizing: border-box ;">
        <div style="float:left; width: 33.33%; padding: 5px;  " >
            <img src="img/Easter_Kulich_Tulips_Eggs_615563_1280x853.jpg" style="width:100%" alt="dessert ideas about home food dishes">
            <div class="d-flex justify-content-between tm-text-gray" style="background-color: rgb(207, 236, 201);">
                <span class="tm-text" style="color: #F49611; font-weight: bold;">Kulich Tulips</span>
                <img src="img/stat.png" width="30%" height="25%" style="margin-top: 5px;">
            </div>
        </div>
    </div>


    </div>

         <!-- Footer Start -->
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
                                <a class="btn btn-link" href="./About Us 2nd Design/About Us.html">About Us</a>
                                <a class="btn btn-link" href="Menu.html">Menu</a>
                                <a class="btn btn-link" href="gallery.html">Gallery</a>
                                <a class="btn btn-link" href="./Privacy Policy Final Design/Contact Us.html">Privacy & Policy</a>
                                <a class="btn btn-link" href="./Contact Us 2nd design/Contact Us.html">Contact Us</a>
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





    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


    <script src="js/main.js"></script>
</body>

</html>
