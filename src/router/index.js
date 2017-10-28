import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '../components/home.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  scorllBehavior: () => ({
    y: 0
  }),
  routes: [
    {
      path: '/',
      name: 'Hello',
      component: HelloWorld
    }
  ]
})
