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
                    <img src="img/Logograduation.png" alt="home made food menu of ghadwa">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="color: #FEA116;">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ url('about-us') }}" class="nav-item nav-link">About Us</a>
                        <a href="{{ url('Menu') }}" class="nav-item nav-link active">Menu</a>
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

            <div>
                <video  autoplay muted loop width="100%" >
                <source src="img/pexels-bonus-studio-5032156-1920x1080-50fps.mp4" type="video/mp4" alt=" grilled meat of home made food menu">
                </video>
                    <div class="overlaytext">
                   <h1 id="welcome" class="display-3 mb-3 animated slideInDown">Ghadwa's Home Made Food Menu</h1>
                        <br>
                        <br>
                        <div class="container">
                        <h3 id="vedio44" style="text-align: center;">You click, Chefs cook, Ghadwa delivers.</h3>
                        </div>
                    </div>
                </div>
        </div>
        <br>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h5 class="section-title text-start  fw-normal" style="color: #FEA116;">Offers</h5>
                        <h1 class="mb-4">Ghadwa's Home Food Best Offers</h1>
                        <p >Our clients are very speacial for us, so you can enjoy the latest discounts and offers or enjoy by Ghadwa's speacial menu.You can visit our gallery to show our delicious dishes history if you are interested.
                           <br>

                            <ul>
                                <li>
                            <p style="color:  #ed2700; font-weight: bold;">
                                First Time's Offer "50% OFF".</p>
                                </li>
                                <br>
                                <li ><p style="color: #ed2700; font-weight: bold;">Eid's Offer  "50% OFF".</p></li>
                                <br>
                                <li ><p style="color:  #ed2700; font-weight: bold;">Week-End's Speacial Offer  "25% OFF".</p> </li>
                                <br>
                                <li ><p style="color:  #ed2700; font-weight: bold;">Ramadhan's Offer  "35% OFF".</p></li>
                            </ul>
                        </p>


                        <br>
                        <br>


                        <div style="text-align: left;">
                        <a class="btn  py-3 px-5 mt-2" style="background-color: #FEA116; font-weight: bold; color: white; text-align: center;" href="gallery.html">Visit Ghadwa's Gallery</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class=" w-100 wow fadeInUp" data-wow-delay="0.1s" src="img/Black Simple Food Instagram Post.png" alt="home made food menu offers">
                            </div>
                            <div class="col-6 text-start">
                                <img class=" w-100 wow fadeInUp" data-wow-delay="0.5s" src="img/Brown Minimalist Ramadhan Special Offer Food Instagram Post.png" alt="home made food menu special offers">
                            </div>
                            <div class="col-6 text-end">
                                <img class=" w-100 wow fadeInUp" data-wow-delay="0.7s" src="img/Brown Traditional Food Promo Instagram Post.png" alt="home made food menu ramadan offers">
                            </div>
                            <div class="col-6 text-end">
                                <img class=" w-100 wow fadeInUp" data-wow-delay="0.9s" src="img/food menu instagram post template.png" alt="home made food menu eid offers">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

       <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title  text-center  fw-normal" style="color: #f49611;">Ghadwa's Menu</h5>
                <h1 class="mb-5">Ghadwa's Famous Home Made Food</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item" >
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-1" style="text-decoration-line: none;">
                            <img src="img/app.jpg" width="35px" height="35px" alt="home made food menu appetizers">
                            <div class="ps-3" >
                                <small class="text-body">Yummy</small>
                                <div id="item">
                                <h6 class="mt-n1 mb-0" style="color: #F49611;" >Appetizer</h6>
                            </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2" style="text-decoration-line: none;">
                            <img src="img/soup.jpg" width="35px" height="35px" alt="home made food menu soups">
                            <div class="ps-3" >
                                <small class="text-body">Hot</small>
                                <div id="item">
                                <h6 class="mt-n1 mb-0" style="color: #F49611;" >Soup</h6>
                            </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3" style="text-decoration-line: none;">
                            <img src="img/salad.jpg" width="35px" height="35px" alt="home made food menu salad">
                            <div class="ps-3" >
                                <small class="text-body">Fresh</small>
                                <div id="item">
                                <h6 class="mt-n1 mb-0" style="color: #F49611;" >Salad</h6>
                            </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-4" style="text-decoration-line: none;">
                            <img src="img/main.jpg" width="35px" height="35px" altt="home made food menu main dishes">
                            <div class="ps-3" >
                                <small class="text-body">Main</small>
                                <div id="item">
                                <h6 class="mt-n1 mb-0" style="color: #F49611;" >Dishes</h6>
                            </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-5" style="text-decoration-line: none;">
                            <img src="img/ds.jpg" width="30px" height="30px" alt="home made food menu desserts">
                            <div class="ps-3" >
                                <small class="text-body">Yummy</small>
                                <div id="item">
                                <h6 class="mt-n1 mb-0" style="color: #F49611;" >Dessert</h6>
                            </div>
                            </div>
                        </a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/app1.PNG" alt="caremelised french onion of home made food menu appetizers" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Caramelised French Onion <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">80 L.E</span>

                                        </h5>
                                        <small >Coated in a crunchy crumb then lightly fried,made with Tamar Valley Dairy Greek Style natural yoghurt.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/app2.PNG" alt="crumbed eggplant of home made food menu appetizers" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Crumbed Eggplant <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">70 L.E</span>

                                        </h5>
                                        <small >Warm caramelised French onion slow cooker dip, it contains gluten, wheat, egg, milk and lactose.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/app3.PNG" alt="torta caprese of home made food menu appetizers" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Torta Caprese <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">100 L.E</span>

                                        </h5>
                                        <small >Fresh, popping with colour and bursting with flavour, this simple caprese tart is the perfect appetizer.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/app4.PNG" alt="prawns of home made food menu appetizers" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Prawns <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">150 L.E</span>

                                        </h5>
                                        <small >This Asian-style prawn appetizer is so delicious and packed full of flavour, you'd never know it can be whipped up.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/app5.PNG" alt="smoked cups of home made food menu appetizers" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Smoked Cups <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">200 L.E</span>

                                        </h5>
                                        <small >Gluten-free smoked salmon quiche cups consists of luten free bread is the perfect pastry alternative in these mini salmon quiche cups.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/app6.PNG" alt="smashed pea of home made food menu appetizers" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Smashed Pea <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">90 L.E</span>

                                        </h5>
                                        <small >Mini ham and smashed pea frittata contains egg, milk and lactose.</small>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/app7.PNG" alt="grilled zucchini of home made food menu appetizers" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Grilled Zucchini <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">110 L.E</span>

                                        </h5>
                                        <small >Go traditional this Christmas with these grilled zucchini and goat's cheese bites.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/app9.PNG" alt="mini pumpkin of home made food menu appetizers" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Mini Pumpkin<a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">90 L.E</span>

                                        </h5>
                                        <small >Treat you to these bite-sized morsels of sweet pumpkin, balsamic onions, and creamy goat's cheese served on a crunchy pizza base.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/app10.PNG" alt="loaded hummes of home made food menu appetizers" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Loaded Hummus</a> <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">50 L.E</span>

                                        </h5>
                                        <small >Loaded hummus contains sesame, tree nut, milk and lactose.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/app11.PNG" alt="vegetarian bolognaise pies of home made food menu appetizers" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Vegetarian Bolognaise Pies</a> <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">130 L.E</span>

                                        </h5>
                                        <small >Made to share, these delicious, vegetarian pastry pies are the perfect party starter.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/Screenshot 2023-01-04 013502.jpg" alt="mahshy of home made food menu appetizers" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Mix of stuffed vegetables <a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">200 L.E</span>

                                        </h5>
                                        <small >A wide variety of “mahshy” selection that includes
                                            grape vines, zucchini, eggplant, bell pepper and Tomato.</small>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Appetizers end-->
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/s1.PNG" alt="chicken soup of home made food menu soups" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Chicken Soup</a> <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">40 L.E</span>

                                        </h5>
                                        <small >Combine chicken, onion, carrot, celery, garlic, parsley, thyme, water and peppercorns in a large saucepan.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/s2.PNG" alt="taco soup of home made food menu soups" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Taco Soup</a> <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">30 L.E</span>

                                        </h5>
                                        <small >Just brown the mince and vegies, season with a packet of taco seasoning, and top it off with sour cream, cheese and tortilla chips.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/s3.PNG" alt="cramy mushroom of home made food menu soups" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Creamy Mushroom</a> <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">80 L.E</span>

                                        </h5>
                                        <small >Warm up on a chilly night with this thick and creamy vegetarian mushroom soup, made even heartier with risoni pasta.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/s4.PNG" alt="creamy tuscan of home made food menu soups" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Creamy Tuscan</a> <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">130 L.E</span>

                                        </h5>
                                        <small >Soup boils down to the flavour boosters that simmer away with the veg like pesto, garlic and rosemary.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/s5.PNG" alt="beef stroganoff of home made food menu soups" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Beef Stroganoff Soup <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">150 L.E</span>

                                        </h5>
                                        <small >It contains milk, gluten, wheat, yeast and lactose.</small>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Soups End-->

                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/sa1.PNG" alt="dumpling salad of home made food menu salads" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Dumpling Salad <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">120 L.E</span>

                                        </h5>
                                        <small >you just need to have your fridge and freezer stocked with clever ingredients like frozen gyoza and salad kits.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/sa2.PNG" alt="mediterranean salad of home made food menu salads" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Mediterranean Chickpea Salad <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">90 L.E</span>

                                        </h5>
                                        <small >This summery Mediterranean salad packs a punch of flavour with a simple combination of ingredients and a super easy dressing.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/sa3.PNG" alt="tandoori salad of home made food menu salads" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Tandoori Salad <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">110 L.E</span>

                                        </h5>
                                        <small >Spiced tandoori prawns and crispy pappadum salad contains gluten, peanuts, tree nuts, milk and shellfish.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/sa4.PNG" alt="chickpeo and olive salad of home made food menu salad" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Chickpea and Olive Salad <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">90 L.E</span>

                                        </h5>
                                        <small >It contains tomato, olive, parsley, eschalot, oil, capers and chickpeas.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/sa5.PNG" alt="healthy chicken salad of home made food menu salads" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Healthy Chicken Salad<a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">180 L.E</span>

                                        </h5>
                                        <small >classic creamy pasta salad a healthy makeover by using buckwheat pasta and a lighter zesty dressing, as well adding lots of nutritious ingredients such as vegies, seeds and chicken.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/sa6.PNG" alt="orange and fennel salad of home made food menu salads" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Orange and Fennel Salad<a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">50 L.E</span>

                                        </h5>
                                        <small >This light salad is an ideal side and it contains orange juice, mustard, honey and oil.</small>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!--Salad End-->

                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/yhy.jpg" alt="grilled meat of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Grilled Meat <a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">490 L.E</span>

                                        </h5>
                                        <small >Cater your event in an all grilled This mixture consists of kofta,
                                            kebab, ribs on charcoal and Hawashy.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/ma11.PNG" alt="koshari of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Koshari<a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">70 L.E</span>

                                        </h5>
                                        <small >In Egypt they're often eaten during fasting or when abstaining from meats.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/ma7.PNG" alt="messa'a of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Messa’a <a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">80 L.E</span>

                                        </h5>
                                        <small >It is an Egyptian Eggplant lunch platter with a combination of eggplant, garlic, onions, oil, salt & pepper.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/ma8.PNG" alt="bamia of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Bamia<a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">130 L.E</span>

                                        </h5>
                                        <small >It is a Middle Eastern stew that includes tomato sauce, onion, garlic, cilantro (coriander), vegetable oil, cardamom, salt, and pepper.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/ma9.PNG" alt="macaroni bechamel of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Macaroni Béchamel<a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">95 L.E</span>

                                        </h5>
                                        <small >It is made of a layer of pine pasta, mashed onions with meat, another layer of pasta, and finally béchamel sauce.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/ma10.PNG" alt="hamam mahshi of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Hamam Mahshi<a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">175 L.E</span>

                                        </h5>
                                        <small >Royal Egyptian stuffed Pigeon with rice or green wheat. The pigeon is first boiled and then toasted or grilled.</small>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/dsc_4339.webp" alt="healthy chicken strips of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Healthy Chicken Strips <a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">240 L.E</span>

                                        </h5>
                                        <small >If you want to eat unhealthy food, but in a healthy way,
                                            we now offer reddish chicken with healthy sauce made in a healthy way.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/fgg.jpg" alt="chicken grill of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Chicken Grill <a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">380 L.E</span>

                                        </h5>
                                        <small >The shish tawook is served in a special way with spiced grilled vegetables, and it can be served on skewers.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/shrimps.jpg" alt="butter shrimp of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Butter Shrimp <a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">495 L.E</span>

                                        </h5>
                                        <small >Shrimp seasoned with thyme and cooked in butter are served with fresh vegetables.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/ma2.PNG" alt="pistachio dukkah of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Pistachio Dukkah <a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">180 L.E</span>

                                        </h5>
                                        <small >For dukkah-crusted roast vegetables, toss pumpkin, carrot, zucchini and potato with olive oil and dukkah.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/ma3.PNG" alt="kebda of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Kebda <a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">300 L.E</span>

                                        </h5>
                                        <small >In Alexandrian style (kebda Eskandarani) can be flavored with numerous spices and powders, with tahini or hummus dip.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/ma5.PNG" alt="fatta of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Fatta <a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">90 L.E</span>

                                        </h5>
                                        <small >It is a combination of bread, meat, and rice with red souce or without.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/ma6.PNG" alt="hawawshi of home made food menu main dishes" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span style="color: #F49611;">Hawawshi <a href="#"><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">100 L.E</span>

                                        </h5>
                                        <small >It is a traditional Sandwich of Egyptian food with minced meat spiced with pepper, sliced onions, salt, parsley, and chives.</small>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!--Main Dishes End-->

                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/d1.PNG" alt="frosted white chocolate of home made food menu deserts" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Frosted White Chocolate</a> <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">80 L.E</span>

                                        </h5>
                                        <small >A twist on the classic yule log with a decadent Chantilly cream and zesty curd.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/d2.PNG" alt="steamed carrot pudding of home made food menu deserts" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Steamed Carrot Pudding</a> <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">110 L.E</span>

                                        </h5>
                                        <small >Just brown the mince and vegies, season with a packet of taco seasoning, and top it off with sour cream, cheese and tortilla chips.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/d3.PNG" alt="french apple tart of home made food menu deserts" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >French Apple Tart</a> <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">135 L.E</span>

                                        </h5>
                                        <small >It’s well worth making a French apple tart, a classic shop-window patisserie.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/d4.PNG" alt="apple cinnamon cake of home made food menu deserts" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Apple Cinnamon Cake</a> <a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">130 L.E</span>

                                        </h5>
                                        <small >Made with warming cinnamon spices, fresh apples and almonds, it’s a wonderful winter dessert.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/d5.PNG" alt="pistachio eclairs of home made food menu deserts" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Pistachio Eclairs<a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">85 L.E</span>

                                        </h5>
                                        <small >These heavenly pistachio eclairs, made with choux pastry and pistachio custard.</small>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/d6.PNG" alt="pear and almond pavlova of home made food menu deserts" style="width: 100px; height: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"  >
                                            <span style="color: #F49611;"> <a style="color: #f49611;  text-decoration: none;" >Pear & Almond Pavlova<a href=""><i class="fa-solid fa-circle-minus " style="color: #f49611; margin-left: 10px;"></i></a>
                                                <a href="#"><i class="fa-solid fa-circle-plus " style="color: #f49611;"></i> </a>
                                            </span>
                                            <span  style="color:#039c06;">200 L.E</span>

                                        </h5>
                                        <small >Combine two classic desserts to make this stunning pear and almond pavlova trifle.</small>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- Menu End -->


