<?php 
require('hfi/essentials.php');
require('hfi/db-config.php');
require('hfi/links.php');

session_start();
if((isset($_SESSION ['adminLogin']) && $_SESSION ['adminLogin']== true)){
        redirect('dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <?php require('hfi/links.php'); ?>
    <style>
        div.login-form{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }h4.bg-darky{
            background-color:#EB6A00;
        }
    </style>
</head>
<body class="bg-light">
     <div class="login-form text-center rounded bg-white shadow over-flow-none">
        <form method="POST">
            <h4 class="bg-darky text-white py-4 over-flow-hidden">Admin Panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" type="text" required class="form-control shadow-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" type="password" required class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
     </div>
     
<?php 
    if(isset($_POST['login'])){
        $frm_data = filteration($_POST);
        $query = "SELECT * FROM `admin_info` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$frm_data['admin_name'],$frm_data['admin_pass']];
        $res = select($query,$values,"ss");

        if($res->num_rows==1){
            $row = mysqli_fetch_assoc($res);
            $_SESSION['adminLogin']= true;
            $_SESSION['adminId'] = $row ['id'];
            redirect('dashboard.php');
        }else{
            alert('error','Login failed - Invalid Info!');
        }
    }
?>

<?php require('hfi/script.php'); ?>
</body>
</html>