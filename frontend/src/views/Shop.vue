<template>
	<Top/>
	<navbar />
	<div class="container-xxl bg-white p-0">
		<div class="room">
			<div class="container-fluid page-header mb-5 p-0">
				<div class="container-fluid page-header-inner py-5">
					<div class="container text-center pb-5">
						<h1 class="display-3 text-white mb-3 animated slideInDown">
							Shop
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb justify-content-center text-uppercase">
								<li class="breadcrumb-item">
									<a href="#">
										Home
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="#">
										Pages
									</a>
								</li>
								<li class="breadcrumb-item text-white active" aria-current="page">
									Contact
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Shopt -->
	<div class="container-xxl py-5">
		<div class="container">
			<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
				<h6 class="section-title text-center text-primary text-uppercase">
					Our Shop
				</h6>
				<h1 class="mb-5">
					Explore Our
					<span class="text-primary text-uppercase">
						Shop
					</span>
				</h1>
			</div>
			<div class="row g-4">
				<div v-for="shop in shop" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
					<div class="room-item shadow rounded overflow-hidden">
						<div class="position-relative">
							<img class="img-fluid menu" style="width: 200%; max-width: 500px; height: 330px;"
							:src="require('@/assets/img/' + shop.prod_img)" alt="" />
							<small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
								Php. {{ shop.prod_price }}
							</small>
						</div>
						<div class="p-4 mt-2">
							<div class="d-flex justify-content-between mb-3">
								<h5 class="mb-0 text-dark">
									{{ shop.prod_name }}
								</h5>
								<div class="ps-2">
									<star-rating :initialRating="shop.rating" @rating-selected="updateRating(shop.shop_id, $event)"></star-rating>
								</div>
							</div>
							<div class="d-flex mb-3">
								<small class="border-end me-3 pe-3">
									Quantity: {{ shop.prod_quantity }}
								</small>
							</div>
							<p class="text-body mb-3">
								{{ shop.prod_desc }}
							</p>
							<div class="d-flex justify-content-between">
								<button class="btn text-primary btn-lg-square rounded-circle mx-2" @click="addCart(shop.shop_id)">
									<i class="fa fa-shopping-cart">
										Add to Cart
									</i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div v-if="successMessage" class="alert alert-primary mt-3" role="alert">
				{{ successMessage }}
			</div>
		</div>
	</div>
	<!-- Shop End -->
	<feedbacks/>

	<!-- Newsletter Start -->
	<div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
		<div class="row justify-content-center">
			<div class="col-lg-10 border rounded p-1">
				<div class="border rounded text-center p-1">
					<div class="bg-white rounded text-center p-5">
						<h4 class="mb-4">
							Subscribe Our
							<span class="text-primary text-uppercase">
								Newsletter
							</span>
						</h4>
						<div class="position-relative mx-auto" style="max-width: 400px;">
							<input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
							<button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">
								Submit
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Newsletter Start -->
	<End/>
</template>
<style scoped>
	@import '@/assets/css/bootstrap.min.css'; @import '@/assets/css/style.css';
	.room { background-image: url('~@/assets/img/shop.jpg'); background-size:
	cover; background-repeat: no-repeat; background-position: center center;
	width: 100%; height: 338px; }
</style>
<script>
	import Top from '@/components/Top.vue';
	import navbar from '@/components/navbar.vue';
	import feedbacks from '@/components/feedbacks.vue';
	import End from '@/components/End.vue';
	import StarRating from '@/components/StarRating.vue';

	import axios from 'axios'

	export default {
		name:
		'shop',
		components: {
			Top,
			navbar,
			End,
			feedbacks,
			StarRating
		},
		data() {
			return {
				feed: [],
				shop: [],
				successMessage: "",
				name: [], 

			}
		},
		mounted() {
			this.getFeed();
			this.getShop();
		},
		methods: {
			updateRating(shop_id, rating) {
      this.submitRatingToBackend(shop_id, rating);
    },
    async submitRatingToBackend(shop_id, rating) {
      try {
        const response = await axios.post("/submit-rating", { shop_id, rating });
        console.log(response.data);
      } catch (error) {
        console.error(error);
      }
	},
			async getFeed() {
				const[g, n] = await Promise.all([axios.get("/getFeedback"), axios.get("/getData")]);
				this.feed = g.data;
				this.name = n.data;
			},
			getName(g) {
				return this.name.find(n => n.id === g.id) || {};
			},
			async getRoom() {
				const r = await axios.get("/getRoom");
				this.room = r.data;
			},
			async getShop() {
				const s = await axios.get("/getShop");
				this.shop = s.data;
			},
			async addCart(shop_id) {
    try {
        const id = sessionStorage.getItem("id");
        const product = this.shop.find(item => item.shop_id === shop_id);

        if (product.prod_quantity > 0) {
            const response = await axios.post("getCart", {
                shop_id: shop_id,
                id: id
            });

            this.successMessage = response.data.message;

            product.prod_quantity--;

            setTimeout(() => {
                this.successMessage = "";
            }, 2000);
        } else {
            this.successMessage = "Product is out of stock";
        }
    } catch (error) {
        console.error("Error adding to cart", error);
    }
},
		}
	};
</script>