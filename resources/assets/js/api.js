import axios from 'axios'

export default {
    // 首页
    getIndex: function (page) {
        return axios.get('/api/index/' + page)
    },
    // 文章详情
    getPostDetail: function (id) {
        return axios.get('/api/post/' + id)
    },
    // 文章分类
    getPostCategory: function (cate_id, page) {
        return axios.get('/api/post/category/' + cate_id + "/" + page)
    },
    // 文章搜索
    getPostSearch: function (kwd, page) {
        return axios.get('/api/post/search/' + kwd + "/" + page)
    }
}