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
        <div class="container-fluid bg-homecare">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Our Home Care</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php" style="color:#fff">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item active text-white">Home Care</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <!-- start of why choose us -->
                <div class="mx-auto text-center mb-5">
                    <h1 class="mb-4">Why choose us</h1>
                    <div class="row">
                    <div class="col-md-6" align="justify">
                        <ul>
                        <li>
                        At Bellas Prestige Homecare, we believe in empowering individuals to age gracefully in their homes, with dignity and independence.
                    </li> 
                    <li>
                        Our passion is delivering top-notch care that improves lives - let us make a difference in yours.
                    </li>
                    <li>
                        Experience the difference with our compassionate and highly trained caregivers, dedicated to providing exceptional care in the comfort of your home.
                    </li>
                    <li>
                        Trust our team to deliver peronalized care with dignity, respected, and kindness, exceeding your expectations.
                    </li>
                    <li>
                        Our commitment to quality care and customer satisfaction sets us apart - let us be your partner in healthcare.
                    </li>
                    <li>
                        With our comprehensive services and flexible scheduling, we have got you covered - choose us for peace of mind.
                    </li>
                </ul>
                </div>
               <div class="col-lg-6 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="img/homecare/homecare.png" alt="Image">
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
            <h3 class="section-title text-center mb-3">&nbsp Our Home Care Services &nbsp</h3>
        </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/homecare/personalcare-2.jpg" alt="Image">
                                <div class="blog-icon">
                                    <a href="#caregiverModal" data-bs-toggle="modal" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <a href="#" class="h4 mb-3">Care Giver Service</a>

                            
                            <div class="row bg-primary rounded-bottom mt-5">
                            <div class="col-6 text-start px-0">
                            <a href="#caregiverModal" data-bs-toggle="modal" class="btn btn-sm btn-primary rounded py-2 px-4">View More...</a>
                        </div>
                        <div class="col-6 text-end px-0">
                            <a href="contact.php" class="btn btn-sm btn-primary rounded py-2 px-4">Contact Us</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Start Modal for Caregiver services -->
                <div id="caregiverModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center mb-0">CARE GIVER SERVICES</h3>
                                <button type="button" class="close float-right" aria-label="Close" data-bs-dismiss="modal">
                                  <span aria-hidden="true">&#xD7;</span>
                                </button>
                            </div>
                            
                            <div class="modal-body p-0 bg-alt">
                                <div class="row p-2">
                                    <div class="col-md-5" style="font-size: 14px;">
                                        <img src="img/homecare/personalcare-2.jpg" style="width: 100%; " id="careImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                        <ul>
                                            <li class="mb-2"><b >Companionship Support:</b><br>Social Interaction and Emotional Support</li>
                                            <li class="mb-2"><b >Specialized Care Support:</b><br>Guidance for specific medical conditions, such as dementia or diabetes</li>
                                            <li class="mb-2"><b >Respite Care Support:</b><br>Temporary relief for family caregivers</li>
                                        </ul>
                                    </div>
                                <div class="text-start col-md-7" style="font-size: 14px;">
                            <ul>
                                <li class="mb-2"><b >Personal Care Support:</b> <br>Assistance with bathing, dressing, grooming and toileting</li>
                                <li class="mb-2"><b >Medical Management Support:</b> <br> Reminders and assistance with taking medications</li>
                            
                                <li class="mb-2"><b >Preparing Meal Support:</b><br>
                                    Cooking and Serving Meals
                                    </li>
                                <li class="mb-2"><b >Light Housekeeping Support:</b><br>Laundry, cleaning and organization</li>
                                <li class="mb-2"><b >Transportation Support:</b><br>Driving to appointments and errands</li>
                                <li class="mb-2"><b >Mobility Support:</b><br>Help with walking, transfering and using mobility aids</li>
                                <li class="mb-2"><b >Incontinence Care Support:</b><br>Management of incontinence supplies and hygiene</li>
                                
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
                <!-- End Modal for Caregiver services -->

                <!-- start of Nanny care -->
        <div class="col-lg-4 col-md-6">
            <div class="blog-item">
                <div class="blog-img">
                    <div class="blog-img-inner">
                        <img class="img-fluid w-100 rounded-top" src="img/homecare/nanny.jpg" alt="Image">
                        <div class="blog-icon">
                            <a href="#nannyModal"  data-bs-toggle="modal" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-content border border-top-0 rounded-bottom p-4">
                    <!-- <p class="mb-3">Posted By: Royal Hamblin </p> -->
                    <a href="#" class="h4">Nanny Care Service</a><br>
                    <div class="row bg-primary rounded-bottom mt-5">
                            <div class="col-6 text-start px-0">
                            <a href="#nannyModal" data-bs-toggle="modal" class="btn btn-sm btn-primary rounded py-2 px-4">View More...</a>
                        </div>
                        <div class="col-6 text-end px-0">
                            <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4">Contact Us</a>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- End of Nanny -->

        <!-- Start Modal for Nanny services -->
                <div id="nannyModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center mb-0">NANNY SERVICES</h3>
                                <button type="button" class="close float-right" aria-label="Close" data-bs-dismiss="modal">
                                  <span aria-hidden="true">&#xD7;</span>
                                </button>
                            </div>
                            
                            <div class="modal-body p-0 bg-alt">
                                <div class="row p-2">
                                    <div class="col-md-5" style="font-size: 14px;">
                                        <img src="img/homecare/nanny.jpg" style="width: 100%; " id="nannyImage" class="loaded-image mx-auto img-fluid mb-2 rounded">
                                        <ul>
                                            <li class="mb-2"><b >Child Care Support:</b><br>Caring for children's physical, emotional, and developmental needs</li>
                                            <li class="mb-2"><b >Homework Support:</b><br>Assisting children with their school work (Homework) and educational activities after school.</li>
                                            
                                        </ul>
                                    </div>
                                <div class="text-start col-md-7" style="font-size: 14px;">
                            <ul>
                                <li class="mb-2"><b >Meal Preparation Support:</b><br>Preparing healthy meals and snacks for your children</li>
                                <li class="mb-2"><b >Personal Care Support:</b> <br>Assistance with bathing, dressing, grooming and toileting</li>
                                <li class="mb-2"><b >Safety and Security Support:</b> <br> Ensuring children's safety and well-being</li>
                                <li class="mb-2"><b >Communication Support:</b><br>Keeping parents informed about daily activities and issues</li>
                                <li class="mb-2"><b >Light Housekeeping Support:</b><br>Maintaining a clean and organized home environment</li>
                                <li class="mb-2"><b >Transportation Support:</b><br>Driving children to activities and appointments</li>
                                <li class="mb-2"><b >Engaing Activities Support:</b><br>Planning and participating in fun activities with children</li>
                                <li class="mb-2"><b >Specialized Care Support:</b><br>Guiding children with special needs or medical conditions</li>
                                
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
                <!-- End Modal for Nanny services -->
        <div class="col-lg-4 col-md-6">
            <div class="blog-item">
                <div class="blog-img">
                    <div class="blog-img-inner">
                        <img class="img-fluid w-100 rounded-top" src="img/homecare/laundry.jpg" alt="Image">
                        <div class="blog-icon">
                            <a href="contact.php" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-content border border-top-0 rounded-bottom p-4">
                    <!-- <p class="mb-3">Posted By: Royal Hamblin </p> -->
                    <a href="#" class="h4"  style="font-size: 21px;">Domestic/Commercial Cleaning</a><br>
                    We provide;
                            <ul>
                                <li style="font-size: 14px;">Child Care Support</li>
                                <li style="font-size: 14px;">Child Medical Management Support</li>
                                <li style="font-size: 14px;">House Cleaning Support</li>
                            </ul>
                    <div class="row bg-primary rounded-bottom">
                            <div class="col-6 text-start px-0">
                            <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4">View More...</a>
                        </div>
                        <div class="col-6 text-end px-0">
                            <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4">Contact Us</a>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="blog-item">
                <div class="blog-img">
                    <div class="blog-img-inner">
                        <img class="img-fluid w-100 rounded-top" src="img/homecare/cleaning.jpg" alt="Image">
                        <div class="blog-icon">
                            <a href="contact.php" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-content border border-top-0 rounded-bottom p-4">
                    <!-- <p class="mb-3">Posted By: Royal Hamblin </p> -->
                    <a href="#" class="h4">Domestic / House Help</a><br>
                    We provide;
                            <ul>
                                <li style="font-size: 14px;">Child Care Support</li>
                                <li style="font-size: 14px;">Child Medical Management Support</li>
                                <li style="font-size: 14px;">House Cleaning Support</li>
                            </ul>
                    <div class="row bg-primary rounded-bottom">
                            <div class="col-6 text-start px-0">
                            <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4">View More...</a>
                        </div>
                        <div class="col-6 text-end px-0">
                            <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4">Contact Us</a>
                        </div>
                        </div>
                </div>
            </div>
        </div> <div class="col-lg-4 col-md-6">
            <div class="blog-item">
                <div class="blog-img">
                    <div class="blog-img-inner">
                        <img class="img-fluid w-100 rounded-top" src="img/homecare/cooking.jpg" alt="Image">
                        <div class="blog-icon">
                            <a href="contact.php" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-content border border-top-0 rounded-bottom p-4">
                    <a href="#" class="h4">Cook / Chef</a><br>
                    We provide;
                            <ul>
                                <li style="font-size: 14px;">Food Preparation Support</li>
                                <li style="font-size: 14px;">Child Medical Management Support</li>
                                <li style="font-size: 14px;">House Cleaning Support</li>
                            </ul>
                    <div class="row bg-primary rounded-bottom">
                            <div class="col-6 text-start px-0">
                            <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4">View More...</a>
                        </div>
                        <div class="col-6 text-end px-0">
                            <a href="contact.php" class="btn btn-sm btn-primary rounded-pill py-2 px-4">Contact Us</a>
                        </div>
                        </div>
                </div>
            </div>
        </div> 
        
    <div class="mx-auto text-center">
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
    </div>
