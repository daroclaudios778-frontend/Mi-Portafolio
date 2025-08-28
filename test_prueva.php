<!DOCTYPE html>
<html>

<head>
  <title>Template Code - Checkout Pro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>

<body>
  <main>
    <section class="shopping-cart dark">
      <div class="container" id="container">
        <div class="block-heading">
          <h2>Shopping Cart</h2>
          <p>This is an example of Checkout Pro integration of Mercado Pago</p>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="items">
                <div class="product">
                  <div class="info">
                    <div class="product-details">
                      <div class="row justify-content-md-center">
                        <div class="col-md-3">
                          <img class="img-fluid mx-auto d-block image" alt="Image of a product" src="img/product.png">
                        </div>
                        <div class="col-md-4 product-detail">
                          <h5>Product</h5>
                          <b>Description: </b><span id="product-description">Some book</span><br>
                          <b>Price:</b> $ <span id="unit-price">10</span>
                        </div>
                      </div>
                      <div class="col-md-3 product-detail">
                        <label for="quantity">
                          <b>Quantity</b>
                        </label>
                        <input type="number" id="quantity" value="1" min="1" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <div class="summary">
              <h3>Cart</h3>
              <div class="summary-item"><span class="text">Subtotal</span><span class="price" id="cart-total"></span>
              </div>
              <button class="btn btn-primary btn-lg btn-block" id="checkout-btn">Checkout</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Payment -->
    <section class="payment-form dark">
      <div class="container_payment">
        <div class="form-payment">
          <div id="button-checkout"></div>
        </div>
      </div>
    </section>
  </main>

  <script>
    // Initialize Mercado Pago SDK
    const mp = new MercadoPago('TEST-8c5da76e-4005-463a-b520-5bc736d66900', {
      locale: 'es-AR'
    });

    // Create a checkout preference
    const preference = {
      items: [
        {
          title: "Some book",
          quantity: 1,
          unit_price: 10
        }
      ],
      back_urls: {
        success: 'https://www.your-site.com/success',
        failure: 'https://www.your-site.com/failure',
        pending: 'https://www.your-site.com/pending'
      },
      auto_return: 'approved'
    };

    mp.preferences.create(preference).then(function(response) {
      const id = response.body.id;

      // Create the checkout button
      mp.checkout({
        preference: {
          id: id
        },
        render: {
          container: '#button-checkout', 
          label: 'Pagar con Mercado Pago'
        }
      });
    });
  </script>
</body>

</html>
