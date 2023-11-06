<template>
  <div class="row">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-dark form-wrapper">
        <div class="container">
          <h3 class="text-primary">Login</h3>
          <hr />
          <form @submit.prevent="login()">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" v-model="email" required />
              <label for="email" class="form-label">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" v-model="password" required minlength="8" />
              <label for="password" class="form-label">Password</label>
            </div>
            <p class="alert-danger ">{{ errorMessage }}</p>

            <button type="submit" class="btn btn-primary mx-auto w-100 mb-3">Sign in</button>

            <router-link to="/register">Don't have an account yet?</router-link>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: '',
      password: '',
      errorMessage: '', 

    };
  },
  methods: {
    login() {
    const data = {
      email: this.email,
      password: this.password,
    };

    axios
      .post('/login', JSON.stringify(data), {
        headers: {
          'Content-Type': 'application/json',
        },
      })
      .then((response) => {
        if (response.data.message === 'Login successful') {
          this.$router.push('/user');
        } 
      })
      .catch((error) => {
        console.error(error);
        this.errorMessage = 'Invalid email or password, try again!';
        });
    },
  },
};
</script>