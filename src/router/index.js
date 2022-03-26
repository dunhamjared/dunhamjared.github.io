import { createRouter, createWebHashHistory } from 'vue-router'

const routes = [
  {
    path: '/',
    name: 'home',
    component: ()=>import('../views/index')
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
