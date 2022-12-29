<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DeFinance - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("form").submit(function(event){
      event.preventDefault();
      var name = $("#name").val();
      var email = $("#email").val();
      var subject = $("#subject").val();
      var message = $("#message").val();
      var submit = $("#submit").val();
      $(".form-message").load("forms/contact.php", {

        name:name,
        email:email,
        subject:subject,
        message:message,
        submit:submit
      });

  });
});

</script>


 
 
</head>

<body >

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.php" style="color:green;">DeFinance</a></h1>
     
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
 
      <nav id="navbar" class="navbar navbar-default" role="navigation" style="margin-left:15;">
        <ul >
          <li><a href="index.php" class="active">Home</a></li>

          <li ><a href="about.php"><span>About </span></a>
            
          </li>

          <li class="dropdown"><a href="#">Services<i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a href="investment.php">Investments</a></li>
              <li><a href="smart.php">Smart Portfolios</a></li>
              <li><a href="hedge.php">Hedge Funds</a></li>
              <li><a href="financial.php">Financial Advice and Asset Management</a></li>
              <li><a href="philanthropy.php">Philanthropy</a></li>
              <li><a href="alternative.php">Alternative Investments</a></li>
      
      
              
            </ul>
        
        
        </li>
          <li><a href="portfolio.php">Portfolio</a></li>
          
          <li><a href="contact.php">Contact</a></li>
          <li class="dropdown"><a href="#"><span style="color:red;">Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="dashboard/login.php">Login</a></li>
              <li><a href="dashboard/register.php">Open Account</a></li>
      
              
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
</div>
  
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="50000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/test.jpg">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h3>Welcome to <span>DeFinance</span></h3>
              <h4>DeFinance is the first truly decentralized blockchain-backed financial and investment firm. Definance combines traditional investment system and smart contract integration with accounts handled by the best portfolio managers and traded with industry leading algorithms.</h4>
              <div class="text-center"><a href="about.php" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/hhero.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h3>DECENTRALIZED</h3>
              <h4>We offer an unparalleled combination of deep experience, conflict-free execution, and client focus that can be tailored for investors of any size or structure. Our expertise, approach to client service, and long-standing client and broker relationships translate to a single commodity: trust.</h4>
              <div class="text-center"><a href="about.php" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/test.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h3>Goal-Driven and Focused</h3>
              <h4>Our mission is the pursuit and delivery of value, both for shareholders and clients. We pursue growth by relying on our strengths in select areas of activity, while making continual advancements in our approach to take advantage of ever-evolving opportunities in the brokerage and capital markets areas.</h4>
              <div class="text-center"><a href="about.php" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main" >

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us" style="background:white;">
   <div class="section-title"> <a href="about.php"><h2 align="center" style="color:green;margin-bottom:3%;">About Us</h2></a></div>
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-12" data-aos="fade-right">
            <h3 style="color:green;text-indent:50px;">     Since 2018, DeFinance has provided
asset management and financial planning services to
families, individuals, institutions, and businesses.
Clients choose Definance for its integrity, consistency, and
proven record of success in the financial industry. It is
our objective to provide professionals and experts
provide an unparalleled level of quality advice to every
one of our clients. In addition to our modern approach to
portfolio construction, we offer a level of personalized
service and open communication not found at larger
organizations. </h3>
            <h3 style="color:black;text-indent:50px;">Through tailored portfolio management, we help highnet-worth individuals and institutions around the world
reach their long-term financial goals. As a client of
Definance, you will benefit from a comprehensive,
personalized financial plan helping you confidently save,
spend and invest. Our strategies and plans are tailored
to your financial needs. In addition, we can help with
financial planning, budgeting, cash-flow analysis, estate
and tax planning, and strategies for maximizing Social
Security benefits. Beyond investing and financial
planning, we want to help make you a more comfortable,
disciplined, and informed investor. That’s why we will
help you understand what’s going on in your account.</h3>
<br>
<br>

           
          </div>
          <div class="text-center"><a href="about.php" class="btn-get-started">Read More</a></div>
         
        </div>

      </div>
    </section>
    <!-- End About Us Section -->
   
   
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
<div class="section-title"><h2 align="center" style="color:green;margin-bottom:4%;">Why DeFinance</h2></div>
<div class="container">

<div class="row">

  <div class="col-lg-12" data-aos="fade-up">
  
    <div class="testimonial-item">
 
      <h2 style="color:green;">OUR MISSION</h2>
     
      <p><b>
        
      
