<html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Schedule</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img src="assets/images/logo1.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="index.html">home</a></li>
                            <li><a href="about.html">about us</a></li>
                            <li><a href="modschedule.html">Calculate</a></li>
                            <li><a href="trainers.html">trainers</a></li>
                            <li><a href="#">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-home.html">Blog Home</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">contact</a></li>
                            <li class="menu-btn">
                                <a href="#" class="template-btn">book now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area banner-bg about-page text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-text">
                        <h3>Calculation</h3>
                        <a href="index.html">home</a>
                        <span class="mx-2">/</span>
                        <a href="modschedule.html">Calculate</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <?php
    echo '<font size="18"'." face='Arial'>";

    $conn=mysqli_connect("localhost","abi1","abi123","Food Calculation") or die("not working");


      $sum=0;
      echo "The Food Selected are: ";
      if(!empty($_POST['favorite_food'])){
              foreach($_POST['favorite_food'] as $sam)
              {

                echo $sam;
                echo " ";
                $query = "select * from Food";
                $test = mysqli_query($conn,$query);
                if($test)
                {
                  while($array = mysqli_fetch_array($test,MYSQLI_ASSOC))
                  {
                    if($array['FoodName'] == $sam)
                    {
                      $sum=$sum+$array['Calorie'];
                    }
                  }
                }
                else {
                  echo "fail...";
                }
              }
            }
    echo "<br>";
    echo "You have gained calories of :";
    echo $sum;

    ?>
    <!-- Feature Area Starts -->
    <section class="feature-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h3>featured classes</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature mb-5 mb-lg-0">
                        <div class="feature-img">
                            <img src="assets/images/feature1.jpg" alt="">
                            <div class="hover-state">
                                <a href="#" class="template-btn">details</a>
                            </div>
                        </div>
                        <div class="feature-footer text-center">
                            <h5>cycling training</h5>
                            <p>Hath creeping subdue he fish green face whose spirit that seasons today multiply female midst upon</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature mb-5 mb-lg-0">
                        <div class="feature-img">
                            <img src="assets/images/feature2.jpg" alt="">
                            <div class="hover-state">
                                <a href="#" class="template-btn">details</a>
                            </div>
                        </div>
                        <div class="feature-footer text-center">
                            <h5>tone muscle</h5>
                            <p>Hath creeping subdue he fish green face whose spirit that seasons today multiply female midst upon</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <div class="feature-img">
                            <img src="assets/images/feature3.jpg" alt="">
                            <div class="hover-state">
                                <a href="#" class="template-btn">details</a>
                            </div>
                        </div>
                        <div class="feature-footer text-center">
                            <h5>meditation work</h5>
                            <p>Hath creeping subdue he fish green face whose spirit that seasons today multiply female midst upon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Area End -->

    <!-- Service Area Starts -->
    <section class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 offset-xl-7 col-lg-6 offset-lg-6">
                    <div class="section-top">
                        <h3>our service</h3>
                    </div>
                    <div class="single-service d-flex mb-4">
                        <div class="serv-icon mr-4">
                            <img src="assets/images/serv-icon1.png" alt="">
                        </div>
                        <div class="serv-text">
                            <h5>personal training</h5>
                            <p>Two herb creature bearing signs won't void signs eve female every together Thin thiIsnrnyou're every fourth cattle thermal grid line accrose</p>
                        </div>
                    </div>
                    <div class="single-service d-flex mb-4">
                        <div class="serv-icon mr-4">
                            <img src="assets/images/serv-icon2.png" alt="">
                        </div>
                        <div class="serv-text">
                            <h5>boxing training</h5>
                            <p>Two herb creature bearing signs won't void signs eve female every together Thin thiIsnrnyou're every fourth cattle thermal grid line accrose</p>
                        </div>
                    </div>
                    <div class="single-service d-flex">
                        <div class="serv-icon mr-4">
                            <img src="assets/images/serv-icon3.png" alt="">
                        </div>
                        <div class="serv-text">
                            <h5>fitness training</h5>
                            <p>Two herb creature bearing signs won't void signs eve female every together Thin thiIsnrnyou're every fourth cattle thermal grid line accrose</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->


    <!-- Client Area Starts -->
    <section class="client-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h3>happy client says</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-slider owl-carousel">
                        <div class="single-slide d-flex">
                            <div class="slide-img mr-4">
                                <img src="assets/images/client1.png" alt="">
                            </div>
                            <div class="slide-text">
                                <p>Give dry stars form. Us called an won't winged had land cru abundantly land Midst</p>
                                <h5>danyel yarde</h5>
                                <h6>CEO & founder</h6>
                            </div>
                        </div>
                        <div class="single-slide d-flex">
                            <div class="slide-img mr-4">
                                <img src="assets/images/client2.png" alt="">
                            </div>
                            <div class="slide-text">
                                <p>Give dry stars form. Us called an won't winged had land cru abundantly land Midst</p>
                                <h5>Manyel yarde</h5>
                                <h6>CEO & founder</h6>
                            </div>
                        </div>
                        <div class="single-slide d-flex">
                            <div class="slide-img mr-4">
                                <img src="assets/images/client3.png" alt="">
                            </div>
                            <div class="slide-text">
                                <p>Give dry stars form. Us called an won't winged had land cru abundantly land Midst</p>
                                <h5>Sanyel yarde</h5>
                                <h6>CEO & founder</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Area End -->

    <!-- Friend Area Starts -->
    <section class="friend-area section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>bring all your friends. get 50% discount!</h3>
                    <h4 class="pt-3 pb-4">Give dry stars form us called won't winged had abundantly <br>land Midst appear for you eden</h4>
                    <a href="#" class="template-btn">join with us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Friend Area End -->


    <!-- Footer Area Starts -->
    <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h5 class="mb-4">about us</h5>
                            <p>Give dry stars form us called won't winged had abundantly land Midst appear for you, good fill. Kind isn't form and. Their shall Whose them life be seed them green.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h5 class="mb-4">contact us</h5>
                            <p>56/8, rockybeach road, santa monica, Los angeles, California - 59620</p>
                            <span class="span-style">012-6532-568-9746</span>
                            <span class="span-style">012-6532-569-9748</span>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="single-widget-home">
                            <h5 class="mb-4">newsletter</h5>
                            <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>
                            <form action="#">
                                <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                <button type="submit" class="template-btn"><i class="fa fa-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
