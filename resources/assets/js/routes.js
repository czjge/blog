export default[
    { path: '/', component: require('./page/Index.vue').default },
    { path: '/page/:id', component: require('./page/Index.vue').default },
    { path: '/:id', component: require('./page/PostDetail.vue').default }
];