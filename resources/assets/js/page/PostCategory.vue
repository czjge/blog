<template>
    <div>
        <ul class="list-group" style="margin-left: -40px;">
            <paginate
                    name="articles"
                    :list="lists"
                    :per="2"
            >
                <li class="list-group-item"
                    v-for="row in paginated('articles')">
                    <router-link :to="{path:'/' + row.id}" class="text-muted lead">
                        {{ row.title }}
                    </router-link>
                    &nbsp;&nbsp;&nbsp;
                    <span class="small text-muted">Posted&nbsp;{{ row.created }}</span>
                </li>
            </paginate>
        </ul>
        <paginate-links
                for="articles"
        >
        </paginate-links>
    </div>
</template>

<script>
    import { mapState, mapActions } from 'vuex';

    export default {
        name: "PostCategory",
        computed: mapState({
            lists: state => state.post.categories
        }),
        created() {
            var cate_id = this.$route.params.cate_id;
            this.getPostCategory(cate_id);
        },
        beforeRouteUpdate (to, from, next) {
            // react to route changes...
            // don't forget to call next()
            var cate_id = to.params.cate_id;
            this.getPostCategory(cate_id);
        },
        methods: {
            ...mapActions([
                'getPostCategory'
            ])
        },
        data () {
            return {
                paginate: ['articles'],
            }
        }
    }
</script>

<style scoped>

</style>