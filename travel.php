<?php include ('include/head.php'); ?>
    <body>
       <?php include('include/preloader.php');?>
        <!-- Spinner End -->
        <!-- Topbar Start -->
        <?php   include('include/topbar.php');     ?>
        <!-- Topbar End -->
        <!-- Navbar & Hero Start -->
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
             <?php  include('include/navbar.php');?>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-travel">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Travel Consult</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item active text-white">Travel Consult</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
        <!-- Header End -->
        <!-- Begin blog -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <!-- start of why choose us -->
                <div class="mx-auto text-center mb-5">
                    <h1 class="mb-4">Why choose us</h1>
                    <div class="row">
                    <div class="col-md-6" align="justify">
                        Bellas Prestige Travel Consult is a company that aims to provide exceptional services that meet the unique needs of its clients, ensuring their satisfaction and success. 
                        <p class="mt-3">The company offers personalized travel and tour services, such as, Travel Documents Processing, Study Abroad, Work Permit, Visit Visa, Holidays Visa, Settlement Visa, Hotel Reservations, Airline Ticketing, Organizing of tours for churches and Holidayers, Airbnb (short stays).</p>
                </div>
               <div class="col-lg-6 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/travel/travel-back.jpg" alt="Image">
                                <div class="blog-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- end of why choose us -->
    <div class="text-center">
        <h3 class="section-title text-center mb-3">&nbsp Our Travel Consult Services &nbsp</h3>
    </div>
            <div class="row g-4 justify-content-center">
                <!-- Start of Travel Abroad processing -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/travel/studyabroad-1.jpg" alt="Image">
                                <div class="blog-icon">
                                    <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4 my-auto">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <a href="#documentModal" data-bs-toggle="modal" class="h4">Study Abroad</a><br>
                            <div class="row rounded-bottom mt-3">
                            <div class="col-6 text-start px-0">
                            <a href="#documentModal" data-bs-toggle="modal" class="btn btn-sm btn-primary rounded-pill py-2 px-4">View More...</a>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- End of Travel Abroad processing -->

                <!-- Start Modal for Travel Abroad processing services -->
                <div id="documentModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center mb-0">STUDY ABROAD</h3>
                                <button type="button" class="close float-right" aria-label="Close" data-bs-dismiss="modal">
                                  <span aria-hidden="true">&#xD7;</span>
                                </button>
                            </div>
                            
                            <div class="modal-body p-0 bg-alt">
                                <div class="row p-2">
                                <div class="col-md-6 p-3" align="justify">
                                <img src="img/travel/studyabroad-1.jpg" style="width: 100%; height: 100%;" id="documentImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                       
                            </div>
                            <div class="col-md-6">
                                <span style="font-weight: bolder;"> Our expert application assistance team will guide you through every step of the process, from choosing the right school to submitting a winning application. Our Services include:</span>
                                <ul class="mt-3">
                                <li class="mb-2"><b >School selection and research</b></li>
                                <li class="mb-2"><b >Application essay writing and editing</b></li>
                                <li class="mb-2"><b >Visa application assistance</b></li>
                                <li class="mb-2"><b >Interview preparation and coaching</b></li>
                                <li class="mb-2"><b >Scholarship and financial aid guidance</b></li> 
                            </ul>
                            </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal" aria-hidden="true">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal for Travel Abroad services -->

                <!-- Start of Hotel Reservation -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/travel/hotel-2.jpg" alt="Image">
                                <div class="blog-icon">
                                    <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4 my-auto">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <!-- <p class="mb-3">Posted By: Royal Hamblin </p> -->
                            <a href="#hotelModal" class="h4">Hotel Reservations</a><br>
                            <div class="row rounded-bottom mt-3">
                            <div class="col-6 text-start px-0">
                            <a href="#hotelModal" data-bs-toggle="modal" class="btn btn-sm btn-primary rounded-pill py-2 px-4">View More...</a>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- End of Hotel Reservation -->

                 <!-- Start Modal for Hotel Reservation processing services -->
                <div id="hotelModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center mb-0">HOTEL RESERVATION</h3>
                                <button type="button" class="close float-right" aria-label="Close" data-bs-dismiss="modal">
                                  <span aria-hidden="true">&#xD7;</span>
                                </button>
                            </div>
                            
                            <div class="modal-body p-0 bg-alt">
                                <div class="row p-2">
                                <div class="col-md-6 p-3" align="justify">
                                <img src="img/travel/hotel-2.jpg" style="width: 100%; height: 100%;" id="documentImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                          
                            </div>
                            <div class="col-md-6">
                                <span style="font-style: italic;">Are you traveling abroad and looking for a comfortable and convenient place to stay? Look no further!. We are available to help you with, </span>
                                <ul class="mt-3">
                                <li class="mb-2"><b >Wide selection of hotels worldwide</b></li>
                                <li class="mb-2"><b >Competitive rates and discounts</b></li>
                                <li class="mb-2"><b >Easy online booking and payment</b></li>
                                <li class="mb-2"><b >24/7 customer support</b></li>
                                <li class="mb-2"><b >Hotel reviews and ratings from trusted sources</b></li> 
                            </ul>
                            </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal" aria-hidden="true">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal for Hotel Reservation services -->

                <!-- Start of Airline Ticketing -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/travel/ticket-1.jpeg" alt="Image">
                               <div class="blog-icon">
                                    <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4 my-auto">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <!-- <p class="mb-3">Posted By: Royal Hamblin </p> -->
                            <a href="#" class="h4">Airline Ticketing</a><br>
                            <div class="row rounded-bottom mt-3">
                            <div class="col-6 text-start px-0">
                            <a href="#airlineModal" data-bs-toggle="modal" class="btn btn-sm btn-primary rounded-pill py-2 px-4">View More...</a>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- End of Airline ticketing -->

                 <!-- Start Modal for Airline ticketing services -->
                <div id="airlineModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center mb-0">AIRLINE TICKETING</h3>
                                <button type="button" class="close float-right" aria-label="Close" data-bs-dismiss="modal">
                                  <span aria-hidden="true">&#xD7;</span>
                                </button>
                            </div>
                            
                            <div class="modal-body p-0 bg-alt">
                                <div class="row p-2">
                                <div class="col-md-6 p-3" align="justify">
                                <img src="img/travel/ticket-1.jpeg" style="width: 100%;height: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                         
                            </div>
                            <div class="col-md-6">
                                <span style="font-style: italic;">Are you looking for a hassle-free way to book your flights? Look no further! With Bellas Prestige Travel Consult, we help you with, </span>
                                <ul class="">
                                <li class="mb-2"><b >Fast and easy booking process</b></li>
                                <li class="mb-2"><b >Competitive prices and discounts</b></li>
                                <li class="mb-2"><b >Access to a wide range of airlines and routes</b></li>
                                <li class="mb-2"><b >Secure payment processing</b></li>
                                <li class="mb-2"><b >24/7 customer support</b></li> 
                            </ul>
                            <span style="font-weight: bolder; font-style: italic;">Book Flights to:</span>
                            <ul>
                                <li>Domestic destinations</li>
                                <li>International destinations</li>
                                <li>Popular tourist destinations</li>
                                <li>Business hubs</li>
                            </ul>
                            </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal" aria-hidden="true">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal for Airline ticketing services -->

                <!-- Start of Holiday Visa -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/travel/holiday-2.jpg" alt="Image">
                                <div class="blog-icon">
                                    <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4 my-auto">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <!-- <p class="mb-3">Posted By: Royal Hamblin </p> -->
                            <a href="#" class="h4">Holiday Visa</a><br>
                            <div class="row rounded-bottom mt-3">
                            <div class="col-6 text-start px-0">
                            <a href="#holidayModal" data-bs-toggle="modal" class="btn btn-sm btn-primary rounded-pill py-2 px-4">View More...</a>
                        </div>
                        </div>
                        </div>
                    </div>
                </div> 
                <!-- End of Holiday Visa -->

                 <!-- Start Modal for Holiday Visa services -->
                <div id="holidayModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center mb-0">HOLIDAY VISA</h3>
                                <button type="button" class="close float-right" aria-label="Close" data-bs-dismiss="modal">
                                  <span aria-hidden="true">&#xD7;</span>
                                </button>
                            </div>
                            
                            <div class="modal-body p-0 bg-alt">
                                <div class="row p-2">
                                <div class="col-md-6 p-3" align="justify">
                                <img src="img/travel/holiday-2.jpg" style="width: 100%; height: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                      
                            </div>
                            <div class="col-md-6">
                                <span style="font-weight: bolder; font-style: italic;"> Our expert team will guide you through the process of obtaining a holiday visa, so you can focus on what really matters - relaxing and having fun!. With Bellas Prestige Travel Consult, we help you with, </span>
                                <ul class="">
                                <li class="mb-2"><b >Holiday visa application assistance</b></li>
                                <li class="mb-2"><b >Document preparation and submission</b></li>
                                <li class="mb-2"><b >Access to a wide range of airlines and routes</b></li>
                                <li class="mb-2"><b >Interview preparation and coaching</b></li>
                                <li class="mb-2"><b >Fast-track processing options available</b></li> 
                            </ul>
                            </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal" aria-hidden="true">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal for Holiday Visa services -->
               
               <!-- start of work permit -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid rounded-top" style="max-width: 100%; height: 100%;" src="img/travel/workpermit-2.jpg" alt="Image">
                                <div class="blog-icon">
                                    <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4 my-auto">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <!-- <p class="mb-3">Posted By: Royal Hamblin </p> -->
                            <a href="#" class="h4">Work Permit</a><br>
                              <div class="row rounded-bottom mt-3">
                            <div class="col-6 text-start px-0">
                            <a href="#permitModal" data-bs-toggle="modal" class="btn btn-sm btn-primary rounded-pill py-2 px-4">View More...</a>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- end of work permit -->

                <!-- Start Modal for Work permit services -->
                <div id="permitModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center mb-0">WORK PERMIT</h3>
                                <button type="button" class="close float-right" aria-label="Close" data-bs-dismiss="modal">
                                  <span aria-hidden="true">&#xD7;</span>
                                </button>
                            </div>
                            
                            <div class="modal-body p-0 bg-alt">
                                <div class="row p-2">
                                <div class="col-md-6 p-3" align="justify">
                                <img src="img/travel/workpermit-2.jpg" style="width: 100%; height: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                      
                            </div>
                            <div class="col-md-6">
                                <span>Are you looking to take your career to the next level by working abroad? Let us help you make it happen! Our expert team will guide you through the complex process of obtaining a work permit, ensuring you can focus on your new job and life abroad. Our services include;</span>
                                <ul class="mt-3">
                                <li class="mb-2"><b style="font-style: italic;">Work permit application assistance</b></li>
                                <li class="mb-2"><b style="font-style: italic;">Job search and placement support</b></li>
                                <li class="mb-2"><b style="font-style: italic;">Resume and cover letter optimization</b></li>
                                <li class="mb-2"><b style="font-style: italic;">Interview preparation and coaching</b></li>
                                <li class="mb-2"><b style="font-style: italic;">Visa application submission and tracking</b></li> 
                            </ul>
                            </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal" aria-hidden="true">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal for Work permit services -->

                <!-- start of settlement visa -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/travel/permanentvisa-2.jpg" alt="Image">
                                <div class="blog-icon">
                                    <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4 my-auto">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <!-- <p class="mb-3">Posted By: Royal Hamblin </p> -->
                            <a href="#workModal" class="h4">Settlement Visa</a><br>
                            <!-- <p class="my-3">.....................</p> -->
                            <div class="row rounded-bottom">
                            <div class="col-6 text-start px-0">
                            <a href="#workModal" data-bs-toggle="modal" class="btn btn-sm btn-primary rounded-pill py-2 px-4">View More...</a>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- end of settlement visa -->

                <!-- Start Modal for Work permit services -->
                <div id="workModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center mb-0">SETTLEMENT VISA</h3>
                                <button type="button" class="close float-right" aria-label="Close" data-bs-dismiss="modal">
                                  <span aria-hidden="true">&#xD7;</span>
                                </button>
                            </div>
                            
                            <div class="modal-body p-0 bg-alt">
                                <div class="row p-2">
                                <div class="col-md-6 p-3" align="justify">
                                <img src="img/travel/permanentvisa-2.jpg" style="width: 100%; height: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                      
                            </div>
                            <div class="col-md-6">
                                <span><h5>Are you moving abroad and looking for a smooth transition? Our settlement services are designed to help you every step of the way! Our expert team will assist with:</h5></span>
                                <ul class="mt-3">
                                <li class="mb-2"><h6 align="left" >Visa application and processing</h6></li>
                                <li class="mb-2"><h6 align="left" >Job search and placement support</h6></li>
                                <li class="mb-2"><h6 align="left" >Housing and accommodation assistance</h6></li>
                                <li class="mb-2"><h6 align="left" >School and university admissions</h6></li>
                                <li class="mb-2"><h6 align="left" >Healthcare and insurance guidance</h6></li> 
                            </ul>
                            </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal" aria-hidden="true">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal for Work permit services -->

                <!-- start of visit visa -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/travel/visitvisa-2.jpg" alt="Image">
                                <div class="blog-icon">
                                    <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4 my-auto">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <!-- <p class="mb-3">Posted By: Royal Hamblin </p> -->
                            <a href="#visitModal" data-bs-toggle="modal" class="h4">Visit Visa</a><br>
                           <div class="row rounded-bottom">
                            <div class="col-6 text-start px-0">
                            <a href="#visitModal" data-bs-toggle="modal" class="btn btn-sm btn-primary rounded-pill py-2 px-4">View More...</a>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- end of visit visa -->
                 <!-- Start Modal for visit visa services -->                      
                       
                <div id="visitModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center mb-0">VISIT VISA</h3>
                                <button type="button" class="close float-right" aria-label="Close" data-bs-dismiss="modal">
                                  <span aria-hidden="true">&#xD7;</span>
                                </button>
                            </div>
                            <div class="modal-body p-0 bg-alt">
                                <div class="row p-2">
                                <div class="col-md-6 p-3">
                                <img src="img/travel/visitvisa-2.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                <div class="text-center"><small class="text-capitalize">visit visa</small></div>
                                <div class="text-center mt-3"><h4 class="section-title mb-2">SERVICES</h4></div>
                                
                                <p>Are you planning a trip abroad and need a visit visa? Let us help you navigate the process!</p>                                
                                 <!-- <h4 class="text-uppercase p-2 mb-2">1. Church Tour</h4> -->
                                 <div class="row p-3">
                                 <div class="col-md-12">
                                   <img src="img/travel/visaapplication.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded"> 
                                 <li><p class="mb-3">Visa application and processing</p></li>
                                 </div>
                                 <div class="col-md-12 mb-3">
                                   <img src="img/travel/visadocument.png" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded"> 
                                 <li><p class="mb-3">Document preparation and submission</p></li>
                                 </div>
                                 
                                 </div>      
                            </div>
                            <div class="col-md-6">
                                 <div class="row p-3">
                                    <div class="col-md-12">
                                   <img src="img/travel/coach-1.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded"> 
                                 <li><p class="mb-3">Interview preparation and coaching</p></li>
                                 </div>
                                 <div class="col-md-12">
                                   <img src="img/travel/application.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded"> 
                                 <li><p class="mb-3">Fast-track processing options available</p></li>
                                 </div>
                                 <!-- <div class="col-md-12">
                                   <img src="img/travel/scenic.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded"> 
                                  <li><p class="mb-3">Scenic escapes to nature</p></li>
                                 </div>
                                 <div class="col-md-12">
                                   <img src="img/travel/beach.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded"> 
                                  <li><p>Relaxing beach getaways</p></li>
                                 </div> -->
                                 </div>
                            </div>
                            </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal" aria-hidden="true">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal for visit visa services --> 

                <!-- start of tours and holiday visa -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/travel/tourism-2.jpg" alt="Image">
                                <div class="blog-icon">
                                    <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4 my-auto">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <!-- <p class="mb-3">Posted By: Royal Hamblin </p> -->
                            <a href="#tourModal" data-bs-toggle="modal" class="h4">Organizing Tours for Churches and Holidays</a><br>
                           <div class="row rounded-bottom">
                            <div class="col-6 text-start px-0">
                            <a href="#tourModal" data-bs-toggle="modal" class="btn btn-sm btn-primary rounded-pill py-2 px-4">View More...</a>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- end of Tours and Holiday -->
                 <!-- Start Modal for visit visa services -->
                <div id="tourModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center mb-0">TOURS FOR CHURCHES AND HOLIDAYS</h3>
                                <button type="button" class="close float-right" aria-label="Close" data-bs-dismiss="modal">
                                  <span aria-hidden="true">&#xD7;</span>
                                </button>
                            </div>
                            <div class="modal-body p-0 bg-alt">
                                <div class="row p-2">
                                <div class="col-md-6 p-3">
                                <img src="img/travel/tourism-2.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                <small class="text-capitalize text-center">tours for churches and holidays</small>
                                <div class="text-center mt-3"><h4 class="section-title mb-2">SERVICES</h4></div>
                                
                                <p>Our organization specializes in creating customized tours for churches and holidaymakers, combining faith, culture, and fun. Our expert team will handle every detail, ensuring a stress-free and enriching journey.</p>
                                 <p style="font-style: italic;">Are you a church group or holidaymaker looking for a unique and meaningful travel experience? Look no further! At Bellas Prestige Travel Consult, We provide you with:</p>
                                 
                                 <h4 class="text-uppercase p-2 mb-2">1. Church Tour</h4>
                                 <div class="row p-3">
                                 <div class="col-md-12">
                                   <img src="img/travel/tourism-1.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded"> 
                                 <li><p class="mb-3">Pilgrimages to holy sites</p></li>
                                 </div>
                                 <div class="col-md-12 mb-3">
                                   <img src="img/travel/retreat.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded"> 
                                 <li><p class="mb-3">Spiritual retreats and conferences</p></li>
                                 </div>
                                 </div>      
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="col-md-12">
                                   <img src="img/travel/community.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded"> 
                                 <li>Community service projects</li>
                                 </div>
                              <h4 class="text-uppercase p-2 mt-5">2. Holiday Tours</h4>
                                 <div class="row p-3">
                                 <div class="col-md-12">
                                   <img src="img/travel/cultural-1.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded"> 
                                 <li><p class="mb-3">Cultural city breaks</p></li>
                                 </div>
                                 <div class="col-md-12">
                                   <img src="img/travel/scenic.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded"> 
                                  <li><p class="mb-3">Scenic escapes to nature</p></li>
                                 </div>
                                 <div class="col-md-12">
                                   <img src="img/travel/beach.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded"> 
                                  <li><p>Relaxing beach getaways</p></li>
                                 </div>
                                 </div>
                            </div>
                            </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal" aria-hidden="true">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal for visit visa services -->
                <!-- start of airbnb -->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/travel/shortstay-2.png" alt="Image">
                                <div class="blog-icon">
                                    <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4 my-auto">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <!-- <p class="mb-3">Posted By: Royal Hamblin </p> -->
                            <a href="#airModal" data-bs-toggle="modal" class="h4 mb-2">Air BnB (Short Stay)</a><br>
                            <div class="row rounded-bottom">
                            <div class="col-6 text-start px-0">
                            <a href="#airModal" data-bs-toggle="modal" class="btn btn-sm btn-primary rounded-pill py-2 px-4">View More...</a>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- end of airbnb -->
                <!-- Start Modal for visit visa services -->
                <div id="airModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center mb-0">AIR BNB (SHORT STAY)</h3>
                                <button type="button" class="close float-right" aria-label="Close" data-bs-dismiss="modal">
                                  <span aria-hidden="true">&#xD7;</span>
                                </button>
                            </div>
                            
                            <div class="modal-body p-0 bg-alt">
                                <div class="row p-2">
                                <div class="col-md-6 p-3">
                                <img src="img/travel/shortstay-2.jpeg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                <small class="text-capitalize text-center">airBnB (short stay)</small><br>
                                 <div class="text-center mt-3"><h4 class="section-title mb-2">SERVICES</h4></div>
                                 <span>Are you looking for a quick get-away or a short stay abroad? We've got you covered! Our short stay abroad services offer:</span>
                                 <div class="p-3">
                                 <img src="img/travel/activities.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                <li>Accommodation, flights, and activities included</li> 
                            </div>
                        </div>
                            <div class="col-md-6 mt-3">
                                <div class="p-3">
                                <img src="img/travel/shortstay-1.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                 <li>3-14 day trips to popular destinations</li>
                            </div>

                            <div class="p-3">
                            <img src="img/travel/guidance.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                            <li>Expert guidance and support</li>
                        </div>

                            <div class="p-3">
                            <img src="img/travel/itinerary.jpg" style="width: 100%; font-style: italic; " id="airlineImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                               <li>Flexible itineraries to suit your needs</li> 
                           </div>
                            </div>
                        
                            </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal" aria-hidden="true">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal for visit visa services -->


                  <!-- Packages start -->
          
          <!-- Packages end -->

    <!-- Testimonial End -->

            </div>
            </div>
        </div>
              <!-- End Blog -->

        <!-- Destination Start -->
        <div class="container-fluid destination py-2">
            <div class="container py-2">

                <div class="mx-auto text-center mb-2" style="max-width: 900px;">
                    <h5 class="section-title px-3">Destination</h5>
                    <h1 class="mb-0">Popular Destination</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">All</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">USA</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Canada</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 150px;">Europe</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 150px;">China</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-6">
                                <span class="text-dark" style="width: 150px;">Singapore</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-xl-8">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="img/destination-1.jpg" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                                    <h4 class="text-white mb-2 mt-3">New York City</h4>
                                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/destination-1.jpg" data-lightbox="destination-1"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="img/destination-2.jpg" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                                    <h4 class="text-white mb-2 mt-3">Las vegas</h4>
                                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/destination-2.jpg" data-lightbox="destination-2"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="img/destination-7.jpg" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                                    <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/destination-7.jpg" data-lightbox="destination-7"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="destination-img">
                                                <img class="img-fluid rounded w-100" src="img/destination-8.jpg" alt="">
                                                <div class="destination-overlay p-4">
                                                    <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                                    <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                                    <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="img/destination-8.jpg" data-lightbox="destination-8"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="destination-img h-100">
                                        <img class="img-fluid rounded w-100 h-100" src="img/destination-9.jpg" style="object-fit: cover; min-height: 300px;" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-9.jpg" data-lightbox="destination-4"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-4.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-4.jpg" data-lightbox="destination-4"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-5.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-5.jpg" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-6.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-6.jpg" data-lightbox="destination-6"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-5.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-5.jpg" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-6.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-6.jpg" data-lightbox="destination-6"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-5.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-5.jpg" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-6.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-6.jpg" data-lightbox="destination-6"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-5.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-5.jpg" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-6.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-6.jpg" data-lightbox="destination-6"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-5.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-5.jpg" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-6.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-6.jpg" data-lightbox="destination-6"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-5.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-5.jpg" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <img class="img-fluid rounded w-100" src="img/destination-6.jpg" alt="">
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="img/destination-6.jpg" data-lightbox="destination-6"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid blog py-3">
        <div class="mx-auto text-center p-3">
                    <h3 class="section-title px-3">Our Vision and Mission</h3>
                    <!-- <h1 class="mb-4">About Our Home Care</h1> -->
                    <div class="row">
                    <div class="col-md-5" align="justify">
                        <h3 style="text-decoration: underline; font-weight: bolder;">Vision</h3>
                        <p class="mb-0">"To be the leading provider of home care services, delivering exceptional domestic help, nanny, and caregiving solutions that enhance the quality of life for families and individuals, fostering a supportive and nurturing environment where every client feels valued and  cared for."
                    </p>
                    </div>
                    <div class="col-md-7" align="justify">
                        <h3 style="text-decoration: underline; font-weight: bolder;">Mission</h3>
                        <p class="mb-0">
                            At Bellas Prestige Homecare, our mission is to offer reliable, compassionate, and professional home care services that cater for the unique needs of our clients. We are dedicated to:
                            <ul>
                            <li>providing highly trained and trustworthy domestic Assistance who help with household tasks to ensure a clean, orderly and comfortable living environment.
                            </li>
                            <li>offering experienced and nurturing nannies who support the developmental and emotional well-being of children in a safe and stimulating setting.
                            </li>
                            <li>delivering skilled and empathetic caregiving services that promote the health, independence, and dignity of the elderly and individuals with special needs. With our clients, our aim is to establish enduring relationships founded on mutual respect, trust, and a strong dedication to providing exceptional home care.</li></ul>
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        <!-- Blog End -->

        <!-- Subscribe Start -->
        <div class="container-fluid subscribe-travel py-5">
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">Subscribe</h5>
                    <h1 class="text-white mb-4">Our Newsletter</h1>
                    <p class="text-white mb-5">
                        Kindly subscribe to our newsletter, so that we bring you the latest updates on travels and more....  
                    </p>
                    <div class="position-relative mx-auto">
                        <form id="newsletter_submission">
                            <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
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