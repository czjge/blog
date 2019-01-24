export default[
    // 首页
    { path: '/', components: {
        default: require('./page/Index.vue').default,
        search: require('./page/base/Search.vue').default,
        nav: require('./page/base/Nav.vue').default} },
    // 详情页
    { path: '/:id', components: {
        default: require('./page/PostDetail.vue').default,
        search: require('./page/base/Search.vue').default,
        nav: require('./page/base/Nav.vue').default} },
    // 分类
    { path: '/category/:cate_id', components: {
        default: require('./page/PostCategory.vue').default,
        search: require('./page/base/Search.vue').default,
        nav: require('./page/base/Nav.vue').default} },
    // 搜索
    { path: '/search/:kwd', components: {
        default: require('./page/PostSearch.vue').default,
        search: require('./page/base/Search.vue').default,
        nav: require('./page/base/Nav.vue').default}, name: "search" },
];