<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DORS - Home</title>
    <?php require('hfi/links.php');?>
    <link rel="stylesheet" href="css/style.css">

</head>
<body class= "bg-light">
<?php include('hfi/header.php');
require('admin/hfi/db-config.php');
?>
<!-- Navigation
<nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font " href="index.php">DORS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact</a>
        </li>
      </ul>
      <div class="nav-flex">
        <button type="button" class="btn shadow-none me-lg-3 me-2 custom-bg" data-bs-toggle="modal" data-bs-target="#loginModal">
        Login
        </button>
        <button type="button" class="btn shadow-none custom-bg-2" data-bs-toggle="modal" data-bs-target="#registerModal">
        Register
        </button>
      </div>
    </div>
  </div>
</nav> -->


<!-- Login button/ form
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content d-flex align-item-center">
      <form Action="">
      </form>
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
        <i class="bi bi-person-circle fs-3 me-2"></i> User Login</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control shadow-none">
        </div>
        <div class="mb-4">
        <label class="form-label">Password</label>
        <input type="password" class="form-control shadow-none">
        </div>
        <div class = "d-flex align-items-center justify-content-between mb-2">
          <button type="submit" class="btn btn-dark shadow-none">Login</button>
          <a href="javascript:  void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
</div> -->
 
    <!-- Registration button/ form
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content d-flex align-item-center">
      <form Action="">
      </form>
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
        <i class="bi bi-person-plus-fill"></i> User Registration</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
        Note: Your details must match with your ID</span>
        <div class="container-form">
          <div class="row">
            <div class="col-md-6 mb-3 ps-0 ">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="col-md-6 mb-3 p-0 ps-0">
              <label class="form-label">Date of Birth</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-md-6 mb-3 ps-0">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="col-md-6 mb-3 p-0 ps-0">
              <label class="form-label">Mobile Number</label>
              <input type="number" class="form-control shadow-none">
            </div>
            <div class="col-md-12 p-0 mb-3 ps-0" >
              <label class="form-label">Address</label>
              <textarea class="form-control shadow-none" rows="1"></textarea>
            </div>
            <div class="col-md-6 mb-3 ps-0">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="col-md-6 mb-3 p-0 ps-0">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="col-md-6 ps-0 p-0 mb-3">
              <label class="form-label">Picture</label>
              <input type="file" class="form-control shadow-none">
            </div>
          </div>
        </div>
        <div class="text-center my-1">
        <button type="submit" class="btn btn-dark shadow-none">Register</button>
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control shadow-none">
        </div>
        <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none">
        </div>
          <div class = "d-flex align-items-center justify-content-between mb-2">
          <button type="submit" class="btn btn-dark shadow-none">Login</button>
          <a href="javascript:  void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
        </div> 
      </div>
    </div>
  </div>
</div>-->

  <!-- Carousel -->
<div class="container-fluid px-lg-4 mt">
    <!-- Swiper -->
    <div class="swiper swiper-image">
      <div class="swiper-wrapper position-relative">
        <div class="swiper-slide">
          <img src="images/carousel/car-1.jpg" class="w-100 d-block ">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/car-2.jpg" class="w-100 d-block ">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/car-3.jpg" class="w-100 d-block ">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/car-4.jpg" class="w-100 d-block ">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/car-5.jpg" class="w-100 d-block ">  
        </div>
      </div>
    </div>
</div>

<!-- Service Availability -->

<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded ">
      <h1 class="mb-4 avail-tilt mb-3">Check Available Services</h1>
      <form action="" >
        <div class="row align-items-end justify-content-center">
          <div class="col-lg-3 mb-3">
              <label class="form-label-1" style="font-weight:500;">Available Services</label>
              <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
              <label class="form-label-1" style="font-weight: 500;">Not Available</label>
              <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Check</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Instruction -->
<!-- Top offers -->

