<template>
    <div class="panel panel-default">
        <div class="panel-heading"></div>
        <ul class="list-group">
            <paginate
                    name="articles"
                    :list="lists"
                    :per="2"
            >
                <li class="list-group-item"
                    v-for="row in paginated('articles')">
                    <router-link :to="{path:'/' + row.id}">
                        {{ row.title }}
                    </router-link>
                    <span class="pull-right">{{ row.created }}</span>
                </li>
            </paginate>
        </ul>
        <paginate-links
                for="articles"
        >
        </paginate-links>
    </div>

</template>
<style>
    ul.paginate-links {
        margin-top: 10px;
        float: right;
    }
    ul.paginate-links li {
        list-style: none;
        float: left;
        margin-left: 5px;
        cursor: pointer;
    }
    ul.paginate-links > li.active > a {
        text-decoration: underline;
    }
</style>
<script>
    import { mapState, mapActions } from 'vuex';
    import VueMarkdown from 'vue-markdown';

    export default({
        computed: mapState({
            lists: state => state.post.lists
        }),
        created() {
            this.getIndex();
        },
        methods: {
            ...mapActions([
                'getIndex'
            ])
        },
        components: {
            VueMarkdown
        },
        data () {
            return {
                paginate: ['articles'],
            }
        }
    });
</script>