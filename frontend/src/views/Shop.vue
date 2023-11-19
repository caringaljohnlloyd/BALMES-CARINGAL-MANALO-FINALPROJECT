<template>
    <Top/>
    <navbar />
    <div class="container-xxl bg-white p-0">
          <div class="room">
          <div class="container-fluid page-header mb-5 p-0" >
              <div class="container-fluid page-header-inner py-5">
                  <div class="container text-center pb-5">
                      <h1 class="display-3 text-white mb-3 animated slideInDown">Shop</h1>
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb justify-content-center text-uppercase">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">Pages</a></li>
                              <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
              </div>
          </div>
  
         <!-- Shopt -->
         <div  class="container-xxl py-5">
              <div  class="container">
                  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                      <h6 class="section-title text-center text-primary text-uppercase">Our Shop</h6>
                      <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Shop</span></h1>
                  </div>
                  <div class="row g-4">
                      <div  v-for="shop in shop" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                          <div class="room-item shadow rounded overflow-hidden">
                              <div  class="position-relative">
                                  <img class="img-fluid menu" style="width: 200%; max-width: 500px; height: 330px;" :src="require('@/assets/img/' + shop.prod_img)" alt="" />
                                  <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Php.{{ shop.prod_price }}</small>
                              </div>
                              <div class="p-4 mt-2">
                                  <div class="d-flex justify-content-between mb-3">
                                      <h5 class="mb-0 text-dark">{{ shop.prod_name }}</h5>
                                      <div class="ps-2">
                                          <small class="fa fa-star text-primary"></small>
                                          <small class="fa fa-star text-primary"></small>
                                          <small class="fa fa-star text-primary"></small>
                                          <small class="fa fa-star text-primary"></small>
                                          <small class="fa fa-star text-primary"></small>
                                      </div>
                                  </div>
                                  <div class="d-flex mb-3">
                                      <small class="border-end me-3 pe-3">Quantity: {{ shop.prod_quantity }} </small>
                                  </div>
                                  <p class="text-body mb-3">{{ shop.prod_desc }}</p>
                                  <div class="d-flex justify-content-between">
                                      <button class="btn text-primary btn-lg-square rounded-circle mx-2" @click="addCart(shop.shop_id)">
        <i class="fa fa-shopping-cart"></i>
    </button>

    
                                  </div>
                              </div>
                          </div>
                      </div>
              </div>
              <div v-if="successMessage" class="alert alert-success mt-3" role="alert">
        {{ successMessage }}
    </div>
          </div>
          
      </div>
          <!-- Shop End -->
  
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
  
  
          <!-- Newsletter Start -->
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
          <!-- Newsletter Start -->
          <End/>
  </template>
  
  <style scoped>
   @import '@/assets/css/bootstrap.min.css';
   @import '@/assets/css/style.css';
  .room {
    background-image: url('~@/assets/img/shop.jpg'); 
    background-size: cover; 
    background-repeat: no-repeat; 
    background-position: center center; 
    width: 100%; 
    height: 338px; 
  }
  </style>
  
  <script>
  import Top from '@/components/Top.vue';
  import navbar from '@/components/navbar.vue';
  import End from '@/components/End.vue';
  import axios from 'axios'
  
  export default {
    name: 'shop',
    components: {
      Top,navbar,End
    },
    data(){
              return{
                  feed:[],
                  shop:[],
                  successMessage: "", 

              }
          },
          mounted(){
              this.getFeed();
              this.getShop();
          },
          methods: {
        async getFeed() {
            const g = await axios.get("/getFeedback");
            this.feed = g.data;
        },
        async getShop() {
            const s = await axios.get("/getShop");
            this.shop = s.data;
        },
        async addCart(shop_id) {
            try {
                const id = sessionStorage.getItem("id");
                const response = await axios.post("getCart", { shop_id: shop_id, id: id });
                this.successMessage = response.data.message; 

                setTimeout(() => {
                    this.successMessage = "";
                }, 3000);
            } catch (error) {
                console.error("Error adding to cart", error);
            }
        },
    },
};
</script>