<template>
      <Top/>
 <div class="container-xxl bg-white p-0">
       
       <!--     <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>--> 
        <!-- Spinner End -->


        
<!-- Header Start -->
<div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="/user" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Eduardo's</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">Contact Number: (043) 288-7153 </p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                            <button type="button" class="btn btn-link btn-floating mx-1" >
                                <div class="icon-group">
                                <font-awesome-icon :icon ="['fab','google']"/>
                                <font-awesome-icon :icon ="['fab','facebook']"/>
                                <font-awesome-icon :icon ="['fab','twitter']"/>
                            </div>
                        </button>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark  p-3 p-lg-0 ">
                        <a href="/user" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Eduardo's</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                         </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                              <a href="/user" class="nav-item nav-link active">Home</a>
                              <a href="/about" class="nav-item nav-link">About</a>
                              <a href="/service" class="nav-item nav-link">Services</a>
                              <a href="/room" class="nav-item nav-link">Rooms</a>
                              <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="#dropdownMenu">Pages</a>
                                  <div class="dropdown-menu rounded-0 m-0" id="dropdownMenu">
                                      <a href="/booking" class="dropdown-item">Booking</a>
                                      <a href="/team" class="dropdown-item">Our Team</a>
                                      <a href="/testimonial" class="dropdown-item">Testimonial</a>
                                  </div>
                              </div>
                                <a href="/contact" class="nav-item nav-link">Contact</a>
                          
                            
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
        <!-- Header End -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <router-view/>
  </template>
  
  <style>
 @import '@/assets/css/bootstrap.min.css';
 @import '@/assets/css/style.css';


 .icon-group {
  display: flex;
  gap: 10px; /* Adjust the gap value to control the space between icons */
}

  </style>
  
<script>
import Top from '@/components/Top.vue';
  import{FontAwesomeIcon} from '@fortawesome/vue-fontawesome';
  export default{
    components:{
        Top, FontAwesomeIcon
    }
  }
</script>
