<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>TLC - LIBRARY</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style>
    .footer {
    margin-top: 300px;
    }

    </style>

<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky" style="background-color:lightblue; margin-top:-40px;">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo" style="color: white;">
                          T L C    L I B R A R Y
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="index.php">Home</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">About Us</a>
                              <ul class="sub-menu">
                                  <li><a href="mission_and_vision.php">Mission and Vision</a></li>
                                  <li><a href="guidelines.php">Guidelines</a></li>
                                  <li><a href="services.php">Services</a></li>
                              </ul>
                          </li>
                          <li><a href="contact.php">Contact Us</a></li>
                          <li><a href="opac.php">OPAC</a></li>
                          <li><a href="online_resource.php">Online Resources</a></li> 
                          <li><a href="acquisition.php">New Acquisition</a></li>
                          <li><a href="faqs.php">FAQS</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="section main-banner" id="top" data-section="section1">
      <img src="upload/TLC_LIBRARY.jpg" alt="LIBRARY" width="700" height="700">

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hello Students</h6>
              <h2>Welcome to TLC LIBRARY!</h2>
              <p>We are glad to see you here. TLC Library is a place where you can learn, explore, and create. We have a wide variety of resources to help you succeed in your studies.</p>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div style="margin-top:145px"; class="owl-service-item owl-carousel">
          
            <div class="">
              <div style="width:80%"; class="">
                <img src="upload/A History of God.jpg" alt="">
              </div>
            </div>
            
            <div class="">
              <div style="width:80%"; class="">
                <img src="upload/Americas Prophet.jpg" alt="">
              </div>
            </div>
            
            <div class="">
              <div style="width:80%"; class="">
                <img src="upload/Asian Cultural Traditions.jpg" alt="">
              </div>
            </div>
            
            <div class="">
              <div style="width:80%"; class="">
                <img src="upload/Book of Divine Works.jpg" alt="">
              </div>
            </div>
            
            <div class="">
              <div style="width:80%"; class="">
                <img src="upload/Celestine Prophecy.jpg" alt="">
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>