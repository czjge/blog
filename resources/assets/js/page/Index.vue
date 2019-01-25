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

    export default({
        name: "Index",
        computed: mapState({
            lists: state => state.post.lists,
            total: state => state.post.listsPage,
        }),
        created() {
            this.getIndex(1);
        },
        beforeRouteUpdate (to, from, next) {
            this.getIndex(1);
            next();
        },
        methods: {
            ...mapActions([
                'getIndex'
            ]),
            clickCallback: function(page) {
                this.getIndex(page);
            }
        }
    });
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