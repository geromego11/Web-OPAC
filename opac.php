<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>TLC - LIBRARY</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style>
    .container button a {
    color: white;
    }
    
    ul {
      list-style-type: none;
      margin-left:400px;
      margin-top:-85px;
    }

    li::before {
      content: "•";
      display: inline-block;
      margin-right: 5px;
      color: #000; /* Default color for the bullet point */
    }

    /* Style for the shaded bullet point */
    li.shaded::before {
      color: #ccc; /* Shaded color for the bullet point when clicked */
    }

    .wrapper{
      height: 120px;
      min-width: 380px;
      display: flex;
    }

    .wrapper span{
      width: 100%;
      font-size: 15.5px;
      font-weight: 600;
      cursor:pointer;
    }
    .wrapper span.num{
      font-size: 15.5px;
      border-right: 2px solid rgba(0,0,0,0,2);
      border-left: 2 px solid rgba(0,0,0,0,2);
      pointer-events: none;
    }
    .wrapper{
      height: 120px;
      min-width: 380px;
      display: flex;
    }

    .wrapper span{
      width: 100%;
      font-size: 15.5px;
      font-weight: 600;
      cursor:pointer;
    }
    .wrapper span.num{
      font-size: 15.5px;
      border-right: 2px solid rgba(0,0,0,0,2);
      border-left: 2 px solid rgba(0,0,0,0,2);
      pointer-events: none;
    }
    .wrapper wrapper2{
      height: 120px;
      min-width: 380px;
      display: flex;
    }

    .wrapper wrapper2 span{
      width: 100%;
      font-size: 15.5px;
      font-weight: 600;
      cursor:pointer;
    }
    .wrapper wrapper2 span.num{
      font-size: 15.5px;
      border-right: 2px solid rgba(0,0,0,0,2);
      border-left: 2 px solid rgba(0,0,0,0,2);
      pointer-events: none;
    }
    </style>

