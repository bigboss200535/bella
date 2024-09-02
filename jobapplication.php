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
         <div class="container-fluid bg-about">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Apply for a job here</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item active text-white">Job Seekers</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Blog Start -->
        <!-- Tour Booking Start -->
        <div class="container-fluid booking py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h5 class="section-booking-title pe-3" style="color:#000000">Apply online</h5>
                        <h1 class="text-black mb-4">Seeking for a job?</h1>
                        <p class="text-black" style="color:#000000">At Bellas Prestige Limited, we offer any individual seeking to apply for a job in our various job offers. These offers include:
                        </p>
                        <ul>
                            <li>
                                <p class="text-black mb-1" style="color:#000000">Nanny Care</p>
                            <li>
                                 <p class="text-black mb-1" style="color:#000000">Cook / Chef</p>
                            </li>
                            <li>
                                <p class="text-black mb-1" style="color:#000000">Domestic / Commercial Cleaner</p>
                            </li>
                            <li>
                                <p class="text-black mb-1" style="color:#000000">Domestic / House Help</p>
                            </li> 
                            <li>
                                <p class="text-black mb-1" style="color:#000000">Care Giver</p>
                            </li>
                        </ul>
                        <!-- <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a> -->
                    </div>
                    <div class="col-lg-6">
                        <h1 class="text-black mb-3 text-uppercase" style="color:#000000">Apply here</h1>
                        <p class="text-black mb-4" style="color:#000000">After filling ALL the required fields, click or tab on the submit button and our able team will contact you to submit the necessary requirements for recruitment.</p>
                        <form method="post" id="job_form"> 
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-white border-0" id="s_name" name="s_name" placeholder="Your Name">
                                        <label for="s_name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-white border-0" id="s_email" name="s_email" placeholder="Your Email">
                                        <label for="s_email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-white border-0" id="s_contact" name="s_contact" placeholder="Your Email">
                                        <label for="s_contact">Your Telephone</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="job_type" name="job_type">
                                            <option selected disabled>-select-</option>
                                            <option value="Nanny Care">Nanny Care</option>
                                            <option value="Cook/Chef">Cook/Chef</option>
                                            <option value="Domestic/Commercial Cleaner">Domestic/Commercial Cleaner</option>
                                            <option value="Domestic/House Help">Domestic/House Help</option>
                                            <option value="Caregiver">Caregiver</option>
                                        </select>
                                        <label for="select1">Job Type</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="region" name="region">
                                            <option selected disabled>-select-</option>
                                            <option value="Ahafo">Ahafo</option>
                                            <option value="Ashanti">Ashanti</option>
                                            <option value="Bono East">Bono East</option>
                                            <option value="Brong Ahafo">Brong Ahafo</option>
                                            <option value="Central">Central</option>
                                            <option value="Eastern">Eastern</option>
                                            <option value="Greater Accra">Greater Accra</option>
                                            <option value="North East">North East</option>
                                            <option value="Northen">Northen</option>
                                            <option value="Oti">Oti</option>
                                            <option value="Savannah">Savannah</option>
                                            <option value="Upper East">Upper East</option>
                                            <option value="Upper West">Upper West</option>
                                            <option value="Volta">Volta</option>
                                            <option value="Western">Western</option>  
                                            <option value="Western North">Western North</option>  
                                        </select>
                                        <label for="region">Region</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="religion" name="religion">
                                            <option selected disabled>-Select-</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Traditional">Traditional</option>
                                        </select>
                                        <label for="religion">Religion</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-white border-0" id="remarks" name="remarks" style="height: 100px"></textarea>
                                        <label for="message">Write something short about yourself</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary text-white w-100 py-3" type="submit">Submit</button>
                                </div>
                                <div class="col-12">
                                    <div id="form_message" class="mt-3"></div>
                                 </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tour Booking End -->
        <!-- Subscribe Start -->
        <div class="container-fluid subscribe-estate py-5">
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#job_form").on('submit', function(event){
                        event.preventDefault();

                        var formData = {
                                s_name: $("#s_name").val(),
                                s_email: $("#s_email").val(),
                                s_contact: $("#s_contact").val(),
                                job_type: $("#job_type").val(),
                                region: $("#region").val(),
                                religion: $("#religion").val(),
                                remarks: $("#remarks").val(),
                                // remarks: $("#remarks").val()
                            };

                        $.ajax({
                            type: "POST",
                            url: "action/job_application.php",  
                            data: formData,
                            dataType: "json",
                            encode: true,
                            success: function(response) {
                                // Handle success
                                $("#form_message").html('<div class="alert alert-success">' + response.message + '</div>');
                                if(response.status === 'success') {
                                    $("#job_form")[0].reset();  // Reset form fields
                                }
                                else if (response.status=== 'error'){
                                    $("#form_message").html('<div class="alert alert-danger">' + response.message + '</div>');
                                }
                            },
                            error: function(xhr, status, error) {
                                // Handle error
                                $("#form_message").html('<div class="alert alert-danger">An error occurred. Please try again.</div>');
                            }
                        });
                    });
                });
            </script>
    </body>

</html>