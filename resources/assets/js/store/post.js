import api from '../api';

export default{
    state: {
        lists: [],  // 首页
        detail: {},  // 文章详情
        categories: [],  // 文章分类
    },
    mutations: {
        // 注意，这里可以设置 state 属性，但是不能异步调用，异步操作写到 actions 中
        index (state, lists) {
            state.lists = lists;
        },
        postDetail (state, detail) {
            state.detail = detail;
        },
        postCategory (state, categories) {
            state.categories = categories;
        }
    },
    actions: {
        getIndex({commit}) {
            api.getIndex().then(function(res) {
                commit('index', res.data);
                document.body.scrollTop = 0;
            });
        },
        getPostDetail({commit}, id) {
            api.getPostDetail(id).then(function(res) {
                commit('postDetail', res.data);
            });
        },
        getPostCategory({commit}, cate_id) {
            api.getPostCategory(cate_id).then(function(res) {
                commit('postCategory', res.data);
            });
        }
    }
}