<!DOCTYPE html>
<html>
<?php
session_start();
require 'config.php';

?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;700&family=Poppins:wght@300;500;700&family=Space+Grotesk:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="fontawesome\css\all.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">
                Ecommerce Website </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->





            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="user_login.php">User Login</a>
                    </li>
                    <li>
                        <a href="vendor_login.php"> Vendor Login </a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="bgimg-1">
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading" style="color: black">Ecommerce Website</h1>
                            <p class="intro-text">
                            Shop Smart, Live Better
                            </p>
                            <a href="#sec2" class="btn btn-circle page-scroll blink">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="container-fluid">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height:250px;">
    <div class="item active">
        <img src="slider/4.jpeg" alt="" class="img-fluid">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
      <div class="item">
        <img src="slider/5.jpeg" alt="" class="img-fluid">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
      <div class="item">
        <img src="slider/6.jpeg" alt="" class="img-fluid">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
      <div class="item">
        <img src="slider/1.jpg" alt="" class="img-fluid">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="slider/2.png" alt="Chicago"  class="img-fluid">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="slider/3.jpg" alt="Chicago"  class="img-fluid">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    
   
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
    <marquee behavior="" style="color:red;" direction="">50% Special Offer for X-Mas and New Year Festivel</marquee>
        <h3 style="text-align:center;">Available Products</h3>
        <br>

        <section class="menu-content">
            <?php
            include_once('config.php');
            $x = 1;
            $cat = "Mobile";

            $sql = mysqli_query($mysqli, "SELECT * FROM product");
            while ($rs = mysqli_fetch_array($sql)) {
                $x++;
            ?>
                
                    <div class="sub-menu">
                        <img class="card-img-top" src="<?php echo $rs['img']; ?>" alt="Card image cap">
                        &#x20B9;<del style="color:red"><?php echo $rs['aprice']; ?></del><br>
                        <p style="color:green">&#x20B9;<?php echo $rs['oprice']; ?></p><br>
                        <p><a href="user_login.php?sno=<?php echo $rs['sno']; ?>"> BUY NOW</a></p>
                    </div>
                
            <?php
            }

            ?>

        </section>
    </div>

    <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
        </div>
    </div>
   
    
    <!-- Container (Contact Section) -->
    <!-- -->

    <div class="container-fluid" style="background-color: #414140;">

        <div class="row">
            <div class="col-sm-4">
                <h3 style="color:pink;">About Us</h3>
                Flipkart is an Indian e-commerce company, headquartered in Bangalore, Karnataka, India, and incorporated in Singapore as a private limited company. The company initially focused on online book sales before expanding into other product categories such as consumer electronics, fashion, home essentials, groceries, and lifestyle products.
            </div>
            <div class="col-sm-4 line-height">
                <h3 style="color:pink;">Contact Us</h3>
                Merishva J<br>
                KANYAKUMARI, INDIA<br>
                merishva.j.1@gmail.com<br>
                6383106751
            </div>
            <div class="col-sm-4">
                <h3 style="color:pink;">Social Media</h3>
                <div class="row">
                    <div class="col-sm-1">
                        <a href="#"><i class="fab fa-facebook bg-light"></i></a>
                    </div>
                    <div class="col-sm-1">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-sm-1">
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                    <div class="col-sm-1">
                        <a href="#"><i class="fab fa-reddit"></i></a>
                    </div>

                </div>


            </div>

        </div>
        <hr>
        <div class="col-sm-12 text-center">
            <h5>© <?php echo date("Y"); ?> Ecommerce Website</h5>
        </div>
    </div>



    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(25.614744, 85.128489);
            var mapOptions = {
                center: myCenter,
                zoom: 12,
                scrollwheel: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }
    </script>
    <script>
        function sendGaEvent(category, action, label) {
            ga('send', {
                hitType: 'event',
                eventCategory: category,
                eventAction: action,
                eventLabel: label
            });
        };
    </script>
    <script src="https://maps.app.goo.gl/XGkf36FofAprozzo6" type="text/javascript"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
</body>

</html>
<style>
    i {
        font-size: 30px;
    }

    .col-sm-4.line-height,
    .col-sm-12 {
        line-height: 200%;
        color: #CDCDBC;

    }

    .col-sm-4 img {

        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 300px;
    }

    .col-sm-4 .box1 {
        background: #fff;
        box-shadow: 0 1px 5px rgba(104, 104, 104, 0.8);
    }

    .col-sm-4 .box1:hover {
        box-shadow: 0 1px 20px rgba(104, 104, 104, 0.8);
    }
</style>