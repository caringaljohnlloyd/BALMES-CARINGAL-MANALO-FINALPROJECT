<template>
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-dark form-wrapper">
        <div class="container">
          <h3 class="text-primary">Update Password</h3>
          <hr />
          <form @submit.prevent="updatePassword()">
            <div class="form-floating mb-3">
              <input type="password" class="form-control" v-model="newPassword" required minlength="8" />
              <label for="newPassword" class="form-label">New Password</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" v-model="confirmPassword" required minlength="8" />
              <label for="confirmPassword" class="form-label">Confirm Password</label>
            </div>
            <p class="alert-danger">{{ errorMessage }}</p>
  
            <button type="submit" class="btn btn-primary mx-auto w-100 mb-3">Update Password</button>
  
            <router-link to="/">Back to Login</router-link>
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
        newPassword: '',
        confirmPassword: '',
        errorMessage: '',
      };
    },
    methods: {
      updatePassword() {
        // Check if passwords match
        if (this.newPassword !== this.confirmPassword) {
          this.errorMessage = 'Passwords do not match';
          return;
        }
  
        const data = {
          email: this.$route.query.email,
          newPassword: this.newPassword,
        };
  
        axios
          .post('/api/update-password', data)
          .then((response) => {
            if (response.data.message === 'Password updated successfully') {
              router.push('/');
            }
          })
          .catch((error) => {
            console.error(error);
            this.errorMessage = 'An error occurred. Please try again!';
          });
      },
    },
  };
  </script>
  