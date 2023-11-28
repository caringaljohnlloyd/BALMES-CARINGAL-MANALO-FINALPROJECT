<template>
  <Top />
  <navbar />
  <div class="container-xxl bg-white p-0">
    <div class="Booking">
      <div class="container-fluid page-header mb-5 p-0">
        <div class="container-fluid page-header-inner py-5">
          <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
              Booking
            </h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li
                  class="breadcrumb-item text-white active"
                  aria-current="page"
                >
                  Contact
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Booking Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title text-center text-primary text-uppercase">
          Room Booking
        </h6>
        <h1 class="mb-5">
          Book A <span class="text-primary text-uppercase">Luxury Room</span>
        </h1>
      </div>
      <div class="row g-5">
        <div class="col-lg-6">
          <div class="row g-3">
            <div class="col-6 text-end">
              <img
                :src="require('../assets/img/pool3.jpg')"
                alt=""
                class="img-fluid rounded w-100 wow zoomIn"
                data-wow-delay="0.1s"
              />
            </div>
            <div class="col-6 text-start">
              <img
                :src="require('../assets/img/pool5.jpg')"
                alt=""
                class="img-fluid w-100 wow zoomIn"
                data-wow-delay="0.3s"
              />
            </div>
            <div class="col-6 text-end">
              <img
                :src="require('../assets/img/band.jpg')"
                alt=""
                class="img-fluid rounded w-75 wow zoomIn"
                data-wow-delay="0.5s"
              />
            </div>
            <div class="col-6 text-start">
              <img
                :src="require('../assets/img/pool2.jpg')"
                alt=""
                class="img-fluid rounded w-100 wow zoomIn"
                data-wow-delay="0.7s"
              />
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <form @submit.prevent="save">
              <div class="row">
                <!-- in -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="checkin">Checkin</label>
                    <input
                      type="date"
                      placeholder="Checkin"
                      v-model="checkin"
                      class="form-control"
                    />
                  </div>
                </div>

                <!-- out -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="checkout">Checkout</label>
                    <input
                      type="date"
                      placeholder="Checkout"
                      v-model="checkout"
                      class="form-control"
                    />
                  </div>
                </div>

                <!-- adult -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="adult">Number of Adult</label>
                    <input
                      type="number"
                      placeholder="Number of Adult"
                      v-model="adult"
                      class="form-control"
                    />
                  </div>
                </div>

                <!-- child -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="child">Number of Child</label>
                    <input
                      type="number"
                      placeholder="Number of Child"
                      v-model="child"
                      class="form-control"
                    />
                  </div>
                </div>

                <!-- req -->
                <div class="col-md-15">
                  <div class="form-group">
                    <label for="specialRequest">Special Request</label>
                    <textarea
                      type="text"
                      placeholder="Special Request"
                      v-model="specialRequest"
                      class="form-control"
                    ></textarea>
                  </div>
                </div>
              </div>
              <br />
              <!-- Submit Button -->
              <button type="submit" class="btn btn-primary">Submit</button>
              <!-- Success Message -->
              <div v-if="successMessage" class="alert alert-success mt-3">
                {{ successMessage }}
              </div>

              <!-- Error Message -->
              <div v-if="errorMessage" class="alert alert-danger mt-3">
                {{ errorMessage }}
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Booking End -->

  <!-- Newsletter Start -->
  <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row justify-content-center">
      <div class="col-lg-10 border rounded p-1">
        <div class="border rounded text-center p-1">
          <div class="bg-white rounded text-center p-5">
            <h4 class="mb-4">
              Subscribe Our
              <span class="text-primary text-uppercase">Newsletter</span>
            </h4>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Enter your email"
              />
              <button
                type="button"
                class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2"
              >
                Submit
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Newsletter Start -->
  <End />
</template>

<style>
@import "@/assets/css/bootstrap.min.css";
@import "@/assets/css/style.css";
.Booking {
  background-image: url("~@/assets/img/pool4.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  width: 100%;
  height: 338px;
}
</style>

<script>
import Top from "@/components/Top.vue";
import navbar from "@/components/navbar.vue";
import End from "@/components/End.vue";
import axios from "axios";

export default {
  name: "booking",
  components: {
    Top,
    navbar,
    End,
  },
  data() {
    return {
      checkin: "",
      checkout: "",
      adult: "",
      child: "",
      specialRequest: "",
      successMessage: "",
      errorMessage: "",
      
    };
  },
  mounted() {
    this.room_id = this.$route.params.id;
    console.log("Room ID:", this.room_id);
  },
  methods: {
    async save() {
      try {
        const id = sessionStorage.getItem("id");
        const response = await axios.post("booking", {
          id: id,
          checkin: this.checkin,
          checkout: this.checkout,
          adult: this.adult,
          child: this.child,
          specialRequest: this.specialRequest,
          room_id: this.$route.params.id,
        });

        if (response.status === 200) {
          console.log("Booked successfully");
          this.successMessage = "Booked successfully";
          this.errorMessage = "";
          this.id = "";
          this.checkin = "";
          this.checkout = "";
          this.adult = "";
          this.child = "";
          this.specialRequest = "";
          this.$emit("data-saved");
          this.successMessage = response.data.message;

          setTimeout(() => {
            this.successMessage = "";
          }, 2000);
        }
      } catch (error) {
        console.error("Error booking", error);
        this.errorMessage = `Error booking: ${error.message}`;
        this.successMessage = "";
      }
    },
  },
};
</script>
