import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'

import './style/index.scss'

import gtag from "vue-gtag";

createApp(App)
    .use(store)
    .use(router)
    .use(gtag, {
        config: { id: "G-RJ6HR8J6YZ" }
    }, router)
    .mount('#app')
