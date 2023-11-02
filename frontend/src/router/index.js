import { createRouter, createWebHistory } from 'vue-router'
import IndexPage from '../views/IndexPage.vue'
import AboutView from '../views/AboutView.vue'
import HomeView from '../views/HomeView.vue'



const routes = [
  {
    path: '/',
    component: IndexPage
  },
  {
    path: '/about',
    component: AboutView

  },
  {
    path: '/home',
    component: HomeView

  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