<hr style=" box-sizing: 20px; width: 50%; margin-left: 300px;">






        <br>
        <div class="container wow fadeInUp">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="section-title  text-center  fw-normal" style="color: #f49611;">Ghadwa's Food Information</h3>
            </div>
            <p style="text-align: center; text-justify: auto; color: black;">If you want to know the ingredients of a homemade food products separately or the number of calories, you can go to any of the following site and write the name of the food, and all information related to it will appear.</p>
            <br>

<div class="container-xxl ">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="service-item rounded pt-3">
                    <a href="https://www.chefspencil.com/" >
                        <img src="img/ccccc.PNG" width="100%">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="service-item rounded pt-3">
                    <a href="https://www.bbcgoodfoodme.com/" >
                        <img src="img/Captureccc.PNG" width="100%">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="service-item rounded pt-3">
                    <a href="https://ific.org/" >
                        <img src="img/food.png" width="100%">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="service-item rounded pt-3">
                    <a href="https://www.taste.com.au/" >
                        <img src="img/tasteeee.png" width="100%">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <br>
            <div class=" d-flex align-items-center" style="background-image: url(img/ne.png); width: 100%;">
                <div class="container-xxl  wow fadeInUp" data-wow-delay="0.1s">




                            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s"  style="text-align: center;">
                                <h5 class="section-title text-center fw-normal" style="color: #f49616;">Reservation</h5>
                                <h1 class="mb-4"  style="text-align: center;">Customise Your Home Food Delivey Order</h1>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">

                                                <input class="form-control" type="date" required>

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <select class="form-select" id="select1">
                                                  <option value="1">Cooked</option>
                                                  <option value="2">Sami-Cooked</option>

                                                </select>
                                                <label for="select1">Food Status</label>
                                              </div>
                                        </div>
                                        <br>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                                <label for="message">Special Request</label>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-12" style="text-align: center; ">
                                            <button class="btn  w-30 py-3 text-white" type="submit" style="border: 3px; border-radius: 10px; background-color: #FEA116; font-weight: bold;" >Book Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                </div>
                </div>
                </div>
            <br>

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
