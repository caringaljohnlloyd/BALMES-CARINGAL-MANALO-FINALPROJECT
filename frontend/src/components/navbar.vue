<template>
  <Top />
  <div class="container-xxl bg-white p-0">
    <!-- 
          <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    Spinner End -->

    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
      <div class="row gx-0">
        <div class="col-lg-3 bg-dark d-none d-lg-block">
          <a
            href="/user"
            class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center"
          >
            <div class="image-container">
              <img
                :src="require('../assets/img/logo.png')"
                class="logo-image"
                alt="Eduardo's Logo"
              />
            </div>
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
                <p class="mb-0">Contact Number: (043) 288-7153</p>
              </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
              <div class="d-inline-flex align-items-center py-2">
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <div class="icon-group">
                    <font-awesome-icon :icon="['fab', 'google']" />
                    <font-awesome-icon :icon="['fab', 'facebook']" />
                    <font-awesome-icon :icon="['fab', 'twitter']" />
                  </div>
                </button>
              </div>
            </div>
          </div>
          <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
            <a href="/user" class="navbar-brand d-block d-lg-none">
              <h1 class="m-0 text-primary text-uppercase">Eduardo's</h1>
            </a>
            <button
              type="button"
              class="navbar-toggler"
              data-bs-toggle="collapse"
              data-bs-target="#navbarCollapse"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-between"
              id="navbarCollapse"
            >
              <div class="navbar-nav mr-auto py-0">
                <router-link
                  to="/user"
                  class="nav-item nav-link"
                  :class="{ active: $route.path === '/user' }"
                  >Home</router-link
                >
                <router-link
                  to="/about"
                  class="nav-item nav-link"
                  :class="{ active: $route.path === '/about' }"
                  >About</router-link
                >
                <router-link
                  to="/service"
                  class="nav-item nav-link"
                  :class="{ active: $route.path === '/service' }"
                  >Services</router-link
                >
                <router-link
                  to="/shop"
                  class="nav-item nav-link"
                  :class="{ active: $route.path === '/shop' }"
                  >Shop</router-link
                >
                <router-link
                  to="/room"
                  class="nav-item nav-link"
                  :class="{ active: $route.path === '/room' }"
                  >Rooms</router-link
                >
                <div class="nav-item dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    data-target="#dropdownMenu"
                    >Pages</a
                  >
                  <div class="dropdown-menu rounded-0 m-0" id="dropdownMenu">
                    <a href="/team" class="dropdown-item">Our Team</a>
                    <a href="/testimonial" class="dropdown-item">Testimonial</a>
                  </div>
                </div>

                <router-link
                  to="/contact"
                  class="nav-item nav-link"
                  :class="{ active: $route.path === '/contact' }"
                  >Contact</router-link
                >
              </div>
              <router-link to="/shopcart" class="text-primary">
                <i class="fa fa-shopping-cart"></i>
              </router-link>

              <button @click="logout" class="btn btn-primary logout-logo-btn">
                <i class="fas fa-power-off logout-icon"></i>
                Logout
              </button>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="app">
    <form class="d-flex me-2" @submit.prevent="getData">
      <input v-model="query" class="form-control" type="search" placeholder="Search" aria-label="Search"/>
    </form>
    <ul class="list-group">
      <li class="list-group-item" v-for="(item, index) in data" :key="index">
        <template v-if="item.matchedWord">
          {{ item.matchedWord }}
        </template>
        <template v-else>
        
          {{ item.matchedWord }} 
        </template>
      </li>
      <li class="list-group-item" v-if="!data.length">No matching word found</li>
    </ul>
  </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <router-view/>
  </template>
  



<style>
@import "@/assets/css/bootstrap.min.css";
@import "@/assets/css/style.css";
.image-container {
  text-align: center;
}

.logo-image {
  max-width: 40%; /* Set the maximum width to 100% of the container */
  height: 40%;
  width: 50%; /* Maintain the aspect ratio */
}
.logout-logo-btn {
  display: flex;
  align-items: center;
  background-color: transparent;
  border: none;
  cursor: pointer;
  font-size: 16px;
}

.logout-icon {
  margin-right: 8px;
}

.icon-group {
  display: flex;
  gap: 10px;
}
</style>

<script>
import Top from "@/components/Top.vue";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import axios from "axios";

 


export default {
  components: {
    Top,
    FontAwesomeIcon,
  },
  data() {
    return {
      query: '',
      data: [],
    };
  },
  methods: {
    async logout() {
      try {
        const response = await axios.post("/logout");

        if (response.status === 200) {
          console.log("Logout successful");

          sessionStorage.removeItem("token");

          this.$router.push("/");
        }
      } catch (error) {
        console.error("Error during logout", error);
      }
    },
    async getData() {
      try {
        const response = await axios.get(`/search/${this.query}`);
        this.data = response.data;
        console.log(this.data);
      } catch (error) {
        console.error(error);
      }
}
  }


  }
</script>
