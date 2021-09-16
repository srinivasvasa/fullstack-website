<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />


	<title>LEARNIT</title>
</head>
<body style="background-color: #8FC1D4;">
	<!-- NAV BAR -->
	<nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #8FC1D4;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">LEARN IT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav">
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Courses</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Payment Status</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">My Profile</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Signup</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Feedback</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- bg video -->
<div class="container-fluid remove-vid-marg">
  <div class="video-parent">
    <video playsinline autoplay muted loop>
      <source src="viedo/bgvideo.mp4">
    </video>
    <div class="vid-overlay"></div>
  </div>
  <div class="vid-content">
    <h1 class="my-content">Welcome To Learn It</h1>
    <a href="#" class="btn btn-danger start">Get Started</a>
  </div>
</div>

<!-- text banner -->
<div class="container-fluid txt-banner bg-danger">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i> 50+ Online Courses</h5>
    </div> 
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
    </div>
  </div>
</div>

<!-- popular courses 1-->
<div class="container">
  <div>
    <div class="row">
      <div class="col-12 center">
        <h1 style="padding-top: 20px;">Popular Courses</h1>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-4">
      <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
        <div class="card">
          <img src="images/course_demo.jpg" class="card-img-top" alt="course intro pic">
          <div class="card-body">
            <h5 class="card-title">Guitar Course for Beginners</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        
     
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a href="#" class="btn btn-primary text-white font-weight-bolder float-right"> Enroll</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col-4">
      <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
        <div class="card">
          <img src="images/course_demo.jpg" class="card-img-top" alt="course intro pic">
          <div class="card-body">
            <h5 class="card-title">Guitar Course for Beginners</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        
     
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a href="#" class="btn btn-primary text-white font-weight-bolder float-right"> Enroll</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col-4">
      <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
        <div class="card">
          <img src="images/course_demo.jpg" class="card-img-top" alt="course intro pic">
          <div class="card-body">
            <h5 class="card-title">Guitar Course for Beginners</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        
     
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a href="#" class="btn btn-primary text-white font-weight-bolder float-right"> Enroll</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col-4">
      <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
        <div class="card">
          <img src="images/course_demo.jpg" class="card-img-top" alt="course intro pic">
          <div class="card-body">
            <h5 class="card-title">Guitar Course for Beginners</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        
     
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a href="#" class="btn btn-primary text-white font-weight-bolder float-right"> Enroll</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col-4">
      <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
        <div class="card">
          <img src="images/course_demo.jpg" class="card-img-top" alt="course intro pic">
          <div class="card-body">
            <h5 class="card-title">Guitar Course for Beginners</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        
     
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a href="#" class="btn btn-primary text-white font-weight-bolder float-right"> Enroll</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col-4">
      <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
        <div class="card">
          <img src="images/course_demo.jpg" class="card-img-top" alt="course intro pic">
          <div class="card-body">
            <h5 class="card-title">Guitar Course for Beginners</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        
     
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small><span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a href="#" class="btn btn-primary text-white font-weight-bolder float-right"> Enroll</a>
          </div>
        </div>
      </a>
    </div>
    <div class="text-center m-2">
      <a href="#" class="btn btn-danger btn-sm" style="margin-top: 20px; margin-bottom: 20px;">View All Courses</a>
    </div>
  </div>
</div>

<!-- contact us form-->
<div class="container">
  <div class="row">
    <div class="col-12 center">
      <h1 style="padding-bottom: 20px;">Contact Us</h1>
    </div>
  </div>
  <div class="col">
    <form action="" method="post">
      <input type="text" name="name" class="form-control" placeholder="Name"><br>
      <input type="text" name="Course_Name" class="form-control" placeholder="Course name"><br>
      <input type="text" name="Email" class="form-control" placeholder="Email"><br>
      <textarea type="text" name="Message" class="form-control" placeholder="Issue" style="height: 150px;"></textarea><br>
      <div class="row">
        <div class="col-12 center">
          <input type="submit" class="btn btn-primary" value="Send" name="submit">
          <br><br>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- student feedback -->
<h1 style="padding-top: 1em; padding-bottom: 1em; text-align: center;">OUR STUDENT FEEDBACKS</h1>
<div class="owl-carousel owl-theme" style="padding-right: 1.5em; padding-left:1.5em ; text-align: center;">

    <div class="item">
      <div class="card">
          <img src="images/course_demo.jpg" class="card-img-top" alt="course intro pic">
          <div class="card-body">
            <h5 class="card-title">STUDENT NAME</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>

    </div>
    <div class="item">
        <div class="card">
          <img src="images/course_demo.jpg" class="card-img-top" alt="course intro pic">
          <div class="card-body">
            <h5 class="card-title">STUDENT NAME</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
    </div>
    <div class="item">
        <div class="card">
          <img src="images/course_demo.jpg" class="card-img-top" alt="course intro pic">
          <div class="card-body">
            <h5 class="card-title">STUDENT NAME</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
    </div>
    <div class="item">
        <div class="card">
          <img src="images/course_demo.jpg" class="card-img-top" alt="course intro pic">
          <div class="card-body">
            <h5 class="card-title">STUDENT NAME</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
    </div>
    <div class="item">
        <div class="card">
          <img src="images/course_demo.jpg" class="card-img-top" alt="course intro pic">
          <div class="card-body">
            <h5 class="card-title">STUDENT NAME</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-danger">
  <div class="row text-white text-center p-1">
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
    </div>
  </div>
</div>

<div class="container-fluid p-4" style="background-color: #E9ECEF">
  <div class="container" style="background-color: #E9ECEF">
    <div class="row text-center">
      <div class="col-sm">
        <h5>About Us</h5>
        <p>iSchool provides universal access to the world's best education, partnering with top universities and organizations to offer courses online.</p>
      </div>
      <div class="col-sm">
        <h5>Category</h5>
        <a class="text-dark" href="#">Web Development</a><br />
        <a class="text-dark" href="#">Web Designing</a><br />
        <a class="text-dark" href="#">Android App Dev</a><br />
        <a class="text-dark" href="#">iOS Development</a><br />
        <a class="text-dark" href="#">Data Analysis</a><br />
      </div>
      <div class="col-sm">
        <h5>Contact Us</h5>
        <p>LEARNIT Pvt Ltd <br> HYDERABAD,TELANGANA <br> Ph. 000000000 </p>
      </div>
    </div>
  </div>
</div>
<!-- Start Footer -->

<footer class="container-fluid bg-dark text-center p-2"> <small class="text-white">Copyright &copy; 2025 || LEARNIT.com</small>

</footer>

  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script type="text/javascript", src="js/popper.min.js"></script>
<script type="text/javascript", src="js/bootstrap.min.js"></script>
<script type="text/javascript", src="js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom JS code after importing jquery and owl -->
<script type="text/javascript">
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel();
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>

</body>
</html>
