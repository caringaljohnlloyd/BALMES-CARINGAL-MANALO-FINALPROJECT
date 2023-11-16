import { createRouter, createWebHistory } from 'vue-router'
import IndexPage from '../views/IndexPage.vue'
import AboutView from '../views/AboutView.vue'
import HomeView from '../views/HomeView.vue'
import LoginForm from '../views/LoginForm.vue'
import register from '../components/register.vue'
import Room from '../views/Room.vue'
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






const routes = [
  {
    path: '/',
    component: LoginForm
  },
  {
    path: '/insert',
    component: IndexPage
  },
  {
    path: '/about',
    component: AboutView

  },
  {
    path: '/service',
    component: Service

  },
  {
  path: '/room',
  component: Room,

},
{
  path: '/user',
  component: Include,

},
{
  path: '/contact',
  component: ContactView,

},
{
  path: '/table',
  component: Table,

},
{
  path: '/booking',
  component: Booking,

},
{
  path: '/team',
  component: Team,

},
{
  path: '/testimonial',
  component: Testimonial,

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
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