<h1 class="mt-5 pt-4 mb-5 text-center fw-bold h-font fs-32">Top Offers</h1>
<div class="container ">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow " style="max-width: 350px; margin: auto;">
          <img src="images/services/S1.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title text-center mb-4 h-font mt-2">VIP</h5>
                <div class="features mb-2 text-center">
                  <h6 class="mb-1 ">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark mb-3 ">
                      Air Conditioned<br>Videoke<br>Barbecue Grill<br>Food Warmer<br>Water Dispenser
                      </span>
                </div>
                <div class="rating mb-4">
                  <h6 class="mb-1 fw-bold">Rating</h6>
                  <span class="badge rounded-pill">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm custom-bg shadow-none">More Details</a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3 ">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/services/S2.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title text-center mb-4 h-font mt-2">VIP</h5>
                <div class="features mb-2 text-center">
                  <h6 class="mb-1 ">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark mb-3 ">
                      Air Conditioned<br>Videoke<br>Barbecue Grill<br>Food Warmer<br>Water Dispenser
                      </span>
                </div>
                <div class="rating mb-4">
                  <h6 class="mb-1 fw-bold">Rating</h6>
                  <span class="badge rounded-pill">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm custom-bg shadow-none">More Details</a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/services/S3.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title text-center mb-4 h-font mt-2">VIP</h5>
                <div class="features mb-2 text-center">
                  <h6 class="mb-1 ">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark mb-3 ">
                      Air Conditioned<br>Videoke<br>Barbecue Grill<br>Food Warmer<br>Water Dispenser
                      </span>
                </div>
                <div class="rating mb-4">
                  <h6 class="mb-1 fw-bold">Rating</h6>
                  <span class="badge rounded-pill">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm custom-bg shadow-none">More Details</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Announcement -->
<?php 
$ann_q = "SELECT * FROM `web-settings` WHERE `s_id`=?";
$values = [1];
$ann_d = mysqli_fetch_assoc(select($ann_q,$values,'i'));
?>

<div class="ann-div">
    <div class="announcement">
        <h1>Announcement</h1>
        <div class="">
            <p><?php echo $ann_d['web_about']?></p>
        </div>
    </div>
</div>
<!-- Events -->
<h1 class="mt-5 pt-4 mb-5 text-center fw-bold h-font fs-32">Events</h1>
<div class="container-fluid px-lg-4 mt">
 <div class="swiper myServices-Swiper">
      <div class="swiper-wrapper position-relative text-center">
        <div class="swiper-slide ">
          <h2 >Parties</h2>
          <img src="images/services/S1.jpg" class="w-100 d-block ">
        </div>
        <div class="swiper-slide">
          <h2 >Events</h2>
          <img src="images/services/S2.jpg" class="w-100 d-block ">
        </div>
        <div class="swiper-slide">
          <h2 >Relax</h2>
          <img src="images/services/S3.jpg" class="w-100 d-block ">
        </div>
        <div class="swiper-slide">
          <h2 >Chill</h2>
          <img src="images/services/S4.jpg" class="w-100 d-block ">
        </div>
      </div>
    </div>
</div>

<!-- Contact Us -->
<?php 
  $contact_q = "SELECT * FROM `contact_details` WHERE `cd_id`=?";
  $values = [1];
  $contact_d = mysqli_fetch_assoc(select($contact_q,$values,'i'));
?>
<h1 id="contactUs"class="mt-5 pt-4 mb-5 text-center fw-bold h-font fs-32">Contact Us</h1>
<div class="container">
  <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320" src="<?php echo $contact_d['iframe']?>" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
              <h5 class="fw-200">Contact Us</h5>
              <span class="badge bg-light text-hov fs-6 p-2">
              <a href="+9297575119" class="d-inline-block mb-2 text-decoration-none text-hov">
              <i class="bi bi-telephone-fill"></i>+ <?php echo $contact_d['mn1']?> </span></a>
            </div>
            <div class="bg-white p-4 rounded mb-4">
                <h5 class="fw-200">Follow Us</h5>
                <?php
                if($contact_d['fb']!=''){
                  echo <<<data
                  <a href="$contact_d[fb]" class="d-inline-block text-hov">
                  <span class="badge bg-light text-hov fs-6 p-2">
                  <i class="bi bi-facebook"></i> Facebook
                  </span></a>
                  <br>
                  data;
                }
                ?>
                <a href="<?php echo $contact_d['mail']?>" class="d-inline-block mb-3 text-hov">
                <span class="badge bg-light text-hov fs-6 p-2">
                <i class="bi bi-envelope-fill"></i> Email
                </span></a>
            </div>
        </div>
    </div>
</div>

<?php include('hfi/footer.php'); ?>

<!-- Bootstrap/SwiperJs -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper(".swiper-image", {
        spaceBetween: 30,
        effect: "fade",
        loop: true, 
        autoplay:{
          delay:3500,
          disableOnInteraction: false,
        }

      });
</script>

<script>
      var swiper = new Swiper(".myServices-Swiper", {
        watchSlidesProgress: true,
        slidesPerView: 3,
      });
</script>
</body>
</html>