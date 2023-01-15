import './bootstrap';

window.Vue=require('vue')

//vue router

import VueRouter from 'vue-Router'
Vue.use(VueRouter)

Vue.component('example-component', require('./components/ExampleComponent.vue'));


const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About },
]

const router = VueRouter({
    routes, // short for `routes: routes`
})


const app= new Vue({

el:'.app',

router

})
