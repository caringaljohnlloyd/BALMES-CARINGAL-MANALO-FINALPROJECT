 <template>    
  <!-- Carousel Start -->
       <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img :src="require('../assets/img/pool4.jpg')" class="w-100" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Your Escape to Paradise</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">SAVING LIVES BUILDING COMPANIONS!</h1>
                            <a href="/room" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                            <a href="/booking" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img :src="require('../assets/img/eagleview.jpg')" class="w-100" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Your Ultimate Getaway</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Enjoy, Relax & Have Fun in the Cool & Therapeutic Waters</h1>
                            <a href="/room" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                            <a href="/booking" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->



   
    <div class="container-xxl py-5">

        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Eduardo's</span></h1>
                    <p class="mb-4">Eduardo's Resort promotes tourism in the province, provides employment to local residents, helps the farmers maximize product of agricultural crops and supports swimmers and athletes. </p>
                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">{{ numberOfRooms }}</h2>
                                    <p class="mb-0">Rooms</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">3</h2>
                                    <p class="mb-0">Staffs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">{{ numberOfClients }}</h2>
                                    <p class="mb-0">Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-center">
                            <img :src="imageUrls[0]" :alt="'Image 1'" class="img-fluid rounded w-100 wow zoomIn" :data-wow-delay="`${0 * 0.2 + 0.1}s`">

      </div>
                        <div class="col-6 text-start">
                            <img :src="require('../assets/img/pool5.jpg')" alt="" class="img-fluid  w-100 wow zoomIn" data-wow-delay="0.3s">
                        </div>
                        <div class="col-6 text-end">
                            <img :src="require('../assets/img/band.jpg')" alt="" class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s">
                        </div>
                        <div class="col-6 text-start">
                            <img :src="require('../assets/img/pool2.jpg')" alt="" class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Room Start -->
    <div  class="container-xxl py-5">
            <div  class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                </div>
                <div class="row g-4">
                    <div  v-for="room in room" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div  class="position-relative">
                                <img :src="require('@/assets/img/' + room.image)" alt="" />
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Php{{ room.price }}</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">{{ room.name }}</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>{{ room.bed }} Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>{{ room.bath }} Bath</small>
                                </div>
                                <p class="text-body mb-3">{{ room.description }}</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Room End -->


    <!-- Video Start -->
<div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5">
                <h6 class="section-title text-start text-white text-uppercase mb-3">Eduardo's Resort</h6>
                <h1 class="text-white mb-4">"Where Every Moment Becomes a Memory"</h1>
                <p class="text-white mb-4">"Eduardo's Resort is a tranquil paradise nestled in a breathtaking natural setting. With lush gardens, pristine pools, and luxurious accommodations, our resort offers the perfect escape from the hustle and bustle of daily life. Whether you're seeking a romantic getaway, a family vacation, or a venue for your special events, Eduardo's Resort provides a serene and memorable experience. Immerse yourself in comfort, adventure, and relaxation, all in one remarkable destination."</p>
                <a href="/room" class="btn btn-primary py-md-3 px-md-5 me-3">Our Rooms</a>
                <a href="/booking" class="btn btn-light py-md-3 px-md-5">Book A Room</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="video">
                <!-- Button to trigger the modal -->
                <button type="button" class="btn-play" data-bs-toggle="modal" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eduardo's Resort Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Video player with controls -->
                <video controls width="100%" height="auto">
                    <source :src="require('../assets/img/bestresortinmindoro.mp4')" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>
<!-- Video Start -->



    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-hotel fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Rooms & Appartment</h5>
                        <p class="text-body mb-0">"Welcome to our luxurious and comfortable Rooms & Apartments at Eduardo's Resort. Our carefully designed accommodations are the perfect haven for relaxation and rejuvenation. From spacious rooms with breathtaking views to well-appointed apartments that feel like a home away from home, we offer a range of options to suit your every need. "</p>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Food & Restaurant</h5>
                        <p class="text-body mb-0">
"Indulge in a culinary journey at our resort's Food & Restaurant, where exceptional flavors and exquisite dining experiences await you. Our expert chefs artfully prepare a diverse range of dishes that tantalize your taste buds, from delectable international cuisine to locally inspired delicacies. "</p>
                    </a>
                </div>
            </div>
            <br>
                <div class="row g-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-swimmer fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Swimming Lesson</h5>
                        <p class="text-body mb-0">"Dive into a world of aqua adventures at our resort's Swimming Lessons! Whether you're a beginner looking to conquer the waters or an experienced swimmer seeking to refine your skills, our certified instructors are here to guide you through an exciting and educational journey. "</p>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Event & Party</h5>
                        <p class="text-body mb-0">"Experience unforgettable moments at our resort's Events and Party offerings. Whether you're celebrating a special occasion, hosting a corporate event, or simply looking for a place to unwind with friends and family, our resort provides the perfect backdrop for your gatherings. "</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Feedbacks</h6>
                 
                </div>

    <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s " style="margin-bottom: 90px;">
        <div class="container">
            <div class="owl-carousel testimonial-carousel py-5">
                <div v-for="feed in feed" class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>{{ feed.feedback }}</p>
                    <div class="d-flex align-items-center">
                        <img :src="require('../assets/img/testimonial-1.jpg')" class="img-fluid flex-shrink-0 rounded" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">{{ feed.id }}</h6>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
            </div>
            <div v-if="feedbackSent" class="alert alert-success mt-3" role="alert">
                Feedback sent successfully!
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <insert/>

     <!-- Team Start -->
     <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img :src="require('../assets/img/team-1.jpg')" class="img-fluid" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                              <img :src="require('../assets/img/team-2.jpg')" class="img-fluid" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                              <img :src="require('../assets/img/team-3.jpg')" class="img-fluid" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                              <img :src="require('../assets/img/team-4.jpg')" class="img-fluid" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- Team End -->
  </template> 
<style>
 @import '@/assets/css/bootstrap.min.css';
 @import '@/assets/css/style.css';</style>

<script>

import axios from 'axios'
    import insert from '@/components/insert.vue';
    export default {
        name: 'feedback',
            components: {
                insert,
            },
        data(){
            return{
                feed:[],
                feedbackSent: false, 
                room:[],
                numberOfClients: 0, 
                numberOfRooms: 0,
                pool:[], 

            }
        },
        mounted(){
            this.getFeed();
            this.getRoom();
            this.getPool();
            this.getData();

        },
        methods:{
            async getFeed(){
                const g = await axios.get("/getFeedback");
                this.feed = g.data;
            },
            async getPool(){
                const p = await axios.get("/getPool");
                this.pool = p.data;
            },
            async getRoom(){
                const r = await axios.get("/getRoom");
                this.room = r.data;
            },
            async getData() {
                const response = await axios.get("/getData"); 
                this.data = response.data;
                this.numberOfClients = this.data.length; 
            },
            async getRoom() {
                const response = await axios.get("/getRoom");
                this.room = response.data;
                this.numberOfRooms = this.room.length; 
            },
        
        }
    }

</script>



