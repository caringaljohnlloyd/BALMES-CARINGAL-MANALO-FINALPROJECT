<template>
  <Top/>
  <navbar/>
  <div class="container-xxl bg-white p-0">
        <div class="Testimonial">
        <div class="container-fluid page-header mb-5 p-0" >
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
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
<br><br>
    <!-- Testimonial Start -->
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Feedbacks</h6>
                 
                </div>

    <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s " style="margin-bottom: 90px;">
        <div class="container">
            <div class="owl-carousel testimonial-carousel py-5">
                <div v-for="feed in feed" :key="name.id" class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>{{ feed.feedback }}</p>
                    <div class="d-flex align-items-center">
                        <img :src="require('../assets/img/testimonial-1.jpg')" class="img-fluid flex-shrink-0 rounded" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">{{ getName(feed).name }}</h6>
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

<style>
@import '@/assets/css/bootstrap.min.css';
 @import '@/assets/css/style.css';
.Testimonial {
  background-image: url('~@/assets/img/pool4.jpg'); 
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
  name: 'Testimonial',
  components: {
    Top,navbar,End
  },
  data(){
    return{
                feed:[],
            }
        },
        mounted(){
            this.getFeed();

        },
        methods:{
           async getFeed(){
                const [g,n] = await Promise.all
                ([ axios.get("/getFeedback"),
                axios.get("/getData")]);
                this.feed = g.data;
                this.name = n.data;

            },
            getName(g) {
                return this.name.find(n => n.id === g.id) || {};
            },

        },
}
</script>