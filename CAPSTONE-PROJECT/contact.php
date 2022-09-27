<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DORS - ContactUs</title>
    <?php require('hfi/links.php');?>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .item:hover{
            border-top-color: #EB6A00 !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>
<body class= "bg-light">
<?php include('hfi/header.php');
require('admin/hfi/db-config.php');
?>
<?php 
  $contact_q = "SELECT * FROM `contact_details` WHERE `cd_id`=?";
  $values = [1];
  $contact_d = mysqli_fetch_assoc(select($contact_q,$values,'i'));
?>

<div class="my-5 px-4">
    <h1 class="h-font fw-bold text-center">Contact Us</h1>
    <div class="h-line "></div>
    <p class="text-center mt-3">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br>
    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
    </p>
</div>
<div class="container ">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4 ">
            <div class="bg-white rounded shadow p-4 card-body">
            <iframe class="w-100 rounded" height="320" src="<?php echo $contact_d['iframe']?>"  loading="lazy"></iframe>
            <h5 class="fw-bold mt-4 mb-2">Address</h5>
            <a href="<?php echo $contact_d['gmap']?>" target="_blank" class="d-inline-block text-decoration-none text-hov">
            <i class="bi bi-pin-map-fill "></i> <?php echo $contact_d['address']?>
            </a>
            <h5 class="fw-bold mt-2 mb-2">Contact Us</h5>
            <a href="+9297575119" class="d-inline-block mb-2 text-decoration-none text-hov">
            <i class="bi bi-telephone-fill"></i> +<?php echo $contact_d['mn1']?></a>
            <h5 class="fw-bold mt-2 mb-2">Email Us</h5>
            <a href="email" class="d-inline-block mb-2 text-decoration-none text-hov">
            <i class="bi bi-envelope-fill"></i>  <?php echo $contact_d['mail']?></a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 card-body ">
                <form action="">
                    <h5 class="fw-bold text-col">Send us a message</h5>
                        <div class="mb-3">
                            <label class="form-label fw-200">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-200">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-200">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-200">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
                        </div>
                        <button type="submit" class="btn shadow-none custom-bg shadow-none">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('hfi/footer.php'); ?>

</body>
</html>