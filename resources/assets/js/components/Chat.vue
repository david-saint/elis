<template>
    <div class="chat-section col s12 m5">
        <chat-history></chat-history>
        <chat-compose></chat-compose>
    </div>
</template>

<script>
    import ChatCompose from './ChatCompose.vue'
    import ChatHistory from './ChatHistory.vue'

    export default {
        data() {
            return {
                
            }
        },
        coponents: {
            ChatCompose,
            ChatHistory
        },
        methods: {},
        mounted(){
            this.$store.commit('set_main_loading');
        }
    }
</script>

<style>

</style>