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
         <div class="container-fluid bg-tuition">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Register Here</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php" style="color: #fff">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item active text-white">Register</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Register</h5>
                    <h1 class="mb-0">Contact For Any Query</h1>
                </div>
                <div class="row g-5 align-items-center">
                   
                    <div class="col-lg-8">
                        <h3 class="mb-2">Send us a message</h3>
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
                                        <input type="text" class="form-control border-0" id="subject" maxlength="150" name="subject" placeholder="Your Email" autocomplete="off">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" name="message" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-gold w-100 py-3" type="submit">Send Message</button>
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
        <!-- Contact End -->

        <!-- Subscribe Start -->
         <div class="container-fluid subscribe-tuition py-5">
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
                            subject: $("#subject").val(),
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