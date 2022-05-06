//lodash
window._ = require('lodash');

//axios
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

//vue
import { createApp } from 'vue'

window.app = createApp({});
window.vm = app.mount('#app');

