/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-default/index.css'
import Uploader from './components/uploader.vue'
import locale from 'element-ui/lib/locale/lang/en'

Vue.use(ElementUI, {locale});
Vue.component('app-uploader', Uploader)

const App = new Vue({
  el: "#app"
});


