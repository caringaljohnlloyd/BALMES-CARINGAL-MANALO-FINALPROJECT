<!-- ForgotPassword.vue -->
<template>
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-dark form-wrapper">
        <div class="container">
          <h3 class="text-primary">Forgot Password</h3>
          <hr />
          <form @submit.prevent="resetPassword()">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" v-model="email" required />
              <label for="email" class="form-label">Email address</label>
            </div>
            <p class="alert-danger">{{ errorMessage }}</p>
  
            <button type="submit" class="btn btn-primary mx-auto w-100 mb-3">Reset Password</button>
  
            <router-link to="/">Remembered your password? Sign in</router-link>
          </form>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  import router from '@/router';
  
  export default {
    data() {
      return {
        email: '',
        errorMessage: '',
      };
    },
    methods: {
      resetPassword() {
        const data = {
          email: this.email,
        };
  
        axios
          .post('/api/reset-password', JSON.stringify(data), {
            headers: {
              'Content-Type': 'application/json',
            },
          })
          .then((response) => {
            if (response.data.message === 'Password reset successful') {
              router.push('/update-password');
            }
          })
          .catch((error) => {
            console.error(error);
            if (error.response && error.response.status === 404) {
              this.errorMessage = 'Email not found. Please check and try again.';
            } else {
              this.errorMessage = 'An error occurred. Please try again!';
            }
          });
      },
    },
  };
  </script>
  