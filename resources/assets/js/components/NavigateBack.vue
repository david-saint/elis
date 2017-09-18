<template>
	<div class="row">
		<div class="col s11 offset-s1">
			<a class="fix-i cancel-explore" @click.prevent="returnBack"><i class="material-icons">arrow_back</i></a>
		</div>
	</div>
</template>

<script>
	export default {
		methods: {
			returnBack() {
				$('.mobile-explore-section').css('width', '0%')
			}
		}
	}
</script>