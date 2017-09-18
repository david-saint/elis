export default {
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
	main_loader(state){
		return state.main_loading;
	},
	get_messages(state) {
		return state.chat_details;
	},
	get_messages_filtered(state) {
		return state.chat_details.filter(chat => {
			return chat.id !== 1 || chat.id !== 2
		});
	},
	get_base_url(state){
		return state.base_url
	},
	get_access_token(state) {
		return state.access_token;
	}
}