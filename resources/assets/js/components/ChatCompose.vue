<template>
    <div class="row card chat-compose z-depth-2">
        <div class="col s1 border-right hundred">
            <a href="" class="fix-i"><i class="material-icons">menu</i></a>
        </div>
        <div class="col s10 border-right hundred no-overflow">
            <div class="row no-margin-bottom">
                <div class="input-holder col s11">
                    <input type="text" name="query" placeholder="Talk to Elis" v-model="chatValue" @keyup.enter="submit_query">
                </div>
                <div class="col s1">
                    <a href="" class="fix-i"><i class="material-icons grey-text">mic</i></a>
                </div>
            </div>
        </div>
        <div class="col s1 hundred">
            <a href="" class="fix-i" @click.prevent="submit_query"><i class="material-icons">send</i></a>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                chatValue: ''
            }
        },
        methods: {
            submit_query(){
                if(this.$store.getters.user_bool){
                    return true;
                }
            }
        },
        computed: {
            user() {
                return this.$store.getters.user_bool;
            }
        }
    }
</script>

<style>

</style>