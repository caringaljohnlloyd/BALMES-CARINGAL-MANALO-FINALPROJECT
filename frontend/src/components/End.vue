<template>
          <!-- Footer Start -->
          <div>
          <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html"><h1 class="text-white text-uppercase mb-3">Hotelier</h1></a>
                            <p class="text-white mb-0">
								Download <a class="text-dark fw-medium" href="https://htmlcodex.com/hotel-html-template-pro">Hotelier – Premium Version</a>, build a professional website for your hotel business and grab the attention of new visitors upon your site’s launch.
							</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                                <a class="btn btn-link" href="">Food & Restaurant</a>
                                <a class="btn btn-link" href="">Spa & Fitness</a>
                                <a class="btn btn-link" href="">Sports & Gaming</a>
                                <a class="btn btn-link" href="">Event & Party</a>
                                <a class="btn btn-link" href="">GYM & Yoga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
</template>
<style>
 @import '@/assets/css/bootstrap.min.css';
 @import '@/assets/css/style.css';


 </style>
  


<script>
export default {
  mounted() {

    const jQueryScript = document.createElement('script');
    jQueryScript.src = 'https://code.jquery.com/jquery-3.4.1.min.js';
    jQueryScript.onload = () => {

      this.loadWaypointsScript();
    };
    document.head.appendChild(jQueryScript);
  },
  methods: {
    loadEasingScript() {

      const easingScript = document.createElement('script');
      easingScript.src = 'lib/easing/easing.min.js';
      easingScript.onload = () => {

        this.loadWaypointsScript();
      };
      document.head.appendChild(easingScript);
    },
    loadMomentScript() {

      const momentScript = document.createElement('script');
      momentScript.src = 'lib/tempusdominus/js/moment.min.js';
      momentScript.onload = () => {

        this.loadMomentTimezoneScript();
      };
      document.head.appendChild(momentScript);
    },
    loadMomentTimezoneScript() {

      const momentTimezoneScript = document.createElement('script');
      momentTimezoneScript.src = 'lib/tempusdominus/js/moment-timezone.min.js';
      momentTimezoneScript.onload = () => {

        this.loadTempusDominusScript();
      };
      document.head.appendChild(momentTimezoneScript);
    },
    loadTempusDominusScript() {

      const tempusDominusScript = document.createElement('script');
      tempusDominusScript.src = 'lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js';
      tempusDominusScript.onload = () => {

        this.loadWaypointsScript();
      };
      document.head.appendChild(tempusDominusScript);
    },
    loadMainScript() {

      const mainScript = document.createElement('script');
      mainScript.src = 'js/main.js';
      document.head.appendChild(mainScript);


      this.loadWaypointsScript();
    },
    loadWaypointsScript() {

      const waypointsScript = document.createElement('script');
      waypointsScript.src = 'lib/waypoints/waypoints.min.js';
      waypointsScript.onload = () => {

        this.loadCounterUpScript();
      };
      document.head.appendChild(waypointsScript);
    },
    loadCounterUpScript() {
 
      const counterUpScript = document.createElement('script');
      counterUpScript.src = 'lib/counterup/counterup.min.js';
      counterUpScript.onload = () => {
  
        $('.counter').counterUp({
          delay: 10,
          time: 1000
        });
      };
      document.head.appendChild(counterUpScript);
    
  
      const bootstrapScript = document.createElement('script');
      bootstrapScript.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js';
      document.head.appendChild(bootstrapScript);

   
      const wowScript = document.createElement('script');
      wowScript.src = 'lib/wow/wow.min.js';
      wowScript.onload = () => {

        new WOW().init();
      };
      document.head.appendChild(wowScript);


      const owlCarouselScript = document.createElement('script');
      owlCarouselScript.src = 'lib/owlcarousel/owl.carousel.min.js';
      owlCarouselScript.onload = () => {
 
        this.initializeOwlCarousel();
      };
      document.head.appendChild(owlCarouselScript);
    },
    initializeOwlCarousel() {

      $('.owl-carousel').owlCarousel({

      });
    }
  }
}
</script>

  
  

