<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>

    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" media="screen" title="no title" charset="utf-8">
    <meta name="robots" content="noindex,follow" />
  </head>
  <body>
    <div class="shopping-cart" x-data="cartData">
      <!-- Title -->
      <div class="title-container">
        <div class="title-left">
          Shopping Bag (<span x-text="cartList.length"></span>&nbsp;items)
          <span class="refresh-btn" @click="getData"></span>
        </div>
        <div class="title">
          <strong x-text="$store.filter.currencyFormat(total)"></strong>
        </div>
      </div>

      <template x-for="(item,index) in cartList" :key="item.id">
        <div class="item">
          <div class="buttons">
            <span class="delete-btn" @click="onRemove(index)"></span>
            <span class="like-btn" :class="{'is-active': item.product.like_count}" @click="onLike(item)"></span>
          </div>

          <div class="image">
            <img :src="$store.file.getImage(item.product.image)" alt="" />
          </div>

          <div class="description">
            <span x-text="item.product.name"></span>
            <span x-text="$store.filter.currencyFormat(item.product.price)"></span>
          </div>

          <div class="quantity">
            <button class="plus-btn" type="button" name="button" @click="onChangeQty(item, 1)">
              <img src="{{ asset('images/plus.svg') }}" alt="" />
            </button>
            <input x-model="item.qty" type="text" name="name" @keypress="$store.filter.numberOnly" @keyup.debounce.200ms="validateQty(item)">
            <button class="minus-btn" type="button" name="button" @click="onChangeQty(item, -1)">
              <img src="{{ asset('images/minus.svg') }}" alt="" />
            </button>
          </div>

          <div class="total-price" x-text="$store.filter.currencyFormat(item.qty*item.product.price)" ></div>
        </div>
      </template>
    </div>

    <!-- js -->
    <script src="{{ asset('js/cart-complete.js') }}"></script>
    <script src="//unpkg.com/alpinejs"></script>
  </body>
</html>