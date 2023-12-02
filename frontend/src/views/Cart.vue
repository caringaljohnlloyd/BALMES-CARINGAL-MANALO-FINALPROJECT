<template>
  <div>
    <Top />
    <navbar />
    <div class="container-fluid padding-bottom-3x mb-1">
      <Notification v-if="deleteSuccess" :show="deleteSuccess" type="success" message="Deleted successfully!" />

      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th class="text-center">Product Name</th>
              <th class="text-center">Quantity</th>
              <th class="text-center">Price</th>
              <th class="text-center">Total Price</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="cart in cart" :key="cart.shop_id">
              <td class="align-middle">
                <div class="product-item">
                  <div class="custom-control custom-checkbox" style="float: left; margin-right: 10px; margin-top: 10px;">
                    <input type="checkbox" :id="'checkbox_' + cart.cart_id" v-model="checkedItems" :value="cart.cart_id"
                      @click="check(cart.cart_id)">
                    <label class="custom-control-label" :for="'checkbox' + cart.shop_id"></label>
                  </div>
                  <a class=""><img class="img-fluid menu"
                      style="width: 100%; max-width: 250px; height: 200px; margin-top: 5px;"
                      :src="require('@/assets/img/' + getImg(cart).prod_img)" alt="Product"></a>
                  <div class="product-info">
                    <h4 class="product-title">{{ getInfo(cart).prod_name }}</h4>
                  </div>
                </div>
              </td>


              <td class="align-middle text-center">
                <div class="count-input">
                  <button @click="updateQuantity(cart, 'decrement')" class="btn btn-primary btn-sm rounded-circle"
                    :disabled="cart.quantity <= 1">
                    <i class="fas fa-minus"></i>
                  </button>
                  <span class="quantity">{{ cart.quantity }}</span>
                  <button @click="updateQuantity(cart, 'increment')" class="btn btn-primary btn-sm rounded-circle"
                    :disabled="cart.quantity >= getMaxQuantity(cart)">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </td>


              <td class=" align-middle text-center text-lg text-medium">{{ getPrice(cart).prod_price }}</td>
              <td class="align-middle text-center text-lg text-medium">{{ getTotal(cart) }}</td>
              <td class="align-middle text-center">
                <button @click="deleteCart(cart.cart_id)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="container">
        <div class="shopping-cart-footer">
          <div class="column">
            <form class="coupon-form" method="post">
              <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required>
              <br>
              <div>
                <button class="btn btn-outline-primary btn-sm" type="submit">Apply Coupon</button>
              </div>
            </form>
          </div>
<!-- invoice section-->
          <div class="column text-lg">
            <h4>Products to Pay:</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="checkedItem in checkedItems" :key="checkedItem.cart_id">
                  <td>{{ getInfo(checkedItem).prod_name }}</td>
                  <td>${{ getPrice(checkedItem).prod_price }}</td>
                </tr>
              </tbody>
            </table>

            <div>
              <h4>Total:</h4> <span class="text-medium">${{ calculateSubtotal() }}</span>
            </div>
          </div>


          <div class="column">
            <div class="shopping-cart-footer">
              <div class="column">
                <a class="btn btn-dark" @click="checkout">Proceed to Checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  <br><br>
  <br>
  <br>

  <Notification v-if="checkoutSuccess" :show="checkoutSuccess" type="success" message="Checkout successful!" />

  <End />
  <spinner />
</template>

<script>
import axios from 'axios';
import Top from '@/components/Top.vue';
import navbar from '@/components/navbar.vue';
import End from '@/components/End.vue';
import spinner from '@/components/spinner.vue';
import Notification from "@/components/Notification.vue";

