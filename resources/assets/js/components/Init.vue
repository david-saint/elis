<template>
    <div></div>
</template>

<script>
    export default {
        mounted(){
            this.get_auth_user_data()
        },
        methods: {
            get_auth_user_data(){
                axios.post('get-auth')
                    .then((response) => {
                        this.$store.commit('set_auth_user', response.data);
                    });
            }
        }
    }
</script>

<style>

</style>