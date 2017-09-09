import Vuex from 'vuex'
import Vue from 'vue'
import getters from './getters'
import mutations from './mutations'

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        auth_user: {},
        chat_details: [
            {id: 1, content:'Hi there, I\'m Elis! Your text buddy.', fromElis: true, type: 'message' },
            {id: 2, content:'I can help you find the products or services you need.', fromElis: true, type: 'message' }
        ],
        action: [
            {id: 1, options: [
                {id: 1, content: 'Let\'s get started!', r: 'register'},
                {id: 2, content: 'I already have an account', r: 'login'}
            ]}
        ],
        base_url: 'https://api.api.ai/v1/',
        access_token: '7414f320ad1e4423bff2d76987f9b1b1'
    },
    getters,
    mutations
});
