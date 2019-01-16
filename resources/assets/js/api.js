import axios from 'axios'

export default {
    // 首页
    getIndex: function (params) {
        return axios.get('http://localhost/api/index', {
            params: params
        })
    },
    // 文章详情
    getPostDetail: function (id) {
        return axios.get('http://localhost/api/post/' + id)
    }
}