To carry out all our business
operations with integrity and
courtesy while ensuring
maximum client satisfaction.
We strive to offer and deliver
the best investment services,
offerings, and packages to
our esteemed clients.
      
        
</b></p>
    </div>
  </div>

 

  <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
    <div class="testimonial-item mt-4">
      
      <h2 style="color:green;"> OUR VISION</h2>
      
      <p><b>
     
The pillars of our investment
approach is first, we identify
investment opportunities
arising from market
inefficiencies, carry out
detailed research, tailor
portfolios appropriately and
undertake thorough risk
management</b>

</p>
    </div>
  </div>

  <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
    <div class="testimonial-item mt-4">
      
      <h2 style="color:green;"> OUR PHILOSOPHY</h2>
    
      <p><b>
     
Our goal is excellence in
investing. To us, this means
achieving attractive returns
without commensurate risk,
an imbalance which can only
be achieved in markets that
are not "efficient." Although
we strive for superior returns,
our first priority is that our
actions produce consistency,
protection of capital, and
superior performance in bad
times.

</b></p>
    </div>
  </div>

  <div class="col-lg-12" data-aos="fade-up" data-aos-delay="400">
    <div class="testimonial-item mt-4">
      
      <h2 style="color:green;">Tailored Investment
Approach
</h2>
      <p><b>
      We would help you meet your longer-term
goals with a tailored investment strategy
that’s specifically designed for you because
we believe an informed investor is a better
investor and a happier client.</b>
</p>
    </div>
  </div>

  <div class="col-lg-12" data-aos="fade-up" data-aos-delay="500">
    <div class="testimonial-item mt-4">
      
      <h2 style="color:green;">Retirement Planning</h2>
      <p><b>
      Whether or not your retirement is comfortable
depends on first identifying your individual
retirement goals and then finding the proper
balance of investments to accomplish your goals.
We can help you figure out how.</b>
</p>
    </div>
  </div>
  <div class="col-lg-12" data-aos="fade-up" data-aos-delay="500">
    <div class="testimonial-item mt-4">
      
      <h2 style="color:green;">BLOCKCHAIN INTEROPERABILITY</h2>
      <p><b>
      Offers interoperability between different blockchains hence supporting different project tokens and nfts(in future) and their conversion.</b>
</p>
    </div>
  </div>
  <div class="col-lg-12" data-aos="fade-up" data-aos-delay="500">
    <div class="testimonial-item mt-4">
      
      <h2 style="color:green;">SIPC Protected Accounts</h2>
      <p><b>
      Every Definance account is protected up to $500,000.</b>
</p>
    </div>
  </div>
  <div class="col-lg-12" data-aos="fade-up" data-aos-delay="500">
    <div class="testimonial-item mt-4">
      
      <h2 style="color:green;">SSL Encryption</h2>
      <p><b>
      Our website and app are secured with 256-bit encryption and blockchain nodes.
</b>
</p>
    </div>
  </div>


</div>

</div>

<section id="skills" class="skills" style="background-image:url('assets/img/pexels-henry-&-co-1939485.jp');">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 style="color:green;">Diversified <strong> Portfolio</strong></h2>
          <p><b>Our Investment Ideology
We believe a top-down investment approach—
one that selects assets based on higher-level
analysis before security selection—is a key factor
to our investing success</b></p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-12" data-aos="fade-up">

            <div class="progress">
              <span class="skill">STOCKS<i class="val">29%</i></span>
              <div class="progress-bar-wrap">
                <div style="background-color:red;" class="progress-bar" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CRYPTOCURRENCY <i class="val">11%</i></span>
              <div class="progress-bar-wrap">
                <div style="background-color:orange;" class="progress-bar" role="progressbar" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">REAL ESTATE <i class="val">15%</i></span>
              <div class="progress-bar-wrap" >
                <div style="background-color:yellow;" class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">

            <div class="progress" >
              <span class="skill">BONDS <i class="val">8%</i></span>
              <div class="progress-bar-wrap">
                <div style="background-color:green;" class="progress-bar" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">RENEWABLE RESOURCES<i class="val">20%</i></span>
              <div class="progress-bar-wrap">
                <div style="background-color:blue;" class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">ETF's<i class="val">17%</i></span>
              <div class="progress-bar-wrap">
                <div style="background-color:indigo;" class="progress-bar" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>
