<?php
  session_start();
  if(!isset($_SESSION['cid'])){
    header('location:index.php');
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Club Management System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Club Management System</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Clubs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="checkstatus.php">Check Status</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll" href="#"><?php echo $_SESSION['crname'] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/home1.jpg);background-size: cover; ">
    <div class="overlay-itro"></div>
    <?php
      $con=mysqli_connect('localhost','root','','dance');
      $cid=$_SESSION['cid'];
      $sql="SELECT * FROM workshop WHERE wshow='1'";
      $run=mysqli_query($con,$sql);
      $row=mysqli_fetch_array($run);
        $wid=$row['wid'];
        $wname=$row['wname'];
        $wdate=$row['wdate'];
        $wtime=$row['wtime'];
        $wdesc=$row['wdesc'];
        $venue=$row['venue'];
      $sql1="SELECT * FROM coach WHERE wid='$wid'AND cid='$cid'";
      $run1=mysqli_query($con,$sql1);
    if (mysqli_num_rows($run)==0){
          echo "<div class='intro-content display-table'>
      <div class='table-cell'>
        <div class='container'>
          <h1 class='intro-title mb-4'>Club Management System</h1>
          <p class='intro-subtitle'><span class='text-slider-items'>Description</span><strong class='text-slider'></strong></p>
        </div>
      </div>
    </div>";
      }else if (mysqli_num_rows($run1)==1) {
       echo " <div class='intro-content display-table'>
      <div class='table-cell'>
        <div class='container'>
          <p class='display-6 color-d'>Event Date :$wdate <b>Time :</b>$wtime  </p>
          <p class='display-6 color-d'><b>Venue</b>: $venue  </p>
          <h1 class='intro-title mb-4'>$wname</h1>
          <p class='intro-subtitle'><span class='text-slider-items'>$wdesc</span><strong class='text-slider'></strong></p>
           <p class='pt-3'><a class='btn btn-primary btn js-scroll px-4 ' href='#ab' role='button'>Thanks</a></p>
          
        </div>
      </div>
    </div>";
    }
      else{
        echo " <div class='intro-content display-table'>
      <div class='table-cell'>
        <div class='container'>
          <p class='display-6 color-d'>Event Date :$wdate <b>Time :</b>$wtime  </p>
          <p class='display-6 color-d'><b>Venue</b>: $venue  </p>
          <h1 class='intro-title mb-4'>$wname</h1>
          <p class='intro-subtitle'><span class='text-slider-items'>$wdesc</span><strong class='text-slider'></strong></p>
           <p class='pt-3'><a class='btn btn-primary btn js-scroll px-4 cjoin' href='#ab' wid='$wid' role='button'>Join Event</a></p>
          
        </div>
      </div>
    </div>";

      }

   ?>
  </div>
  <!--/ Intro Skew End /-->

  

  <!--/ Section Services Star /-->
  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/back2.jpg);background-size: cover;">
    <div class="overlay-mf"></div> 
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Clubs
            </h3>
           
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 dnc11" did="dance" style="cursor: pointer;">
          <div class="service-box" style="background-image:url(img/img5.png); background-size: cover; height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white mr-5"> <b>DANCE </b></h2>
             
            </div>
          </div>
        </div>
        <div class="col-md-3 dnc21" did="music" style="cursor: pointer;">
           <div class="service-box" style="background-image:url(img/img8.png); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>MUSIC</b></h2>
            
            </div>
          </div>
        </div>
        <div class="col-md-3 dnc31" did="fashion" style="cursor: pointer;">
           <div class="service-box" style="background-image:url(img/img6.png); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white " > <b>FASHION </b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3 dnc41"did="technical" style="cursor: pointer;">
           <div class="service-box" style="background-image:url(img/img2.png); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>TECHNICAL</b></h2>
             
            </div>
          </div>
        </div>
        <div class="col-md-3 dnc51"did="media" style="cursor: pointer;">
           <div class="service-box" style="background-image:url(img/img3.png); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>MEDIA</b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3 dnc61 "did="event management" style="cursor: pointer;">
           <div class="service-box" style="background-image:url(img/img1.png); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>EVENT MANAGEMENT</b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3 dnc71"did="art & literature" style="cursor: pointer;">
           <div class="service-box" style="background-image:url(img/img12.png); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>ART & LITERATURE</b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3 dnc81"did="sports" style="cursor: pointer;">
          <div class="service-box" style="background-image:url(img/img15.png); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>SPORTS</b></h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  <!--/ Section Services End /-->
  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/back2.jpg);background-size: cover;">
   <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portfolio
            </h3>
           
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/port1.png" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port1.png" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">NRUTVAM DANCE CLUB</span> / <span class="w-date">28 Dec. 2022</span>
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="work-box">
            <a href="img/port2.png" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port2.png" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">OUR FLEET OF FASHIONISTAS</span> / <span class="w-date">28 Dec. 2022</span>
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="work-box">
            <a href="img/port3.png" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port3.png" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">PARIDHWANI</span> / <span class="w-date">28 Dec. 2022</span>
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
         <div class="col-md-4">
          <div class="work-box">
            <a href="img/port6.png" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port6.png" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">RANGOLI BY OUR FACULTY</span> / <span class="w-date">28 Dec. 2022</span>
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="work-box">
            <a href="img/port4.png" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port4.png" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">TUG OF WAR</span> / <span class="w-date">28 Dec. 2022</span>
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="work-box">
            <a href="img/port5.png" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port5.png" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">TECHIES IN HACKATHON </span> / <span class="w-date">19 Jun. 2022</span>
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
        
      </div>
    </div>
  </section>
</div>

  
  <!--/ Section Testimonials Star /-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/back3.png)">
      <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/logo.png" alt="" class="rounded-circle b-shadow-a" width="150" height="150">
                <span class="author">Antaragni</span>
              </div>
              <div class="content-test">
                <p class="description lead">
                We are here to reveal the Talents of DSATM
                   <p>-Photography</p> 
                   <p>-Dancing</p> 
                   <p>-Music</p> 
                   <p>-Acting</p> 
                   <p>-Sketches</p> 
                   <p>-Sport</p>
                   <p>-Vlogs</p> 
                   <p>-and many more</p>
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="paralax-mf footer-paralax bg-image  route" style="background-image: url(img/back3.png)">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contact-mf">
            <div id="contact">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left text-white">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class=" text-white lead">
                      Antaragni-DSATM
                     </p>
                    <ul class="list-ico text-white">
                      <li><span class="ion-ios-location"></span>Dayananda Sagar Academy Of Technology And Management Bangalore</li>
                      <li><span class="ion-ios-telephone"></span> +916203077377</li>
                      <li><span class="ion-email"></span> adminantaragni@gmail.com</li>
                    </ul>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <div class="credits">
                
                You're always welcome to be a part of Antaragni </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
