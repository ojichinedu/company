<?php
include("../db.php");
if(!isset($_SESSION['loggedin'])){
  header("location:../dashboard/login.php");
}
$sql="SELECT * from users WHERE email='{$_SESSION['email']}'";
$result=mysqli_query($conn,$sql) or die("data retrieval error");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['deposit'])){
  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );
  $client = $row['email'];
  $clientName = $row['firstname'];
  $method=$_POST['method'];
  $amount = $_POST['amount'];
  $messag=$_POST['message'];
  $from = "noreply@de-finance.in";
  $to = "info@de-finance.in";
  $message = "from:".$client."\n"."name:".$clientName."\n"."Requesting deposit Amount:".$amount."Through :".$method. "message :".$messag;
 //The content-type header must be set when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers = "From:" . $from;
  if(mail($to,$amount,$message, $headers)) {
     echo '<script>alert("Message has been Sent, You will receive a reply shortly.");</script>';
     echo '<script>document.getElementById("form").reset();</script>';
   } else {
     echo '<script>alert("Message Was Not Sent.");</script>';
  } 

}




?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Deposit</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-php-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.jpg" alt="">
        <span class="d-none d-lg-block">DeFinance</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        
        
        
      <h3 style="margin-right:19px;margin-top:15px;">Hi, <b><?php echo $row['firstname']." ".$row['lastname']; ?></b></h3>

<li class="nav-item dropdown pe-3">

<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
    <img src="images/<?php echo $row['profilepicture'];?>" alt="Profile" class="rounded-circle">
    <span class="d-none d-md-block dropdown-toggle ps-2"></span>
  </a><!-- End Profile Iamge Icon -->

  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

    <li class="dropdown-header">
      <h6><b><?php echo $row['firstname']." ".$row['lastname'];?></b></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Finance</li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="invest.php">
          <i class="bi bi-arrow-down-circle-fill"></i>
          <span>Invest</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="withdraw.php">
          <i class="bi bi-arrow-up-circle-fill"></i>
          <span>Withdraw</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="history.php">
          <i class="bi bi-hourglass-split"></i>
          <span>Transaction History</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-heading">Account</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-boxes"></i>
          <span>Verification</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person-plus-fill"></i>
          <span>Referrals</span>
        </a>
      </li><!-- End Profile Page Nav -->




      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-box-arrow-left"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Invest</h1>
      <br>
      <h4><b>Risk Tolerance: </b><span style="color:green;"><?php echo $row['tolerance']; ?></span></h4>
      <br>
      <h4 ><b>Account Balance: </b><span style="color:green;">$<?php echo $row['balance']; ?></span></h4>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Invest</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title"><span style="font-size:22px;color:black;">Speak With A Wealth Manager</span> </h5>
              <hr>
              <form method="post" action="" id="form">

<div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="amount" name="amount"
                                        placeholder="Deposit Amount " required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="method" name="method"
                                        placeholder="Deposit Method" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" rows="5"
                                        placeholder="Write Us A Message"></textarea>
                                </div>
<br>



<div class="form-group" align="center">
    
    <input type="submit" name="deposit" class="btn btn-primary" id="deposit" value="Speak With Wealth Manager">
</div>
 
</form>


              
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
    &copy; Copyright <strong><span>DeFinance 2022</span></strong>. All Rights Reserved
    </div>
   
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

      </html>