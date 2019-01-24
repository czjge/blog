import axios from 'axios'

export default {
    // 首页
    getIndex: function (params) {
        return axios.get('/api/index', {
            params: params
        })
    },
    // 文章详情
    getPostDetail: function (id) {
        return axios.get('/api/post/' + id)
    },
    // 文章分类
    getPostCategory: function (cate_id) {
        return axios.get('/api/post/category/' + cate_id)
    }
}