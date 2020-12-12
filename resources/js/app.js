/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// import 'jquery-ui/ui/widgets/autocomplete.js';

import Vue from 'vue';
// import 'livewire-vue'

window.Vue = Vue;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('subscribe-button', require('./components/SubscribeButton.vue').default);
Vue.component('user-notifications', require('./components/UserNotifications.vue').default);
Vue.component('tag-input', require('./components/TagsComponent.vue').default);
Vue.component('author-input', require('./components/AuthorsInputComponent.vue').default);
Vue.component('navbar', require('./components/NavbarDropdown.vue').default);

Vue.component('image-input', require('./components/ImageInputComponent.vue').default);
Vue.component('profile-dropdown', require('./components/ProfileDropdown.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
window.User = window.Kioosk.user;
Vue.config.ignoredElements = ['trix-editor'];
Vue.component('trix', {
    template: '<trix-editor></trix-editor>'
});
const app = new Vue({
    el: '#app',
    // a beforeMount call to add a listener to the window
    data() {
        return {
            view: {
                atTopOfPage: true,
                navbarHeightClass: 'h-12',
                searchFocus: false
            }
        }
    },
    beforeMount() {
        window.addEventListener('scroll', this.handleScroll);
    },
    methods: {
        // the function to call when the user scrolls, added as a method
        handleScroll() {
            // when the user scrolls, check the pageYOffset
            if (window.pageYOffset > 0) {
                // user is scrolled
                if (this.view.atTopOfPage) this.view.atTopOfPage = false
                // this.view.navbarHeightClass = 'h-12'
            } else {
                // user is at top of page
                if (!this.view.atTopOfPage) this.view.atTopOfPage = true
                // this.view.navbarHeightClass = 'h-16'
            }
        }
    }
});