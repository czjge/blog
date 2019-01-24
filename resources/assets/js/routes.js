export default[
    { path: '/', component: require('./page/Index.vue').default }, // 首页
    { path: '/:id', component: require('./page/PostDetail.vue').default }, // 详情页
    { path: '/category/:cate_id', component: require('./page/PostCategory.vue').default }, // 分类
];