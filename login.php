<?php

$host="localhost";
$user="root";
$password="";
$db="opac";

$data = mysqli_connect($host, $user, $password, $db);

if($data===false)
{
  die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $email=$_POST["email"];
  $password=$_POST["password"];

  $sql = "SELECT * FROM user WHERE email='".$email."' AND password='".$password."'";



  $result=mysqli_query($data,$sql);

  $row=mysqli_fetch_array($result);

  if($row["user_type"]=="student")
  {
    echo "student";
  }

  elseif($row["user_type"]=="admin")
  {
    echo "admin";
  }

  else
  {
    echo "email or password incorrect";
  }
}
?>

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
      
    </style>

<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>


  <!-- ***** Main Banner Area Start ***** -->
  <div class="d-flex justify-content-center align-items-center"
        style="min-height: 100vh; background-image: url('upload/the lewis college.jpg'); background-size: cover;">
    <form class="p-5 rounded shadow"
          style="max-width: 30rem; width: 100%; background-color: rgba(135, 206, 235, 0.5);"
          method="POST"
          action="">

        <h1 class="text-center display-4 pb-5">TLC-LIBRARY</h1>
        <?php if (isset($_GET['error'])) {?>
        <div class="alert alert-primary" role="alert">
            <?=htmlspecialchars($_GET['error']); ?>
        </div>
        <?php } ?>
        
      <div class="mb-3">
        <label for="exampleInputEmail1" 
                class="form-label">Email address</label>
        <input type="email" 
                class="form-control"
                name="email" 
                id="exampleInputEmail1" 
                aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" 
              class="form-label">
        Password</label>
        <input type="password" 
              class="form-control"
              name="password"
              id="exampleInputPassword1">
      </div>
      <button type="submit" 
              class="btn btn-primary">
              Login</button>
    </form>
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