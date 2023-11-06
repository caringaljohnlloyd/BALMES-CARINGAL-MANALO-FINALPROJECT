<template>
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-dark form-wrapper">
      <div class="container">
        <h3 class="text-primary">Register</h3>
        <hr />
        <form @submit.prevent="register()" ref="registerForm">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="firstname" v-model="firstname" required />
            <label for="firstname" class="form-label">First Name</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="lastname" v-model="lastname" required />
            <label for="lastname" class="form-label">Last Name</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="email" v-model="email" required />
            <label for="email" class="form-label">Email address</label>
          </div>

          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" v-model="password" required minlength="8" />
            <label for="password" class="form-label">Password</label>
          </div>

          <div class="form-floating mb-3">
            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" required v-model="confirmpassword" @input="checkMsg" />
            <label for="confirmpassword" class="form-label">Confirm Password</label>
          </div>
          <div class="alert" :class="{ 'alert-danger': !isValid || !passwordsMatch || errorMessage, 'alert-success': passwordsMatch }" v-if="showMessage">{{ errorMessage || message }}</div>

          <div class="alert alert-success" v-if="registered"> Successfully registered! </div>
          <button type="submit" class="btn btn-primary mx-auto w-100 mb-3" :disabled="!passwordsMatch">Sign up</button>
          <div class="mt-3">
            <router-link to="/">Already have an account</router-link>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<style>
@import '@/assets/css/bootstrap.min.css';
@import '@/assets/css/style.css';


</style>

<script>
import axios from 'axios';

export default {
  data() {
return {
  firstname: "",
  lastname: "",
  email: "",
  password: "",
  confirmpassword: "",
  showMessage: false,
  registered: false,
  errorMessage: "", 
};
},

  computed: {
    passwordsMatch() {
      return this.password === this.confirmpassword;
    },
    isValid() {
      return this.password !== '' && this.confirmpassword !== '';
    },
    message() {
      if (this.passwordsMatch) {
        return 'Passwords match!';
      } else {
        return 'Passwords do not match.';
      }
    },
  },
  methods: {
      checkMsg() {
      this.dirty = this.confirmpassword !== '';
      this.showMessage = this.dirty;

      if (!this.dirty) {
        this.showMessage = false;
      }
    },
    async register() {
      try {
        const res = await axios.post("register", {
          firstname: this.firstname,
          lastname: this.lastname,
          email: this.email,
          password: this.password,
          confirmpassword: this.confirmpassword,
        })
        this.firstname = "";
        this.lastname = "";
        this.email = "";
        this.password = "";
        this.confirmpassword = "";
        this.registered = true;
        this.showMessage = false;
        this.errorMessage = ""; 
        this.$refs.registerForm.reset();
        this.$emit('data-saved');
        this.getInfo();
          } catch (error) {
            if (error.response && error.response.data && error.response.data.error) {
              this.errorMessage = error.response.data.error;
            }
                }
              }
            }
          };
</script>