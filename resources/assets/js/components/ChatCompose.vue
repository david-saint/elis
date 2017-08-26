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
                chatValue: '',
                base_url: this.$store.getters.get_base_url,
                access_token: this.$store.getters.get_access_token,
                my_response: {},
                elis_response: {},
                type_of: '',
                item: ''
            }
        },
        methods: {
            submit_query(){
                this.my_response = {
                    id: this.$store.getters.get_messages.length,
                    content: this.chatValue,
                    fromElis: false,
                    type: 'message'
                };
                if(this.$store.getters.user_bool){
                    this.send(this.$store.getters.get_messages);
                }
                this.send(this.$store.getters.get_messages);
                this.chatValue = '';
            },
            send(msg) {
                this.commit_query();
                let that = this;
                $.ajax({
                    type: "POST",
                    url: this.base_url + "query?v=20150910",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    headers: {
                        "Authorization": "Bearer " + this.access_token
                    },
                    data: JSON.stringify({ query: this.chatValue, lang: "en", sessionId: "somerandomthing" }),
                    success: function(data) {
                        let chata = msg;
                         that.elis_response = {
                            id: chata.length + 1,
                            content:  data.result.fulfillment.speech,
                            fromElis: true,
                            type: 'message'
                        };

                         that.commit_response();

                        if (typeof data.result.parameters.products !== 'undefined') {
                            that.type_of = 'products';
                            that.item = data.result.parameters.products;
                        }
                        if (typeof data.result.parameters.business !== 'undefined') {
                            that.type_of = 'business';
                            that.item = data.result.parameters.business;
                        }
                        that.commit_to_db();
                    },
                    error: function() {
                        Materialize.toast('Sorry unable to connect with the server', 3000);
                    }
                });
            },
            commit_query() {
                this.$store.commit('add_chat_details', this.my_response);
            },
            commit_response() {
                this.$store.commit('add_chat_details', this.elis_response);
            },
            commit_to_db() {
                axios.post('/search',{
                    search: this.my_response.content
                });
            }
        },
        computed: {
            user() {
                return this.$store.getters.user_bool;
            },
            chat_details() {
                return this.$store.getters.get_messages;
            }
        }
    }
</script>

<style>

</style>