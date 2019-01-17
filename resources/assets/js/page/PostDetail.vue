<template>
    <div>
        <ol class="breadcrumb">
            <li><a href="/">首页</a></li>-
            <li class="active">{{ detail.title }}</li>
        </ol>
        <p>创建时间：{{ detail.created_at }}</p>
        <div>
            {{ detail.content }}
        </div>
    </div>
</template>
<style>
    .breadcrumb{
        padding: 8px 0;
    }
</style>
<script>
    import { mapState, mapActions } from 'vuex';
    export default({
        computed: mapState({
            detail: state => state.post.detail
        }),
        created() {
            // 获取路由参数id
            // js 中用 this.$route 获取当前路由，用 this.$router 获路由对象，全部路由信息
            // 在模板中用 $router  和 $router 直接调用
            var id = this.$route.params.id;
            this.getPostDetail(id);
        },
        methods: {
            ...mapActions([
                'getPostDetail'
            ])
        }
    });
</script>