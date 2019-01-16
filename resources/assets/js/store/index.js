import Vue from 'vue';
import Vuex from 'vuex';
import post from './post';

Vue.use(Vuex);

export default new Vuex.Store({
    // 可以设置多个模块
    modules: {
        post
    }
});