export default {
  name: 'cart',
  components: {
    spinner, Top,
    navbar,
    End,    Notification,

  },
  data() {
    return {
      cart: [],
      deleteSuccess: false,
      prod_name: [],
      prod_price: [],
      prod_img: [],
      user: null,
      checkedItems: [],
      deleteSuccess: false,
      checkoutSuccess: false,

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
      const id = sessionStorage.getItem("id");
      try {
        const [prod, user, shop] = await Promise.all([
          axios.get(`/getProd/${id}`),
          axios.get("/getData"),
          axios.get("/getShop"),
        ]);

        this.cart = prod.data.map(item => ({
          ...item,
          selected: false,
        }));

        this.data = user.data;
        this.prod_name = shop.data;
        this.prod_price = shop.data;
        this.prod_img = shop.data;
      } catch (error) {
        console.error("Error fetching cart:", error);
      }
    },

    getInfo(prod) {
      return this.prod_name.find(shop => shop.shop_id === prod.shop_id) || {};

    },
    getPrice(prod) {
      return this.prod_price.find(shop => shop.shop_id === prod.shop_id) || {};

    },
    getImg(prod) {
      return this.prod_img.find(shop => shop.shop_id === prod.shop_id) || {};

    },
    async deleteCart(delcart) {
      const confirmResult = await new Promise(resolve => {
        const confirmDialog = window.confirm("Do you want to DELETE this item?");
        resolve(confirmDialog);
        this.deleteSuccess = true;
      setTimeout(() => {
        this.deleteSuccess = false;
      }, 2000);
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
    getMaxQuantity(cart) {
      const item = this.getInfo(cart);
      return item.prod_quantity || 0;
    },

    updateQuantity(cart, action) {
      if (action === 'increment' && cart.quantity < this.getMaxQuantity(cart)) {
        cart.quantity++;
      } else if (action === 'decrement' && cart.quantity > 1) {
        cart.quantity--;
      }

      this.updateTotalPrice(cart);
    },
    updateTotalPrice(cart) {
      const item = this.getInfo(cart);
      const newTotal = (item.prod_price || 0) * cart.quantity;

      axios.post("/updateCartQuantity", {
        cart_id: cart.cart_id,
        quantity: cart.quantity,
      })
        .then(response => {
          console.log(response.data);
        })
        .catch(error => {
          console.error("Error updating quantity:", error);
        });
    },
    getTotal(prod) {
      const item = this.getInfo(prod);
      return (item.prod_price || 0) * prod.quantity;
    },

    calculateSubtotal() {
  return this.cart.reduce((total, prod) => {
    const item = this.getInfo(prod);
    const subtotal = (item.prod_price || 0) * prod.quantity;
    return total + subtotal;
  }, 0).toFixed(2);
},


async checkout() {
  try {
    const id = sessionStorage.getItem("id");

    const orderItems = Array.isArray(this.checkedItems)
      ? this.checkedItems.map(cartId => {
          const cart = this.cart.find(cart => cart.cart_id === cartId);
          const shop_id = cart ? cart.shop_id : null;

          return {
            shop_id: shop_id,
            quantity: cart ? cart.quantity : 0,
            total_price: this.getTotal(cart),
          };
        })
      : [];

    const orderData = {
      id: id,
      status: 'pending',
      total_price: parseFloat(this.calculateSubtotal()), 
      items: orderItems,
    };

    const response = await axios.post('checkout', orderData);

    console.log('Checkout Response:', response);
    this.checkoutSuccess = true;
        setTimeout(() => {
          this.checkoutSuccess = false;
        }, 2000);
  } catch (error) {
    console.error('Checkout Error:', error);
  }
},

    check(cartId) {
      const index = this.checkedItems.indexOf(cartId);

      if (index === -1) {
        this.checkedItems.push(cartId);
      } else {
        this.checkedItems.splice(index, 1);
      }
      console.log('Selected Items:', this.checkedItems);
    },

    getcheckedItems() {
      return this.cart.filter(item => item.selected);
    },

  },


};
</script>

<style scoped>
@import '@/assets/css/bootstrap.min.css';
@import '@/assets/css/style.css';
@media (max-width: 768px) {
  .product-item {
    text-align: center;
  }

  .product-info {
    margin-top: 10px;
  }
}

.container {
  margin-top: 20px;
  padding: 20px;
  background-color: #f8f9fa;
  border: 1px solid #dee2e6;
  border-radius: 5px;
}

.shopping-cart-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}

.column {
  flex: 1;
  margin-right: 10px;
}

.btn-success {
  background-color: #28a745;
  color: #fff;
}

.count-input {
  display: flex;
  align-items: center;
}

.count-input button {
  margin: 0 5px;
}

.quantity {
  margin: 0 8px;
  font-weight: bold;
  font-size: 16px;
}
</style>