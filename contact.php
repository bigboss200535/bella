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
                <h3 class="text-white display-3 mb-4">Contact Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php" style="color: #fff">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item active text-white">Contact</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Contact Us</h5>
                    <h1 class="mb-0">Contact For Any Query</h1>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-4">
                        <div class="bg-white rounded p-4">
                            <div class="text-center mb-4">
                                <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                                <h4 class="text-primary"><Address>Kumasi Branch</Address></h4>
                                <p class="mb-0" style="color:#000000">Bantama market, opposite the Revoli cinema, Ghana</p>
                                <p class="mb-0"><b>Contact:</b> <br>
                                   <a href="https://wa.me/233530525791"><i class="bi bi-whatsapp me-2" style="font-size: 15px;"></i>(+233) 53 052 5791</a>  <br> 
                                    <i class="fa fa-phone me-2" style="font-size: 15px;"></i>(+233) 27 371 3324 <br>
                                    <i class="fa fa-phone me-2" style="font-size: 15px;"></i>(+233) 53 882 3861</p>
                            </div>
                            <div class="text-center mb-4">
                                <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                                <h4 class="text-primary"><Address>Accra Branch</Address></h4>
                                <p class="mb-0" style="color:#000000">Labadi Polyclinic Bus stop, opposite Marwako, Ghana</p>
                                <p class="mb-0"><b>Contact: </b><br>
                                    <a href="https://wa.me/233202365461"><i class="bi bi-whatsapp me-2" style="font-size: 15px;"></i>(+233) 20 236 5461</a> <br> 
                                    <i class="fa fa-phone me-2" style="font-size: 15px;"></i>(+233) 53 882 3863 <br>
                                    <i class="fa fa-phone me-2" style="font-size: 15px;"></i>(+233) 27 369 7441</p>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">Email</h4>
                                <a href="mailto:info@bellasprestige.com"><p class="mb-0">info@bellasprestige.com</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h3 class="mb-2">Make more enquiries here</h3>
                        <p class="mb-4">Kindly leave us a message and we will get back to you in no time. You can also reach us on any of our contact numbers.
                        <form method="post" id="contact_form_submission">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name" name="name" maxlength="250" placeholder="Your Name" autocomplete="off">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="email" maxlength="50" name="email" placeholder="Your Email" autocomplete="off">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="telephone" maxlength="20" name="telephone" placeholder="Your Telephone" autocomplete="off">
                                        <label for="name">Your Telephone</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select border-0" id="service" name="service">
                                            <option selected disabled>-select-</option>
                                            <option value="Domestic/House Help">Domestic/House Help</option>
                                            <option value="Domestic/Commercial Cleaner">Domestic/Commercial Cleaner</option>
                                            <option value="Caregiver">Care Giver</option>
                                            <option value="Nanny Care">Nanny Care</option>
                                            <option value="Cook/Chef">Cook/Chef</option>
                                            <option value="IELTS Tuition">IELTS Tuition</option>
                                            <option value="OET Tuition">OET Tuition</option>
                                            <option value="GMAT Tuition">GMAT Tuition</option>
                                            <option value="GRE Tuition">GRE Tuition</option>
                                            <option value="LIFE SKILLS Tuition">LIFE SKILLS Tuition</option>
                                            <option value="PTE Tuition">PTE Tuition</option>
                                            <option value="Document Processing">Document Processing</option>
                                            <option value="Hotel Reservations">Hotel Reservations</option>
                                            <option value="Airline Ticketing">Airline Ticketing</option>
                                            <option value="Study Abroad">Study Abroad</option>
                                            <option value="Holiday Visa">Holiday Visa</option>
                                            <option value="Work Permit">Work Permit</option>
                                            <option value="Settlement Visa">Settlement Visa</option>
                                            <option value="Visit Visa">Visit Visa</option>
                                            <option value="AirBnB">AirBnB (Short Stay)</option>
                                            <option value="Property Sale">Property Sale</option>
                                            <option value="House Construction">House Construction</option>
                                            <option value="Property Letting">Property Letting</option>
                                            <option value="Property Management">Property Management</option>
                                            <option value="Lands">Lands</option>
                                            <option value="Rent Loan">Rent Loan</option>
                                        </select>
                                        <label for="subject">Select Service</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" name="message" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-gold w-100 py-3" type="submit">Submit</button>
                                </div>
                                <div class="col-12">
                                    <div id="form_message" class="mt-3"></div>
                                 </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
                        <div class="rounded">
                            <div style="text-decoration:none; overflow:hidden;max-width:100%;width:1280px;height:600px;"><div id="canvas-for-googlemap" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=bellas+prestige&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="embed-ded-maphtml" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="authorize-map-data">premium bootstrap themes</a><style>#canvas-for-googlemap img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style></div>
                           <!--  <iframe class="rounded w-100" style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Subscribe Start -->
         <?php include('include/news_letter.php');?>
        <!-- Subscribe End -->
        <?php include('include/footer.php');?>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <?php include('include/copyright.php');?>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <?php include('include/back_to_top.php');?>  

        <?php include('include/script.php');?>  
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#contact_form_submission").on('submit', function(event){
                        event.preventDefault();

                        var formData = {
                            name: $("#name").val(),
                            email: $("#email").val(),
                            service: $("#service").val(),
                            message: $("#message").val(),
                            telephone: $("#telephone").val()
                            };

                        $.ajax({
                            type: "POST",
                            url: "action/contact_submission.php",  
                            data: formData,
                            dataType: "json",
                            encode: true,
                            success: function(response) {
                                // Handle success
                                $("#form_message").html('<div class="alert alert-success">' + response.message + '</div>');
                                if(response.status === 'success') {
                                    $("#contact_form_submission")[0].reset();  // Reset form fields
                                }
                                else if (response.status=== 'error'){
                                    $("#form_message").html('<div class="alert alert-danger">' + response.message + '</div>');
                                }
                            },
                            error: function(xhr, status, error) {
                                // Handle error
                                $("#form_message").html('<div class="alert alert-danger">An error occurred. Please try again.' + response.message + '</div>');
                                 $("#contact_form_submission")[0].reset();
                            }
                        });
                    });
                });
            </script>


    </body>

</html>