       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="js/main.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <!-- <script src="js/active.js"></script> -->
        <script type="text/javascript">
               document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link');
            const dropdownItems = document.querySelectorAll('.dropdown-item');

            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    navLinks.forEach(nav => nav.classList.remove('active'));
                    link.classList.add('active');
                });
            });

            dropdownItems.forEach(item => {
                item.addEventListener('click', function () {
                    navLinks.forEach(nav => nav.classList.remove('active'));
                    dropdownItems.forEach(drop => drop.classList.remove('active'));
                    item.classList.add('active');
                    item.closest('.dropdown').querySelector('.nav-link').classList.add('active');
                });
            });
        });
               // Start of Property Service Script
        $('#galleryModal').on('show.bs.modal', function (e) {
       $('#galleryImage').attr("src",$(e.relatedTarget).data("large-src"));
    }); 
        $('#galleryModals').on('show.bs.modal', function (e) {
       $('#galleryImages').attr("src",$(e.relatedTarget).data("large-src"));
    }); 
        $('#galleryModale').on('show.bs.modal', function (e) {
       $('#galleryImagee').attr("src",$(e.relatedTarget).data("large-src"));
    });
       // End of Property Service Script

        // Start of Homecare Service SCRIPT
        $('#caregiverModal').on('show.bs.modal', function (e) {
       $('#careImage').attr("src",$(e.relatedTarget).data("large-src"));
    }); 
        $('#nannyModal').on('show.bs.modal', function (e) {
       $('#nannyImage').attr("src",$(e.relatedTarget).data("large-src"));
    });
        $('#domesticModal').on('show.bs.modal', function (e) {
       $('#domesticImage').attr("src",$(e.relatedTarget).data("large-src"));
    });
       $('#househelpModal').on('show.bs.modal', function (e) {
       $('#domesticImage').attr("src",$(e.relatedTarget).data("large-src"));
    });
       $('#cookModal').on('show.bs.modal', function (e) {
       $('#domesticImage').attr("src",$(e.relatedTarget).data("large-src"));
    });
       // End of Homecare Service

       // Start of Travel Service SCRIPT
        $('#documentModal').on('show.bs.modal', function (e) {
       $('#documentImage').attr("src",$(e.relatedTarget).data("large-src"));
    }); 
        $('#hotelModal').on('show.bs.modal', function (e) {
       $('#hotelImage').attr("src",$(e.relatedTarget).data("large-src"));
    });
        $('#airlineModal').on('show.bs.modal', function (e) {
       $('#airlineImage').attr("src",$(e.relatedTarget).data("large-src"));
    });
       $('#holidayModal').on('show.bs.modal', function (e) {
       $('#domesticImage').attr("src",$(e.relatedTarget).data("large-src"));
    });
       $('#permitModal').on('show.bs.modal', function (e) {
       $('#domesticImage').attr("src",$(e.relatedTarget).data("large-src"));
    });
       $('#workModal').on('show.bs.modal', function (e) {
       $('#domesticImage').attr("src",$(e.relatedTarget).data("large-src"));
    });
       $('#airModal').on('show.bs.modal', function (e) {
       $('#domesticImage').attr("src",$(e.relatedTarget).data("large-src"));
    });
       $('#tourModal').on('show.bs.modal', function (e) {
       $('#domesticImage').attr("src",$(e.relatedTarget).data("large-src"));
    });
       // End of Travel Service

       
       
        </script>
 