<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>
  
  <nav class="navbar bg-info">
    <div class="container-fluid">
      <button class="btn btn-primary"><a href="index.php" style="color:white;">Home</a></button>
      <button class="btn btn-primary" type="submit"><a href="login.php" style="color:white;">Login</a></button>
    </div>
    <div class="container">
      <img src="upload/tlc_logo.jpg" alt="" style="width:100px;">
      <h1 style="color:white; margin-right:500px; margin-top:-5%;">The Lewis College Library</h1>
      <form class="d-flex" role="search" action="action_page.php" style="margin-left:120px; margin-top:-4%;">
        <input class="form-control me-2" type="search" placeholder="Type here to search" aria-label="Search" style="width:500px;">
        <button class="btn btn-primary" type="submit" style="width:150px;">Search</button>
      </form>
      <button type="button" class="btn btn-info" id="toggleAdvancedSearch" style="color:white; margin-left:800px; margin-top:-45px;">Advanced Search</button type="button" class="btn btn-primary">
    </div>
    
    

  </nav>
  <div class="container" id="newAcquisitionsSection">
    <section class="our-courses" id="courses" style="background-image:none; background-color:lightblue;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <button type="button" class="btn btn-secondary" style="margin-left: 450px; margin-top:-150px; width:200px; height:50px;">New Acquisitions</button>
            </div>
            <div class="col-lg-12">
              <div class="owl-courses-item owl-carousel">
                <div class="item">
                  <a href="book.php?id=1"><img src="upload/Contemporary Mathematics.jpg" alt="Book One"></a>
                </div>
                <div class="item">
                  <a href="book.php?id=2"></a><img src="upload/Conversational Tagalog.jpg" alt="Book Two"></a>
                </div>
                <div class="item">
                  <a href="book.php?id=3"><img src="upload/Defense of Globalization.jpg" alt="Book Three"></a>
                </div>
                <div class="item">
                  <a href="book.php?id=4"><img src="upload/Dictionary of Changes in Meaning.jpg" alt="Book Four"></a>
                </div>
                <div class="item">
                  <a href="book.php?id=5"><img src="upload/Families in Context.jpg" alt="Book Five"></a>
                </div>
                <div class="item">
                  <a href="book.php?id=6"><img src="upload/Football Fans.jpg" alt="Book Six"></a>
                </div>
                <div class="item">
                  <a href="book.php?id=7"><img src="upload/From Third World To First.jpg" alt="Book Seven"></a>
                </div>
                <div class="item">
                  <a href="book.php?id=8"><img src="upload/Gender Power Leadership and Governance.jpg" alt="Book Eight"></a>
                </div>
                <div class="item">
                  <a href="book.php?id=9"><img src="upload/Gift of Emperor.jpg" alt="Book Nine"></a>
                </div>
                <div class="item">
                  <a href="book.php?id=10"><img src="upload/Gregg Shorthand.jpg" alt="Book Ten"></a>
                </div>
                <div class="item">
                  <a href="book.php?id=11"><img src="upload/Heroic Leadership.jpg" alt="Book Eleven"></a>
                </div>
                <div class="item">
                  <a href="book.php?id=12"><img src="upload/Innovator's Dilemma.jpg" alt="Book Twelve"></a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
  </div>

  <div class="container" id="advancedSearchSection" style="display:none;">
    <h3 id="advancedSearchTitle" style="font-weight: normal; margin-top:20px;">Advanced Search</h3>
    <br>
    <h4 style="margin-left:150px; font-weight: normal;">Include</h4>
    <div id="advancedSearchContent">
        <select id="searchCriteria" class="form-select me-2" aria-label="Search Criteria" style="width:20%; margin-left:140px; margin-top:20px;">
          <option value="callNo">Author</option>
          <option value="isbn">ISBN</option>
          <option value="title">Title</option>
          <option value="author">Author</option>
          <option value="yearPublication">Year Publication</option>
          <option value="placePublication">Place of Publication</option>
          <option value="cuttersName">Cutters name</option>
          <option value="copyrightName">Copyright name</option>
          <option value="pages">Pages</option>
          <option value="location">Location</option>
        </select>
        <select id="searchCriteria" class="form-select me-2" aria-label="Search Contain" style="width:20%; margin-left:400px; margin-top:-40px;">
          <option value="callNo">contains</option>
          <option value="begins with">begins with</option>
          <option value="contains">contains</option>
          <option value="exactly matches">exactly matches</option>
          <option value="do not contain">do not contain</option>
        </select>
        <select id="searchCriteria" class="form-select me-2" aria-label="Search Criteria" style="width:20%; margin-left:140px; margin-top:20px;">
          <option value="callNo">Title</option>
          <option value="isbn">ISBN</option>
          <option value="title">Title</option>
          <option value="author">Author</option>
          <option value="yearPublication">Year Publication</option>
          <option value="placePublication">Place of Publication</option>
          <option value="cuttersName">Cutters name</option>
          <option value="copyrightName">Copyright name</option>
          <option value="pages">Pages</option>
          <option value="location">Location</option>
        </select>
        <select id="searchCriteria" class="form-select me-2" aria-label="Search Contain" style="width:20%; margin-left:400px; margin-top:-40px;">
          <option value="callNo">begins with</option>
          <option value="begins with">begins with</option>
          <option value="contains">contains</option>
          <option value="exactly matches">exactly matches</option>
          <option value="do not contain">do not contain</option>
        </select>
        <button type="button" class="btn btn-primary" style="margin-top:20px; margin-left: 35%;"><a href="results.php">Advanced Search</a></button>
        <button type="button" class="btn btn-secondary" style="margin-left:80px; margin-top:20px;" id="clearBtn">Clear</button>
    </div>
    <br>
    <ul>
      <li onclick="toggleShading(this)" style="margin-top:-220px;">any of these</li>
      <li onclick="toggleShading(this)" style="margin-left:210px; margin-top:-24px;">all of these</li>
    </ul>
    <br>
    <br>
    <h5 style="font-weight:normal; margin-top:160px; margin-left:150px;">Searching Tips</h5>
    <ul style="margin-left:150px;">
      <li style="margin-top:110px;">Select "any of these" to search "this field" OR "that field".</li>
      <li>Select "all of these" to search "this field" AND "that field".</li>
      <li>Click the "+" or "-" buttons to add or remove search criteria</li>
      <li>To optimize response time limit to five fields or less.</li>
    </ul>
    <div class="wrapper" style="margin-left:650px; margin-top:-330px;">
      <span class="minus">-</span>
      <span class="num">01</span>
      <span class="plus">+</span>
    </div>
    <br>
    <div class="wrapper wrapper2" style="margin-left:650px; margin-top:-80px;">
      <span class="minus">-</span>
      <span class="num">01</span>
      <span class="plus">+</span>
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

        const toggleAdvancedSearchButton = document.getElementById('toggleAdvancedSearch');
        const advancedSearchSection = document.getElementById('advancedSearchSection');
        const advancedSearchTitle = document.getElementById('advancedSearchTitle');
        const advancedSearchContent = document.getElementById('advancedSearchContent');
        const newAcquisitionsSection = document.getElementById('newAcquisitionsSection');

        toggleAdvancedSearchButton.addEventListener('click', () => {
          if (advancedSearchSection.style.display === 'none') {
          // Show Advanced Search section
          advancedSearchSection.style.display = 'block';
          advancedSearchTitle.style.display = 'block';
          advancedSearchContent.style.display = 'block';
          newAcquisitionsSection.style.display = 'none';
          } else {
          // Hide Advanced Search section
          advancedSearchSection.style.display = 'none';
          advancedSearchTitle.style.display = 'none';
          advancedSearchContent.style.display = 'none';
          newAcquisitionsSection.style.display = 'none';
          }
        });
        
        function toggleShading(element) {
          element.classList.toggle("shaded");
        }

        const plus = document.querySelector(".plus"),
        minus = document.querySelector(".minus"),
        num = document.querySelector(".num");

        let a = 1;

        plus.addEventListener("click", ()=>{
          a++;
          a = (a < 10) ? "0" + a : a;
          num.innerText = a;
          console.log(a);
        });

        minus.addEventListener("click", ()=>{
          if(a > 1){
            a--;
            a = (a < 10) ? "0" + a : a;
            num.innerText = a;
          }
        });
        
        const minusButton = document.querySelector(".wrapper2 .minus");
    const plusButton = document.querySelector(".wrapper2 .plus");
    const numElement = document.querySelector(".wrapper2 .num");

    // Initial value
    let currentValue = 1; // You can set this to your desired initial value

    // Function to update the displayed number
    function updateNumber() {
        numElement.textContent = currentValue.toString().padStart(2, '0');
    }

    // Event listener for the minus button
    minusButton.addEventListener("click", function () {
        if (currentValue > 1) {
            currentValue--;
            updateNumber();
        }
    });

    // Event listener for the plus button
    plusButton.addEventListener("click", function () {
        currentValue++;
        updateNumber();
    });

    // Initial update of the number
    updateNumber();
    </script>
</body>

</body>
</html>