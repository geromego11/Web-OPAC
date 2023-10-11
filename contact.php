<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <style>
      .box
      {
        position: relative;
        width: 400px;
        height: 400px;
        background: rgba(0,0,0,0.5);
        border-radius: 50%;
        overflow: hidden;
      }
      .box::before
      {
        content: '';
        position: absolute;
        inset: -10px 140px;
        background: linear-gradient(315deg, #00ccff, #d400d4);
        margin-top: 5px;
        transition: 0.5s;
        animation: animate 4s linear infinite;
      }
      .box:hover::before
      {
        inset: -20px 0px;
      }
      @keyframes animate
      {
        0%
        {
          transform: rotate(0deg);
        }
        100%
        {
          transform: rotate(360deg);
        }
      }
      .box::after
      {
        content: '';
        position: absolute;
        inset: 6px;
        background: #162052;
        border-radius: 50%;
        z-index: 1;
      }
      .content
      {
        position: absolute;
        inset: 30px;
        border: 6px solid #070a1c;
        z-index: 3;
        border-radius: 50%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      .content img
      {
        position: absolute;
        top: 0;
        left: 0;
        width: 329px;
        height: 329px;
        object-fit: cover;
        transition: 0.5s;
        pointer-events: none;
        z-index: 3;
      }
      .box:hover .content img
      {
        opacity: 0;
      }
      .content h2
      {
        position: relative;
        font-size: 1.5em;
        text-align: center;
        color: #fff;
        font-weight: 600;
        letter-spacing: 0.05em;
        text-transform: uppercase;
      }
      .content h2 span
      {
        font-weight: 300;
        font-size: 0.75em;
      }
      .content a:hover
      {
        letter-spacing: 0.01em;
      }
    </style>

    <title>TLC - LIBRARY</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
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
  <div class="container" style="margin-top: 150px;">
    <div class="box">
      <div class="content">
        <img src="upload/Cynthia Carillo.jpg" alt="Librarian">
        <h2>Cynthia Carillo<br><span>Librarian</span></h2>
        <a href="#">librarian@thelewiscollege.edu.ph</a>
      </div>
    </div>
    <div class="box" style="margin-left: 700px; margin-top: -400px;">
      <div class="content">
        <img src="upload/librarian.jpg" alt="Avatar">
        <h2>Camille Del Rosario<br><span>Assistant Librarian</span></h2>
        <a href="#">assistlibrarian@thelewiscollege.edu.ph</a>
      </div>
    </div>
  </div>

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
