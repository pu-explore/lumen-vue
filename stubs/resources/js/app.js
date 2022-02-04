import {createApp} from 'vue';
import App from './layout/App.vue';
import ElementPlus from 'element-plus';
import './../css/app.css';
import router from './router';
import store from './store';

const app = createApp(App);
app.use(ElementPlus);
app.use(store);
app.use(router);
app.mount('#app');
