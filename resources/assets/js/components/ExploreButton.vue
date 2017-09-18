<template>
	<a class="explore-btn btn btn-floating red lighten-2 pulse hide-on-med-and-up" @click.prevent="toggleExplore"><i class="material-icons" style="overflow: hidden;">wifi_tethering</i></a>
</template>

<script>
	export default {
		methods: {
			toggleExplore(){
				$('.mobile-explore-section').css('width', '100%');
			}
		}
	}
</script>