export default {
	set_auth_user(state, user) {
		state.auth_user = user
	},
	add_chat_details(state, chat) {
		state.chat_details.push(chat);
	},
	set_main_loading(state){
		state.main_loading = false;
	}
}