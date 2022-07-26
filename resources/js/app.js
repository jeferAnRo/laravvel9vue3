import './bootstrap';

// import Vue from 'vue'
import * as Vue from 'vue'

// import los componentes
import Hello from './components/Hello'

import person from './components/Person/Index.vue'

import son from './components/Son/Index.vue'

const index = Vue.createApp(Hello)

index.component('hello', Hello)

// index.component('son',son)

index.mount('#app')


createApp(Hello).mount('#app');
// createApp(son).mount('#app');



new Vue({
    el: '#app',
    components: {
        Hello,
        son
    }
})

// const indexson= Vue.createApp(son)
// indexson.component('son', son)

// indexson.mount('#son')


// createApp(indexson).mount('#son');


// new Vue({
//     el: '#son',
//     components: {
//         son
//     }
// })