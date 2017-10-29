import Vue from 'vue'
import Router from 'vue-router'
import Home from '../components/home.vue'
import Products from '../components/products.vue'
import Information from '../components/information.vue'
import Add from '../components/add.vue'
import To from '../components/to.vue'

Vue.use(Router)

export default new Router({
  scorllBehavior: () => ({
    y: 0
  }),
  routes: [
    {
      path: '/index',
      name: 'index',
      component: Home
    },
    {
      path: '/products',
      name: 'products',
      component: Products
    },
    {
      path: '/information',
      name: 'information',
      component: Information
    },
    {
      path: '/add',
      name: 'add',
      component: Add
    },
    {
      path: '/to',
      name: 'to',
      component: To
    }
  ]
})
