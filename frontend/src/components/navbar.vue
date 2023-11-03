<template>
<!-- Header Start -->
<div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
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
                                <p class="mb-0">+012 345 6789</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <button type="button" class="btn btn-link btn-floating mx-1" >
                                <div class="icon-group">
                                <font-awesome-icon :icon ="['fab','google']"/>
                                <font-awesome-icon :icon ="['fab','facebook']"/>
                                <font-awesome-icon :icon ="['fab','twitter']"/>
        
                            </div>
                            </button>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="/user" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                              <a href="/user" class="nav-item nav-link active">Home</a>
                              <a href="/about" class="nav-item nav-link">About</a>
                              <a href="/service" class="nav-item nav-link">Services</a>
                              <a href="/table" class="nav-item nav-link">Rooms</a>
                              <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="#dropdownMenu">Pages</a>
                                  <div class="dropdown-menu rounded-0 m-0" id="dropdownMenu">
                                      <a href="booking.html" class="dropdown-item">Booking</a>
                                      <a href="team.html" class="dropdown-item">Our Team</a>
                                      <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                  </div>
                              </div>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->
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
  import{FontAwesomeIcon} from '@fortawesome/vue-fontawesome';
  export default{
    components:{
        FontAwesomeIcon
    }
  }
</script>
 
 