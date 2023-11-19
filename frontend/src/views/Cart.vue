<template>
      <Top/>
 <navbar />
    <div>
      <h1>Shopping Cart</h1>
      <div>
        <p>Shop ID: {{ $route.params.shop_id }}</p>
        <!-- Your cart content goes here -->
      </div>
    </div>

    <br>

    <br>
    <br>
    <br>
    <br>
    <br>
     <End/>

  </template>
  
  <script>
  import Top from '@/components/Top.vue';
 import navbar from '@/components/navbar.vue';
import End from '@/components/End.vue';
  export default {
  name: 'cart',
  components: {
    Top,navbar,End
  },
    data() {
      return {
        // You can define your cart data here
      };
    },
    mounted() {
      // You can fetch additional data or perform actions when the component is mounted
      // For example, fetch cart data based on the shop_id parameter
      const shopId = this.$route.params.shop_id;
      this.fetchCartData(shopId);
    },
    methods: {
      fetchCartData(shopId) {
        // Implement logic to fetch cart data based on shop_id
        // Update the cart data property accordingly
      },
    },
  };
  </script>
  
  <style scoped>
@import '@/assets/css/bootstrap.min.css';
 @import '@/assets/css/style.css';  </style>
  