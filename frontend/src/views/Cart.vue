<template>
  <div>
    <Top />
    <navbar />
    <div class="container padding-bottom-3x mb-1">
      <div class="alert alert-success" v-if="deleteSuccess">
        Deleted successfully!
      </div>
      <div class="table-responsive shopping-cart">
        <table class="table">
          <thead>
            <tr>
              <th>Product Name</th>
              <th class="text-center">Quantity </th>
              <th class="text-center">Price</th>
              <th class="text-center">Total Price</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="cart in cart" :key="prod_name.shop_id" >
              <td>
                <div class="product-item">
                  <a class=""><img class="img-fluid menu" style="width: 150%; max-width: 250px; height: 200px;" :src="require('@/assets/img/' + getImg(cart).prod_img)" alt="Product"></a>
                  <div class="product-info">
                    <h4 class="product-title"> {{ getInfo(cart).prod_name }}</h4>
                  </div>
                </div>
              </td>
              <td class="text-center">
                <div class="count-input">
                  {{ cart.quantity }}
                </div>
              </td>
              <td class="text-center text-lg text-medium">{{ getPrice(cart).prod_price }}</td>
              <td class="text-center text-lg text-medium">{{ getTotal(cart) }}</td>

              <td class="text-center">
                <button @click="deleteCart(cart.cart_id)"><a><i class="fa fa-trash"></i></a></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="shopping-cart-footer">
        <div class="column">
          <form class="coupon-form" method="post">
            <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required="">
            <div>
              <button class="btn btn-outline-primary btn-sm" type="submit">Apply Coupon</button>
            </div>
          </form>
        </div>
        <div class="column text-lg">Subtotal: <span class="text-medium">$289.68</span></div>
      </div>
      <div class="shopping-cart-footer">
        <div class="column">
          <a class="btn btn-success" href="#">Checkout</a>
        </div>
      </div>
    </div>

    <br>

    <br>
    <br>
    <br>
    <br>
    <br>
    <End />
  </div>
</template>

<script>
import axios from 'axios';
import Top from '@/components/Top.vue';
import navbar from '@/components/navbar.vue';
import End from '@/components/End.vue';

export default {
  name: 'cart',
  components: {
    Top,
    navbar,
    End
  },
  data() {
    return {
      cart: [],
      deleteSuccess: false,
      prod_name: [],
      prod_price: [],
      prod_img: [],
    };
  },
  mounted() {
    this.getCart();
    this.getInfo();
    this.getPrice();
    this.getImg();


  },
  methods: {
    async getCart() {
      try {
        const [prod,user,shop] = await Promise.all
            ([ axios.get("/getProd"),
            axios.get("/getData"),  axios.get("/getShop")]);
        this.cart = prod.data;
        this.data = user.data;
        this.prod_name = shop.data;
        this.prod_price = shop.data;
        this.prod_img = shop.data;

      } catch (error) {
        console.error("Error fetching cart:", error);
      }
    },
    getInfo(prod){
      return this.prod_name.find(shop =>shop.shop_id === prod.shop_id) || {};

    },
    getPrice(prod){
      return this.prod_price.find(shop =>shop.shop_id === prod.shop_id) || {};

    },
    getImg(prod){
      return this.prod_img.find(shop =>shop.shop_id === prod.shop_id) || {};

    },
    async deleteCart(delcart) {
  const confirmResult = await new Promise(resolve => {
    const confirmDialog = window.confirm("Do you want to DELETE this item?");
    resolve(confirmDialog);
  });

  if (confirmResult) {
    try {
      await axios.post("del", {
        cart_id: delcart,
      });

      this.cart = this.cart.filter(item => item.cart_id !== delcart);
      this.deleteSuccess = true;
      setTimeout(() => {
        this.deleteSuccess = false;
      }, 2000); 
    } catch (error) {
      console.error("Error deleting item:", error);
    }
  }
},
getTotal(prod) {
            const item = this.getInfo(prod);
            return (item.prod_price || 0) * prod.quantity;
        },
  }
};
</script>

<style scoped>
@import '@/assets/css/bootstrap.min.css';
@import '@/assets/css/style.css';
</style>
