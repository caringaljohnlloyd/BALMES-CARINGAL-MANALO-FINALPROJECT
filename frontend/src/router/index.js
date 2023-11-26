import { createRouter, createWebHistory } from 'vue-router'
import IndexPage from '../views/IndexPage.vue'
import AboutView from '../views/AboutView.vue'
import HomeView from '../views/HomeView.vue'
import LoginForm from '../views/LoginForm.vue'
import register from '../components/register.vue'
import Room from '../views/Room.vue'
import Shop from '../views/Shop.vue'
import Include from '../views/Include.vue'
import ContactView from '../views/ContactView.vue'
import Service from '../views/Service.vue'
import Table from '../views/Table.vue'
import Booking from '../views/Booking.vue'
import Team from '../views/Team.vue'
import Testimonial from '../views/Testimonial.vue'
import Admin from '../views/Admin.vue'
import Analytics from '../views/Analytics.vue'
import Chat from '../views/Chat.vue'
import Contacts from '../views/Contacts.vue'
import TeamAdmin from '../views/TeamAdmin.vue'
import Calendar from '../views/Calendar.vue'
import Email_inbox from '../views/Email_inbox.vue'
import ForgotPassword from '../views/ForgotPassword.vue'
import UpdatePassword from '../views/UpdatePassword.vue'
import Cart from '../views/Cart.vue'







const routes = [
  {
    path: '/',
    component: LoginForm
  },
  {
    path: '/insert',
    component: IndexPage,
    meta: {requiresAuth: true}

  },
  {
    path: '/about',
    component: AboutView,
    meta: {requiresAuth: true}

  },
  {
    path: '/service',
    component: Service,
    meta: {requiresAuth: true}


  },
  {
  path: '/room',
  component: Room,
  meta: {requiresAuth: true}

},
{
  path: '/shop',
  component: Shop,
  meta: {requiresAuth: true}

},
{
  path: '/user',
  component: Include, 
  meta: {requiresAuth: true}
},
{
  path: '/contact',
  component: ContactView,
  meta: {requiresAuth: true}

},
{
  path: '/table',
  component: Table,

},
{
  path: '/booking',
  component: Booking,
  meta: {requiresAuth: true}

},
{
  path: '/team',
  component: Team,
  meta: {requiresAuth: true}

},
{
  path: '/testimonial',
  component: Testimonial,
  meta: {requiresAuth: true}

},
{
  path: '/shopcart',
  component: Cart,
  meta: {requiresAuth: true}

},
{
  path: '/register',
  component: register,

},
{
  path: '/admin',
  component: Admin,

},
{
  path: '/analytics',
  component: Analytics,
},
{
  path: '/chat',
  component: Chat,
},
{
  path: '/contacts',
  component: Contacts,
},
{
  path: '/teamadmin',
  component: TeamAdmin,
},
{
  path: '/calendar',
  component: Calendar,
},
{
  path: '/email_inbox',
  component: Email_inbox,
},
{
path: '/reset-password',
component: ForgotPassword,
},
{
  path: '/update-password',
  component: UpdatePassword,
},
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})
router.beforeEach((to, from, next) => {
  const isLoggedin = checkUserLogin();
  if (to.matched.some((record) => record.meta.requiresAuth)) {
    if (isLoggedin) {
      next();
    } else {
      next("/");
    }
  } else {
    next();
  }
});
function checkUserLogin(){
  const userToken =sessionStorage.getItem("token");
  return !!userToken;
}

export default router

