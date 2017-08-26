<template>
    <div class="row chat-history">

        <div v-if="!user" v-for="message in messages" class="chat-message row">

            <div v-if="message.type == 'message' && message.fromElis && message.id == 1" class="col chat-message-e animated bounceInLeft d">
                <p class="chat-message-text">
                    {{ message.content }}
                </p>
            </div>

            <div v-else-if="message.type == 'message' && message.fromElis && message.id == 2" class="col chat-message-e animated bounceInLeft dg">
                <p class="chat-message-text">
                    {{ message.content }}
                </p>
            </div>

            <div v-else-if="message.type == 'message' && message.fromElis" class="col chat-message-e animated bounceInLeft">
                <p class="chat-message-text">
                    {{ message.content }}
                </p>
            </div>

            <div v-else-if="message.type == 'message' && !message.fromElis" class="col chat-message-me animated bounceInUp">
                <p class="chat-message-text">
                    {{ message.content }}
                </p>
            </div>

            <ul v-else-if="message.type == 'product'" class="chat-product-li carousel animated bounceInLeft">

                <li class="carousel-item">
                    <a href="" class="grey-text text-darken-1">
                        <div class="card col s9 ">
                            <div class="card-content">
                                <span class="card-title">Product Title</span>
                                <div class="divider"></div>
                                <div class="col s8">
                                    A product title by company name of size size
                                </div>
                                <div class="col s4">
                                    <img src="img/3.jpg" class="responsive-img">
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="carousel-item">
                    <a href="" class="grey-text text-darken-1">
                        <div class="card col s9 ">
                            <div class="card-content">
                                <span class="card-title">Product Title</span>
                                <div class="divider"></div>
                                <div class="col s8">
                                    A product title by company name of size size
                                </div>
                                <div class="col s4">
                                    <img src="img/3.jpg" class="responsive-img">
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="carousel-item">
                    <a href="" class="grey-text text-darken-1">
                        <div class="card col s9 ">
                            <div class="card-content">
                                <span class="card-title">Product Title</span>
                                <div class="divider"></div>
                                <div class="col s8">
                                    A product title by company name of size size
                                </div>
                                <div class="col s4">
                                    <img src="img/3.jpg" class="responsive-img right">
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div v-if="user" class="chat-message row">

            <div v-if="message.type == 'message' && message.fromElis" class="col chat-message-e animated bounceInLeft">
                <p class="chat-message-text">
                    {{ message.content }}
                </p>
            </div>

            <div v-else-if="message.type == 'message' && !message.fromElis" class="col chat-message-me animated bounceInUp">
                <p class="chat-message-text">
                    {{ message.content }}
                </p>
            </div>

            <ul v-else-if="message.type == 'product'" class="chat-product-li carousel animated bounceInLeft">

                <li class="carousel-item">
                    <a href="" class="grey-text text-darken-1">
                        <div class="card col s9 ">
                            <div class="card-content">
                                <span class="card-title">Product Title</span>
                                <div class="divider"></div>
                                <div class="col s8">
                                    A product title by company name of size size
                                </div>
                                <div class="col s4">
                                    <img src="img/3.jpg" class="responsive-img">
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="carousel-item">
                    <a href="" class="grey-text text-darken-1">
                        <div class="card col s9 ">
                            <div class="card-content">
                                <span class="card-title">Product Title</span>
                                <div class="divider"></div>
                                <div class="col s8">
                                    A product title by company name of size size
                                </div>
                                <div class="col s4">
                                    <img src="img/3.jpg" class="responsive-img">
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="carousel-item">
                    <a href="" class="grey-text text-darken-1">
                        <div class="card col s9 ">
                            <div class="card-content">
                                <span class="card-title">Product Title</span>
                                <div class="divider"></div>
                                <div class="col s8">
                                    A product title by company name of size size
                                </div>
                                <div class="col s4">
                                    <img src="img/3.jpg" class="responsive-img right">
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                
            }
        },
        methods: {},
        computed: {
            user() {
                return this.$store.getters.user_bool;
            },
            messages() {
                return this.$store.getters.get_messages;
            },
            fmessages() {
              return this.$store.getters.get_messages_filtered;
            }
        }
    }
</script>

<style>

</style>