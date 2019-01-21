<template>
    <div class="panel panel-default">
        <div class="panel-heading">首页1</div>
        <ul class="list-group">
            <li class="list-group-item"
                v-for="row in lists">
                <router-link :to="{path:'/' + row.id}">
                    {{ row.title }}
                </router-link>
                <span class="pull-right">{{ row.created }}</span>
            </li>
        </ul>
    </div>
</template>
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
        }
    });
</script>