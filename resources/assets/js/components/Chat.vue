<template>
    <div class="chat-section col s12 m5">
        <chat-history></chat-history>
        <chat-compose></chat-compose>
    </div>
</template>

<script>
    let ChatCompose = require('./ChatCompose.vue');
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
        methods: {}
    }
</script>

<style>

</style>