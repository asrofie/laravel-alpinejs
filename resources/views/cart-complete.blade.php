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
    <div class="shopping-cart">
      <!-- Title -->
      <div class="title-container">
        <div class="title">
          Shopping Bag (3 items)
        </div>
        <div class="title">
          <strong>$900.000</strong>
        </div>
      </div>

      <!-- Product #1 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="{{ asset('uploads/item-1.png') }}" alt="" />
        </div>

        <div class="description">
          <span>Common Projects</span>
          <span>$130</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="{{ asset('images/plus.svg') }}" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="{{ asset('images/minus.svg') }}" alt="" />
          </button>
        </div>

        <div class="total-price">$549</div>
      </div>

      <!-- Product #2 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="{{ asset('uploads/item-2.png') }}" alt=""/>
        </div>

        <div class="description">
          <span>Maison Margiela</span>
          <span>$150</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="{{ asset('images/plus.svg') }}" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="{{ asset('images/minus.svg') }}" alt="" />
          </button>
        </div>

        <div class="total-price">$870</div>
      </div>

      <!-- Product #3 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="{{ asset('uploads/item-3.png') }}" alt="" />
        </div>

        <div class="description">
          <span>Our Legacy</span>
          <span>$190</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="{{ asset('images/plus.svg') }}" alt="" />
          </button>
          <input type="text" name="name" value="1">
          <button class="minus-btn" type="button" name="button">
            <img src="{{ asset('images/minus.svg') }}" alt="" />
          </button>
        </div>

        <div class="total-price">$349</div>
      </div>
    </div>

    <!-- js -->
    <script src="{{ asset('js/cart-complete.js') }}"></script>
    <script src="//unpkg.com/alpinejs"></script>
  </body>
</html>