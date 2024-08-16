<?php include('include/head.php'); ?>

    <body>

        <!-- Spinner Start -->
        <?php include('include/preloader.php');?>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <?php   include('include/topbar.php');     ?>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
             <?php  include('include/navbar.php');?>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-travel">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php" style="color: #fff">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item active text-white">About us</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
           <div class="container py-5">
    <div class="row g-5 align-items-center">
        <div class="col-lg-5">
            <div class="h-100" style="border: 50px solid; border-color: transparent #DAA520 transparent #DAA520;">

                <img src="img/logo.jpg" class="img-fluid w-100 h-100" alt="">

            </div>
        </div>
        <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8))">
            <h5 class="section-about-title pe-3">About Us</h5>
            <h1 class="mb-4" style="font-size: 39px;">Welcome to <span class="text-primary">Bellas Prestige Limited</span></h1>
            <p class="mb-4" align="justify">Bellas Prestige Limited is a premier agency that specializes in providing exceptional experiences to our clients. We have established ourselves as a trusted and reliable source for all your travel, homecare, education and accomodational needs.</p>
            <p class="mb-4" align="justify">Our team of dedicated professionals is committed to ensuring that every trip is tailored to meet your specific preferences and budget. From luxurious vacations to adventurous getaways, we offer a wide range of options to cater to every type of traveler. At Bellas Prestige Limited, we strive to create unforgettable memories for our clients by providing top-notch services and personalized attention. Trust us to take care of all your travel arrangements and let us help you explore the world in style.</p>
            <!-- <div class="row gy-2 gx-4 mb-4">
                <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                </div>
                <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Application of Passport</p>
                </div>
                <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Birth Certificate</p>
                </div>
                <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                </div>
                <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                </div>
                <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                </div>
            </div> -->
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <h3 class="section-about-title">Our Mission</h3>
               <p>Bellas Prestige Limited is a company that aims to provide exceptional services that meet the unique needs of its clients, ensuring their satisfaction and success.</p> 
            </div>
            <div class="col-md-3">
                <h3 class="section-about-title">Our Vision</h3>
                <p>The company values excellence, integrity, and customer satisfaction, striving to build long-term relationships with its clients.</p>
            </div>
            <div class="col-lg-5">
            <div class="h-100" style="border: 50px solid; border-color: transparent #DAA520 transparent #DAA520;">
                
                <img src="img/about/kumasi-1.png" class="img-fluid w-100 h-100 shadow" alt="">
                <h3 class="section-about-title"></h3>
            </div>
        </div>
        </div>
        
        <!-- <div class="row">
            <div class="card col-xl-6 col-md-6 shadow-lg">
                <div class="card-header"><h3 ></h3></div>
                <img src="" class="rounded shadow-lg" style="width: 500px;">
                <div class="card-footer"></div>
            </div>
        </div> -->
    </div>
</div>

        </div>
        <!-- About End -->

        
        <?php include('include/our_services.php'); ?>
        <!-- Travel Guide Start -->
        <?php include('include/our_guide.php'); ?>
        <!-- Travel Guide End -->
        <!-- Subscribe Start -->
       <div class="container-fluid aboutsubscribe py-5">
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">Subscribe</h5>
                    <h1 class="text-white mb-4">Our Newsletter</h1>
                    <p class="text-white mb-5">
                        Kindly subscribe to our newsletter, so that we bring you the latest updates on travels and more....  
                    </p>
                    <div class="position-relative mx-auto">
                        <form id="newsletter_submission">
                            <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" autocomplete="off" name="news_letter" id="news_letter">
                            <button type="button" class="btn btn-gold rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->
        <!-- Footer Start -->
        <?php include('include/footer.php');?>
        <!-- Footer End -->
        <!-- Copyright Start -->
        <?php include('include/copyright.php');?>
        <!-- Copyright End -->
        <!-- Back to Top -->
        <?php include('include/back_to_top.php');?>  
        <!-- JavaScript Libraries -->
        <?php include('include/script.php');?>  
    </body>
</html>