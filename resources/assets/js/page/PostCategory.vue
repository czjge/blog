<template>
    <div>
        <ul class="list-group">
            <li class="list-group-item"
                v-for="row in lists">
                <router-link :to="{path:'/' + row.id}" class="text-muted lead">
                    {{ row.title }}
                </router-link>
                &nbsp;&nbsp;&nbsp;
                <span class="small text-muted">Posted&nbsp;{{ row.created }}</span>
            </li>
        </ul>
        <paginate
                :page-count="total"
                :click-handler="clickCallback"
                :container-class="'pagination'"
                :prev-text="'《'"
                :next-text="'》'"
                :page-class="'page-item'"
                :page-link-class="'page-link-item'"
                :prev-link-class="'prev-link-item'"
                :next-link-class="'next-link-item'"
                :active-class="'active-item'"
                :hide-prev-next="true"
                >
        </paginate>
    </div>
</template>

<script>
    import { mapState, mapActions } from 'vuex';

    export default {
        name: "PostCategory",
        computed: mapState({
            lists: state => state.post.categories,
            total: state => state.post.categoriesPage,
        }),
        created() {
            var cate_id = this.$route.params.cate_id;
            var obj ={};
            obj.cate_id = cate_id;
            obj.page = 1;
            this.getPostCategory(obj);
        },
        beforeRouteUpdate (to, from, next) {
            var cate_id = to.params.cate_id;
            var obj ={};
            obj.cate_id = cate_id;
            obj.page = 1;
            this.getPostCategory(obj);
            next();
        },
        methods: {
            ...mapActions([
                'getPostCategory'
            ]),
            clickCallback: function(page) {
                var cate_id = this.$route.params.cate_id;
                var obj ={};
                obj.cate_id = cate_id;
                obj.page = page;
                this.getPostCategory(obj);
            }
        }
    }
</script>

<style lang="css">
    .pagination {
        float: right;
    }
    .page-item {
        margin-left:5px;
        margin-right:5px;
    }
    .page-link-item, .prev-link-item, .next-link-item {
        color: gray;
    }
    .active-item {
        text-decoration: underline;
    }
</style>