</section>
<section id="features" class="features" style="background-image:url('assets/img/pexels-henry-&-co-1939485.jp');">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color:green;">What We Invest In</h2>
          <p><b>Definance makes it possible for you to achieve your financial purpose which makes it possible for you to live the lifestyle you've always craved for.</b></p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #ffbb2c;"></i>
              <h3><a style="color: #ffbb2c;" href="investment.php">Stocks</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #5578ff;"></i>
              <h3><a   style="color: #5578ff;" href="investment.php">Non Fungible Tokens</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #e80368;"></i>
              <h3><a style="color: #e80368;" href="alternative.php">Real Estate </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #e361ff;"></i>
              <h3><a style="color: #e361ff;" href="alternative.php">Cannabis</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a style="color: #47aeff;" href="alternative.php">Cryptocurrency</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #ffa76e;"></i>
              <h3><a style="color: #ffa76e;" href="investment.php">Options</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #11dbcf;"></i>
              <h3><a style="color: #11dbcf;" href="investment.php">Mutual Funds</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #4233ff;"></i>
              <h3><a style="color: #4233ff;" href="investment.php">Bonds</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #b2904f;"></i>
              <h3><a style="color: #b2904f;" href="investment.php">Gold</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #b20969;"></i>
              <h3><a style="color: #b20969;" href="investment.php">ETF's</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #ff5828;"></i>
              <h3><a style="color: #ff5828;" href="investment.php">Certificates Of Deposits</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #29cc61;"></i>
              <h3><a style="color: #29cc61;" href="alternative.php">Collectibles</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg" style="background-image:url('assets/img/pexels-henry-&-co-1939485.jp');">
      <div class="container" data-aos="fade-up">
<h2 align="center" style="margin-bottom:4%;color:green;" >Services</h2>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-green">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bi bi-cash-coin"></i>
              </div>
              <h3><a style="color:green;" href="investment.php">Investments</a></h3>
              <h4><b>Saving money is good but what is even better is to have your money work for you.</b></h4>
              
            
           
            
          </div>
          </div>
            
          

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bi-pie-chart-fill"></i>
              </div>
              <h3> <a style="color:green;" href="smart.php">Smart Portfolio</a></h3>
              <h4><b>Smart Portlios seeks to manage risk at each step in the process from the selection of individual investments to the complete portfolio design.</b></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bi bi-bank"></i>
              </div>
              <h3><a style="color:green;" href="hedge.php">Hedge Funds</a></h3>
              <h4><b>Hedge fund is a private investment partnership and funds pool that uses varied and complex proprietary strategies and invests or trades in complex product, including listed and unlisted derivates.</b></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bi bi-briefcase-fill"></i>
              </div>
              <h3 ><a style="color:green;" href="financial.php">Financial Advice and Asset Management</a></h3>
              <h4 ><b>Asset management is the practice of increasing total wealth over time by acquiring, maintaining, and trading investments that have the potential to grow in value.</b></h4>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bi bi-heart-fill"></i>
              </div>
              <h3><a style="color:green;" href="philanthropy.php">Philanthropy</a></h3>
              <h4><b>DeFinance offers charitable acts and other good works that help others and the society.</b></h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bi bi-sun"></i>
              </div>
              <h3><a style="color:green;" href="alternative.php">Alternative Investments</a></h3>
              <h4><b>Alternative investments refer to investments made in assets classified as non-traditional investment vehicles. Alternative investments are available to seasoned and esteemed high-net-worth investors and private institutions that meet up certain criteria such as networth/ market valuation.</b></h4>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->
