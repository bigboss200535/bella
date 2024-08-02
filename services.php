<?php include ('include/head.php'); ?>

    <body>

       <?php include('include/preloader.php');?>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <?php   include('include/topbar.php');     ?>
        <!-- Topbar End -->
        
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">

           <?php  include('include/navbar.php');?>
        </div>
        <!-- Header Start -->
        <div class="container-fluid bg-estate">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Our Services</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
        <?php include ('include/our_services.php'); ?>

        <!-- Services End -->

        <!-- Testimonial Start -->
        <?php include('include/testimony.php'); ?>
        <!-- Testimonial End -->

        <!-- Subscribe Start -->
       <?php include('include/news_letter.php');?>
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