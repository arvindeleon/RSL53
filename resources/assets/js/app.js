
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data : {
    	msg: 'Pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada.'
    }
});
