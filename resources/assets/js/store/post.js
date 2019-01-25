import api from '../api';

export default{
    state: {
        lists: [],  // 首页
        listsPage: 0,
        detail: {},  // 文章详情
        categories: [],  // 文章分类
        categoriesPage: 0,
        searchList: [],  // 文章搜索
        searchPage: 0,
    },
    mutations: {
        // 注意，这里可以设置 state 属性，但是不能异步调用，异步操作写到 actions 中
        index (state, data) {
            state.lists = data.list;
            state.listsPage = data.total;
        },
        postDetail (state, detail) {
            state.detail = detail;
        },
        postCategory (state, data) {
            state.categories = data.list;
            state.categoriesPage = data.total;
        },
        postSearch (state, data) {
            state.searchList = data.list;
            state.searchPage = data.total;
        }
    },
    actions: {
        getIndex({commit}, page) {
            api.getIndex(page).then(function(res) {
                commit('index', res.data);
                document.body.scrollTop = 0;
            });
        },
        getPostDetail({commit}, id) {
            api.getPostDetail(id).then(function(res) {
                commit('postDetail', res.data);
            });
        },
        getPostCategory({commit}, {cate_id, page}) {
            api.getPostCategory(cate_id, page).then(function(res) {
                commit('postCategory', res.data);
            });
        },
        getPostSearch({commit}, {kwd, page}) {
            api.getPostSearch(kwd, page).then(function(res) {
                commit('postSearch', res.data);
            });
        }
    }
}