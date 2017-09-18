<template>
	<!-- Card row begins here -->
	<div class="row">
		<div class="col s12">
			<div class="card">
				<div class="card-content">
					<div class="row">
						<div class="col s1">
							<img src="img/team-2.jpg" class="responsive-img circle">
						</div>
						<div class="col s8 padding-10">
							<div class="row no-margin-bottom line">
								<b>Jhaise graphics</b><br>
								<small>21 minutes ago.</small>
							</div>
						</div>
						<div class="col s3">
							<div class="valign-wrapper right">
								<p>Ikeja, Lagos</p>
							</div>
						</div>
					</div>
					<div class="row">
						<p>Material box is a material design implementation of the Lightbox plugin. When a user clicks on an image that can be enlarged. Material box centers the image and enlarges it in a smooth, non-jarring manner.</p>
					</div>
					<div class="row"></div>
				</div>
				<div class="card-action">
					<a class="btn btn-flat ac-btn tooltipped" data-tooltip="Get Direction">
						<i class="material-icons">my_location</i>
					</a>
					<a class="btn btn-flat ac-btn" @click="toggleLike">
						<i class="material-icons">{{ like_status }}</i>
						<small>{{ like_count }}</small>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Card row ends here -->
</template>

<script>
	export default {
		data() {
			return {
				like_status: 'favorite_outline',
				like_count: 21
			}
		},
		methods: {
			toggleLike() {
				if (this.like_status == 'favorite_outline') {
					this.like_status = 'favorite'
					this.like_count++
				}else {
					this.like_status = 'favorite_outline'
					this.like_count--
				}
			}
		}
	}
</script>

<style scoped>
	/* To be exported to seperated component */
	.card-content {
		padding-bottom: 12px;
	}
	.card-content .row {
		margin-bottom: 0px;
	}
	.card-content .row .col {
		padding: 0px;
	}
	.padding-10 {
		padding-left: 20px !important;
	}
	.card-action {
		padding: 0px;
	}
	.line {
		line-height: 1;
		font-weight: 200;
		color: #757575;
	}
	.line small {
		color: #bdbdbd;
	}
	.valign-wrapper p {
		color: #9e9e9e;
	}
	a.btn-flat{
		height: 42px;
		line-height: 42px;
	}
	a.btn-flat:hover {
		background-color: #eeeeee;
		color: #e57373;
	}
	a.r {
		color: #e57373;
	}
</style>