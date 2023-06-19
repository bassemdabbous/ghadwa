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
                    <img src="img/Logograduation.png" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="color: #FEA116;">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ url('about-us') }}" class="nav-item nav-link">About Us</a>
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

            <div class="container-xxl py-5 bg-light hero-header mb-5">

                <div class="container my-5 py-5">
                    <h1 class="ghadwa animated slideInDown">GHADWA</h1>
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">

                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Home Made Food Delivery Service <small class="fa fa-fire " style="color: #fe6716;  height: 5px; width: 5px;"></small></h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2" style="font-size: large;">We want to give you easy online experience with Special delicious home food that you expect within your door.</p>
                            @if (!auth()->check())
                            <a href="{{ url('signup') }}" class="btn-hero py-sm-3  px-sm-5 me-3 animated slideInLeft " style="background-color: #FEA116; color: white;  border-radius: 60px; font-weight: bold; text-decoration: none; " >Sign Up</a>
                            @endif
                            <a href="{{ url('Menu') }}" class="btn-hero py-sm-3 px-sm-5 me-3 animated slideInLeft " style="background-color: #FEA116; color: white;  border-radius: 60px; font-weight: bold; text-decoration: none;"  >Order Now</a>

                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/herooo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/23302_1407201846_0.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/image_64.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/top-view-table-full-delicious-food-compositionmlml.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/,lm l.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title text-start  fw-normal" style="color: #FEA116;">About Us</h5>
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
                        <a class="btn  py-3 px-5 mt-2" style="background-color: #FEA116; font-weight: bold; color: white;" href="{{ url('about-us') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
<br>


        <div class=" d-flex align-items-center" style="background-image: url(img/ne.png); width: 100%;">
            <div class="container-xxl  wow fadeInUp" data-wow-delay="0.1s">




                        <div class="p-5 wow fadeInUp" data-wow-delay="0.2s"  style="text-align: center;">
                            <h5 class="section-title text-center fw-normal" style="color: #f49616;">Reservation</h5>
                            <h1  class="display-5 text-black mb-3 visit">Customize Your Order</h1>
                            <div class="col-12" >
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSd3qv2atIW0Bq6BUjc54fPgmlR4k3jsgKYRvveRtTcl-hwz0Q/viewform">  <button class="btn  w-100 py-3" type="submit" style="background-color: #f49611; color: white; font-weight: bold; ">Customize Your Order</button></a>
                               </div>
                        </div>
                    </div>

            </div>
            </div>
            </div>
            <br>


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title text-center fw-normal" style="color: #f49616;">Food Menu</h5>
                    <h1 class="display-5 text-black mb-3 visit"">Our Special Meals</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">

                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @foreach ($products as $product)
                                <form action="{{ route('addToCart.action') }}" method="POST">
                                    @csrf

                                    @if(Auth::check())

                                    <input name="product_id" type="hidden" value="{{$product->id}}">
                                    <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
                                    <input name="qty" type="hidden" value=1>

                                    @endif

                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="{{$product->image_path}}" alt="" style="width: 100px; height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span style="color: #F49611;">{{$product->name}}
                                                    @if(Auth::check())
                                                    <button type="submit" style="background-color:transparent; border:none;">
                                                        <i class="fa-solid fa-circle-plus " style="color: #f49611;"></i>
                                                    </button>
                                                    @endif
                                                </span>
                                                <span  style="color:#039c06;">{{$product->price}} L.E</span>

                                            </h5>
                                            <small {{$product->details}}</small>

                                        </div>
                                    </div>
                                </div>
                            </form>
                                @endforeach

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Be chef -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="img/pexels-andrea-piacquadio-3769999.jpg" height="100%" width="100%">
                </div>
                <div class="col-md-6  d-flex align-items-center" style="background-color:gainsboro;">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title  text-start fw-normal" style="color: #F49611;">Be One of Ghadwa Family</h5>
                        <h4 class="mb-4 text-white" style="font-weight:normal;">If you are a home chef and you want to start your business or to promote your food, so you can be one of Ghadwa family after filling this form then we will send you an email to contact you. </h4>
                        <br>
                         <h5>Harry up to fill this form below!</h5>
                         <br>
                                <div class="col-12" >
                                 <a href="https://forms.gle/cfqsiRZPHS8K2LSE8">  <button class="btn  w-100 py-3" type="submit" style="background-color: #f49611; color: white; font-weight: bold; ">Be Home Chef</button></a>
                                </div>


                    </div>
                </div>
            </div>
        </div>

        <!-- Be chef -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" style="color: #f49611;">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user  mb-4"></i>
                        <h5>Home Chefs</h5>
                        <p>We choose the most skilled home cooks for you to prepare your food.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s" style="color: #f49611;">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-utensils mb-4"></i>
                        <h5>Quality Food</h5>
                        <p>We are keen on the quality of the food served to our customers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s"  style="color: #f49611;">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cart-plus mb-4"></i>
                        <h5>Online Order</h5>
                        <p>You can order online at the place you want, all over Egypt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s" style="color: #f49611;">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-headset  mb-4"></i>
                        <h5>24/7 Service</h5>
                        <p>We are available 24 hours during the entire week for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
    </div>

    <div class="container wow fadeInUp">
