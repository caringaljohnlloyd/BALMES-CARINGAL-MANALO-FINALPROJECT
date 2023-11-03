import { createRouter, createWebHistory } from 'vue-router'
import IndexPage from '../views/IndexPage.vue'
import AboutView from '../views/AboutView.vue'
import HomeView from '../views/HomeView.vue'
import LoginForm from '../views/LoginForm.vue'
import Room from '../views/Room.vue'




const routes = [
  {
    path: '/',
    component: LoginForm
  },
  {
    path: '/table',
    component: IndexPage
  },
  {
    path: '/about',
    component: AboutView

  },
  {
    path: '/service',
    component: HomeView

  },
  {
  path: '/room',
  component: Room,

}
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
