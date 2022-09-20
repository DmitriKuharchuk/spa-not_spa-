
import 'core-js'
import Vue from 'vue'
import App from './views/Index'
import store from './store'
import router from '@/router'

Vue.config.productionTip = false

new Vue({
    el: '#app',
    router,
    store,
    render: (h) => h(App),
})
