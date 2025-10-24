import axios from 'axios';

//samu jika assetnya besar gbrnya error dimatikan
// import.meta.glob(['../img/**']);
// import.meta.glob(["../themes/**","../img/**", "../js/**", "../css/**"]);


window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
