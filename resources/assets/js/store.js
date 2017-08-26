import Vuex from 'vuex'
import Vue from 'vue'

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        auth_user: {},
        chat_details: [
            {id: 1, content:'Hi there, I\'m Elis! Your text buddy.', fromElis: true, type: 'message' },
            {id: 2, content:'I can help you find the products or services you need. What\'s your name', fromElis: true, type: 'message' }
        ],
        action: [
            {id: 1, options: [
                {id: 1, content: 'Let\'s get started!', r: 'register'},
                {id: 2, content: 'I already have an account', r: 'login'}
            ]}
        ]
    },
    getters: {
        auth_user(state) {
            return state.auth_user
        },
        user_bool(state) {
            if(state.auth_user.id){
                return true;
            }
            return false
        },
        user_name(state) {
            if(state.auth_user.id) {
                let name = state.auth_user.name.split(" ");
                return name[0]
            }
        },
        get_messages(state) {
            return state.chat_details;
        },
        get_messages_filtered(state) {
            return state.chat_details.filter(chat => {
                return chat.id !== 1 || chat.id !== 2
            })
        }
    },
    mutations: {
        set_auth_user(state, user) {
            state.auth_user = user
        }
    }
});
