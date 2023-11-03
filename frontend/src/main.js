import { createApp } from 'vue'
import App from './App.vue'
import './registerServiceWorker'
import router from './router'
import axios from 'axios'
//<<<<<<< HEAD
//import 'bootstrap'
//=======
//import 'bootstrap'
//import{library} from '@fortawesome/fontawesome-svg-core';
//import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
//import {faFacebook, faGoogle,faTwitter} from '@fortawesome/free-brands-svg-icons';
//>>>>>>> 233bb70d746d851d21920c5442a4a8c84a45fda9

library.add(faFacebook, faGoogle, faTwitter);
axios.defaults.baseURL="http://localhost:8080/"

const app =createApp(App);
app.use(router);
app.mount('#app');
app.component('font-awesome-icon',FontAwesomeIcon);
