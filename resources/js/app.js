
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('message', require('./components/Message.vue'));
// ()
const app = new Vue({
    el: '#app',
    data: {
      message: '',
      chat: {
        messages: [],
        users: [],
        colors: [],
        badgeColors: []
      }
    },
    methods: {
      send(){
        if (this.message.length != 0) {
          this.chat.messages.push(this.message);
          this.chat.users.push('You');
          this.chat.colors.push('success');
          this.chat.badgeColors.push('success');
          axios.post('/send', {
            message: this.message
          })
          .then(response => {
            console.log(response);
            this.message = '';
          })
          .catch(error => {
            console.log(error);
          });
        }
      }
    },
    mounted() {
      Echo.private('say')
        .listen('MessageSentEvent', (e) => {
console.log(e);
            this.chat.messages.push(e.message);
            this.chat.users.push(e.user);
            this.chat.colors.push('warning');
            this.chat.badgeColors.push('warning');
        });
    }
});