<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg" style="background-image:url('assets/img/pexels-henry-&-co-1939485.jp');">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="margin-bottom:2%;color:green;">Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><h2>What does definance being decentralized mean?</h2><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <h4>
                Decentralized finance offers financial instruments without relying on intermediaries such as brokerages, exchanges, or banks by using smart contracts on a blockchain. It's a system that removes the control banks, institutions and to a large extent, the govenment have on money, financial products, and financial services and runs on a digital/crypto currency payment system.
                </h4>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"><h2>Who owns Definance?</h2><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Definance being fully decentralized isn't claimed or owned by any individual or entity, but was an idea brought to live by a network of integrated blockchain validators and portfolio managers operating on smart contracts.
                </h4>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"><h2>What is a smart contract?</h2> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <h4>
                A smart contract is a computer program or a transaction protocol stored on the blockchain which is intended to automatically execute, control or document legally relevant events and actions according to the terms of a contract or an agreement. They typically are used to automate the execution of an agreement so that all participants can be immediately certain of the outcome, without any intermediary’s involvement or time loss. They can also automate a workflow, triggering the next action when conditions are met.
                </h4>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed"><h2>How are portfolios funded and payments and trasanctions carried out?</h2><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Definance is a protocol backed by blockchain and runs on smart contracts, hence payments and transactions are carried out through cryptocurrencies such as bitcoin(btc), ethereum(eth), ripple(xrp), binance token(bnb) and stablecoins such as usdt and usdc.

                </h4>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"><h2>What cryptocurrencies are accepted: </h2><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Cryptocurrencies such as bitcoin, ethereum, ripple(xrp), binance token(bnb) and stable coins such as usdt or usdc.
                </h4>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed"><h2>What is wealth management?</h2> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Wealth management usually refers to a suite of services that provides the opportunity to work with a financial professional. It usually includes working together on a broad plan to help grow and protect assets and it often includes the ability to take advantage of professional money management.
                </h4>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="600">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed"><h2>How much do i need for wealth management?</h2> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                <h4>
                While the minimum investment required varies from investment firm to investment firm,at Definance, portfolios with a minimum of $25k, have a personal wealth manager assigned to them. Wealth management is designed for clients whose financial situations warrant the personal attention of a financial professional but at definance, every investor has access to contact a wealth manager for a free consultation. 
                </h4>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="700">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed"><h2>How can I protect my wealth?</h2> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                <h4>
                There are a number of things one can do in an effort to protect wealth, such as retirement planning, estate planning (including developing a plan for the orderly transfer of wealth to your heirs), being more tax-efficient, or exploring the addition of fixed income investments to a portfolio.
                </h4>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="800">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed"><h2>What are alternative investments? </h2><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Alternative investments are investments specifically meant for accredited investors who are wealthier than normal retail investors. Such investments are made in assets that do not fall under traditional asset classes, like individual stocks, bonds, etc. The lower market correlation makes these investments less volatile, and hence these turn out to be a hedge against inflation for investors.
These non-conventional investments are classified as tangible (real estate, precious metals, commodities, etc.) and intangible (private equity, hedge funds, cryptocurrency, etc.).  
                </h4>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="900">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed"><h2>Why would someone need a wealth manager?</h2> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Clients may engage in a wealth management relationship for a number of different reasons. Some choose to do so because they need help planning for certain goals, or need guidance around estate planning, protecting wealth, retirement planning, or ways to manage their tax obligations. Others choose wealth management because they don’t have the time or the desire to manage their own portfolios or simply value the input of a financial professional, who can act as a sounding board.
                </h4>
              </div>
            </li>
           <li data-aos="fade-up" data-aos-delay="1000">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed"><h2>Are ETFs alternative investments?</h2> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                <h4>
                The exchange-traded funds or ETFs are investments that fall between alternative and traditional investments. It lets investors enjoy alternative investment opportunities while not facing any illiquidity issues. In addition, unlike other alt funds, ETFs are well-regulated and could be easily managed, sold, and converted to cash.
                </h4>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="1100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-12" class="collapsed"><h2>What strategies can be used to reduce the taxes on investments?</h2><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-12" class="collapse" data-bs-parent=".faq-list">
                <h4>
                Depending on your personal situation, there are a number of ways to potentially reduce or defer the taxes you pay on your investments. These can include finding ways to reduce or defer income, capital gains, and estate taxes. Strategies such as Roth IRA conversions, asset location, tax-loss harvesting, or revisiting your gifting and estate plans may help you grow your wealth and preserve your legacy.
                </h4>
              </div>
            </li>


          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <section id="contact" class="contact" >
    <h2 align="center" style="margin-bottom:2%;color:green;">Contact Us</h2>
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>5 Pioneer Sector Walk<br>Signapore, Signapore 627896</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@De-Finance.in</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 304 8734024</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" id="form" role="form" class="php-email-for" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
              </div>
              
            
              </div>
              <div class="text-center"><button type="submit" id="submit"  value="submit" class="btn btn-primary">Send Message</button></div>
              <h4 class="form-message"></h4>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>DeFinance</h3>
            <p>
              <strong>Phone:</strong>+44 7310583575<br>
              <strong>Email:</strong> info@De-Finance.in<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="investment.php">Investments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Insurance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="financial.php">
Financial Advice and Asset Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="smart.php">Smart Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="hedge.php">Hedge Funds</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Be The First To Hear From Us.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>DeFinance</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          
          Designed by Oasis Group</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>