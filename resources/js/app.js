
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vuex from 'Vuex';
Vue.use(Vuex);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

//VUEX
const store = new Vuex.Store({
	state:{
		item:{},
		users:{}
	},
	mutations:{
		setUsers(state,obj){
			state.users = obj;
		},
		setItem(state,obj){
			state.item = obj
		}
	}
});

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('pagina', require('./components/Pagina.vue'));
Vue.component('painel', require('./components/Painel.vue'));
Vue.component('box', require('./components/Box.vue'));
Vue.component('box', require('./components/Box.vue'));
Vue.component('tabela', require('./components/TabelaLista.vue'));
Vue.component('modal', require('./components/modal/Modal.vue'));
Vue.component('modallink', require('./components/modal/ModalLink.vue'));
Vue.component('formulario', require('./components/Formulario.vue'));
Vue.component('migalhas', require('./components/Migalhas.vue'));
Vue.component('detalhe', require('./components/Detalhe.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store
});
