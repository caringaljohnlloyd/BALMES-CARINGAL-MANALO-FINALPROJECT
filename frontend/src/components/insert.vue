<template>
    <section class="vh-10 gradient-custom">
      <div class="container py-10">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-6">
            <div class="card ">
              <div class="card-body p-4 p-md-5">
                <h4 class="mb-5">Send us your<span class="text-primary text-uppercase"> Feedbacks</span></h4>
  
                <form @submit.prevent="save">
                  <div class="row">
                    <!-- Feedback -->
                    <div class="col-md-20 mb-3">
                      <div class="form-group">
                        <label for="feedback">Feedback</label>
                        <textarea type="text" placeholder="Feedback" v-model="feedback" class="form-control"></textarea>
                      </div>
                    </div>
  
                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Name" v-model="name" class="form-control">
                      </div>
                    </div>
  
                    <!-- Profession -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="profession">Profession</label>
                        <input type="text" placeholder="Profession" v-model="profession" class="form-control">
                      </div>
                    </div>
                  </div>
  
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <div v-if="successMessage" class="alert alert-success mt-3">
    {{ successMessage }}
  </div>

  <div v-if="errorMessage" class="alert alert-danger mt-3">
    {{ errorMessage }}
  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>
  <style>
  @import '@/assets/css/bootstrap.min.css';
  @import '@/assets/css/style.css';</style>
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        feedback: "",
        name: "",
        profession: "",
        successMessage: "",
      errorMessage: "",
      };
    },
    methods: {
      async save() {
        try {
          const response = await axios.post("save", {
            feedback: this.feedback,
            name: this.name,
            profession: this.profession,
          });
  
          if (response.status === 200) {
            console.log("Feedback submitted successfully");
            this.successMessage = "Feedback submitted successfully";
  this.errorMessage = ""; 
            this.feedback = "";
            this.name = "";
            this.profession = "";
            this.$emit('data-saved');
      
          } 
        } catch (error) {
  console.error("Error feedback", error);
  this.errorMessage = `Error feedback: ${error.message}`;
  this.successMessage = ""; 
}
      },
    }
  }
  </script>

  