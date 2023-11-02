<template>
  <div class="container mt-5">
    <h2 class="text-center">Login</h2>
    <form @submit.prevent="login" class="mt-3">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" v-model="username" class="form-control" required />
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" v-model="password" class="form-control" required />
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      username: '',
      password: '',
      loading: false,
      loggedIn: false,
      error: '',
    };
  },
  methods: {
    login() {
      this.loading = true;

      const userData = {
        username: this.username,
        password: this.password,
      };

      axios
        .post('http://backend.test/login', userData)
        .then((response) => {
          this.loading = false;
          this.loggedIn = true;
         
        })
        .catch((error) => {
          this.loading = false;
          this.error = 'Authentication failed. Please check your credentials.';
        });
    },
  },
};
</script>
