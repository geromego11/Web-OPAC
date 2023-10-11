<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



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

  <!-- ***** Main Banner Area Start ***** -->
  <div class="container" style="margin-top: 120px;">
    <h3 style="font-weight: bold; margin-top:50px; font-size:35px;">Service Hours</h3>
    <table class="table table-bordered" style="margin-top:10px; border-color: black;">
      <thead>
        <tr>
          <th style="text-align: center;">Day</th>
          <th style="text-align: center;">Time</th>
          <th style="text-align: center;">Activity</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="text-align: center;">Monday</td>
          <td style="text-align: center;">8:00 AM - 5:00 PM</td>
          <td style="text-align: center;">Office Hours</td>
        </tr>
        <tr>
          <td style="text-align: center;">Tuesday</td>
          <td style="text-align: center;">8:00 AM - 5:00 PM</td>
          <td style="text-align: center;">Office Hours</td>
        </tr>
        <tr>
          <td style="text-align: center;">Wednesday</td>
          <td style="text-align: center;">8:00 AM - 5:00 PM</td>
          <td style="text-align: center;">Office Hours</td>
        </tr>
        <tr>
          <td style="text-align: center;">Thursday</td>
          <td style="text-align: center;">8:00 AM - 5:00 PM</td>
          <td style="text-align: center;">Office Hours</td>
        </tr>
        <tr>
          <td style="text-align: center;">Friday</td>
          <td style="text-align: center;">8:00 AM - 5:00 PM</td>
          <td style="text-align: center;">Office Hours</td>
        </tr>
        <tr>
          <td style="text-align: center;">Saturday</td>
          <td style="text-align: center;">Closed</td>
          <td style="text-align: center;">No Office Hours</td>
        </tr>
        <tr>
          <td style="text-align: center;">Sunday</td>
          <td style="text-align: center;">Closed</td>
          <td style="text-align: center;">No Office Hours</td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- ***** Main Banner Area End ***** -->
    

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