<template>
    <form class="form-inline" @submit.prevent="submit">
        <input class="form-control mr-sm-2" type="search" placeholder="请输入关键字" aria-label="Search" style="margin-top: 15px;" v-model="kwd">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-top: 15px!important;">搜索</button>
    </form>
</template>

<script>
    export default {
        name: "Search",
        data() {
            return {
                kwd: ''
            }
        },
        methods: {
            submit: function() {
                const kwd = this.kwd
                if (! kwd) return;
                this.$router.push({ name: 'search', params: { kwd }})
            }
        }
    }
</script>

<style scoped>

</style>