</div>
        <!-- Blog End -->

<!-- Subscribe Start -->
 <div class="container-fluid subscribe-homecare py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center">
            <h5 class="subscribe-title px-3">FAQ and Answers</h5>
            <div class="row">
                <div class="col-md-4" align="justify" style="color: white;">
                    <b style="color: goldenrod;">Q: What is Homecare?</b>
                    <li class="mb-3">A: Homecare is a medical or non-medical care provided in the comfort of your own home.</li>
                    <b style="color: goldenrod;">Q: What services do you offer?</b>    
                    <li class="mb-3">A: We offer personal care, meal preparation, light housekeeping, medication and more.</li>
                    <b style="color: goldenrod;">Q: Who will provide my care?</b>
                    <li class="mb-3">A: Our trained and compassionate caregivers will provide your care</li>
                </div>
                <div class="col-md-4" align="justify" style="color: white;">
                    <b style="color: goldenrod;">Q: How do I get started?</b>
                    <li class="mb-3">A: Contact us to schedule a consultation and assessment.</li>
                    <b style="color: goldenrod;">Q: How much does homecare cost?</b>
                    <li class="mb-3">A: Costs vary depending on services needed and insurance coverage.</li>
                    <b style="color: goldenrod;">Q: Do you accept insurance?</b>
                    <li class="mb-3">A: Yes, we accept various insurance plans and Medicare.</li>
                </div>
                <div class="col-md-4" align="justify" style="color: white;">
                    <b style="color: goldenrod;">Q: What if I need care outside regular business hours?</b>
                    <li class="mb-3">A: We offer 24/7 care, including weekends and holidays.</li>
                    <b style="color: goldenrod;">Q: How do I know if homecare is right for me or my loved one?</b>
                    <li class="mb-3">A: Contact us for a free consultation to discuss your needs and determine if homecare is the right fit.</li>
                </div>
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
<!-- JavaScript Libraries -->

</body>

</html>