import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '../components/home.vue'
import Products from '../components/products.vue'
import Information from '../components/information.vue'
import Add from '../components/add.vue'
import To from '../components/to.vue'
import Protocol from '../components/protocol.vue'
import Guardianship from '../components/guardianship.vue'
import Disputes from '../components/disputes.vue'
import Addiction from '../components/addiction.vue'
import Login from '../components/login.vue'
import Registration from '../components/registration.vue'
import Topup from '../components/topup.vue'

Vue.use(Router)

export default new Router({
  scorllBehavior: () => ({
    y: 0
  }),
  routes: [
    {
      path: '/',
      name: 'Hello',
      component: HelloWorld
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
    },
    {
      path: '/protocol',
      name: 'protocol',
      component: Protocol
    },
    {
      path: '/guardianship',
      name: 'guardianship',
      component: Guardianship
    },
    {
      path: '/disputes',
      name: 'disputes',
      component: Disputes
    },
    {
      path: '/addiction',
      name: 'addiction',
      component: Addiction
    },
    {
      path: '/login',
      name: 'login',
      component: Login
    },
    {
      path: '/registration',
      name: 'registration',
      component: Registration
    },
    {
      path: '/topup',
      name: 'topup',
      component: Topup
    }
  ]
})
