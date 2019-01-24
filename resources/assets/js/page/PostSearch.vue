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
        name: "PostSearch",
        computed: mapState({
            lists: state => state.post.searchList
        }),
        created() {
            var kwd = this.$route.params.kwd;
            this.getPostSearch(kwd);
        },
        beforeRouteUpdate (to, from, next) {
            // react to route changes...
            // don't forget to call next()
            var kwd = to.params.kwd;
            this.getPostSearch(kwd);
        },
        methods: {
            ...mapActions([
                'getPostSearch'
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