<h2 style=" color:#fe6716;  text-align:center;"class="display-5 text-black mb-3 visit">"Ghadwa Club"</h2>
<p style="text-align:center; text-align:justify-content-center;"> A service that provides you with a private chef for a monthly subscription , but this will make you order any cooked food at a special price, so you order home food that is much cheaper than ready-made outside food, and it will include me guaranteed homemade food without the effort of cooking, which means with the lowest budget, the food will come to you ready, and you can also know all the ingredients in it The food and the nutritional value in each meal, and in order to save your time, the food will be scheduled a day before or planned for the whole week.</p>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color: #ffc876;">Basic</li>
    <li class="grey">300 L.E / Month</li>
    <li>3 Main Dishes</li>
    <li>1 Soup</li>
    <li>1 Dessert</li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#f48516">Pro</li>
    <li class="grey">700 L.E/ Month</li>
    <li>5 Main Dishes</li>
    <li>3 Soups</li>
    <li>1 Dessert or Appetizer</li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color: #fe6716;">Premium</li>
    <li class="grey">1000 L.E / Month</li>
    <li>10 Main Dishes</li>
    <li>5 Soups</li>
    <li>2 Dessert & Appetizer</li>
  </ul>
</div>
</div>
<br>
<br><br>
<br>
<div class="col-12">
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSd3qv2atIW0Bq6BUjc54fPgmlR4k3jsgKYRvveRtTcl-hwz0Q/viewform">  <button class="btn  w-100 py-3" type="submit" style="background-color: #f49611; color: white; font-weight: bold; ">Click Here to Fill Subscription Form </button></a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<section>
    <div style="margin-bottom: 26%;"></div>
        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <br>
                    <br>
                    <h5 class="section-title text-center  fw-normal" style="color: #f49611;">Testimonial</h5>
                    <h1 class="display-5 text-black mb-3 visit">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4" style="color: #f49611;">
                        <i class="fa fa-quote-left fa-2x  mb-3" ></i>
                        <p>I couldn't find a better place all is because of the environment and the people.The food is always fantastic.</p>
                        <div class="d-flex align-items-center">

                            <div >
                                <h5 >Amr Hassan</h5>
                                <small>Home Chef</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4" style="color: #f49611;">
                        <i class="fa fa-quote-left fa-2x  mb-3" ></i>
                        <p>First time with Ghadwa and they have amazing food. It was so amazing and we will definitely use this website again.</p>
                        <div class="d-flex align-items-center">

                            <div >
                                <h5 >Shafky Elshawadfy</h5>
                                <small>HR Manager</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4" style="color: #f49611;">
                        <i class="fa fa-quote-left fa-2x  mb-3" ></i>
                        <p>Excellent food. Menu is extensive and seasonal to a particularly high standard, Highly recommended for people.</p>
                        <div class="d-flex align-items-center">

                            <div >
                                <h5 >Mariam Edwar</h5>
                                <small>Financial Analyst</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4" style="color: #f49611;">
                        <i class="fa fa-quote-left fa-2x  mb-3" ></i>
                        <p>This is my absolute favorite home made food website. Servers are also great and always efficient, happy and polite.</p>
                        <div class="d-flex align-items-center">

                            <div >
                                <h5 >Nada Hamdy</h5>
                                <small>AAST Student</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Testimonial End -->

       <br>

       <br>
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
                                <a class="btn btn-link" href="{{ url('about-us') }}">About Us</a>
                                <a class="btn btn-link" href="{{ url('Menu') }}">Menu</a>
                                <a class="btn btn-link" href="{{ url('gallery') }}">Gallery</a>
                                <a class="btn btn-link" href="{{ url('contact-us') }}">Contact Us</a>
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




        <a href="#" class="btn btn-lg btn-lg-square back-to-top " style="background-color: #f49611;"><i class="bi bi-arrow-up"></i></a>
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
